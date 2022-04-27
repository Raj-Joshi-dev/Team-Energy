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
                                 style="font-size: large; margin-bottom: 0; background-color: rgba(0,0,0,.03);">Team
                                Bearbeiten
                                <a class="btn btn-light float-right" href="{{ route('admin.teams.index') }}"
                                   role="button"><i
                                        class="fa-solid fa-angles-left"></i>&nbsp;Zurück zum Teamsliste</a>
                            </div>
                            <div class="card-body">
                                <form id="edit-team" method="POST"
                                      action="{{ route('admin.teams.update', $team->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group row">
                                        <label for="name" style="font-size: medium"
                                               class="col-md-3 col-form-label">Name</label>

                                        <div class="col-sm-8 mb-2">
                                            <div class="input-group">
                                                <input name="name" type="text"
                                                       class="form-control @error('name') is-invalid @enderror"
                                                       id="name"
                                                       aria-describedby="name"
                                                       value="{{ old('name') }} @isset($team) {{ $team->name }} @endisset">
                                                <br>
                                            </div>
                                        </div>
                                </form>
                                <br>

                                {{--                                        @if($team->users->count() != 0)--}}
                                {{--                                            <label for="members">Team-Mitglieder</label>--}}
                                {{--                                            <div class="list-group">--}}
                                {{--                                                @foreach($team->users as $user)--}}
                                {{--                                                    <a href="{{ route('admin.users.show' , $user->id) }}"--}}
                                {{--                                                       class="list-group-item list-group-item-action"--}}
                                {{--                                                       aria-current="true">{{ $user->name }}</a>--}}
                                {{--                                                @endforeach--}}
                                {{--                                            </div>--}}
                                {{--                                        @else--}}

                                {{--                                        @endif--}}

                            </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th rowspan="2">Benutzer ID</th>
                                    <th scope="col" rowspan="2">Name</th>
                                    <th scope="col" rowspan="2">E-mail</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row">
                                            {{ $user->id }}
                                        </th>
                                        <td scope="col">{{ $user->name }}</td>
                                        <td scope="col">{{ $user->email }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>


                            <button data-toggle="modal" data-target="#exampleModal" class="btn btn-success"><i
                                    class="fas fa-check"></i>&nbsp;Bestätigen
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Speichern bestätigen</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Bitte bestätigen Sie die Änderungen.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Abbruch
                                            </button>
                                            <button type="submit" form="edit-team" class="btn btn-success">
                                                Änderungen
                                                speichern
                                            </button>
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
        </div>
        </div>
    </main>

@endsection
