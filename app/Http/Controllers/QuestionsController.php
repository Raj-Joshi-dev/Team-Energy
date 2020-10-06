<?php

namespace App\Http\Controllers;

use App\Key;
use App\Question;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionsController extends Controller
{
    public function add_ichimteam1()
    {

        $questions = Question::orderBy('tid')->take(20)->get();

        return view('test.ichimteam1', compact(['questions']));
    }

    public function add_ichimteam2()
    {
        $questions = Question::orderBy('tid')->offset(20)->take(10)->get();

        return view('test.ichimteam2', compact(['questions']));
    }

    public function add_kulturimteam()
    {
        $questions = Question::orderBy('tid')->offset(30)->take(20)->get();

        return view('test.kulturimteam', compact(['questions']));
        
    }
}
