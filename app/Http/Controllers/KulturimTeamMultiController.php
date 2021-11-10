<?php

namespace App\Http\Controllers;

use App\KulturimTeamMulti;
use App\KulturimTeamSingle;
use App\Result;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KulturimTeamMultiController extends Controller
{
    public function multi_kultur_store()
    {
        //Check if the results already exists for the user belonging to his team.
        $multi_kultur_check = Result::with('users')->where('user_id', Auth::id())->where('kat_id', 5)->exists();

        // If not then create result
        if ($multi_kultur_check == false) {
            //get team id of the logged in user
            $team_id = Auth::user()->team_id;

            //create new result entry in Results table.
            $result = new Result();
            $result->user_id = Auth::id();
            $result->kat_id = 5;
            $result->save();

            // Create new entry in Multi Kultur table
            $multi_kultur = new KulturimTeamMulti();
            $multi_kultur->team_id = $team_id;
            $multi_kultur->result_id = $result->id;
            $multi_kultur->save();

            // Check whether all the active members have finished tests?

            return redirect()->action([KulturimTeamMultiController::class, 'multi_kultur_result'], $result_id = $result->id);
        }
        else
            // Abort Message!
            abort('403', 'Test bereits abgeschickt, bitte überprüfen Sie das Dashboard oder kontaktieren Sie den Admin.');

    }

    public function multi_kultur_result($result_id)
    {
        // Get Kultur im Team Single results of users belonging to the team of logged in user.
        $user_id = DB::table('results')->where('id', $result_id)->value('user_id');
        $team_id = DB::table('users')->where('id', $user_id)->value('team_id');
        $members = KulturimTeamSingle::where('team_id', $team_id)->get();
        $team_name = DB::table('teams')->where('id', $team_id)->value('name');
        $member_count = KulturimTeamSingle::all()->where('team_id', $team_id)->count();

        // Pass Values of Kultur im Team Single to frontend.
        $graphs = $members->map(function ($member) {
            return [
                'quadrant1_x' => $member->kultur_x1,
                'quadrant2_x' => $member->kultur_x2,
                'quadrant3_x' => $member->kultur_x3,
                'quadrant4_x' => $member->kultur_x4,
                'quadrant1_y' => $member->kultur_y1,
                'quadrant2_y' => $member->kultur_y2,
                'quadrant3_y' => $member->kultur_y3,
                'quadrant4_y' => $member->kultur_y4,
            ];
        });

        return view('graphs.kulturimteam2_graph', compact('members', 'graphs', 'member_count', 'team_name'));
    }
}
