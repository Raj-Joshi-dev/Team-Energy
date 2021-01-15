@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
           aria-describedby="name" value="{{ old('name') }} @isset($team) {{ $team->name }} @endisset">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
