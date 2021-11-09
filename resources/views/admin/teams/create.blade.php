@extends('admin.layouts.admin-app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            @include('partials.alerts')
            <div class="card">
                <div class="card-header float-left" style="font-size: large">Erstellen Sie einen neu Team
                    <a class="btn btn-warning float-right" href="{{ route('admin.teams.index') }}" role="button"><i
                            class="fas fa-arrow-circle-left"></i>&nbsp;Zurück zur alle Teams</a>
                </div>
                <br>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.teams.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Team Name</label>&nbsp;<span style="color:#ff0000">*</span>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   id="name"
                                   aria-describedby="name"
                                   value="{{ old('name') }} @isset($team) {{ $team->name }} @endisset">
                            @error('name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <br>
{{--                            <label for="members">Mitglieder</label>&nbsp;<span style="color:#ff0000">*</span>--}}
{{--                            <br>--}}
{{--                            <input type="number" id="members" name="members" class="form-group" min="2" max="10"--}}
{{--                                   value="5"--}}
{{--                                   oninvalid="this.setCustomValidity('Mitglieder muss zwischen 2 und 10 Stellen haben.')"--}}
{{--                                   required>--}}
{{--                            <label for="Mitglieder">(Min 2 - Max 10)</label>--}}
{{--                            @error('members')--}}
{{--                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>--}}
{{--                            @enderror--}}
                        </div>

                        <div class="form-group">
                            <label for="switch_id">Aktiv-Test</label>&nbsp;<span style="color:#ff0000">*</span>
                            <div class="form-check">
                                <input class="form-check-input" name="switch_id" type="radio" id="switch_id"
                                       value="1" checked>
                                <label for="category"
                                       class="form-check-label">Ich im Team</label>
                                <br>
                                <input class="form-check-input" name="switch_id" type="radio" id="switch_id"
                                       value="2">
                                <label for="category"
                                       class="form-check-label">Ich im Team und Kultur im Team</label>
                            </div>
                        </div>

                        <div>
                            <strong style="color: red">Hinweis: Es können maximal 10 Benutzer pro Team teilnehmen.</strong>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>&nbsp;Bestätigen
                        </button>
                        <a class="btn btn-secondary" href="{{ url()->previous() }}" role="button"><i
                                class="fas fa-window-close"></i>&nbsp;Absagen</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
