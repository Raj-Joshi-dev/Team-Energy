<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index() {
        $user_id = Auth::user()->user_id;
        $entries = Result::where('user_id', $user_id)->where('kat_id', 1)->get();

        $disable_button = count($entries)>0;

        return view('test.dashboard', compact('disable_button'));

}
}
