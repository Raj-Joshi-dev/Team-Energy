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
               @include('admin.users.partials.form', ['create' => true])
            </form>
        </div>
    </div>
@endsection
