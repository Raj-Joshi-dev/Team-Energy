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
        @include('partials.alerts')
        <div class="row">
            <div class="col-12">
                <h1 class="float-left">Benutzerverwaltung</h1>
                <a class="btn btn-light float-right" title="Benutzer erstellen" href="{{ route('admin.users.create') }}"
                   role="button"><i
                        class="fas fa-user-plus"></i>&nbsp;Neuen Benutzer Erstellen</a>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="mx-auto float-right">

                        <form action="{{ route('admin.users.index') }}" method="GET" role="search">

                            <div class="input-group">
                        <span class="input-group-btn mr-2 mt-1">
                            <button class="btn btn-info" type="submit" title="Suche">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                                <input type="text" class="form-control mr-2" name="term" placeholder="Benutzer suchen" id="term">
                                <a href="{{ route('admin.users.index') }}" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                                </a>
                            </div>
                        </form>

                </div>
            </div>
            <table class="table">
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

                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                  style="display: inline">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-sm btn-danger" title="Löschen"
                                        onclick="return confirm('Bist du sicher?')" role="button"><i
                                        class="fas fa-trash-alt"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
@endsection
