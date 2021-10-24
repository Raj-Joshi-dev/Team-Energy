<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KulturimTeamMultiController extends Controller
{
    public function multi_kultur_store()
    {
        //Check if the results already exists for the user belonging to his team.
        $multi_kultur_check = Result::with('users')->where('user_id', Auth::id())->where('kat_id', 5)->exists();

        // If not

        // 1. Business Logic for Kultur im Team multi and store values to Kultur im Team Multi table

        // else
        // Abort Message!

    }

    public function multi_kultur_result()
    {
        //Retrieving Data to the view
    }
}
