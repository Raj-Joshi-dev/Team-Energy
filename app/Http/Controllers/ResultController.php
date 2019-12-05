<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;
use App\User;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'answerGroup1' => 'required',
            'answerGroup2' => 'required',
            'answerGroup3' => 'required',
            'answerGroup4' => 'required',
            'answerGroup5' => 'required',
            'answerGroup6' => 'required',
            'answerGroup7' => 'required',
            'answerGroup8' => 'required',
            'answerGroup9' => 'required',
            'answerGroup10' => 'required',
            'answerGroup11' => 'required',
            'answerGroup12' => 'required',
            'answerGroup13' => 'required',
            'answerGroup14' => 'required',
            'answerGroup15' => 'required',
            'answerGroup16' => 'required',
            'answerGroup17' => 'required',
            'answerGroup18' => 'required',
            'answerGroup19' => 'required',
            'answerGroup20' => 'required',
        ]);

        $answer = new Result();

        $answer->user_id = auth()->user()->user_id; 
        $answer->kat_id = 1;
        $answer->answerGroup1 = $request->input('answerGroup1');
        $answer->answerGroup2 = $request->input('answerGroup2');
        $answer->answerGroup3 = $request->input('answerGroup3');
        $answer->answerGroup4 = $request->input('answerGroup4');
        $answer->answerGroup5 = $request->input('answerGroup5');
        $answer->answerGroup6 = $request->input('answerGroup6');
        $answer->answerGroup7 = $request->input('answerGroup7');
        $answer->answerGroup8 = $request->input('answerGroup8');
        $answer->answerGroup9 = $request->input('answerGroup9');
        $answer->answerGroup10 = $request->input('answerGroup10');
        $answer->answerGroup11 = $request->input('answerGroup11');
        $answer->answerGroup12 = $request->input('answerGroup12');
        $answer->answerGroup13 = $request->input('answerGroup13');
        $answer->answerGroup14 = $request->input('answerGroup14');
        $answer->answerGroup15 = $request->input('answerGroup15');
        $answer->answerGroup16 = $request->input('answerGroup16');
        $answer->answerGroup17 = $request->input('answerGroup17');
        $answer->answerGroup18 = $request->input('answerGroup18');
        $answer->answerGroup19 = $request->input('answerGroup19');
        $answer->answerGroup20 = $request->input('answerGroup20');
        
        $answer->save();
        
        return view('success');
    }

    public function store2(Request $request){


        $data = request()->validate([
            'answerGroup1' => 'required',
            'answerGroup2' => 'required',
            'answerGroup3' => 'required',
            'answerGroup4' => 'required',
            'answerGroup5' => 'required',
            'answerGroup6' => 'required',
            'answerGroup7' => 'required',
            'answerGroup8' => 'required',
            'answerGroup9' => 'required',
            'answerGroup10' => 'required',
        ]);

            $answer = new Result();
    
            $answer->user_id = auth()->user()->user_id; 
            $answer->kat_id = 2;
            $answer->answerGroup1 = $request->input('answerGroup1');
            $answer->answerGroup2 = $request->input('answerGroup2');
            $answer->answerGroup3 = $request->input('answerGroup3');
            $answer->answerGroup4 = $request->input('answerGroup4');
            $answer->answerGroup5 = $request->input('answerGroup5');
            $answer->answerGroup6 = $request->input('answerGroup6');
            $answer->answerGroup7 = $request->input('answerGroup7');
            $answer->answerGroup8 = $request->input('answerGroup8');
            $answer->answerGroup9 = $request->input('answerGroup9');
            $answer->answerGroup10 = $request->input('answerGroup10');
            $answer->answerGroup11 = '0';
            $answer->answerGroup12 = '0';
            $answer->answerGroup13 = '0';
            $answer->answerGroup14 = '0';
            $answer->answerGroup15 = '0';
            $answer->answerGroup16 = '0';
            $answer->answerGroup17 = '0';
            $answer->answerGroup18 = '0';
            $answer->answerGroup19 = '0';
            $answer->answerGroup20 = '0';
            
            $answer->save();
            
            return view('success'); 
            
    
    }  
    
    public function store3(Request $request){

        $data = request()->validate([
            'answerGroup1' => 'required',
            'answerGroup2' => 'required',
            'answerGroup3' => 'required',
            'answerGroup4' => 'required',
            'answerGroup5' => 'required',
            'answerGroup6' => 'required',
            'answerGroup7' => 'required',
            'answerGroup8' => 'required',
            'answerGroup9' => 'required',
            'answerGroup10' => 'required',
            'answerGroup11' => 'required',
            'answerGroup12' => 'required',
            'answerGroup13' => 'required',
            'answerGroup14' => 'required',
            'answerGroup15' => 'required',
            'answerGroup16' => 'required',
            'answerGroup17' => 'required',
            'answerGroup18' => 'required',
            'answerGroup19' => 'required',
            'answerGroup20' => 'required',
        ]);

            $answer = new Result();
    
            $answer->user_id = auth()->user()->user_id; 
            $answer->kat_id = 3;
            $answer->answerGroup1 = $request->input('answerGroup1');
            $answer->answerGroup2 = $request->input('answerGroup2');
            $answer->answerGroup3 = $request->input('answerGroup3');
            $answer->answerGroup4 = $request->input('answerGroup4');
            $answer->answerGroup5 = $request->input('answerGroup5');
            $answer->answerGroup6 = $request->input('answerGroup6');
            $answer->answerGroup7 = $request->input('answerGroup7');
            $answer->answerGroup8 = $request->input('answerGroup8');
            $answer->answerGroup9 = $request->input('answerGroup9');
            $answer->answerGroup10 = $request->input('answerGroup10');
            $answer->answerGroup11 = $request->input('answerGroup11');
            $answer->answerGroup12 = $request->input('answerGroup12');
            $answer->answerGroup13 = $request->input('answerGroup13');
            $answer->answerGroup14 = $request->input('answerGroup14');
            $answer->answerGroup15 = $request->input('answerGroup15');
            $answer->answerGroup16 = $request->input('answerGroup16');
            $answer->answerGroup17 = $request->input('answerGroup17');
            $answer->answerGroup18 = $request->input('answerGroup18');
            $answer->answerGroup19 = $request->input('answerGroup19');
            $answer->answerGroup20 = $request->input('answerGroup20');
            
            $answer->save();
            
            return view('success'); 
    
    }     

    /**
     * Display the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}
