<?php

namespace App\Http\Controllers;

use App\IchImTeamBeruf;
use App\IchImTeamPrivat;
use App\Key;
use App\Result;
use App\ResultAnswer;
use App\User;
use Illuminate\Http\Request;
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
        $result = Result::with('user')->pluck('user_id');

//       dd($result);
//
//        $user_name = DB::table('users')->where('id', '=', $result)->get('name');
//
//        dd($user_name);

        $results = Result::with('user')->orderByDesc('id')->paginate(10);

        return view('admin.results.index', compact('results'));


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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $results = DB::table('result_answers')->where('result_id', $id)->get();


//        $result = ResultAnswer::with('result')->get()->where('result_id', $id);

        return view('admin.results.show', compact('results'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Result::destroy($id);

        return redirect(route('admin.results.index'));
    }

    /**
     * Generate graph for the result.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function generate_graph($id)
    {

        $kat_id = DB::table('results')->where('id', $id)->value('kat_id');


        if ($kat_id == 1) {
//            $privat = DB::table('ich_im_team_privats')->where('result_id', $id)->get(['privat_x1', 'privat_x2', 'privat_x3', 'privat_x4', 'privat_y1', 'privat_y2', 'privat_y3', 'privat_y4']);
//            $privat_x1 = $privat->pluck('privat_x1');
//            $privat_y1 = $privat->pluck('privat_y1');
//            $privat_x2 = $privat->pluck('privat_x2');
//            $privat_y2 = $privat->pluck('privat_y2');
//            $privat_x3 = $privat->pluck('privat_x3');
//            $privat_y3 = $privat->pluck('privat_y3');
//            $privat_x4 = $privat->pluck('privat_x4');
//            $privat_y4 = $privat->pluck('privat_y4');

            return redirect()->action('IchimTeamPrivatController@privat_result', $id);
        } elseif ($kat_id == 2) {

            return redirect()->action('ResultController@result2', $id);
        } else {
            echo 'Do Nothing!';
        }

//        switch ($kat_id) {
//            case 1:
//            {
//                $privat = DB::table('ich_im_team_privats')->where('result_id', '=', $this->$id)->get();
//                echo $privat;
//                break;
//            }
//            case 2:
//            {
//                echo 'Logic for 2';
//                break;
//            }
//            default:
//            {
//                echo 'Do Nothing!';
//            }
//        }


    }



    public function store2(Request $request)
    {

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

        $result->kat_id = 2;

        $result->save();

        foreach ($request->input('answer') as $key => $answer) {

            $string = explode(',', $answer);

            if (count($string) == 2) {

                $first = strval($string[0]);

                $second = strval($string[1]);
            }

            $ans = new ResultAnswer();

            $ans->user_id = Auth::id();

            $ans->result_id = $result->id;

            $ans->points = $answer;

            $ans->answer_id = $key;

            $ans->value_x = DB::table('keys')
                ->where('tid', $key)
                ->value($first);

            $ans->value_y = DB::table('keys')
                ->where('tid', $key)
                ->value($second);

            $ans->quadrant = DB::table('sub_categories')
                ->where('tid', $key)
                ->where(function ($query) use ($answer) {
                    $query->where('parameter1', $answer)
                        ->orWhere('parameter2', $answer);
                })->value('quadrant');


            $ans->name = DB::table('sub_categories')
                ->where('tid', $key)
                ->where(function ($query) use ($answer) {
                    $query->where('parameter1', $answer)
                        ->orWhere('parameter2', $answer);
                })->value('name');


            $ans->save();
        }


        return redirect()->action('ResultController@result2', $id = $result->id);
    }

    public function result2($id)
    {
        $avg_quad1_x = ResultAnswer::where('result_id', $id)
            ->where('quadrant', 1)->avg('value_x');

        $quadrant1_x = number_format($avg_quad1_x, 2, '.', '');

        $avg_quad1_y = ResultAnswer::where('result_id', $id)
            ->where('quadrant', 1)->avg('value_y');

        $quadrant1_y = number_format($avg_quad1_y, 2, '.', '');

        $avg_quad2_x = ResultAnswer::where('result_id', $id)
            ->where('quadrant', 2)->avg('value_x');

        $quadrant2_x = number_format($avg_quad2_x, 2, '.', '');

        $avg_quad2_y = ResultAnswer::where('result_id', $id)
            ->where('quadrant', 2)->avg('value_y');

        $quadrant2_y = number_format($avg_quad2_y, 2, '.', '');

        $avg_quad3_x = ResultAnswer::where('result_id', $id)
            ->where('quadrant', 3)->avg('value_x');

        $quadrant3_x = number_format($avg_quad3_x, 2, '.', '');

        $avg_quad3_y = ResultAnswer::where('result_id', $id)
            ->where('quadrant', 3)->avg('value_y');

        $quadrant3_y = number_format($avg_quad3_y, 2, '.', '');

        $avg_quad4_x = ResultAnswer::where('result_id', $id)
            ->where('quadrant', 4)->avg('value_x');

        $quadrant4_x = number_format($avg_quad4_x, 2, '.', '');

        $avg_quad4_y = ResultAnswer::where('result_id', $id)
            ->where('quadrant', 4)->avg('value_y');

        $quadrant4_y = number_format($avg_quad4_y, 2, '.', '');

//        $beruf = new IchImTeamBeruf();
//
//        $beruf->user_id = Auth::id();
//
//        $beruf->result_id = $id;
//
//        $beruf->beruf_x1 = $quadrant1_x;
//        $beruf->beruf_y1 = $quadrant1_y;
//
//        $beruf->beruf_x2 = $quadrant2_x;
//        $beruf->beruf_y2 = $quadrant2_y;
//
//        $beruf->beruf_x3 = $quadrant3_x;
//        $beruf->beruf_y3 = $quadrant3_y;
//
//        $beruf->beruf_x4 = $quadrant4_x;
//        $beruf->beruf_y4 = $quadrant4_y;
//
//        $beruf->save();

        return view('graphs.ichimteam2_graph', compact('quadrant1_x', 'quadrant1_y', 'quadrant2_x', 'quadrant2_y', 'quadrant3_x', 'quadrant3_y', 'quadrant4_x', 'quadrant4_y'));
    }

    public function store3(Request $request)
    {

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

        $result->kat_id = 3;

        $result->save();

        foreach ($request->input('answer') as $key => $answer) {

            $string = explode(',', $answer);

            if (count($string) == 2) {

                $first = strval($string[0]);

                $second = strval($string[1]);
            }

            $ans = new ResultAnswer();

            $ans->user_id = Auth::id();

            $ans->result_id = $result->id;

            $ans->points = $answer;

            $ans->answer_id = $key;

            $ans->value_x = DB::table('keys')
                ->where('tid', $key)
                ->value($first);

            $ans->value_y = DB::table('keys')
                ->where('tid', $key)
                ->value($second);


            //$databaseValue2 = $keys->firstWhere('tid', $key)->value($second);

            //$Value = $databaseValue1 . "," . $databaseValue2;

            $ans->quadrant = DB::table('sub_categories')
                ->where('tid', $key)
                ->where(function ($query) use ($answer) {
                    $query->where('parameter1', $answer)
                        ->orWhere('parameter2', $answer);
                })->value('quadrant');


            $ans->name = DB::table('sub_categories')
                ->where('tid', $key)
                ->where(function ($query) use ($answer) {
                    $query->where('parameter1', $answer)
                        ->orWhere('parameter2', $answer);
                })->value('name');


            $ans->save();
        }


        return redirect()->action('ResultController@result3', $id = $result->id);
    }

    public function result3($id)
    {
        $avg_quad1_x = ResultAnswer::where('result_id', $id)
            ->where('quadrant', 1)->avg('value_x');

        $quadrant1_x = number_format($avg_quad1_x, 2, '.', '');

        $avg_quad1_y = ResultAnswer::where('result_id', $id)
            ->where('quadrant', 1)->avg('value_y');

        $quadrant1_y = number_format($avg_quad1_y, 2, '.', '');

        $avg_quad2_x = ResultAnswer::where('result_id', $id)
            ->where('quadrant', 2)->avg('value_x');

        $quadrant2_x = number_format($avg_quad2_x, 2, '.', '');

        $avg_quad2_y = ResultAnswer::where('result_id', $id)
            ->where('quadrant', 2)->avg('value_y');

        $quadrant2_y = number_format($avg_quad2_y, 2, '.', '');

        $avg_quad3_x = ResultAnswer::where('result_id', $id)
            ->where('quadrant', 3)->avg('value_x');

        $quadrant3_x = number_format($avg_quad3_x, 2, '.', '');

        $avg_quad3_y = ResultAnswer::where('result_id', $id)
            ->where('quadrant', 3)->avg('value_y');

        $quadrant3_y = number_format($avg_quad3_y, 2, '.', '');

        $avg_quad4_x = ResultAnswer::where('result_id', $id)
            ->where('quadrant', 4)->avg('value_x');

        $quadrant4_x = number_format($avg_quad4_x, 2, '.', '');

        $avg_quad4_y = ResultAnswer::where('result_id', $id)
            ->where('quadrant', 4)->avg('value_y');

        $quadrant4_y = number_format($avg_quad4_y, 2, '.', '');

        return view('graphs.kulturimteam_graph', compact('quadrant1_x', 'quadrant1_y', 'quadrant2_x', 'quadrant2_y', 'quadrant3_x', 'quadrant3_y', 'quadrant4_x', 'quadrant4_y'));

    }

}
