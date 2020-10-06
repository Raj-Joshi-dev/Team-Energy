<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\IchImTeamPrivat;
use App\IchImTeamBeruf;

class PotentialController extends Controller
{
    public function potential_graph()

    {   
        // user id.
        $id = Auth::id();

        // fetching data for calculation from respective tables.
        $privat_x1 = IchImTeamPrivat::where('user_id', $id)->value('privat_x1');
        $privat_y1 = IchImTeamPrivat::where('user_id', $id)->value('privat_y1');
        $privat_x2 = IchImTeamPrivat::where('user_id', $id)->value('privat_x2');
        $privat_y2 = IchImTeamPrivat::where('user_id', $id)->value('privat_y2');
        $privat_x3 = IchImTeamPrivat::where('user_id', $id)->value('privat_x3');
        $privat_y3 = IchImTeamPrivat::where('user_id', $id)->value('privat_y3');
        $privat_x4 = IchImTeamPrivat::where('user_id', $id)->value('privat_x4');
        $privat_y4 = IchImTeamPrivat::where('user_id', $id)->value('privat_y4');

        $beruf_x1 = IchImTeamBeruf::where('user_id', $id)->value('beruf_x1');
        $beruf_y1 = IchImTeamBeruf::where('user_id', $id)->value('beruf_y1');
        $beruf_x2 = IchImTeamBeruf::where('user_id', $id)->value('beruf_x2');
        $beruf_y2 = IchImTeamBeruf::where('user_id', $id)->value('beruf_y2');
        $beruf_x3 = IchImTeamBeruf::where('user_id', $id)->value('beruf_x3');
        $beruf_y3 = IchImTeamBeruf::where('user_id', $id)->value('beruf_y3');
        $beruf_x4 = IchImTeamBeruf::where('user_id', $id)->value('beruf_x4');
        $beruf_y4 = IchImTeamBeruf::where('user_id', $id)->value('beruf_y4');

        // Average of Privat (x,y) co-ordinates.
        $avg_privat_x = ($privat_x1 + $privat_x2 + $privat_x3 + $privat_x4) / 4;

        $avg_privat_y = ($privat_y1 + $privat_y2 + $privat_y3 + $privat_y4) / 4;

        
        // Average of Beruf (x,y) co-ordinates.
        $avg_beruf_x = ($beruf_x1 + $beruf_x2 + $beruf_x3 + $beruf_x4) / 4;

        $avg_beruf_y = ($beruf_y1 + $beruf_y2 + $beruf_y3 + $beruf_y4) / 4;


        // Middlepoint calculation for potential im team.
        $potential_point_x = ($avg_beruf_x + $avg_privat_x) / 2;

        $potential_point_y = ($avg_beruf_y + $avg_privat_y) / 2;


        



        // Passing middlepoint co-ordinates (x,y) values to frontend.
        return view('graphs.potentialimteam_graph', compact('potential_point_x','potential_point_y'));



    }
}
