<?php

namespace App\Http\Controllers;

use App\Http\Requests\IchimTeamPrivatRequest;
use App\IchImTeamPrivat;
use App\Result;
use App\ResultAnswer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IchimTeamPrivatController extends Controller
{
    public function privat_store(IchimTeamPrivatRequest $request)

    {
        $result = new Result();

        $result->user_id = Auth::id();

        $result->team_id = Auth::user()->team_id;

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


        return redirect()->action([IchimTeamPrivatController::class,'privat_result'], $result->id);
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

        $ich_im_privat = IchImTeamPrivat::where('result_id', $result_id)->exists();

        if ($ich_im_privat == false) {

            $privat = new IchImTeamPrivat();

            $privat->user_id = Auth::id();

            $privat->result_id = $id;

            $privat->team_id = Auth::user()->team_id;

            $privat->privat_x1 = $quadrant1_x;
            $privat->privat_y1 = $quadrant1_y;

            $privat->privat_x2 = $quadrant2_x;
            $privat->privat_y2 = $quadrant2_y;

            $privat->privat_x3 = $quadrant3_x;
            $privat->privat_y3 = $quadrant3_y;

            $privat->privat_x4 = $quadrant4_x;
            $privat->privat_y4 = $quadrant4_y;

            $privat->save();
        }

       return view('graphs.ichimteam1_graph', compact('user_name', 'team_name', 'result_id', 'quadrant1_x', 'quadrant1_y', 'quadrant2_x', 'quadrant2_y', 'quadrant3_x', 'quadrant3_y', 'quadrant4_x', 'quadrant4_y'));
    }
}
