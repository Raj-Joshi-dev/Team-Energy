@extends('admin.layouts.admin-app')
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
        <a class="btn btn-warning float-right" href="{{ route('admin.teams.index') }}" role="button"><i class="fas fa-arrow-circle-left"></i>&nbsp;Zurück zur
            Teammanagement</a>
        <h1>Team bearbeiten</h1>
        <div class="card">
            @include('partials.alerts')
            <form method="POST" action="{{ route('admin.teams.update', $team->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                           aria-describedby="name" value="{{ old('name') }} @isset($team) {{ $team->name }} @endisset">
                </div>

                {{--                <div class="form-group">--}}
                {{--                    <label for="members">Mitglieder in diesem Team</label>--}}
                {{--                    <ul class="list-group">--}}
                {{--                        <li class="list-group-item">--}}
                {{--                            @foreach($team->users as $user)--}}
                {{--                                {{ $user->name }},--}}
                {{--                            @endforeach--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}

                <div class="form-group">
                    <label for="members">Mitglieder in diesem Team</label>
                    <ul class="list-group">
                        <li class="list-group-item">
                        @foreach($team->users as $user)
                            <a href="{{ route('admin.users.edit' , $user->id) }}" class="list-group-item list-group-item-action"
                               aria-current="true">{{ $user->name }}</a>
                        @endforeach
                        </li>
                    </ul>
                </div>
                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>&nbsp;Bestätigen</button>
                <a class="btn btn-secondary" href="{{ url()->previous() }}" role="button"><i class="fas fa-times"></i>&nbsp;Absagen</a>
            </form>
        </div>
    </div>
@endsection
