@extends('admin.layouts.admin-app')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="fade-in">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        @include('partials.alerts')
                        <div class="card">
                            <div class="card-header float-left"
                                 style="font-size: large; margin-bottom: 0; background-color: rgba(0,0,0,.03);">
                                Erstellen Sie ein neues Team
                                <a class="btn btn-light float-right" href="{{ route('admin.teams.index') }}"
                                   role="button"><i
                                        class="fa-solid fa-angles-left"></i>&nbsp; Zurück zum Teamliste</a>
                            </div>
                            <br>
                            <div class="card-body">
                                <form method
                                      ="POST" action="{{ route('admin.teams.store') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" style="font-size: medium" class="col-md-3 col-form-label">Team
                                            Name <span style="color:#ff0000">*</span>
                                        </label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input name="name" type="text"
                                                       class="form-control @error('name') is-invalid @enderror"
                                                       id="name"
                                                       aria-describedby="name"
                                                       value="{{ old('name') }} @isset($team) {{ $team->name }} @endisset">
                                                <div class="input-group-append">
                                                    <label for="email" class="input-group-text">
                                                        <i class="fa fa-fw fa-users" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('name')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label for="max_members" style="font-size: medium" class="col-md-3">Mitglieder
                                            <span
                                                style="color:#ff0000">*</span>
                                        </label>
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <input type="number" id="max_members" name="max_members"
                                                       class="form-control"
                                                       min="2"
                                                       max="30"
                                                       value="5" pattern=".{2,30}" style="width: 5em; height: 2em"
                                                       oninvalid="setCustomValidity('Mitglieder muss zwischen 2 und 30 Stellen haben.')"
                                                       oninput="setCustomValidity('')"
                                                       required>
                                                <label for="Mitglieder">(Min 2 - Max 30)</label>
                                                @error('max_members')
                                                <span class="invalid-feedback"
                                                      role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="switch_id" style="font-size: medium"
                                               class="col-md-3">Aktiv-Test <span
                                                style="color:#ff0000">*</span>
                                        </label>

                                        <div class="col-md-8">
                                            <div class="form-check">
                                                <input class="form-check-input" name="switch_id" type="radio"
                                                       id="switch_id_1"
                                                       value="1" checked>
                                                <label for="switch_id_1"
                                                       class="form-check-label">Ich im Team</label>
                                                <br>
                                                <input class="form-check-input" name="switch_id" type="radio"
                                                       id="switch_id_2"
                                                       value="2">
                                                <label for="switch_id_2"
                                                       class="form-check-label">Ich im Team und Kultur im Team</label>
                                            </div>
                                        </div>

                                    </div>

                                    <div>
                                        <strong style="color: red">Hinweis: Es können maximal 30 Benutzer pro Team
                                            teilnehmen.</strong>
                                    </div>
                                    <br>

                                    <div class="justify-content-center row">
                                        <button type="submit" class="btn btn-success mr-1 col-5"><i
                                                class="fas fa-check"></i>&nbsp;Bestätigen
                                        </button>
                                        <a class="btn btn-secondary col-5" href="{{ url()->previous() }}"
                                           role="button"><i
                                                class="fas fa-window-close"></i>&nbsp;Absagen</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
