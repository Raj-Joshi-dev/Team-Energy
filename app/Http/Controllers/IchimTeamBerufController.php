<?php

namespace App\Http\Controllers;

use App\Http\Requests\IchimTeamBerufRequest;
use App\IchImTeamBeruf;
use App\Result;
use App\ResultAnswer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class IchimTeamBerufController extends Controller
{
    public function beruf_store(IchimTeamBerufRequest $request)
    {
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

        return redirect()->action([IchimTeamBerufController::class, 'beruf_result'], $id = $result->id);
    }

    public function beruf_result($id)
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

        $ich_im_beruf = IchImTeamBeruf::where('result_id', $id)->exists();

        if ($ich_im_beruf == false) {
            $beruf = new IchImTeamBeruf();

            $beruf->user_id = Auth::id();

            $beruf->result_id = $id;

            $beruf->team_id = Auth::user()->team_id;

            $beruf->beruf_x1 = $quadrant1_x;
            $beruf->beruf_y1 = $quadrant1_y;

            $beruf->beruf_x2 = $quadrant2_x;
            $beruf->beruf_y2 = $quadrant2_y;

            $beruf->beruf_x3 = $quadrant3_x;
            $beruf->beruf_y3 = $quadrant3_y;

            $beruf->beruf_x4 = $quadrant4_x;
            $beruf->beruf_y4 = $quadrant4_y;

            $beruf->save();
        }


        $user_id = DB::table('result_answers')->where('result_id', $id)->value('user_id');

        $user_name = DB::table('users')->where('id', $user_id)->value('name');

        $team_id = DB::table('users')->where('id', $user_id)->value('team_id');

        $team_name = DB::table('teams')->where('id', $team_id)->value('name');

        $result_id = $id;

        return view('graphs.ichimteam2_graph', compact('user_name', 'team_name', 'result_id', 'quadrant1_x', 'quadrant1_y', 'quadrant2_x', 'quadrant2_y', 'quadrant3_x', 'quadrant3_y', 'quadrant4_x', 'quadrant4_y'));

    }
}
