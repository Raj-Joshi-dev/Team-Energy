{{--@include('admin.results.result-index')--}}

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            @include('partials.alerts')
            <div class="card">
                <div class="card-header" style="font-size: large">Ich im Team - Beruf</div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Benutzer</th>
                        <th scope="col">Team</th>
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

                                <form id="delete-result" action="{{ route('admin.results.destroy', $result->id) }}"
                                      title="Löschen"
                                      method="POST"
                                      style="display: inline">
                                    @csrf
                                    @method("DELETE")
{{--                                    <button type="submit" class="btn btn-sm btn-danger"--}}
{{--                                            role="button"><i--}}
{{--                                            class="fas fa-trash-alt"></i>--}}
{{--                                    </button>--}}
                                </form>
                                <button data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-danger"
                                        title="Löschen"
                                        role="button"><i
                                        class="fas fa-trash-alt"></i>
                                </button>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
