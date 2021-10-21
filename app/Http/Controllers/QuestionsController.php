<?php

namespace App\Http\Controllers;

use App\Question;

use App\Result;
use Illuminate\Support\Facades\Auth;


class QuestionsController extends Controller
{
    public function add_ichimteam1()
    {
        $user_id = Auth::id();

        $result = Result::with('user')->where('user_id', $user_id)->exists();

        if ($result == false)
        {
            $questions = Question::orderBy('tid')->take(20)->get();

            return view('test.ichimteam1', compact(['questions']));
        }
        else
            return abort('403', 'Test bereits abgeschickt, bitte überprüfen Sie das Dashboard oder kontaktieren Sie den Admin!');
    }

    public function add_ichimteam2()
    {
        $user_id = Auth::id();

        $result = Result::with('user')->where('user_id', $user_id)->exists();

        if ($result == false)
        {
            $questions = Question::orderBy('tid')->offset(20)->take(10)->get();

            return view('test.ichimteam2', compact(['questions']));
        }
        else
            return abort('403', 'Test bereits abgeschickt, bitte überprüfen Sie das Dashboard oder kontaktieren Sie den Admin!');
    }

    public function add_kulturimteam()
    {
        $user_id = Auth::id();

        $result = Result::with('user')->where('user_id', $user_id)->exists();

        if ($result == false)
        {
            $questions = Question::orderBy('tid')->offset(30)->take(20)->get();

            return view('test.kulturimteam', compact(['questions']));
        }
        else
            return abort('403', 'Test bereits abgeschickt, bitte überprüfen Sie das Dashboard oder kontaktieren Sie den Admin!');
    }
}
