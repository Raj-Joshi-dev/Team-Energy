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
        <h1>Create a new User</h1>
        <div class="card">
            <form method="POST" action="{{ route('admin.users.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                           aria-describedby="name" value="{{ old('name') }} @isset($user) {{ $team->name }} @endisset">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           id="email"
                           aria-describedby="email"
                           value="{{ old('email') }} @isset($user) {{ $user->email }} @endisset">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password"
                           class="form-control @error('password') is-invalid @enderror"
                           id="password">
                </div>


                <div class="form-group">
                    <label for="teams">Team</label>
                    <select name="team_id" class="form-control">
                        @foreach($teams as $team)
                            <option value=" {{ $team->team_id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
