@extends('admin.layouts.admin-app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            @include('partials.alerts')
            @include('admin.results.partials.result-display', ['category4' => true])
        </div>
    </div>
@endsection
