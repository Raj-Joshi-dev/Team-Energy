<?php

namespace App\Http\Controllers;

use App\KulturimTeamMulti;
use App\KulturimTeamSingle;
use App\Result;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KulturimTeamMultiController extends Controller
{
    public function multi_kultur_store()
    {
        //Check if the results already exists for the user belonging to his team.
        $multi_kultur_check = Result::with('users')->where('user_id', Auth::id())->where('kat_id', 5)->exists();

        // If not create result
        if ($multi_kultur_check == false) {
            //get team id of the logged in user
            $team_id = Auth::user()->team_id;

            //create new result
//            $result = new Result();
//            $result->user_id = Auth::id();
//            $result->kat_id = 5;
//            $result->save();

            // Check whether all the active members have finished tests?

            // Get Kultur im Team Single results of users belonging to the team of logged in user.
            $members = KulturimTeamSingle::where('team_id', $team_id)->get();
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

            return view('graphs.kulturimteam2_graph', compact('members', 'graphs', 'member_count'));
        }



        // 1. Business Logic for Kultur im Team multi and store values to Kultur im Team Multi table

        else
        // Abort Message!
            abort('403','Test bereits abgeschickt, bitte überprüfen Sie das Dashboard oder kontaktieren Sie den Admin.');

    }
}
