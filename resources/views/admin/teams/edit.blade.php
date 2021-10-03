@extends('admin.layouts.admin-app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            @include('partials.alerts')
            <div class="card">
                <div class="card-header float-left" style="font-size: large">Team Bearbeiten
                    <a class="btn btn-warning float-right" href="{{ route('admin.teams.index') }}" role="button"><i
                            class="fas fa-arrow-circle-left"></i>&nbsp;Zurück zur alle Teams</a>
                </div>
                <div class="card-body">
                    <form id="edit-team" method="POST" action="{{ route('admin.teams.update', $team->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   id="name"
                                   aria-describedby="name"
                                   value="{{ old('name') }} @isset($team) {{ $team->name }} @endisset"> <br>
                            <label for="members">Mitglieder in diesem Team</label>
                            <div class="list-group">
                                @foreach($team->users as $user)
                                    <a href="{{ route('admin.users.edit' , $user->id) }}"
                                       class="list-group-item list-group-item-action"
                                       aria-current="true">{{ $user->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </form>

                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-success"><i
                            class="fas fa-check"></i>&nbsp;Bestätigen
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Speichern bestätigen</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Bitte bestätigen Sie die Änderungen.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Abbruch
                                    </button>
                                    <button type="submit" form="edit-team" class="btn btn-success">Änderungen
                                        speichern
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="btn btn-secondary" href="{{ url()->previous() }}" role="button"><i
                            class="fas fa-times"></i>&nbsp;Absagen</a>
                </div>
            </div>
        </div>
    </div>
@endsection
