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

                                <form id="delete-result" action="{{ route('admin.results.destroy', $result->id) }}" title="Löschen"
                                      method="POST"
                                      style="display: inline">
                                    @csrf
                                    @method("DELETE")
{{--                                    <button type="submit" class="btn btn-sm btn-danger"--}}
{{--                                            onclick="return confirm('Bist du sicher?')" role="button"><i--}}
{{--                                            class="fas fa-trash-alt"></i>--}}
{{--                                    </button>--}}
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
                                                <h5 class="modal-title" id="exampleModalLabel">Ergebnis löschen</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Möchten Sie den Ergebnis wirklich löschen?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Abbruch</button>
                                                <button type="submit" form="delete-result" class="btn btn-danger">Diesen Ergebnis löschen</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
