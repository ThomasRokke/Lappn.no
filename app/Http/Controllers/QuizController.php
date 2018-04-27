<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getQuiz(){

        $user = Auth::user();

        $hasRole = $user->hasRole('Fulluser');
        $totalTries = DB::table('quiztries')->where('user_id', $user->id)->count();

        $inviteURL = 'NU3Yj-'.$user->id;

        return view('quiz')->with(Compact('totalTries', 'hasRole', 'inviteURL'));


    }

    public function postQuiz(Request $req){

        $correct = $req->correct;
        $total = $req->total;

        $user = Auth::user();

        $hasRole = $user->hasRole('Fulluser');
        $userID = $user->id;

        DB::table('quiztries')->insert(
            ['user_id' => $userID, 'correct' => $correct, 'total' => $total]
        );

        $inviteURL = 'NU3Yj-'.$user->id;

        $totalTries = DB::table('quiztries')->where('user_id', $userID)->count();

        return view('quizfinish')->with(compact('correct', 'total', 'totalTries', 'hasRole', 'inviteURL'));
    }

    public function getTries(){

        $user = Auth::user();
        $quiztries = DB::table('quiztries')->where('user_id', $user->id)->get();

        return view('quiztries')->with(compact('quiztries'));
    }
}
