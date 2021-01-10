@extends('layouts.app')

<style>
    h1 {
        margin-bottom: 30px;
    }

    .card {
        box-shadow: 0 2px 4px rgba(204, 204, 204, 0.8);
        padding: 20px 40px;
    }
</style>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="float-left">Teams</h1>
                <a class="btn btn-sm btn-success float-right" href="{{ route('admin.teams.create') }}" role="button">Erstellen</a>
            </div>
        </div>
        <div class="card">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Members</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($teams as $team)
                    <tr>
                        <th scope="row">{{ $team->team_id }}</th>
                        <td>{{ $team->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
