@extends('layouts.app')

@section('title', 'Dashboard | Team-Energy')

@section('content')


<form action="{{ route('dashboard') }}" method="post">
    <div class="container">
        <div class="card border-warning">
            <div class="card-header" style="font-weight: bold;font-size: 20px">Hallo {{ Auth::user()->name }}! <br>
                Ihr Dashboard - Bitte wählen Sie einen Test aus
            </div>

            <div class="card multi">
                <div class="card-body">
                    <div class="card-body">
                        <div style="font-weight: bold; font-size: 16px" class="card-title">Ich im Team - Privater
                            Bereich
                        </div>
                        @if($disable_privat == false)
                            <a style="font-size: 13px" href="{{ route('ichimteam1') }}" class="btn btn-primary">Test
                                geben</a>
                        @else
                            <p1>Test given!</p1>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card multi">
                <div class="card-body">
                    <div class="card-body">
                        <div style="font-weight: bold; font-size: 16px" class="card-title">Ich im Team - Beruflicher
                            Bereich
                        </div>
                        @if($disable_beruf == false)
                        <a style="font-size: 13px" href="{{ route('ichimteam2') }}" class="btn btn-primary">Test
                            geben</a>
                        @else
                            <p1>Test given!</p1>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card multi">
                <div class="card-body">
                    <div class="card-body">
                        <div style="font-weight: bold; font-size: 16px" class="card-title">Kultur im Team - mein
                            Einschätzung
                        </div>
                        <a style="font-size: 13px" href="{{ route('kulturimteam') }}" class="btn btn-primary">Test
                            geben</a>
                    </div>
                </div>
            </div>
            <div class="card multi">
                <div class="card-body">
                    <div class="card-body">
                        <div style="font-weight: bold; font-size: 16px" class="card-title">Potential im Team</div>
                        <a style="font-size: 13px" href="{{ route('potentialimteam') }}"
                           class="btn btn-success">Ergebnis verfügbar</a>
                    </div>
                </div>
            </div>
            <div class="card multi">
                <div class="card-body">
                    <div class="card-body">
                        <div style="font-weight: bold; font-size: 16px" class="card-title">Kultur im Team - unsere
                            Einschätzungen
                        </div>
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

</form>

@endsection

