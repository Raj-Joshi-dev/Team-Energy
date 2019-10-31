<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpMyAdmin\Config\Form;
use App\IchimTeam1;
use App\IchimTeam2;
use App\KulturimTeam;
use App\User;
use Auth;

class TestsController extends Controller
{

    public function store(Request $request){

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

        $answer = new IchimTeam1();

        $answer->user_id = auth()->user()->user_id; 
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
        
        //return response()->json($request->all());  

        // dd($request->input('answerGroup1'));

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

            $answer = new IchimTeam2();
    
            $answer->user_id = auth()->user()->user_id; 
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

            $answer = new KulturimTeam();
    
            $answer->user_id = auth()->user()->user_id; 
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
}
