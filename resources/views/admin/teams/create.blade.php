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
                        </div>

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
