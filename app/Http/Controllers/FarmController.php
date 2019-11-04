<?php

namespace App\Http\Controllers;

use App\Farm;
use App\Lga;
use App\Lot;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FarmController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the farms page .
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function farm()
    {
        $user = Auth::user();
        $states = State::all()->pluck('name','id');
        $farms = Farm::where('user_id',$user->id)->get();

        return view('farm.farm')->with(['states' => $states,'farms' => $farms]);
    }

    public function lots()
    {
        $user = Auth::user();
        $farms = Farm::where('user_id',$user->id)->pluck('key','id');
        $lots = Lot::where('user_id',$user->id)->get();

        return view('farm.lots')->with(['farms' => $farms,'lots' => $lots]);
    }

    public function inventory()
    {

        $farms = Farm::all()->pluck('key','id');
        $lots = Lot::all();

        return view('farm.inventory')->with(['farms' => $farms,'lots' => $lots]);
    }

    public function get_qrcode(Request $request, $id)
    {
        //$user = Auth::user();
        //$farms = Farm::where('user_id',$user->id)->where('id',$id)->get();

        $image = \QrCode::format('png')
            ->color(75, 112, 58)
            ->merge('dashboard/images/farmville.png', 0.2, true)
            ->size(500)->errorCorrection('H')
            ->generate('https://app.farmchainville.io/farm/'.$id);
        return response($image)->header('Content-type','image/png');
    }

    public function get_lga(Request $request)
    {
        $state_id = $request->id ;
        $lgas= Lga::where('state_id',$state_id)->pluck('name','id');

        return json_encode($lgas);
    }

    public function get_farm(Request $request)
    {
        $farm_id = $request->id ;
        $farm = Farm::where('id',$farm_id)->first();
        $state = State::where('name',$farm->state)->first();
        $lga = Lga::where('name',$farm->lga)->first();
        $farm['state'] = $state->id;
        $farm['lga'] = $lga->id;



        return json_encode($farm);
    }

    public function get_lot(Request $request)
    {
        $lot_id = $request->id ;
        $lot = Lot::where('id',$lot_id)->first();
        //$state = State::where('name',$farm->state)->first();
        //$lga = Lga::where('name',$farm->lga)->first();
        //$farm['state'] = $state->id;
        //$farm['lga'] = $lga->id;



        return json_encode($lot);
    }


    public function createFarmKey($pre,$post,$length){

        $unique=FALSE;
        while(!$unique)
        {

            $a = mt_rand(1000000,9999999); //bin2hex(openssl_random_pseudo_bytes($length));
            //$key = substr($key, 0, 7);
            $key = $pre.'-'.strval($a).$post ;
            $check_key = Farm::where('key', '=', $key)->count();


            if ($check_key  >= 1) {

                $unique=FALSE;

            }
            else{

                $unique=TRUE;
            }
        }


        return $key;

    }

    public function createLotNo(){

        $check_key = Lot::latest('lot_no')->first();
        if (filter_var($check_key->lot_no, FILTER_VALIDATE_INT)) {
            // $nr contains an integer
            $key = intval($check_key->lot_no)+1;
        }
        else{
            $key = 1;
        }


        return $key ;

    }

    public function create_farm(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'state' => 'required|numeric',
            'lga' => 'required|numeric',
            'size' => 'required|numeric',
            'cover_image' => 'image|max:1999',
            'description' => 'required'
        ];


        $validator = Validator::make($request->all(), $rules);

        if ($validator->passes()) {

            $state = State::where('id' ,$request->state)->first();
            $lga = Lga::where('id' ,$request->lga)->pluck('name')->first();
            $pre = $state->code;
            $postd = strtoupper(substr( $lga, 0,2)) ;


            if($request->hasFile('cover_image')) {
                // Get filename with extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                //Filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('cover_image')->    storeAs('public/cover_images', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';
            }

            $lbkey = $this->createFarmKey($pre,$postd,7);

            $address = $lga;
            $gaddress = str_replace(" ",'+',$lga);

            $apiKey = '';

            $url = "https://maps.google.com/maps/api/geocode/json?key=$apiKey&address=$gaddress&sensor=false&region=NG";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
            //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            $response = curl_exec($ch);
            curl_close($ch);


            if(!$response){

                $latitude = '';
                $longitude = "";
            }
            else{
                $response_a = json_decode($response);
                //dd($response);
                $latitude = $response_a->results[0]->geometry->location->lat;

                $longitude = $response_a->results[0]->geometry->location->lng;

            }




            $farm = new Farm();

            $farm->user_id = Auth::guard('web')->user()->id;
            $farm->key = $lbkey;
            $farm->name = $request->name;
            $farm->state = $state->name;
            $farm->lga = $address;

            $farm->size = $request->size;

            if($longitude){
                $farm->longitude = $longitude;
                $farm->latitude = $latitude;
            }

            $farm->description = $request->description;
            $farm->image = $fileNameToStore;

            $farm->save();

            $farm_id = $farm->id;





            $response = array(
                'success' => true,
                'message' => 'Farm saved successfully',
            );

            return response()->json($response);
        }

        $response = array(
            'success' => false,
            'message' => 'Validation Failed',
            'errors'=>$validator->errors(),
        );
        return response()->json($response);
    }

    public function create_lots(Request $request)
    {
        $rules = [
            'farm' => 'required|max:255',
            'crop' => 'required|max:255',
            'specie' => 'required|max:255',
            'farm_method' => 'required|max:255',
            'no_of_lots' => 'required|numeric',


        ];


        $validator = Validator::make($request->all(), $rules);

        if ($validator->passes()) {

            $nooflots = intval($request->no_of_lots);

            for ($i = 0; $i < $nooflots; ++$i) {

                $lotno = $this->createLotNo();
                $lot = new Lot();

                $lot->user_id = Auth::user()->id;
                $lot->farm_id = $request->farm;
                $lot->lot_no = $lotno;
                $lot->crop_name = $request->crop;
                $lot->crop_specie = $request->specie;

                $lot->method = $request->farm_method;

                $lot->save();

                //$farm_id = $farm->id;

            }





            $response = array(
                'success' => true,
                'message' => 'Lots saved successfully',
            );

            return response()->json($response);
        }

        $response = array(
            'success' => false,
            'message' => 'Validation Failed',
            'errors'=>$validator->errors(),
        );
        return response()->json($response);
    }

    public function create_category(Request $request)
    {
        $rules = [
            'farm' => 'required|max:255',
            'crop' => 'required|max:255',
            'specie' => 'required|max:255',
            'fmethod' => 'required|max:255',
            'lots' => 'required|numeric',


        ];


        $validator = Validator::make($request->all(), $rules);

        if ($validator->passes()) {

            $nooflots = intval($request->lots);

            for ($i = 0; $i < $nooflots; ++$i) {

                $lotno = $this->createLotNo();
                $lot = new Lot();

                $lot->user_id = Auth::user()->id;
                $lot->farm_id = $request->farm;
                $lot->lot_no = $lotno;
                $lot->crop_name = $request->crop;
                $lot->crop_specie = $request->specie;

                $lot->method = $request->fmethod;

                $lot->save();

                //$farm_id = $farm->id;

            }





            $response = array(
                'success' => true,
                'message' => 'Property saved successfully',
            );

            return response()->json($response);
        }

        $response = array(
            'success' => false,
            'message' => 'Validation Failed',
            'errors'=>$validator->errors(),
        );
        return response()->json($response);
    }

}

