@if (session('success'))
    <div class="alert alert-success alert-dismissable">
        <a aria-label="close" class="close" data-dismiss="alert" href="#">&times;</a>
        <h4>
            <i aria-hidden="true" class="icon fa fa-check fa-fw"></i> Erfolg
        </h4>{{ session('success') }}
    </div>
@endif

{{--@if(session('error'))--}}
{{--    <div class="alert alert-danger alert-dismissible" role="alert">--}}
{{--        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>--}}
{{--        {{ session('error') }}--}}
{{--    </div>--}}
{{--@endif--}}

@if (session('error'))
    <div class="alert alert-danger alert-dismissable" role="alert">
        <a aria-label="close" class="close" data-dismiss="alert" href="#">&times;</a>
        <h4 class="alert-heading">
            <i aria-hidden="true" class="fas fa-exclamation-triangle fa-fw"></i>
            Fehler
        </h4>
        <hr>
        <p class="mb-0">
            {{ session('error') }}
        </p>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissable" role="alert">
        <a aria-label="close" class="close" data-dismiss="alert" href="#">&times;</a>
        <h4 class="alert-heading">
            <i aria-hidden="true" class="fas fa-exclamation-triangle fa-fw"></i>
            Fehler
        </h4>
        <hr>
        <p class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </p>
    </div>
@endif
