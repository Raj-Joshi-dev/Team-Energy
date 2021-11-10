<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();

        // Check for Ich im Team - Privat
        $privat = Result::where('user_id', $user_id)->where('kat_id', 1)->exists();
        $privat_result_id = DB::table('results')->where('user_id', $user_id)->where('kat_id', 1)->value('id');

        // Check for Ich im Team - Beruf
        $beruf = Result::where('user_id', $user_id)->where('kat_id', 2)->exists();
        $beruf_result_id = DB::table('results')->where('user_id', $user_id)->where('kat_id', 2)->value('id');

        // Check to enable or disable Potential im Team
        if ($privat && $beruf == true) {
            $enable_potential = true;
        } else
            $enable_potential = false;

        // Check for Potential im Team
        $potential_check = Result::where('user_id', $user_id)->where('kat_id', 3)->exists();
        $potential_result_id = DB::table('results')->where('user_id', $user_id)->where('kat_id', 3)->value('id');


        // SWITCH Logic
        $get_team_id = DB::table('users')->where('id', $user_id)->value('team_id');
        $get_switch_id = DB::table('teams')->where('id', $get_team_id)->value('switch_id');

        if ($get_switch_id != null and $get_switch_id == 1) {
            $enable_kultur = false;
        } elseif ($get_switch_id != null and $get_switch_id == 2) {
            $enable_kultur = true;
        } else
            $enable_kultur = false;

        // Check for Kultur im Team - Single
        $kultur1 = Result::where('user_id', $user_id)->where('kat_id', 4)->exists();
        $kultur_single_result_id = DB::table('results')->where('user_id', $user_id)->where('kat_id', 4)->value('id');

        // Check for Kultur im Team - Multi
        $kultur2 = Result::where('user_id', $user_id)->where('kat_id', 5)->exists();
        $kultur_multi_result_id = DB::table('results')->where('user_id', $user_id)->where('kat_id', 5)->value('id');


        return view('test.dashboard', compact('privat', 'beruf', 'enable_potential',
            'enable_kultur', 'privat_result_id', 'beruf_result_id', 'potential_check', 'kultur1',
            'potential_result_id', 'kultur_single_result_id', 'kultur2', 'kultur_multi_result_id'));

    }
}
