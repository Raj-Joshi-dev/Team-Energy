@extends('admin.layouts.admin-app')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="fade-in">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        @include('partials.alerts')
                        <div class="card">
                            <div style="margin-bottom: 0; background-color: rgba(0,0,0,.03);" class="card-header">
                                <div
                                    style="font-size: large; display: flex; justify-content: space-between;align-items: center;">
                                    Erstellen Sie einen neuen
                                    Benutzer
                                    <a class="btn btn-light float-right"
                                       href="{{ route('admin.users.index') }}"
                                       role="button"><i class="fa-solid fa-angles-left"></i>&nbsp;Zurück zur Benutzerliste</a>
                                </div>
                            </div>
                            <br>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.users.store') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" style="font-size: medium" class="col-md-3 col-form-label">Name
                                            <span
                                                style="color:#ff0000">*</span></label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input name="name" type="text"
                                                       style="font-size: medium"
                                                       class="form-control required @error('name') is-invalid @enderror"
                                                       id="name"
                                                       aria-describedby="name"
                                                       value="{{ old('name') }} @isset($user) {{ $team->name }} @endisset">
                                                <div class="input-group-append">
                                                    <label for="email" class="input-group-text">
                                                        <i class="fa fa-fw fa-user" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                                @error('name')
                                                <span class="invalid-feedback"
                                                      role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" style="font-size: medium" class="col-md-3">Email address
                                            <span style="color:#ff0000">*</span>
                                        </label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input name="email"
                                                       style="font-size: medium"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       id="email" placeholder="&#xf002 Search"
                                                       aria-describedby="email"
                                                       value="{{ old('email') }} @isset($user) {{ $user->email }} @endisset">
                                                <div class="input-group-append">
                                                    <label for="email" class="input-group-text">
                                                        <i class="fa fa-fw fa-envelope" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                                @error('email')
                                                <span class="invalid-feedback"
                                                      role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" style="font-size: medium" class="col-md-3">Passwort <span
                                                style="color:#ff0000">*</span></label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input style="font-size: medium" name="password" type="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       id="password">
                                                <div class="input-group-append">
                                                    <label for="email" class="input-group-text">
                                                        <i class="fa fa-fw fa-key" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <input id="showPassword" name="checkbox" type="checkbox"
                                                   onclick="myFunction()">
                                            <label for="showPassword">Kennwort anzeigen </label>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="teams" style="font-size: medium" class="col-md-3">Team</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <select name="team_id" class="form-control">
                                                    <option selected value> -- Ohne Team --</option>
                                                    @foreach($teams as $team)
                                                        @if($team->users->count() < $team->max_members)
                                                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <div class="input-group-append">
                                                    <label for="email" class="input-group-text">
                                                        <i class="fa fa-fw fa-list" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="justify-content-center row">
                                        <button type="submit" class="btn btn-success mr-1 col-5"><i
                                                class="fa-solid fa-floppy-disk"></i>&nbsp;Bestätigen
                                        </button>
                                        <a class="btn btn-secondary ml-1 col-5" onclick="history.back()"
                                           role="button"><i
                                                class="fas fa-times"></i>&nbsp;Absagen</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
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
