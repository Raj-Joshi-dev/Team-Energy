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
        <a class="btn btn-warning float-right" href="{{ route('admin.teams.index') }}" role="button"><i
                class="fas fa-arrow-circle-left"></i>&nbsp;Zurück zur Teammanagement</a>
        @include('partials.alerts')
        <h1>Erstelle ein neues Team</h1>
        <div class="card">

            <form method="POST" action="{{ route('admin.teams.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Teamname</label>&nbsp;<span style="color:#ff0000">*</span>
                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                           aria-describedby="name" value="{{ old('name') }} @isset($team) {{ $team->name }} @endisset">
                    @error('name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>&nbsp;Bestätigen</button>
                <a class="btn btn-secondary" href="{{ url()->previous() }}" role="button"><i
                        class="fas fa-window-close"></i>&nbsp;Absagen</a>
            </form>
        </div>
    </div>
@endsection
