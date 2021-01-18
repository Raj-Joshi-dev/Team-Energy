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
        <h1>Benutzer bearbeiten</h1>
        <div class="card">
            @include('partials.alerts')
            <form method="POST" action="{{ route('admin.users.update', $user->user_id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                           aria-describedby="name" value="{{ old('name') }} @isset($user) {{ $user->name }} @endisset">
                </div>
                <div class="form-group">
                    <label for="email">E-Mail-Addresse</label>
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           id="email"
                           aria-describedby="email"
                           value="{{ old('email') }} @isset($user) {{ $user->email }} @endisset">
                </div>

                @isset($create)
                    <div class="form-group">
                        <label for="password">Passwort</label>
                        <input name="password" type="password"
                               class="form-control @error('password') is-invalid @enderror"
                               id="password">
                    </div>
                @endisset

                <div class="form-group">
                    <label for="teams">Team</label>
                    <select name="team_id" class="form-control">
                        @foreach($teams as $team)
                            <option value=" {{ $team->id }}"
                                    @if ($team->id == $user->team_id) selected @endif>{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
