<?php

namespace App\Http\Controllers;

use App\Key;
use App\Result;
use App\ResultAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class IchimTeamPrivatController extends Controller
{
    public function privat_store(Request $request)

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

        $result->kat_id = 1;

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


        return redirect()->action('IchimTeamPrivatController@privat_result', $id = $result->id);
    }

    public function privat_result($id)
    {

        $user_id = DB::table('result_answers')->where('result_id', $id)->value('user_id');

        $user_name = DB::table('users')->where('id', $user_id)->value('name');

        $team_id = DB::table('users')->where('id', $user_id)->value('team_id');

        $team_name = DB::table('teams')->where('id', $team_id)->value('name');

        $result_id = $id;

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


//        $privat = new IchImTeamPrivat();
//
//        $privat->user_id = Auth::id();
//
//        $privat->result_id = $id;
//
//        $privat->privat_x1 = $quadrant1_x;
//        $privat->privat_y1 = $quadrant1_y;
//
//        $privat->privat_x2 = $quadrant2_x;
//        $privat->privat_y2 = $quadrant2_y;
//
//        $privat->privat_x3 = $quadrant3_x;
//        $privat->privat_y3 = $quadrant3_y;
//
//        $privat->privat_x4 = $quadrant4_x;
//        $privat->privat_y4 = $quadrant4_y;
//
//        $privat->save();

//        $privat_x1 = $quadrant1_x;
//        $privat_y1 = $quadrant1_y;
//
//        $privat_x2 = $quadrant2_x;
//        $privat_y2 = $quadrant2_y;
//
//        $privat_x3 = $quadrant3_x;
//        $privat_y3 = $quadrant3_y;
//
//        $privat_x4 = $quadrant4_x;
//        $privat_y4 = $quadrant4_y;

//        return view('graphs.ichimteam1_graph', compact('privat_x1', 'privat_y1', 'privat_x2', 'privat_y2', 'privat_x3', 'privat_y3', 'privat_x4', 'privat_y4'));
        return view('graphs.ichimteam1_graph', compact('user_name', 'team_name', 'result_id', 'quadrant1_x', 'quadrant1_y', 'quadrant2_x', 'quadrant2_y', 'quadrant3_x', 'quadrant3_y', 'quadrant4_x', 'quadrant4_y'));
    }
}
