<?php

namespace App\Http\Controllers;

use App\Http\Requests\KulturimTeamSingleRequest;
use App\KulturimTeamSingle;
use App\Result;
use App\ResultAnswer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KulturimTeamSingleController extends Controller
{
    public function kultur_single_store(KulturimTeamSingleRequest $request)
    {
        $result = new Result();

        $result->user_id = Auth::id();

        $result->kat_id = 4;

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

        return redirect()->action([KulturimTeamSingleController::class, 'kultur_single_result'], $result->id);
    }

    public function kultur_single_result($id)
    {
        $result_id = $id;
        $user_id = DB::table('result_answers')->where('result_id', $id)->value('user_id');
        $user_name = DB::table('users')->where('id', $user_id)->value('name');
        $team_id = DB::table('users')->where('id', $user_id)->value('team_id');
        $team_name = DB::table('teams')->where('id', $team_id)->value('name');


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

        $kultur_single_check = KulturimTeamSingle::where('result_id', $result_id)->exists();

        if ($kultur_single_check == false) {

            $kultur_single = new KulturimTeamSingle();

            $kultur_single->user_id = Auth::id();

            $kultur_single->result_id = $id;

            $kultur_single->team_id = $team_id;

            $kultur_single->kultur_x1 = $quadrant1_x;
            $kultur_single->kultur_y1 = $quadrant1_y;

            $kultur_single->kultur_x2 = $quadrant2_x;
            $kultur_single->kultur_y2 = $quadrant2_y;

            $kultur_single->kultur_x3 = $quadrant3_x;
            $kultur_single->kultur_y3 = $quadrant3_y;

            $kultur_single->kultur_x4 = $quadrant4_x;
            $kultur_single->kultur_y4 = $quadrant4_y;

            $kultur_single->save();
        }

        return view('graphs.kulturimteam_graph', compact('user_name', 'team_name', 'result_id',
            'quadrant1_x', 'quadrant1_y', 'quadrant2_x', 'quadrant2_y', 'quadrant3_x', 'quadrant3_y', 'quadrant4_x', 'quadrant4_y'));
    }
}
