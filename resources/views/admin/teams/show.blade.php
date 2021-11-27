@extends('admin.layouts.admin-app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="card">
                <div class="card-header float-left" style="font-size: large">{{ $team->name }}'s Information
                    <a class="btn btn-warning float-right"
                       href="{{ route('admin.teams.index') }}"
                       role="button"><i class="fas fa-arrow-circle-left"></i>&nbsp;Zurück zur Teamsliste</a>
                </div>
                <div class="card-body">
                    <div class="table">
                        <tr>
                            <td>ID: {{ $team->id }}</td>
                            <br>
                            <td>Name: {{ $team->name }}</td>
                            <br>
                            <td>Anzahl der Mitglieder: {{ $team->members }}</td>
                            <br>
                            @if($team->users->count() != 0)
                                <td>Team-Mitglieder:
                                @foreach($team->users as $user)
                                    <td>{{ $user->name }},</td>
                                @endforeach
                            @else

                            @endif
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
        </div>
    </div>

@endsection
