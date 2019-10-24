<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpMyAdmin\Config\Form;
use App\Answer;
use App\User;
use Auth;

class TestsController extends Controller
{

    public function store(Request $request){

        $answer = new Answer();

        $answer->user_id = auth()->user()->user_id; //I want to retrive current user id 
        $answer->answerGroup1 = $request->input('answerGroup1');
        $answer->value = $request->input('answerGroup1');
        $answer->save();
        
        return view('success'); 
        
        //return response()->json($request->all());  

        // dd($request->input('answerGroup1'));

        }
}
