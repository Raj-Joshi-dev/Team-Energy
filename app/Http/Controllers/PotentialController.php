<?php

namespace App\Http\Controllers;

use App\PotentialImTeam;
use App\Result;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\IchImTeamPrivat;
use App\IchImTeamBeruf;

class PotentialController extends Controller
{
    public function potential_store()

    {
        //Insert Check condition

        $result_check = Result::with('user')->where('user_id', Auth::id())->where('kat_id', 3)->exists();

        if ($result_check == false) {
            // user id.
            $id = Auth::id();

            $result = new Result();

            $result->user_id = $id;

            $result->kat_id = 3;

            $result->save();

            $potential = new PotentialImTeam();

            $potential->user_id = $id;

            $potential->result_id = $result->id;

            $potential->privat_x1 = IchImTeamPrivat::where('user_id', $id)->latest()->value('privat_x1');
            $potential->privat_y1 = IchImTeamPrivat::where('user_id', $id)->latest()->value('privat_y1');
            $potential->privat_x2 = IchImTeamPrivat::where('user_id', $id)->latest()->value('privat_x2');
            $potential->privat_y2 = IchImTeamPrivat::where('user_id', $id)->latest()->value('privat_y2');
            $potential->privat_x3 = IchImTeamPrivat::where('user_id', $id)->latest()->value('privat_x3');
            $potential->privat_y3 = IchImTeamPrivat::where('user_id', $id)->latest()->value('privat_y3');
            $potential->privat_x4 = IchImTeamPrivat::where('user_id', $id)->latest()->value('privat_x4');
            $potential->privat_y4 = IchImTeamPrivat::where('user_id', $id)->latest()->value('privat_y4');

            $potential->beruf_x1 = IchImTeamBeruf::where('user_id', $id)->latest()->value('beruf_x1');
            $potential->beruf_y1 = IchImTeamBeruf::where('user_id', $id)->latest()->value('beruf_y1');
            $potential->beruf_x2 = IchImTeamBeruf::where('user_id', $id)->latest()->value('beruf_x2');
            $potential->beruf_y2 = IchImTeamBeruf::where('user_id', $id)->latest()->value('beruf_y2');
            $potential->beruf_x3 = IchImTeamBeruf::where('user_id', $id)->latest()->value('beruf_x3');
            $potential->beruf_y3 = IchImTeamBeruf::where('user_id', $id)->latest()->value('beruf_y3');
            $potential->beruf_x4 = IchImTeamBeruf::where('user_id', $id)->latest()->value('beruf_x4');
            $potential->beruf_y4 = IchImTeamBeruf::where('user_id', $id)->latest()->value('beruf_y4');

            $potential->save();

            return redirect()->action([PotentialController::class, 'potential_result'], $result_id = $result->id);
        } else
            return abort('403', 'Test bereits abgeschickt, bitte überprüfen Sie das Dashboard oder kontaktieren Sie den Admin!');

    }

    public function potential_result($result_id)
    {

        // Retrieving data to view.
        $user_id = DB::table('results')->where('id', $result_id)->latest()->value('user_id');

        $user_name = DB::table('users')->where('id', $user_id)->value('name');

        $team_id = DB::table('users')->where('id', $user_id)->value('team_id');

        $team_name = DB::table('teams')->where('id', $team_id)->value('name');

        $privat_x1 = PotentialImTeam::where('result_id', $result_id)->value('privat_x1');
        $privat_y1 = PotentialImTeam::where('result_id', $result_id)->value('privat_y1');
        $privat_x2 = PotentialImTeam::where('result_id', $result_id)->value('privat_x2');
        $privat_y2 = PotentialImTeam::where('result_id', $result_id)->value('privat_y2');
        $privat_x3 = PotentialImTeam::where('result_id', $result_id)->value('privat_x3');
        $privat_y3 = PotentialImTeam::where('result_id', $result_id)->value('privat_y3');
        $privat_x4 = PotentialImTeam::where('result_id', $result_id)->value('privat_x4');
        $privat_y4 = PotentialImTeam::where('result_id', $result_id)->value('privat_y4');

        $beruf_x1 = PotentialImTeam::where('result_id', $result_id)->value('beruf_x1');
        $beruf_y1 = PotentialImTeam::where('result_id', $result_id)->value('beruf_y1');
        $beruf_x2 = PotentialImTeam::where('result_id', $result_id)->value('beruf_x2');
        $beruf_y2 = PotentialImTeam::where('result_id', $result_id)->value('beruf_y2');
        $beruf_x3 = PotentialImTeam::where('result_id', $result_id)->value('beruf_x3');
        $beruf_y3 = PotentialImTeam::where('result_id', $result_id)->value('beruf_y3');
        $beruf_x4 = PotentialImTeam::where('result_id', $result_id)->value('beruf_x4');
        $beruf_y4 = PotentialImTeam::where('result_id', $result_id)->value('beruf_y4');

        // Average of Privat (x,y) co-ordinates.
        $avg_privat_x = ($privat_x1 + $privat_x2 + $privat_x3 + $privat_x4) / 4;
        $avg_privat_y = ($privat_y1 + $privat_y2 + $privat_y3 + $privat_y4) / 4;


        // Average of Beruf (x,y) co-ordinates.
        $avg_beruf_x = ($beruf_x1 + $beruf_x2 + $beruf_x3 + $beruf_x4) / 4;
        $avg_beruf_y = ($beruf_y1 + $beruf_y2 + $beruf_y3 + $beruf_y4) / 4;


        // Middle-point calculation for potential im team.
        $potential_point_x = ($avg_beruf_x + $avg_privat_x) / 2;

        $potential_point_y = ($avg_beruf_y + $avg_privat_y) / 2;

//        dd($potential_point_x, $potential_point_y);


        // Passing middle-point co-ordinates (x,y) values to frontend along with few other variables.
        return view('graphs.potentialimteam_graph', compact('user_name', 'result_id', 'team_name', 'potential_point_x', 'potential_point_y'));
    }


}
