@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@section('title', 'Dashboard | Team-Energy')</title>

</head>

<body>
    <div class="container">
        <div class="card border-warning">
            <div class="card-header" style="font-weight: bold;font-size: 20px">Hallo {{ Auth::user()->name }}! <br>
                Ihr Dashboard - Bitte wählen Sie einen Test aus</div>

            <div class="card multi">
                <div class="card-body">
                    <div class="card-body">
                        <div style="font-weight: bold; font-size: 16px" class="card-title">Ich im Team - Privater
                            Bereich</div>
                        <a style="font-size: 13px" href="{{ route('ichimteam1') }}" class="btn btn-primary">Test
                            geben</a>
                    </div>
                </div>
            </div>
            <div class="card multi">
                <div class="card-body">
                    <div class="card-body">
                        <div style="font-weight: bold; font-size: 16px" class="card-title">Ich im Team - Beruflicher
                            Bereich</div>
                        <a style="font-size: 13px" href="{{ route('ichimteam2') }}" class="btn btn-primary">Test
                            geben</a>
                    </div>
                </div>
            </div>
            <div class="card multi">
                <div class="card-body">
                    <div class="card-body">
                        <div style="font-weight: bold; font-size: 16px" class="card-title">Kultur im Team - mein
                            Einschätzung</div>
                        <a style="font-size: 13px" href="{{ route('kulturimteam') }}" class="btn btn-primary">Test
                            geben</a>
                    </div>
                </div>
            </div>
            <div class="card multi">
                <div class="card-body">
                    <div class="card-body">
                        <div style="font-weight: bold; font-size: 16px" class="card-title">Potential im Team</div>
                        <a style="font-size: 13px" href="{{ route('potentialimteam') }}" class="btn btn-warning">Zeige
                            ergebnis</a>
                    </div>
                </div>
            </div>
            <div class="card multi">
                <div class="card-body">
                    <div class="card-body">
                        <div style="font-weight: bold; font-size: 16px" class="card-title">Kultur im Team - unsere
                            Einschätzungen</div>
                        <a style="font-size: 13px" href="{{ route('kulturimteam2') }}" class="btn btn-warning">Zeige
                            ergebnis</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <p style="font-weight: bold; font-size: 13px">Wenn Sie auf Schwierigkeiten stoßen, besuchen Sie bitte den
            <a href="{{ route('contact') }}">Kontakt</a> Dankeschön.</p>
    </div>




</body>

</html>

@endsection
