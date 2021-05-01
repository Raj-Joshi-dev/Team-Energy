@extends('admin.layouts.admin-app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            @include('partials.alerts')
            <div class="card">
                <div class="card-header" style="font-size: large">Alle Teams</div>
                <div class="card-body">
                    <a class="btn btn-light float-right" href="{{ route('admin.teams.create') }}" role="button"><i
                            class="fas fa-plus-square"></i>&nbsp;Neuen Team Erstellen</a>
                    <div class="mx-auto float-left">
                        <form action="{{ route('admin.teams.index') }}" method="GET" role="search">
                            <div class="input-group">
                        <span class="input-group-btn mr-2 mt-1">
                            <button class="btn btn-info" type="submit" title="Suche">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                                <label for="term"></label><input type="text" class="form-control mr-2 mt-1" name="term"
                                                                 placeholder="Team suchen"
                                                                 id="term">
                                <a href="{{ route('admin.teams.index') }}" class=" mt-1"> </a>
                                <span class="input-group-btn mr-2 mt-1">
                                <button class="btn btn-danger" type="button" title="Refresh">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                            </div>
                        </form>
                    </div>
                </div>


                <table class="table table-bordered">
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
                                <a class="btn btn-sm btn-primary" title="Bearbeiten"
                                   href="{{ route('admin.teams.edit', $team->id) }}"
                                   role="button"><i class="fas fa-edit"></i></a>

                                <a class="btn btn-sm btn-success" title="Anzeigen"
                                   href="{{ route('admin.teams.show', $team->id) }}"
                                   role="button"><i class="fas fa-eye"></i></a>

                                <form action="{{ route('admin.teams.destroy', $team->id) }}" method="POST"
                                      style="display: inline">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-sm btn-danger" title="Löschen"
                                            onclick="return confirm('Bist du sicher?')" role="button"><i
                                            class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $teams->onEachSide(5)->links() }}
            </div>
        </div>
    </div>
@endsection
