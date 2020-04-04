<?php

namespace App\Http\Controllers;

use App\Question;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionsController extends Controller
{
    public function add_ichimteam1()
    {
        $question1_these1 = Question::where('tid', '1')->get()->first()->these1;
        $question1_these2 = Question::where('tid', '1')->get()->first()->these2;
        $question2_these1 = Question::where('tid', '2')->get()->first()->these1;
        $question2_these2 = Question::where('tid', '2')->get()->first()->these2;
        $question3_these1 = Question::where('tid', '3')->get()->first()->these1;
        $question3_these2 = Question::where('tid', '3')->get()->first()->these2;
        $question4_these1 = Question::where('tid', '4')->get()->first()->these1;
        $question4_these2 = Question::where('tid', '4')->get()->first()->these2;
        $question5_these1 = Question::where('tid', '5')->get()->first()->these1;
        $question5_these2 = Question::where('tid', '5')->get()->first()->these2;
        $question6_these1 = Question::where('tid', '6')->get()->first()->these1;
        $question6_these2 = Question::where('tid', '6')->get()->first()->these2;
        $question7_these1 = Question::where('tid', '7')->get()->first()->these1;
        $question7_these2 = Question::where('tid', '7')->get()->first()->these2;
        $question8_these1 = Question::where('tid', '8')->get()->first()->these1;
        $question8_these2 = Question::where('tid', '8')->get()->first()->these2;
        $question9_these1 = Question::where('tid', '9')->get()->first()->these1;
        $question9_these2 = Question::where('tid', '9')->get()->first()->these2;
        $question10_these1 = Question::where('tid', '10')->get()->first()->these1;
        $question10_these2 = Question::where('tid', '10')->get()->first()->these2;
        $question11_these1 = Question::where('tid', '11')->get()->first()->these1;
        $question11_these2 = Question::where('tid', '11')->get()->first()->these2;
        $question12_these1 = Question::where('tid', '12')->get()->first()->these1;
        $question12_these2 = Question::where('tid', '12')->get()->first()->these2;
        $question13_these1 = Question::where('tid', '13')->get()->first()->these1;
        $question13_these2 = Question::where('tid', '13')->get()->first()->these2;
        $question14_these1 = Question::where('tid', '14')->get()->first()->these1;
        $question14_these2 = Question::where('tid', '14')->get()->first()->these2;
        $question15_these1 = Question::where('tid', '15')->get()->first()->these1;
        $question15_these2 = Question::where('tid', '15')->get()->first()->these2;
        $question16_these1 = Question::where('tid', '16')->get()->first()->these1;
        $question16_these2 = Question::where('tid', '16')->get()->first()->these2;
        $question17_these1 = Question::where('tid', '17')->get()->first()->these1;
        $question17_these2 = Question::where('tid', '17')->get()->first()->these2;
        $question18_these1 = Question::where('tid', '18')->get()->first()->these1;
        $question18_these2 = Question::where('tid', '18')->get()->first()->these2;
        $question19_these1 = Question::where('tid', '19')->get()->first()->these1;
        $question19_these2 = Question::where('tid', '19')->get()->first()->these2;
        $question20_these1 = Question::where('tid', '20')->get()->first()->these1;
        $question20_these2 = Question::where('tid', '20')->get()->first()->these2;




        

        return view('test.ichimteam1', compact([
            'question1_these1',
            'question1_these2',
            'question2_these1',
            'question2_these2',
            'question3_these1',
            'question3_these2',
            'question4_these1',
            'question4_these2',
            'question5_these1',
            'question5_these2',
            'question6_these1',
            'question6_these2',
            'question7_these1',
            'question7_these2',
            'question8_these1',
            'question8_these2',
            'question9_these1',
            'question9_these2',
            'question10_these1',
            'question10_these2',
            'question11_these1',
            'question11_these2',
            'question12_these1',
            'question12_these2',
            'question13_these1',
            'question13_these2',
            'question14_these1',
            'question14_these2',
            'question15_these1',
            'question15_these2',
            'question16_these1',
            'question16_these2',
            'question17_these1',
            'question17_these2',
            'question18_these1',
            'question18_these2',
            'question19_these1',
            'question19_these2',
            'question20_these1',
            'question20_these2'

            ]));
    }

    public function add_ichimteam2()
    {
        $question1_these1 = Question::where('tid', '40')->get()->first()->these1;
        $question1_these2 = Question::where('tid', '40')->get()->first()->these2;
        $question2_these1 = Question::where('tid', '41')->get()->first()->these1;
        $question2_these2 = Question::where('tid', '41')->get()->first()->these2;
        $question3_these1 = Question::where('tid', '42')->get()->first()->these1;
        $question3_these2 = Question::where('tid', '42')->get()->first()->these2;
        $question4_these1 = Question::where('tid', '43')->get()->first()->these1;
        $question4_these2 = Question::where('tid', '43')->get()->first()->these2;
        $question5_these1 = Question::where('tid', '44')->get()->first()->these1;
        $question5_these2 = Question::where('tid', '44')->get()->first()->these2;
        $question6_these1 = Question::where('tid', '45')->get()->first()->these1;
        $question6_these2 = Question::where('tid', '45')->get()->first()->these2;
        $question7_these1 = Question::where('tid', '46')->get()->first()->these1;
        $question7_these2 = Question::where('tid', '46')->get()->first()->these2;
        $question8_these1 = Question::where('tid', '47')->get()->first()->these1;
        $question8_these2 = Question::where('tid', '47')->get()->first()->these2;
        $question9_these1 = Question::where('tid', '48')->get()->first()->these1;
        $question9_these2 = Question::where('tid', '48')->get()->first()->these2;
        $question10_these1 = Question::where('tid', '49')->get()->first()->these1;
        $question10_these2 = Question::where('tid', '49')->get()->first()->these2;



        return view('test.ichimteam2', compact([
            'question1_these1',
            'question1_these2',
            'question2_these1',
            'question2_these2',
            'question3_these1',
            'question3_these2',
            'question4_these1',
            'question4_these2',
            'question5_these1',
            'question5_these2',
            'question6_these1',
            'question6_these2',
            'question7_these1',
            'question7_these2',
            'question8_these1',
            'question8_these2',
            'question9_these1',
            'question9_these2',
            'question10_these1',
            'question10_these2',
            

            ]));
    }

    public function add_kulturimteam() 
    {
        
        $question1_these1 = Question::where('tid', '21')->get()->first()->these1;
        $question1_these2 = Question::where('tid', '21')->get()->first()->these2;
        $question2_these1 = Question::where('tid', '22')->get()->first()->these1;
        $question2_these2 = Question::where('tid', '22')->get()->first()->these2;
        $question3_these1 = Question::where('tid', '23')->get()->first()->these1;
        $question3_these2 = Question::where('tid', '23')->get()->first()->these2;
        $question4_these1 = Question::where('tid', '24')->get()->first()->these1;
        $question4_these2 = Question::where('tid', '24')->get()->first()->these2;
        $question5_these1 = Question::where('tid', '25')->get()->first()->these1;
        $question5_these2 = Question::where('tid', '25')->get()->first()->these2;
        $question6_these1 = Question::where('tid', '26')->get()->first()->these1;
        $question6_these2 = Question::where('tid', '26')->get()->first()->these2;
        $question7_these1 = Question::where('tid', '27')->get()->first()->these1;
        $question7_these2 = Question::where('tid', '27')->get()->first()->these2;
        $question8_these1 = Question::where('tid', '28')->get()->first()->these1;
        $question8_these2 = Question::where('tid', '28')->get()->first()->these2;
        $question9_these1 = Question::where('tid', '29')->get()->first()->these1;
        $question9_these2 = Question::where('tid', '29')->get()->first()->these2;
        $question10_these1 = Question::where('tid', '30')->get()->first()->these1;
        $question10_these2 = Question::where('tid', '30')->get()->first()->these2;
        $question11_these1 = Question::where('tid', '31')->get()->first()->these1;
        $question11_these2 = Question::where('tid', '31')->get()->first()->these2;
        $question12_these1 = Question::where('tid', '32')->get()->first()->these1;
        $question12_these2 = Question::where('tid', '32')->get()->first()->these2;
        $question13_these1 = Question::where('tid', '33')->get()->first()->these1;
        $question13_these2 = Question::where('tid', '33')->get()->first()->these2;
        $question14_these1 = Question::where('tid', '34')->get()->first()->these1;
        $question14_these2 = Question::where('tid', '34')->get()->first()->these2;
        $question15_these1 = Question::where('tid', '35')->get()->first()->these1;
        $question15_these2 = Question::where('tid', '35')->get()->first()->these2;
        $question16_these1 = Question::where('tid', '36')->get()->first()->these1;
        $question16_these2 = Question::where('tid', '36')->get()->first()->these2;
        $question17_these1 = Question::where('tid', '37')->get()->first()->these1;
        $question17_these2 = Question::where('tid', '37')->get()->first()->these2;
        $question18_these1 = Question::where('tid', '38')->get()->first()->these1;
        $question18_these2 = Question::where('tid', '38')->get()->first()->these2;
        $question19_these1 = Question::where('tid', '39')->get()->first()->these1;
        $question19_these2 = Question::where('tid', '39')->get()->first()->these2;
        $question20_these1 = Question::where('tid', '50')->get()->first()->these1;
        $question20_these2 = Question::where('tid', '50')->get()->first()->these2;


        

        return view('test.kulturimteam', compact([
            'question1_these1',
            'question1_these2',
            'question2_these1',
            'question2_these2',
            'question3_these1',
            'question3_these2',
            'question4_these1',
            'question4_these2',
            'question5_these1',
            'question5_these2',
            'question6_these1',
            'question6_these2',
            'question7_these1',
            'question7_these2',
            'question8_these1',
            'question8_these2',
            'question9_these1',
            'question9_these2',
            'question10_these1',
            'question10_these2',
            'question11_these1',
            'question11_these2',
            'question12_these1',
            'question12_these2',
            'question13_these1',
            'question13_these2',
            'question14_these1',
            'question14_these2',
            'question15_these1',
            'question15_these2',
            'question16_these1',
            'question16_these2',
            'question17_these1',
            'question17_these2',
            'question18_these1',
            'question18_these2',
            'question19_these1',
            'question19_these2',
            'question20_these1',
            'question20_these2'

            ]));
    }
}
