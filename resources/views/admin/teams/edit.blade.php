@extends('admin.layouts.admin-app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            @include('partials.alerts')
            <div class="card">
                <div class="card-header float-left" style="font-size: large">Team Bearbeiten
                    <a class="btn btn-warning float-right" href="{{ route('admin.teams.index') }}" role="button"><i
                            class="fas fa-arrow-circle-left"></i>&nbsp;Zurück zur alle Teams</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.teams.update', $team->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   id="name"
                                   aria-describedby="name"
                                   value="{{ old('name') }} @isset($team) {{ $team->name }} @endisset"> <br>
                            <label for="members">Mitglieder in diesem Team</label>
                                <div class="list-group">
                                    @foreach($team->users as $user)
                                        <a href="{{ route('admin.users.edit' , $user->id) }}"
                                           class="list-group-item list-group-item-action"
                                           aria-current="true">{{ $user->name }}</a>
                                    @endforeach
                                </div>
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>&nbsp;Bestätigen
                        </button>
                        <a class="btn btn-secondary" href="{{ url()->previous() }}" role="button"><i
                                class="fas fa-times"></i>&nbsp;Absagen</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
