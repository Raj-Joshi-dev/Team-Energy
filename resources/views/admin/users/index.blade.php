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
                <a class="btn btn-sm btn-success float-right" href="{{ route('admin.users.create') }}" role="button">Erstellen</a>
            </div>
        </div>
        <div class="card">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-Mail-Addresse</th>
                    <th scope="col">Aktionen</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->user_id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.users.edit', $user->user_id) }}"
                               role="button">Bearbeiten</a>
                            <button type="button" class="btn btn-sm btn-danger"
                                    onclick="event.preventDefault();
                                        document.getElementById('delete-user-form-{{ $user->user_id }}').submit()">
                                Löschen
                            </button>
                            <form id="delete-user-form-{{ $user->user_id }}"
                                  action="{{ route('admin.users.destroy', $user->user_id) }}" method="POST"
                                  style="display: none">
                                @csrf
                                @method("DELETE")
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
