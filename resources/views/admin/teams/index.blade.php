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
        @include('partials.alerts')
        <div class="row">
            <div class="col-12">
                <h1 class="float-left">Teams</h1>
                <a class="btn btn-light float-right" href="{{ route('admin.teams.create') }}" role="button"><i
                        class="fas fa-plus-square"></i>&nbsp;Erstelle ein neues Team</a>
            </div>
        </div>
        <div class="card">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mitglieder</th>
                    <th scope="col">Hergestellt in</th>
                    <th scope="col">Aktualisiert am</th>
                    <th scope="col">Aktionen</th>
                </tr>
                </thead>
                <tbody>
                @foreach($teams as $team)
                    <tr>
                        <th scope="row">{{ $team->id }}</th>
                        <td>{{ $team->name }}</td>

                        <td>{{ $team->users->count() }}</td>

                        <td>{{ $team->created_at }}</td>
                        <td>{{ $team->updated_at }}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.teams.edit', $team->id) }}"
                               role="button"><i class="fas fa-edit"></i>&nbsp;Bearbeiten</a>

                            <a class="btn btn-sm btn-success" href="{{ route('admin.teams.show', $team->id) }}"
                               role="button"><i class="fas fa-eye"></i>&nbsp;Anzeigen</a>

                            <button type="button" class="btn btn-sm btn-danger"
                                    onclick="event.preventDefault();
                                        document.getElementById('delete-user-form-{{ $team->id }}').submit()"><i
                                    class="fas fa-trash-alt"></i>&nbsp;Löschen
                            </button>
                            <form id="delete-user-form-{{ $team->id }}"
                                  action="{{ route('admin.teams.destroy', $team->id) }}" method="POST"
                                  style="display: none">
                                @csrf
                                @method("DELETE")
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $teams->links() }}
        </div>
    </div>
@endsection
