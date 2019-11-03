<?php

namespace App\Http\Controllers;

use App\Farm;
use App\Lot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $farms = Farm::where('user_id',$user->id)->count();
        $lots = Lot::where('user_id',$user->id)->count();

        return view('home')->with(['farms' => $farms,'lots' => $lots]);
    }
}
