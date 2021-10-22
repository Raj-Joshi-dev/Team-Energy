@extends('admin.layouts.admin-app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            @include('partials.alerts')
            <div class="card">
                <div class="card-header float-left" style="font-size: large">Erstellen Sie einen neuen Benutzer
                        <a class="btn btn-warning float-right" href="{{ route('admin.users.index') }}" role="button"><i
                                class="fas fa-arrow-circle-left"></i>&nbsp;Zurück zur Benutzerverwaltung</a>
                </div>
                <br>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.users.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>&nbsp;<span style="color:#ff0000">*</span>
                            <input name="name" type="text"
                                   class="form-control required @error('name') is-invalid @enderror"
                                   id="name"
                                   aria-describedby="name"
                                   value="{{ old('name') }} @isset($user) {{ $team->name }} @endisset">
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
                            <input name="checkbox" type="checkbox" onclick="myFunction()"> Kennwort anzeigen
                            @error('password')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="teams">Team</label>&nbsp;
                            <select name="team_id" class="form-control">
                                <option selected value> -- Kein Team --</option>
                                @foreach($teams as $team)
                                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                                @endforeach
                            </select>
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label for="teams">Role</label>&nbsp;<span style="color:#ff0000">*</span>--}}
{{--                            @foreach($roles as $role)--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" name="roles" type="radio" value="{{ $role->id }}"--}}
{{--                                           id="{{ $role->name }}"--}}
{{--                                           @isset($user) @if(in_array($role->id, $user->roles->pluck('id')->toArray()))  @endif @endisset checked>--}}
{{--                                    <label for="{{ $role->name }}" class="form-check-label">{{ $role->name }}</label>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
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
    <script>
        function myFunction() {
            let x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
@endsection
