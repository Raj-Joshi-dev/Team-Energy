<?php

namespace App\Http\Controllers;

use App\Key;
use App\Result;
use App\ResultAnswer;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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

        //dd($request->all());

        //$arr = serialize($request['answer']);

        $validator = Validator::make(
            $request->all(),
            [
                'answer.1' => 'required',
                'answer.2' => 'required',
                'answer.3' => 'required',
                'answer.4' => 'required',
                'answer.5' => 'required',
                'answer.6' => 'required',
                'answer.7' => 'required',
                'answer.8' => 'required',
                'answer.9' => 'required',
                'answer.10' => 'required',
                'answer.11' => 'required',
                'answer.12' => 'required',
                'answer.13' => 'required',
                'answer.14' => 'required',
                'answer.15' => 'required',
                'answer.16' => 'required',
                'answer.17' => 'required',
                'answer.18' => 'required',
                'answer.19' => 'required',
                'answer.20' => 'required',
                'answer.*' => 'required|string|in:positive_x,positive_y,negative_x,negative_y',
            ],
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $keys = Key::get();
        $result = new Result();

        $result->user_id = Auth::id();

        $result->kat_id = 1;

        $result->save();


        foreach ($request->input('answer') as $key => $answer) {

            $ans = new ResultAnswer();

            $ans->user_id = Auth::id();

            $databaseValue = $keys->firstWhere('tid', $key)->$answer;

            $ans->result_id = $result->id;

            $ans->axis = $answer;

            $ans->value = $databaseValue;

            $ans->answer_id = $key;

            $ans->save();
        }

        return redirect()->action('ResultController@result', $id = $result->id);
    }

    public function result($id)
    {

        $data = ResultAnswer::where('result_id', $id)
            ->groupBy('axis')
            ->selectRaw('axis,SUM(value) AS value')
            ->get();

        $x = optional($data->where('axis', 'negative_x')->first())->value - optional($data->where('axis', 'positive_x')->first())->value;
        $y = optional($data->where('axis', 'negative_y')->first())->value - optional($data->where('axis', 'positive_y')->first())->value;

        return view('success', compact('x', 'y'));
    }

    public function store2(Request $request)
    {


        $data = request()->validate([
            'answer[1]' => 'required',
            'answer[2]' => 'required',
            'answer[3]' => 'required',
            'answer[4]' => 'required',
            'answer[5]' => 'required',
            'answer[6]' => 'required',
            'answer[7]' => 'required',
            'answer[8]' => 'required',
            'answer[9]' => 'required',
            'answer[10]' => 'required',

        ]);

        $answer = new Result($data);

        $answer->user_id = auth()->user()->user_id;
        $answer->kat_id = 2;

        $answer->answerGroup11 = '';
        $answer->answerGroup12 = '';
        $answer->answerGroup13 = '';
        $answer->answerGroup14 = '';
        $answer->answerGroup15 = '';
        $answer->answerGroup16 = '';
        $answer->answerGroup17 = '';
        $answer->answerGroup18 = '';
        $answer->answerGroup19 = '';
        $answer->answerGroup20 = '';

        $answer->save();

        return view('success');
    }

    public function store3(Request $request)
    {

        $data = request()->validate([
            'answerGroup1' => '',
            'answerGroup2' => '',
            'answerGroup3' => '',
            'answerGroup4' => '',
            'answerGroup5' => '',
            'answerGroup6' => '',
            'answerGroup7' => '',
            'answerGroup8' => '',
            'answerGroup9' => '',
            'answerGroup10' => '',
            'answerGroup11' => '',
            'answerGroup12' => '',
            'answerGroup13' => '',
            'answerGroup14' => '',
            'answerGroup15' => '',
            'answerGroup16' => '',
            'answerGroup17' => '',
            'answerGroup18' => '',
            'answerGroup19' => '',
            'answerGroup20' => '',
        ]);

        $answer = new Result($data);

        $answer->user_id = auth()->user()->user_id;
        $answer->kat_id = 3;

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
