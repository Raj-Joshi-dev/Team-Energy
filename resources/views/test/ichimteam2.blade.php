@extends('layouts.app');

@section('content');

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Persönlichkeitstest</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/ques.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="preview">
            <form action="{{ route('store2') }}" method="post">
                @csrf
                <div class="questions">
                    <h2>Ich im Team - Beruflicher Bereich</h2>
                </div>
                <div class="answerList">
                    <h3>Vorsicht! Bitte wählen Sie <span style="color: red; "><b>nur eine</b></span> Option aus der unten angegebenen Arbeit aus.</h3>
                </div>

                <!--Accordion wrapper-->
                <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingOne">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <h4 class="mb-0">
                                    Frage 1 <i class="fa fa-angle-down" style="font-size:36px"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Eine Firma kann nur funktionieren, wenn sich die Mitarbeiter an Regeln und Vorgaben halten.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup1" value="1" id="answerGroup_1">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup1" value="2" id="answerGroup_1">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Eine Firma kann nur im Wettbewerb bestehen, wenn jeder Mitarbeiter zu jeder Zeit beurteilt, ob die Einhaltung einer Regel im gegebenen Einzelfall sinnvoll ist.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup1" value="3" id="answerGroup_1">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup1" value="4" id="answerGroup_1">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingTwo">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h4 class="mb-0">
                                    Frage 2 <i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo1" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Es ist eine Bringschuld Kollegen zu helfen, wenn sie nicht zurecht kommen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup2" value="5" id="answerGroup_2">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup2" value="6" id="answerGroup_2">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Mittel- und langfristig erzieht ständige Hilfe zu Unselbstständigkeit. Es ist eine Holschuld fehlendes Wissen zu ergänzen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup2" value="7" id="answerGroup_2">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup2" value="8" id="answerGroup_2">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingThree">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h4 class="mb-0">
                                    Frage 3 <i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Ich bestätige wichtige Sachverhalte gerne schriftlich, z.B. mit einer kurzen E-Mail, vor allem weil man alles nachvollziehen kann und eine sichere Grundlage für die weitere Arbeit hat.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup3" value="9" id="answerGroup_3">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup3" value="10" id="answerGroup_3">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Ich kommuniziere am liebsten mündlich. Die Situationen und Schwerpunkte ändern sich so schnell, dass man oft heute Dinge ganz anders beurteilen muss als gestern.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup3" value="11" id="answerGroup_3">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup3" value="12" id="answerGroup_3">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingFour">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <h4 class="mb-0">
                                    Frage 4<i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Ich stecke auch mal zurück, damit Kollegen, die sich nicht so gut in Szene setzen können, zum Zuge kommen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup4" value="13" id="answerGroup_4">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup4" value="14" id="answerGroup_4">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Ich vertrete die Belange meines Fachbereiches klar und deutlich. Wenn das jeder tut kommen wir zum besten Gesamtergebnis.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup4" value="15" id="answerGroup_4">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup4" value="16" id="answerGroup_4">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingFive">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <h4 class="mb-0">
                                    Frage 5<i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: In einem Prämiensystem sollte das stärkste Gewicht die Leistung des Teams haben.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup5" value="17" id="answerGroup_5">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup5" value="18" id="answerGroup_5">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: In einem Prämiensystem sollte das stärkste Gewicht die Leistung des Einzelnen haben.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup5" value="19" id="answerGroup_5">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup5" value="20" id="answerGroup_5">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading6">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                <h4 class="mb-0">
                                    Frage 6<i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Am liebsten entwickle ich die Anforderungen an meinen Arbeitsbereich in enger Abstimmung und im Dialog mit den Kollegen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup6" value="21" id="answerGroup_6">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup6" value="22" id="answerGroup_6">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Am liebsten arbeite ich selbstständig, selbstverständlich auf Basis klarer Ziele und koordiniert mit den betroffenen Kollegen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup6" value="23" id="answerGroup_6">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup6" value="24" id="answerGroup_6">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading7">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                <h4 class="mb-0">
                                    Frage 7<i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Auf private Belange und Belastungen sollte im Beruf Rücksicht genommen werden. Das zahlt sich langfristig aus.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup7" value="25" id="answerGroup_7">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup7" value="26" id="answerGroup_7">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Kurzfristig wird man Rücksicht nehmen, aber generell muss jeder seinen privaten Bereich so regeln, dass er im Beruf voll leistungsfähig ist. Bei Ungleichbehandlung entsteht Neid und Missgunst. </font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup7" value="27" id="answerGroup_7">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup7" value="28" id="answerGroup_7">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading8">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                <h4 class="mb-0">
                                    Frage 8<i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Für den Erfolg unseres Teams ist entscheidend, dass wir zusammenhalten und „Beziehungskisten“ schnell und gut ausgeräumt werden.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup8" value="29" id="answerGroup_8">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup8" value="30" id="answerGroup_8">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Für den Erfolg unseres Teams ist entscheidend, dass die Ziele klar sind und entsprechende Maßnahmen sauber umgesetzt werden.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup8" value="31" id="answerGroup_8">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup8" value="32" id="answerGroup_8">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading9">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                <h4 class="mb-0">
                                    Frage 9<i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading9" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Ich denke, das gesprochene Wort sollte unter Kollegen gelten. Wenn alles aufgeschrieben und abgesichert wird, entsteht eine Misstrauenskultur.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup9" value="33" id="answerGroup_9">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup9" value="34" id="answerGroup_9">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Wichtige Absprachen sollten schriftlich fixiert werden. So wird die Gefahr von Missverständnissen vermindert. </font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup9" value="35" id="answerGroup_9">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup9" value="36" id="answerGroup_9">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading10">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                <h4 class="mb-0">
                                    Frage 10<i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="heading10" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Je nach Tagesform gebe ich mal mehr Gas und mal weniger. Am Ende stimmt natürlich das Ergebnis.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup10" value="37" id="answerGroup_10">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup10" value="38" id="answerGroup_10">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Ich habe eine Vorstellung bis wann ich welchen Teil der Arbeit erledigt haben will und fahre gut damit, mich daran zu halten.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup10" value="39" id="answerGroup_10">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup10" value="40" id="answerGroup_10">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->



                </div>
                <!-- Accordion wrapper -->
                <br>
                <div class="container text-center bottom">
                    <div style="font-size:140%">{{ $errors->first('answerGroup1') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup2') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup3') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup4') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup5') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup6') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup7') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup8') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup9') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup10') }}</div>
                </div>
                <div class="container text-center bottom">
                    <button id="submit-btn" style="font-size:150%" class="btn btn-primary btn-lg" value="data">Einreichen</button>
                </div>
            </form>
            <br><br>
        </div>
    </div>


</body>

</html>

@endsection