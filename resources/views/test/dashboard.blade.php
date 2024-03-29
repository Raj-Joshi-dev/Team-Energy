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
                            @if($privat == false)
                                <a style="font-size: 13px" href="{{ route('ichimteam1') }}" class="btn btn-primary">Test
                                    geben</a>
                            @else
                                {{--                                <p1 style="color: green">Test abgeschlossen! Danke</p1>--}}
                                <a style="font-size: 13px" href="{{ route('generate_graph', $privat_result_id) }}"
                                   class="btn btn-success">Ihr Ergebnis</a>
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
                            @if($beruf == false)
                                <a style="font-size: 13px" href="{{ route('ichimteam2') }}" class="btn btn-primary">Test
                                    geben</a>
                            @else
                                {{--                                <p1 style="color: green">Test abgeschlossen! Danke</p1>--}}
                                <a style="font-size: 13px" href="{{ route('generate_graph', $beruf_result_id) }}"
                                   class="btn btn-success">Ihr Ergebnis</a>
                            @endif
                        </div>
                    </div>
                </div>

                @if($enable_potential == true)
                    <div class="card multi">
                        <div class="card-body">
                            <div class="card-body">
                                <div style="font-weight: bold; font-size: 16px" class="card-title">Potential im Team
                                </div>
                                @if($enable_potential_result == true)
                                    @if($potential_result_check == false)
                                        <a style="font-size: 13px; color: black" href="{{ route('potentialimteam') }}"
                                           class="btn btn-warning">Ergebnis Erhalten</a>
                                    @else
                                        <a style="font-size: 13px"
                                           href="{{ route('generate_graph', $potential_result_id) }}"
                                           class="btn btn-success">Ihr Ergebnis</a>
                                    @endif
                                @else
                                    <p1>Warten auf andere Mitglieder, um den Test abzuschließen!</p1>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif

                @if($enable_kultur == true)
                    <div class="card multi">
                        <div class="card-body">
                            <div class="card-body">
                                <div style="font-weight: bold; font-size: 16px" class="card-title">Kultur im Team - mein
                                    Einschätzung
                                </div>
                                @if($kultur1 == false)
                                    <a style="font-size: 13px" href="{{ route('kulturimteam') }}"
                                       class="btn btn-primary">Test
                                        geben</a>
                                @else
                                    {{--                                    <p1 style="color: green">Test abgeschlossen! Danke</p1>--}}
                                    <a style="font-size: 13px"
                                       href="{{ route('generate_graph', $kultur_single_result_id) }}"
                                       class="btn btn-success">Ihr Ergebnis</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif

                @if($enable_kultur == true)
                    <div class="card multi">
                        <div class="card-body">
                            <div class="card-body">
                                <div style="font-weight: bold; font-size: 16px" class="card-title">Kultur im Team -
                                    unsere
                                    Einschätzungen
                                </div>
                                @if($enable_kultur2_result == true)
                                    @if($kultur2_check == false)
                                        <a style="font-size: 13px; color: black" href="{{ route('kulturimteam2') }}"
                                           class="btn btn-warning">Ergebnis Erhalten</a>
                                    @else
                                        <a style="font-size: 13px"
                                           href="{{ route('generate_graph', $kultur_multi_result_id) }}"
                                           class="btn btn-success">Ihr Ergebnis</a>
                                    @endif
                                @else
                                    <p1>Warten auf andere Mitglieder, um den Test abzuschließen!</p1>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </form>
    <div class="container">
        <p style="font-weight: bold; font-size: 13px">Wenn Sie auf Schwierigkeiten stoßen, besuchen Sie
            bitte den
            <a href="{{ route('contact') }}">Kontakt</a> Dankeschön.</p>
    </div>

@endsection

