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
            <h2>{{ $user->name }}'s Information</h2><a class="btn btn-warning float-right" href="{{ route('admin.users.index') }}" role="button"><i
                    class="fas fa-arrow-circle-left"></i>&nbsp;Zurück zur Benutzerverwaltung</a>
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

@endsection
