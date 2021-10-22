<?php

namespace App\Http\Controllers;

use App\IchImTeamBeruf;
use App\IchImTeamPrivat;
use App\Key;
use App\PotentialImTeam;
use App\Result;
use App\ResultAnswer;
use App\Team;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    public function category($id)
    {

        if ($id == '1') {
            $results = Result::with('user')->where('kat_id', 1)->orderByDesc('id')->paginate(10);

            return view('admin.results.category1', compact('results'));

        } elseif ($id == '2') {

            $results = Result::with('user')->where('kat_id', 2)->orderByDesc('id')->paginate(10);

            return view('admin.results.category2', compact('results'));
        } elseif ($id == '3') {
            $results = Result::with('user')->where('kat_id', 3)->orderByDesc('id')->paginate(10);

            return view('admin.results.category3', compact('results'));
        } elseif ($id == '4') {
            $results = Result::with('user')->where('kat_id', 4)->orderByDesc('id')->paginate(10);

            return view('admin.results.category4', compact('results'));
        } elseif ($id == '5') {
            $results = Result::with('user')->where('kat_id', 5)->orderByDesc('id')->paginate(10);

            return view('admin.results.category5', compact('results'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $results = DB::table('result_answers')->where('result_id', $id)->get();

        return view('admin.results.show', compact('results'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        Result::destroy($id);

        $request->session()->flash('success', 'Sie haben den Ergebnis gelöscht!');

        return redirect()->back();
    }

    /**
     * Generate graph for the result.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function generate_graph($id)
    {

        $kat_id = DB::table('results')->where('id', $id)->value('kat_id');

        if ($kat_id == 1) {
//            $privat = DB::table('ich_im_team_privats')->where('result_id', $id)->get(['privat_x1', 'privat_x2', 'privat_x3', 'privat_x4', 'privat_y1', 'privat_y2', 'privat_y3', 'privat_y4']);
//            $privat_x1 = $privat->pluck('privat_x1');
//            $privat_y1 = $privat->pluck('privat_y1');
//            $privat_x2 = $privat->pluck('privat_x2');
//            $privat_y2 = $privat->pluck('privat_y2');
//            $privat_x3 = $privat->pluck('privat_x3');
//            $privat_y3 = $privat->pluck('privat_y3');
//            $privat_x4 = $privat->pluck('privat_x4');
//            $privat_y4 = $privat->pluck('privat_y4');

            return redirect()->action([IchimTeamPrivatController::class, 'privat_result'], $id);
        } elseif ($kat_id == 2) {

            return redirect()->action([IchimTeamBerufController::class, 'beruf_result'], $id);
        } elseif ($kat_id == 3) {

            return redirect()->action([PotentialController::class, 'potential_result'], $id);
        } elseif ($kat_id == 4) {

            return redirect()->action([KulturimTeamSingleController::class, 'kultur_single_result'], $id);
        }

        else {
            echo 'Do Nothing!';
        }

//        switch ($kat_id) {
//            case 1:
//            {
//                $privat = DB::table('ich_im_team_privats')->where('result_id', '=', $this->$id)->get();
//                echo $privat;
//                break;
//            }
//            case 2:
//            {
//                echo 'Logic for 2';
//                break;
//            }
//            default:
//            {
//                echo 'Do Nothing!';
//            }
//        }


    }

}
