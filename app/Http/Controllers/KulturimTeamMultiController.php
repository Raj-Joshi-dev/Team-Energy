<?php

namespace App\Http\Controllers;

use App\KulturimTeamMulti;
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
            $result = new Result();
            $result->user_id = Auth::id();
            $result->kat_id = 5;
            $result->save();

            // Check whether all the active members have finished tests?
            $member_count = User::with('team')->where('team_id', $team_id)->count();




        }

        // 1. Business Logic for Kultur im Team multi and store values to Kultur im Team Multi table

        // else
        // Abort Message!

    }

    public function multi_kultur_result()
    {
        //Retrieving Data to the view
    }
}
