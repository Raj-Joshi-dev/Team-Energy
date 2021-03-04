<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Team;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        if (Gate::allows('is-admin')) {
//            $teams = Team::with('users')->get();
//            return view('admin.teams.index', ['teams' => Team::paginate(10)]);
//        }
//
//        return abort('403');

//        $counts = User::with('teams')->count();
//        $counts = Team::with('users')->count();

//        $teams = Team::with('users')->get();

//        foreach ($teams as $team){
//
//            foreach ($users as $user) {
//                $data = $user->team_id;
//                $test = $user->where('team_id', $data)->get();
//            }
//        }

//        foreach ($teams as $team){
//
//            $counts = User::where('team_id', $team->id)->count();
//
//        }


        return view('admin.teams.index', ['teams' => Team::orderByDesc('id')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user = User::all();

        return view('admin.teams.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Team::create([
            'name' => $request->name
        ]);

        $request->session()->flash('success', 'Sie haben einen neuen Team erstellt.');

        return redirect(route('admin.teams.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::with('users')->find($id);

        return view('admin.teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::with('users')->find($id);

        return view('admin.teams.edit', compact('team'));
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
        $team = Team::find($id);

        $team->update($request->except(['_token']));

        if (!$team) {
            $request->session()->flash('error', 'Sie haben den Team bearbeitet.');
        }

        $request->session()->flash('success', 'Sie haben den Team aktualisiert');

        return redirect(route('admin.teams.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {

        Team::destroy($id);

        $request->session()->flash('error', 'Sie haben den Team gelöscht!');

        return redirect(route('admin.teams.index'));
    }
}
