<?php

namespace App\Http\Controllers;

use App\Result;
use App\Team;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;


class DashboardController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $privat = Result::where('user_id', $user_id)->where('kat_id', 1)->get();

        $beruf = Result::where('user_id', $user_id)->where('kat_id', 2)->get();


        $disable_privat = count($privat) > 0;

        $disable_beruf = count($beruf) > 0;


        if ($disable_privat && $disable_beruf == true) {
            $enable_potential = true;
        } else
            $enable_potential = false;

//        if ($disable_kultur == true){
//            $enable_kultur = true;
//        }
//        else
//            $enable_kultur = false;



        // SWITCH Logic
        $get_team_id = DB::table('users')->where('id', $user_id)->value('team_id');
        $get_switch_id = DB::table('teams')->where('id', $get_team_id)->value('switch_id');

        if ($get_switch_id != null and $get_switch_id == 1) {
            $enable_kultur = false;
        } elseif ($get_switch_id != null and $get_switch_id == 2) {
            $enable_kultur = true;
        } else
            $enable_kultur = false;


        $kultur = Result::where('user_id', $user_id)->where('kat_id', 4)->get();
        $disable_kultur = count($kultur) > 0;

        if ($disable_kultur == true) {
            $disable_kultur = true;
        }
        else
            $disable_kultur = false;

        $kultur2 = Result::where('user_id', $user_id)->where('kat_id', 5)->get();
        $disable_kultur2 = count($kultur2) > 0;

        if ($disable_kultur2 == true) {
            $disable_kultur2 = true;
        } else
            $disable_kultur2 = false;


        return view('test.dashboard', compact('disable_privat', 'disable_beruf', 'enable_potential',
            'enable_kultur', 'disable_kultur', 'disable_kultur2'));

    }
}
