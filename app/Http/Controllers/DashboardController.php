<?php

namespace App\Http\Controllers;

use App\IchImTeamBeruf;
use App\IchImTeamPrivat;
use App\KulturimTeamMulti;
use App\KulturimTeamSingle;
use App\PotentialImTeam;
use App\Result;
use App\Team;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $loggedIN_user_team_id = Auth::user()->team_id;

        // Check for Ich im Team - Privat
        $privat = Result::where('user_id', Auth::id())->where('kat_id', 1)->exists();
        $privat_result_id = DB::table('results')->where('user_id', Auth::id())->where('kat_id', 1)->value('id');

        // Check for Ich im Team - Beruf
        $beruf = Result::where('user_id', Auth::id())->where('kat_id', 2)->exists();
        $beruf_result_id = DB::table('results')->where('user_id', Auth::id())->where('kat_id', 2)->value('id');

        // Check to enable or disable Potential im Team
        if ($loggedIN_user_team_id == null) {
            $enable_potential = false;
        } else
            $enable_potential = true;

        // Now check if all the users belonging to the team of logged in user have completed Privat and Beruf
        $same_team_users = User::with('team')->where('team_id', Auth::user()->team_id)->count();
        $privat_count = IchImTeamPrivat::where('team_id', $loggedIN_user_team_id)->count();
        $beruf_count = IchImTeamBeruf::where('team_id', $loggedIN_user_team_id)->count();

        if ($same_team_users == $privat_count and $same_team_users == $beruf_count) {
            $enable_potential_result = true;
        } else
            $enable_potential_result = false;

        $potential_result_check = PotentialImTeam::where('team_id', $loggedIN_user_team_id)->exists();
        $potential_result_id = DB::table('results')->where('potential_team', 1)->value('id');


        // Check for Potential im Team
//        $potential_check = Result::where('user_id', Auth::id())->where('kat_id', 3)->exists();
//        $potential_result_id = DB::table('results')->where('user_id', Auth::id())->where('kat_id', 3)->value('id');


        // SWITCH Logic
        $get_team_id = DB::table('users')->where('id', Auth::id())->value('team_id');
        $get_switch_id = DB::table('teams')->where('id', $get_team_id)->value('switch_id');

        if ($get_switch_id != null and $get_switch_id == 1) {
            $enable_kultur = false;
        } elseif ($get_switch_id != null and $get_switch_id == 2) {
            $enable_kultur = true;
        } else
            $enable_kultur = false;

        // Check for Kultur im Team - Single
        $kultur1 = Result::where('user_id', Auth::id())->where('kat_id', 4)->exists();
        $kultur_single_result_id = DB::table('results')->where('user_id', Auth::id())->where('kat_id', 4)->value('id');

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

        // Check for Kultur im Team - Multi

        // Check whether all the active members have finished tests?

        // 1. Get count of users in the same team.
        $same_team_users = User::with('team')->where('team_id', Auth::user()->team_id)->count();

        //  2. Check if they have completed Kultur im Team - single test & their result exists.

        // Result Count of completed Ich im Team tests.
        $member_count = KulturimTeamSingle::where('team_id', Auth::user()->team_id)->count();

        // Check condition
        if ($same_team_users == $member_count) {
            $enable_kultur2_result = true;
        } else
            $enable_kultur2_result = false;


        $kultur2_check = KulturimTeamMulti::where('team_id', Auth::user()->team_id)->exists();
        $kultur_multi_result_id = DB::table('results')->where('kultur_multi', 1)->value('id');


        return view('test.dashboard', compact('privat', 'beruf', 'enable_potential', 'potential_result_id',
            'enable_kultur', 'privat_result_id', 'beruf_result_id', 'enable_potential_result', 'kultur1',
            'potential_result_check', 'kultur_single_result_id', 'kultur2_check', 'kultur_multi_result_id', 'enable_kultur2_result'));

    }
}
