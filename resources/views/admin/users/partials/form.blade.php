@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
           aria-describedby="name" value="{{ old('name') }} @isset($user) {{ $user->name }} @endisset">
</div>
<div class="form-group">
    <label for="email">Email address</label>
    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
           id="email"
           aria-describedby="email" value="{{ old('email') }} @isset($user) {{ $user->email }} @endisset">
</div>

@isset($create)
<div class="form-group">
    <label for="password">Password</label>
    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
           id="password">
</div>
@endisset

<div class="form-group">
    <label for="team-selection">Team</label>
    <select class="form-control" id="team-selection">
        @foreach($teams as $team)
            <option value="{{ $team->team_id }}">{{ $team->name }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
