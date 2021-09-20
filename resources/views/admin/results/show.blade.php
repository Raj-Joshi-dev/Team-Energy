@extends('admin.layouts.admin-app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="card">
                <div class="card-header float-left" style="font-size: large">Ergebnisdetails
                    <a class="btn btn-warning float-right"
                       href="{{ route('admin.results.index') }}"
                       role="button"><i class="fas fa-arrow-circle-left"></i>&nbsp;Zurück zur Ergebnisliste</a>
                </div>
                <table class="table table-bordered">
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
        </div>
    </div>
@endsection
