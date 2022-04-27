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
                                 style="font-size: large; margin-bottom: 0; background-color: rgba(0,0,0,.03);">Benutzer
                                Bearbeiten
                                <a class="btn btn-light mr-1 float-right"
                                   href="{{ route('admin.users.index') }}"
                                   role="button"><i class="fa-solid fa-angles-left"></i>&nbsp;Zurück zur
                                    Benutzerliste</a>
                                <a class="btn btn-light mr-1 float-right"
                                   href="{{ route('admin.users.show', $user->id) }}"
                                   role="button"><i class="fa-solid fa-angle-left"></i>&nbsp;Zurück zur Benutzer</a>
                            </div>
                            <br>
                            <div class="card-body">
                                <form id="edit-form" method="POST"
                                      action="{{ route('admin.users.update', $user->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group row">
                                        <label for="name" style="font-size: medium"
                                               class="col-md-3 col-form-label">Name</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input name="name" type="text"
                                                       class="form-control @error('name') is-invalid @enderror"
                                                       id="name"
                                                       aria-describedby="name"
                                                       value="@isset($user) {{ $user->name }} @endisset">
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
                                        <label style="font-size: medium" for="email"
                                               class="col-md-3 col-form-label">E-Mail</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input name="email" type="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       id="email"
                                                       aria-describedby="email"
                                                       value="@isset($user) {{ $user->email }} @endisset">
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
                                        <label for="teams" style="font-size: medium" class="col-md-3">Team</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <select name="team_id" class="form-control" disabled>
                                                    @foreach($teams as $team)
                                                        <option value="{{ $team->id }}"
                                                                @if ($team->id == $user->team_id) selected @endif>{{ $team->name }} </option>
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


                                    {{--Start of Testing block --}}


                                    <div class="collapse" id="collapseExample">
                                        <div class="form-group row">
                                            <label style="font-size: medium" for="email"
                                                   class="col-md-3 col-form-label">Neues Passwort</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input name="password" type="password"
                                                           class="form-control @error('password') is-invalid @enderror"
                                                           id="password"
                                                           aria-describedby="password">
                                                </div>
                                                <input id="showPassword" name="checkbox" type="checkbox"
                                                       onclick="myFunction()">
                                                <label for="showPassword">Passwort anzeigen </label>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <p>
                                        <button id="change_password"
                                                class="btn btn-outline-secondary test col-3" type="button"
                                                style="color: #4a5568"
                                                data-toggle="collapse"
                                                data-target="#collapseExample" aria-expanded="false"
                                                aria-controls="collapseExample">
                                            <span class="fa fa-fw fa-lock"></span>
                                            Passwort Ändern
                                        </button>
                                    </p>


                                    {{--End of Testing Block --}}

                                </form>

                                <div class="justify-content-center row">
                                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-success mr-1 col-5"><i
                                            class="fa-solid fa-floppy-disk"></i>&nbsp;Bestätigen
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header alert alert-success">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        <i class="fa-solid fa-circle-check"></i>
                                                        Speichern bestätigen</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    Bitte bestätigen Sie die Änderungen.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">
                                                        <i class="fas fa-times"></i>
                                                        Abbruch
                                                    </button>
                                                    <button type="submit" form="edit-form" class="btn btn-success">
                                                        <i class="fa-solid fa-floppy-disk"></i>
                                                        Änderungen speichern
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="btn btn-secondary ml-1 col-5" onclick="history.back()" role="button"><i
                                            class="fas fa-times"></i>&nbsp;Absagen</a>
                                </div>
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

        // function show() {
        //     $('#change_password', function () {
        //         $(this).find("i").toggleClass("fa-times");
        //     })
        // }

        // $('#change_password').find("i").toggleClass("fa-times");

        jQuery(function ($) {
            $("#change_password").on("click", function () {
                const $el = $(this),
                    textNode = this.lastChild;
                $el.find("span").toggleClass("fa-lock fa-times");
                textNode.nodeValue =
                    "" + ($el.hasClass("change_password") ? "Passwort Ändern" : "Absagen Passwort Ändern");
                $el.toggleClass("change_password");
            });
        });


    </script>

@endsection
