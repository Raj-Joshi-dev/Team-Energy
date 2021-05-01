@extends('admin.layouts.admin-app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="card">
                <div class="card-header float-left" style="font-size: large">{{ $user->name }}'s Information
                    <a class="btn btn-warning float-right"
                       href="{{ route('admin.users.index') }}"
                       role="button"><i class="fas fa-arrow-circle-left"></i>&nbsp;Zurück zur alle Benutzer</a>
                </div>
                <div class="card-body">
                    <div class="table">
                        <tr>
                            <td>ID: {{ $user->id }}</td>
                            <br>
                            <td>Name: {{ $user->name }}</td>
                            <br>
                            @foreach($teams as $team)
                                @if ($team->id == $user->team_id)
                                    <td>Team: {{ $team->name }}</td>
                                @endif
                            @endforeach
                            <br>
                            <td>Hergestellt in: {{ $user->created_at }}</td>
                            <br>
                            <td>Aktualisiert am: {{ $user->updated_at }}</td>
                        </tr>
                    </div>
                    <div>
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.users.edit', $user->id) }}"
                           role="button"><i class="fas fa-user-edit"></i>&nbsp;Bearbeiten</a>
                        <a class="btn btn-sm btn-secondary" href="{{ url()->previous() }}" role="button"><i
                                class="fas fa-times"></i></i>&nbsp;Absagen</a>
                    </div>
                </div>
            </div>
        </div>

@endsection
