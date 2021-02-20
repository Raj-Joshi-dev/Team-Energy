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
                <a class="btn btn-light float-right" href="{{ route('admin.users.create') }}" role="button"><i
                        class="fas fa-user-plus"></i>&nbsp;Neuen Benutzer Erstellen</a>
            </div>
        </div>
        <div class="card">
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
                        <th scope="row">{{ $user->user_id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.users.edit', $user->user_id) }}"
                               role="button"><i class="fas fa-user-edit"></i>&nbsp;Bearbeiten</a>

                            <a class="btn btn-sm btn-success" href="{{ route('admin.users.show', $user->user_id) }}"
                               role="button"><i class="fas fa-eye"></i>&nbsp;Anzeigen</a>

                            <form action="{{ route('admin.users.destroy', $user->user_id) }}" method="POST"
                                  style="display: inline">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Bist du sicher?')" role="button"><i
                                        class="fas fa-trash-alt"></i>&nbsp;Löschen
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
