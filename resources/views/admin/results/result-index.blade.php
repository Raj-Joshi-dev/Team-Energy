@extends('admin.layouts.admin-app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            @include('partials.alerts')
            <div class="card">
                <div class="card-header" style="font-size: large">Alle Ergebnis</div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Benutzer</th>
                        <th scope="col">Team Name</th>
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
                            {{--                            <td>{{ optional($result->user->team)->name }}</td>--}}
                            <td>{{ $result->user->team->name ?? '-' }}</td>
                            <td>{{ $result->kat_id }}</td>
                            <td>{{ $result->created_at }}</td>
                            <td>{{ $result->updated_at }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" title="Grafik"
                                   href="{{ route('generate_graph', $result->id) }}" target="_blank"
                                   role="button"><i class="fas fa-sticky-note"></i></a>

                                <a class="btn btn-sm btn-success" title="Anzeigen"
                                   href="{{ route('admin.results.show', $result->id) }}"
                                   role="button"><i class="fas fa-eye"></i></a>

                                <button class="btn btn-sm btn-danger" title="Löschen" data-toggle="modal"
                                        data-target="#exampleModal_{{$result->id}}"
                                        role="button"><i class="fas fa-trash-alt"></i></button>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="exampleModal_{{$result->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{ route('admin.results.destroy', $result->id) }}" method="post"
                                              style="display: inline">
                                            @csrf
                                            @method("DELETE")
                                            <div class="modal-content">
                                                <div class="modal-header alert alert-danger">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        <i class="fas fa-exclamation-triangle fa-fw"
                                                           aria-hidden="true"></i>
                                                        Ergebnis Löschen
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="font-size: 15px">
                                                    Möchten Sie das Ergebnis für - <b>{{$result->user->name}}</b> löschen?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">
                                                        <i class="fas fa-fw fa-times" aria-hidden="true"></i>
                                                        Abbruch
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                                                        Diesen Ergebnis löschen
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Delete Modal -->
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
