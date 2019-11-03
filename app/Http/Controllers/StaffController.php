<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\CurrentPassword;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('staff.staff');
    }

    public function password()
    {
        return view('staff.password');
    }

    public function update_password(Request $request)
    {

        $rules = [
            'old_password' => ['required',new CurrentPassword()],
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',


        ];


        $validator = Validator::make($request->all(), $rules);

        if ($validator->passes()) {

            $user = Auth::user();
            $user->password = Hash::make($request->new_password);
            $user->save();



            $response = array(
                'success' => true,
                'message' => 'Password changed successfully',
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
