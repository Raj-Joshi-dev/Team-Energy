@extends('admin.layouts.admin-app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            @include('partials.alerts')
            <div class="card">
                <div class="card-header float-left" style="font-size: large">Benutzer Bearbeiten
                    <a class="btn btn-warning float-right" href="{{ route('admin.users.index') }}" role="button"><i
                            class="fas fa-arrow-circle-left"></i>&nbsp;Zurück zur Benutzerverwaltung</a>
                </div>
                <br>
                <div class="card-body">
                    <form id="edit-form" method="POST" action="{{ route('admin.users.update', $user->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   id="name"
                                   aria-describedby="name"
                                   value="@isset($user) {{ $user->name }} @endisset">
                            @error('name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail-Addresse</label>
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   id="email"
                                   aria-describedby="email"
                                   value="@isset($user) {{ $user->email }} @endisset">
                            @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>


                        {{--                        <div class="form-group">--}}
                        {{--                            <label for="password">Passwort</label>--}}
                        {{--                            <input name="password" type="password"--}}
                        {{--                                   class="form-control @error('password') is-invalid @enderror"--}}
                        {{--                                   id="password">--}}
                        {{--                        </div>--}}

                        <div class="form-group">
{{--                            <button class="btn btn-success" type="button" data-toggle="collapse"--}}
                            {{--                                    data-target="#collapseExample" aria-expanded="false"--}}
                            {{--                                    aria-controls="collapseExample">--}}
                            {{--                                Passwort ändern--}}
                            {{--                            </button>--}}
{{--                            <div class="collapse" id="collapseExample">--}}
                                <label for="password">Neues Kennwort</label>
                                <input name="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       id="password"
                                       aria-describedby="password">
                                <input name="checkbox" type="checkbox" onclick="myFunction()"> Kennwort anzeigen
                                @error('password')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
{{--                            </div>--}}
                        </div>



                        <div class="form-group">
                            <label for="teams">Team</label>
                            <select name="team_id" class="form-control" disabled>
                                @foreach($teams as $team)
                                    <option value="{{ $team->id }}"
                                            @if ($team->id == $user->team_id) selected @endif>{{ $team->name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </form>

                    <button data-toggle="modal"  data-target="#exampleModal" class="btn btn-primary"><i class="fas fa-check"></i>&nbsp;Bestätigen
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Abbruch</button>
                                    <button type="submit" form="edit-form" class="btn btn-success">Änderungen speichern</button>
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
