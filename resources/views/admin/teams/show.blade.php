@extends('admin.layouts.admin-app')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                </div>
            </div>
            <div class="fade-in">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="card">
                            <div class="card-header float-left"
                                 style="font-size: large; margin-bottom: 0; background-color: rgba(0,0,0,.03);">Team
                                Information
                                <a class="btn btn-light float-right ml-1"
                                   href="{{ route('admin.teams.index') }}"
                                   role="button"><i class="fa-solid fa-angles-left"></i>&nbsp;Zurück zur
                                    Teamliste</a>
                            </div>
                            <div class="card" style="margin-bottom: 0;">
                                <h4 class="text-muted text-center mb-3">{{ $team->name }}</h4>

                                <div class="row mb-4">
                                    <div
                                        class="col-3 offset-3 col-sm-4 offset-sm-2 col-md-4 offset-md-2 col-lg-3 offset-lg-3">
                                        <a href="{{ route('admin.teams.edit', $team->id) }}"
                                           class="btn btn-block btn-md btn-warning">
                                            <i class="fas fa-pencil-alt fa-fw" aria-hidden="true"></i> <span
                                                class="hidden-xs">Bearbeiten</span>
                                        </a>
                                    </div>
                                    <div class="col-3 col-sm-4 col-md-4 col-lg-3">
                                        <form method="POST" action="{{ route('admin.teams.destroy', $team->id) }}"
                                              accept-charset="UTF-8" class="form-inline">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger btn-md btn-block" type="button"
                                                    title="Löschen"
                                                    data-toggle="modal" data-target="#exampleModal_{{$team->id}}">
                                                <i class="far fa-trash-alt fa-fw" aria-hidden="true"></i>
                                                <span class="hidden-xs">Löschen</span>
                                            </button>
                                            <!-- Delete Modal -->
                                            <div class="modal fade" id="exampleModal_{{$team->id}}" tabindex="-1"
                                                 role="dialog"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{ route('admin.teams.destroy', $team->id) }}"
                                                          method="post"
                                                          style="display: inline">
                                                        @csrf
                                                        @method("DELETE")
                                                        <div class="modal-content">
                                                            <div class="modal-header alert alert-danger">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    <i class="fas fa-exclamation-triangle fa-fw"
                                                                       aria-hidden="true"></i>
                                                                    Benutzer Löschen
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="font-size: 15px">
                                                                Möchten Sie den Team - <b>{{$team->name}}</b> wirklich
                                                                löschen?
                                                                <br><br>
                                                                <p>
                                                                    <b>
                                                                        <strong style="color: red;">Vorsicht:</strong>
                                                                        Bei dieser Aktion werden alle Benutzer innerhalb
                                                                        des Teams
                                                                        gelöscht.
                                                                    </b>
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">
                                                                    <i class="fas fa-fw fa-times"
                                                                       aria-hidden="true"></i>
                                                                    Abbruch
                                                                </button>
                                                                <button type="submit" class="btn btn-danger">
                                                                    <i class="fas fa-fw fa-trash-alt"
                                                                       aria-hidden="true"></i>
                                                                    Diesen Team löschen
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- Delete Modal -->
                                        </form>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-4 col-sm-3">
                                                <strong>
                                                    Team ID
                                                </strong>
                                            </div>
                                            <div class="col-8 col-sm-9">
                                                {{ $team->id }}
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-4 col-sm-3">
                                                <strong>
                                                    Test-Typ
                                                </strong>
                                            </div>
                                            <div class="col-8 col-sm-9">
                                                @if($team->switch_id == 1)
                                                    Ich im Team - Privat, Beruf und Potential.
                                                @else
                                                    Ich im Team und Kultur im Team.
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-4 col-sm-3">
                                                <strong>
                                                    Aktiv auf maximal Mitglieder
                                                </strong>
                                            </div>
                                            <div class="col-8 col-sm-9">
                                                {{ $team->users->count() }}/{{ $team->max_members }}
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-4 col-sm-3">
                                                <strong>
                                                    Hergestellt in
                                                </strong>
                                            </div>
                                            <div class="col-8 col-sm-9">
                                                {{ $team->created_at }}
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-4 col-sm-3">
                                                <strong>
                                                    Aktualisiert am
                                                </strong>
                                            </div>
                                            <div class="col-8 col-sm-9">
                                                {{ $team->updated_at }}
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
