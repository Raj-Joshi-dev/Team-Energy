@extends('admin.layouts.admin-app')

@section('content')
    <div class="container">
        <div class="col-12">
            <h1 class="float-left">Ergebnisverwaltung</h1>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Ergebnisse ID</th>
                <th scope="col">Benutzer Name</th>
                <th scope="col">Kategorie</th>
                <th scope="col">Hergestellt in</th>
                <th scope="col">Aktualisiert am</th>
                <th scope="col">Aktion</th>
            </tr>
            </thead>
            <tbody>
            @foreach($results as $result)

                <tr>
                    <th scope="row">{{ $result->id }}</th>
                   <td>{{ $result->user->name }}</td>
{{--                    <td>{{ $result->user_id }}</td>--}}
                    <td>{{ $result->kat_id }}</td>
                    <td>{{ $result->created_at }}</td>
                    <td>{{ $result->updated_at }}</td>
                    <td>

                        <a class="btn btn-sm btn-primary" title="Grafik" href="{{ route('generate_graph', $result->id) }}" target="_blank"
                           role="button"><i class="fas fa-sticky-note"></i></a>

                        <a class="btn btn-sm btn-success" title="Anzeigen" href="{{ route('admin.results.show', $result->id) }}"
                           role="button"><i class="fas fa-eye"></i></a>

                        <form action="{{ route('admin.results.destroy', $result->id) }}"  title="Löschen" method="POST"
                              style="display: inline">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Bist du sicher?')" role="button"><i
                                    class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
@endsection
