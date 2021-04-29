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
        <a class="btn btn-warning float-right" href="{{ route('admin.users.index') }}" role="button"><i
                class="fas fa-arrow-circle-left"></i>&nbsp;Zurück zur Benutzerverwaltung</a>
        <h1>Erstellen Sie einen neuen Benutzer</h1>
        <div class="card">
            {{--            @if ($errors->any())--}}
            {{--                <div class="alert alert-danger">--}}
            {{--                    <ul>--}}
            {{--                        @foreach ($errors->all() as $error)--}}
            {{--                            <li>{{ $error }}</li>--}}
            {{--                        @endforeach--}}
            {{--                    </ul>--}}
            {{--                </div>--}}
            {{--            @endif--}}
            @include('partials.alerts')
            <form method="POST" action="{{ route('admin.users.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>&nbsp;<span style="color:#ff0000">*</span>
                    <input name="name" type="text" class="form-control required @error('name') is-invalid @enderror"
                           id="name"
                           aria-describedby="name" value="{{ old('name') }} @isset($user) {{ $team->name }} @endisset">
                    @error('name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>&nbsp;<span style="color:#ff0000">*</span>
                    <input name="email" class="form-control @error('email') is-invalid @enderror"
                           id="email"
                           aria-describedby="email"
                           value="{{ old('email') }} @isset($user) {{ $user->email }} @endisset">
                    @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Passwort</label>&nbsp;<span style="color:#ff0000">*</span>
                    <input name="password" type="password"
                           class="form-control @error('password') is-invalid @enderror"
                           id="password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="teams">Team</label>&nbsp;
                    <select name="team_id" class="form-control">
                        <option selected value> -- Wähle ein Team aus -- </option>
                        @foreach($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="teams">Role</label>&nbsp;<span style="color:#ff0000">*</span>
                    @foreach($roles as $role)
                        <div class="form-check">
                            <input class="form-check-input" name="roles" type="radio" value="{{ $role->id }}" id="{{ $role->name }}"
                                   @isset($user) @if(in_array($role->id, $user->roles->pluck('id')->toArray()))  @endif @endisset checked>
                            <label for="{{ $role->name }}" class="form-check-label">{{ $role->name }}</label>
                        </div>
                    @endforeach
                </div>
                <br>


                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>&nbsp;Bestätigen</button>
                <a class="btn btn-secondary" href="{{ url()->previous() }}" role="button"><i
                        class="fas fa-window-close"></i>&nbsp;Absagen</a>

            </form>
        </div>

    </div>
@endsection
