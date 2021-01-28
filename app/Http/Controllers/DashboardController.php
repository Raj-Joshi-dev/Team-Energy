<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $privat = Result::where('user_id', $user_id)->where('kat_id', 1)->get();

        $beruf = Result::where('user_id', $user_id)->where('kat_id', 2)->get();

        $disable_privat = count($privat) > 0;

        $disable_beruf = count($beruf) > 0;

        return view('test.dashboard', compact('disable_privat','disable_beruf'));

    }
}
