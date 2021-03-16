@extends('admin.layouts.admin-app')
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
        <div class="card">
            <h2>{{ $team->name }}'s Information</h2><a class="btn btn-warning float-right"
                                                       href="{{ route('admin.teams.index') }}" role="button"><i
                    class="fas fa-arrow-circle-left"></i>&nbsp;Zurück zur Teammanagement</a>
            <div class="table">
                <tr>
                    <td>ID: {{ $team->id }}</td>
                    <br>
                    <td>Name: {{ $team->name }}</td>
                    <br>
                    <td>Mitglieder in diesem Team:
                    @foreach($team->users as $user)
                        <td>{{ $user->name }},</td>
                    @endforeach

                </tr>
            </div>
            <div>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.teams.edit', $team->id) }}"
                   role="button"><i class="fas fa-user-edit"></i>&nbsp;Bearbeiten</a>
                <a class="btn btn-sm btn-secondary" href="{{ url()->previous() }}" role="button"><i
                        class="fas fa-times"></i></i>&nbsp;Absagen</a>
            </div>
        </div>
    </div>

@endsection
