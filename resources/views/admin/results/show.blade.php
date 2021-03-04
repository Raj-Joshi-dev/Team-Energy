@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-12">
            <a class="btn btn-warning float-right" href="{{ route('admin.results.index') }}" role="button"><i class="fas fa-arrow-circle-left"></i>&nbsp;Zurück zur Ergebnisverwaltung</a>
            <h1 class="float-left">Ergebnisdetails</h1>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Benutzer</th>
                <th scope="col">Antworten</th>
                <th scope="col">Punkte</th>
                <th scope="col">X</th>
                <th scope="col">Y</th>
                <th scope="col">Name</th>
                <th scope="col">Quadrant</th>
                <th scope="col">Hergestellt in</th>
                <th scope="col">Aktualisiert am</th>
            </tr>
            </thead>
            <tbody>
            @foreach($results as $result)
                <tr>
                    <th scope="row">{{ $result->id }}</th>
                    <td>{{ $result->user_id }}</td>
                    <td>{{ $result->answer_id }}</td>
                    <td>{{ $result->points }}</td>
                    <td>{{ $result->value_x }}</td>
                    <td>{{ $result->value_y }}</td>
                    <td>{{ $result->name }}</td>
                    <td>{{ $result->quadrant }}</td>
                    <td>{{ $result->created_at }}</td>
                    <td>{{ $result->updated_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
