<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Team;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use phpDocumentor\Reflection\Types\Null_;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        if (Gate::allows('is-admin')) {
//            return view('admin.users.index', ['users' => User::paginate(10)]);
//        }
//
//        return abort('403');

        $users = User::where([
        ['name', '!=', Null],
            [function ($query) use ($request) {
            if (($term = $request->term)) {
                $query->orWhere('name', 'LIKE', '%' . $term . '%')->get();
            }
            }]
        ])
            ->orderBy("id", "desc")
            ->paginate(10);

        return view('admin.users.index', compact('users'))
            ->with('i', (request()->input('page',1) - 1) * 5);


//        return view('admin.users.index', ['users' => User::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();

        return view('admin.users.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $input = $request->all();
//        $user = User::create([
//            'name' => $request->name,
//            'email' => $request->email,
//            'password' => $request->password,
//            'team_id' => $request->team_id,
//        ]);

        $user = User::create($input);

        //$user = User::create($request->except('_token'));

        $request->session()->flash('success', 'Benutzer erfolgreich angelegt!.');

        return redirect(route('admin.users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $user = User::find($id);
      $teams = Team::all();

      return view('admin.users.show', compact('user','teams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $teams = Team::all();
        $user = User::find($id);


        return view('admin.users.edit', compact('teams', 'user'));
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
        $user = User::find($id);

        $user->update($request->except(['_token', 'teams']));

        if (!$user) {
            $request->session()->flash('error', 'Sie haben den Benutzer bearbeitet.');
        }

        $request->session()->flash('success', 'Sie haben den Benutzer aktualisiert');

        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        User::destroy($id);

        $request->session()->flash('error', 'Sie haben den Benutzer gelöscht!');

        return redirect(route('admin.users.index'));
    }

    public function admin()
    {
        return view('admin.layouts.admin-app');
    }
}
