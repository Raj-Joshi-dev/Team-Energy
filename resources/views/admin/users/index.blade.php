@extends('admin.layouts.admin-app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            @include('partials.alerts')
            <div class="card">
                <div class="card-header" style="font-size: large">Alle Nutzer</div>
                <div class="card-body">
                    <a class="btn btn-light float-right" title="Benutzer erstellen"
                       href="{{ route('admin.users.create') }}"
                       role="button"><i
                            class="fas fa-user-plus"></i>&nbsp; Neuen Benutzer Erstellen</a>
                    <div class="mx-auto float-left">
                        <form action="{{ route('admin.users.index') }}" method="GET" role="search">
                            <div class="input-group">
                        <span class="input-group-btn mr-2 mt-1">
                            <button class="btn btn-info" type="submit" title="Suche">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                                <label for="term"></label><input type="text" class="form-control mr-2 mt-1" name="term"
                                                                 placeholder="Benutzer suchen"
                                                                 id="term">
                                <a href="{{ route('admin.users.index') }}" class=" mt-1"> </a>
                                <span class="input-group-btn mr-2 mt-1">
                                <button class="btn btn-danger" type="button" onClick="window.location.reload();" title="Refresh">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                            </div>
                        </form>
                    </div>
                </div>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-Mail-Addresse</th>
                        <th scope="col">Hergestellt in</th>
                        <th scope="col">Aktualisiert am</th>
                        <th scope="col">Aktionen</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" title="Bearbeiten"
                                   href="{{ route('admin.users.edit', $user->id) }}"
                                   role="button"><i class="fas fa-user-edit"></i></a>

                                <a class="btn btn-sm btn-success" title="Anzeigen"
                                   href="{{ route('admin.users.show', $user->id) }}"
                                   role="button"><i class="fas fa-eye"></i></a>

                                @if($user->hasAdminRole('Admin'))

                                @else
                                    <form id="delete-user" action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                          style="display: inline">
                                        @csrf
                                        @method("DELETE")
{{--                                        <button type="submit" class="btn btn-sm btn-danger" title="Löschen"--}}
{{--                                                onclick="return confirm('Bist du sicher?')" role="button"><i--}}
{{--                                                class="fas fa-trash-alt"></i>--}}
{{--                                        </button>--}}
                                    </form>
                                    <button data-toggle="modal"  data-target="#exampleModal" class="btn btn-sm btn-danger" title="Löschen"
                                            role="button"><i
                                            class="fas fa-trash-alt"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Benutzer löschen</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Möchten Sie den Benutzer wirklich löschen?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Abbruch</button>
                                                    <button type="submit" form="delete-user" class="btn btn-danger">Diesen Benutzer löschen</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $users->onEachSide(5)->links() }}
            </div>
        </div>
    </div>
@endsection
