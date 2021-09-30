@extends('admin.layouts.admin-app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            @include('partials.alerts')
            <div class="card">
                <div class="card-header" style="font-size: large">Alle Nutzer</div>
                <div class="card-body">
                    <a class="btn btn-light float-right" title="Neuen Benutzer anlegen"
                       href="{{ route('admin.users.create') }}"
                       role="button"><i
                            class="fas fa-user-plus"></i>&nbsp; Neuer Benutzer</a>
                    <div class="mx-auto float-left">
                        <form action="{{ route('admin.users.index') }}" method="GET" role="search">
                            <div class="input-group">

                                <label for="term"></label><input type="text" class="form-control mr-2 mt-1" name="term"
                                                                 placeholder="Benutzer durchsuchen"
                                                                 id="term">
                                <a href="{{ route('admin.users.index') }}" class=" mt-1"> </a>

                                <span class="input-group-btn mr-2 mt-1">
                                    <button class="btn btn-info" type="submit" title="Suche">
                                        <span class="fas fa-search"></span>
                                    </button>
                                </span>

                                <span class="input-group-btn mr-2 mt-1">
                                    <button class="btn btn-danger" type="button" onClick="window.location.reload();"
                                            title="Refresh">
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
                        <th scope="col">E-Mail</th>
                        <th scope="col">Team</th>
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
                            <td>{{ $user->team->name ?? '-' }}</td>
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
                                    <button class="btn btn-sm btn-danger" title="Löschen" data-toggle="modal"
                                            data-target="#exampleModal_{{$user->id}}"
                                            role="button"><i class="fas fa-trash-alt"></i></button>

                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="exampleModal_{{$user->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="post"
                                                  style="display: inline">
                                                @csrf
                                                @method("DELETE")
                                                <div class="modal-content">
                                                    <div class="modal-header alert alert-danger">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            <i  class="fas fa-exclamation-triangle fa-fw" aria-hidden="true"></i>
                                                            Benutzer Löschen
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" style="font-size: 15px">
                                                        Möchten Sie den Benuter - <b>{{$user->name}}</b> wirklich löschen?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">
                                                            <i class="fas fa-fw fa-times" aria-hidden="true"></i>
                                                            Abbruch
                                                        </button>
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                                                            Diesen Benutzer löschen
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Delete Modal -->
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
