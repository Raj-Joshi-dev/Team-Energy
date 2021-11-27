@extends('admin.layouts.admin-app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            @include('partials.alerts')
            <div class="card">
                <div class="card-header" style="font-size: large">Alle Teams</div>
                <div class="card-body">
                    <a class="btn btn-light float-right" href="{{ route('admin.teams.create') }}" role="button"><i
                            class="fas fa-plus-square"></i>&nbsp;Neuer Team</a>
                    <div class="mx-auto float-left">
                        <form action="{{ route('admin.teams.index') }}" method="GET" role="search">
                            <div class="input-group">

                                <label for="term"></label><input type="text" class="form-control mr-2 mt-1" name="term"
                                                                 placeholder="Team suchen"
                                                                 id="term">
                                <a href="{{ route('admin.teams.index') }}" class=" mt-1"> </a>
                                <span class="input-group-btn mr-2 mt-1">
                            <button class="btn btn-info" type="submit" title="Suche">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                                <span class="input-group-btn mr-2 mt-1">
                                <a class="btn btn-danger" role="button" href="{{ route('admin.teams.index') }}"
                                   title="Refresh">
                                    <span class="fas fa-sync-alt"></span>
                                </a>
                            </span>

                            </div>
                        </form>
                    </div>
                </div>


                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th rowspan="2">ID</th>
                        <th scope="col" rowspan="2">Name</th>
                        <th scope="col" colspan="2" style="text-align: center">Mitglieder</th>
                        {{--                        <th scope="col">Max. Mitglieder</th>--}}
                        <th scope="col" rowspan="2">Hergestellt in</th>
                        <th scope="col" rowspan="2">Aktualisiert am</th>
                        <th scope="col" rowspan="2">Aktionen</th>
                    </tr>
                    <tr>
                        <!-- skip 1st column because it merges vertically -->
                        <th>Aktiv</th>
                        <th>Max</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teams as $team)
                        <tr>
                            <th scope="row">{{ $team->id }}</th>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->users->count() }}</td>
                            <td>{{ $team->max_members }}</td>
                            <td>{{ $team->created_at }}</td>
                            <td>{{ $team->updated_at }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" title="Bearbeiten"
                                   href="{{ route('admin.teams.edit', $team->id) }}"
                                   role="button"><i class="fas fa-edit"></i></a>

                                <a class="btn btn-sm btn-success" title="Anzeigen"
                                   href="{{ route('admin.teams.show', $team->id) }}"
                                   role="button"><i class="fas fa-eye"></i></a>


                                <button class="btn btn-sm btn-danger" title="Löschen" data-toggle="modal"
                                        data-target="#exampleModal_{{$team->id}}"
                                        role="button"><i class="fas fa-trash-alt"></i></button>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="exampleModal_{{$team->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{ route('admin.teams.destroy', $team->id) }}" method="post"
                                              style="display: inline">
                                            @csrf
                                            @method("DELETE")
                                            <div class="modal-content">
                                                <div class="modal-header alert alert-danger">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        <i class="fas fa-exclamation-triangle fa-fw"
                                                           aria-hidden="true"></i>
                                                        Team Löschen
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="font-size: 15px">
                                                    Möchten Sie den Team - <b>{{$team->name}}</b> wirklich löschen?
                                                    <br><br>
                                                    <p>
                                                        <b>
                                                            <strong style="color: red;">Vorsicht:</strong>
                                                            Bei dieser Aktion werden alle Benutzer innerhalb des Teams
                                                            gelöscht.
                                                        </b>
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">
                                                        <i class="fas fa-fw fa-times" aria-hidden="true"></i>
                                                        Abbruch
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                                                        Diesen Team löschen
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Delete Modal -->

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
