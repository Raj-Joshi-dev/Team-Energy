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
                                <button class="btn btn-danger" type="button" onClick="window.location.reload();"
                                        title="Refresh">
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

                                <form id="delete-team" action="{{ route('admin.teams.destroy', $team->id) }}"
                                      method="POST"
                                      style="display: inline">
                                    @csrf
                                    @method("DELETE")
                                    {{--                                    <button type="submit" class="btn btn-sm btn-danger" title="Löschen"--}}
                                    {{--                                            onclick="return confirm('Bist du sicher?')" role="button"><i--}}
                                    {{--                                            class="fas fa-trash-alt"></i>--}}
                                    {{--                                    </button>--}}
                                </form>
                                <button data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-danger"
                                        title="Löschen"
                                        role="button"><i
                                        class="fas fa-trash-alt"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Team löschen</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Möchten Sie den Team wirklich löschen?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    <i class="fas fa-fw fa-times" aria-hidden="true"></i>
                                                    Abbruch
                                                </button>
                                                <button type="submit" form="delete-team" class="btn btn-danger">
                                                    <i class="fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                                                    Diesen
                                                    Team löschen
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
