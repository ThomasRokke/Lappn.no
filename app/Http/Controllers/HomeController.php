<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function getDashboard()
    {

        $user = Auth::user();

        $dobSet = $user->dob;
        $newsletterSet = $user->newsletter;


        return view('home')->with(Compact('dobSet', 'newsletterSet'));
    }

    public function postDashboard(Request $req){


        $user = Auth::user();


        $user->dob = date("Y-m-d", strtotime($req->dob));

        $user->newsletter = $req->newsletter;

        $user->save();

        $dobSet = $user->dob;
        $newsletterSet = $user->newsletter;

        return view('home')->with(Compact('dobSet', 'newsletterSet'));
    }
}
