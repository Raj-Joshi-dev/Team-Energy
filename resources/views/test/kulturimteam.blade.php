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
            <form action="{{ route('store3') }}" method="post">
                @csrf
                <div class="questions">
                    <h2>Kultur im Team</h2>
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
                                    <font size="3">These 1: Es gibt eine Art Routine, wann wir anfangen und aufhören mit der Arbeit.</font>
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
                                    <font size="3">These 2: Hier macht jeder seine Arbeit so wie er denkt. Wenn viel anliegt wird viel gearbeitet, wenn es rund läuft, kann man auch früher gehen.</font>
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
                                    <font size="3">These 1: Die Verantwortlichkeiten sind in unserem Team in Arbeitsplatzbeschreibungen geregelt, die auch aktuell gehalten werden.</font>
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
                                    <font size="3">These 2: Hier entscheidet jeder für sich, was nach aktueller Lage und Aufgabenstellung zu tun ist.</font>
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
                                    <font size="3">These 1: Bei uns im Team herrscht eher eine Kultur der Sicherheit als der Freiheit, mit allen Vor- und Nachteilen.</font>
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
                                    <font size="3">These 2: Bei uns im Team herrscht eher eine Kultur der Freiheit als der Sicherheit, mit allen Vor- und Nachteilen.</font>
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
                                    <font size="3">These 1: Die Bitte eines Kollegen um Unterstützung abzulehnen, wäre ein Fauxpas.</font>
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
                                    <font size="3">These 2: Jeder ist grundsätzlich selbst für seine Performance verantwortlich.</font>
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
                                    <font size="3">These 1: Wenn es jemanden mal schlecht geht, sagt er das und bekommt dann auch Unterstützung.</font>
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
                                    <font size="3">These 2: Wenn man schlecht drauf ist, reißt man sich besser zusammen, sonst wird einem das als Schwäche ausgelegt.</font>
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
                                    <font size="3">These 1: Neue Mitarbeitersollen sich eingliedern und uns unterstützen.</font>
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
                                    <font size="3">These 2: Neue Mitarbeiter sollen bei uns frischen Wind bringen und Routinen in Frage stellen.</font>
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
                                    <font size="3">These 1: Wenn jemand krank wird, geht er nach hause, bevor er Andere ansteckt oder es ihn richtig „umhaut“.</font>
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
                                    <font size="3">These 2: Bevor hier jemand wegen Krankheit fehlt, muss er schon auf der Krankenbahre raus getragen werden.</font>
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
                                    <font size="3">These 1: Die Geburtstage der Teammitglieder sind bekannt und werden im angemessenen Rahmen gefeiert.</font>
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
                                    <font size="3">These 2: Geburtstage werden normalerweise nicht gefeiert. </font>
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
                                    <font size="3">These 1: Wir stimmen uns oft ab und wenn jemand hinterher hinkt, bekommt er Unterstützung.</font>
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
                                    <font size="3">These 2: Jeder ist für seinen Job verantwortlich und muss sich zunächst mal selbst helfen. Das schließt nicht aus, dass Dinge neu verteilt werden müssen, wenn jemand zuviel Arbeitslast trägt.</font>
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
                                    <font size="3">These 1: Es gibt auch einige informelle Kontakte in unserem Team. Gelegentlich gehen wir außerhalb der Arbeit aus.</font>
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
                                    <font size="3">These 2: Nach Dienst geht jeder seinen Weg. Privates und Hobbys kommen eh zu kurz.</font>
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

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading11">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                <h4 class="mb-0">
                                    Frage 11<i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Wenn jemand krank wird, machen wir die Arbeit soweit möglich für ihn mit.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup11" value="41" id="answerGroup_11">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup11" value="42" id="answerGroup_11">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Wenn jemand krank wird, arbeitet er soweit möglich von zuhause oder er muss schauen, wie er wieder Anschluss findet.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup11" value="43" id="answerGroup_11">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup11" value="44" id="answerGroup_11">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading12">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                <h4 class="mb-0">
                                    Frage 12<i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="heading12" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Wir achten darauf, dass jedes Teammitglied die gleiche Wertschätzung erfährt.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup12" value="45" id="answerGroup_12">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup12" value="46" id="answerGroup_12">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Es ist schon klar, wer bei uns die Leistungsträger sind.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup12" value="47" id="answerGroup_12">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup12" value="48" id="answerGroup_12">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading13">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                <h4 class="mb-0">
                                    Frage 13<i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse13" class="collapse" role="tabpanel" aria-labelledby="heading13" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: In Meetings beißen wir uns schon mal an wirklich interessanten Punkten fest. Manchmal sind wir etwas chaotisch.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup13" value="49" id="answerGroup_13">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup13" value="50" id="answerGroup_13">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: In Meetings arbeiten wir die Agenda diszipliniert ab. Manchmal sind wir etwas starr.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup13" value="51" id="answerGroup_13">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup13" value="52" id="answerGroup_13">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading14">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                <h4 class="mb-0">
                                    Frage 14<i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse14" class="collapse" role="tabpanel" aria-labelledby="heading14" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Wir brauchen keine Regeln für Kaffe- oder Spülmaschine. Jeder packt ohne Aufforderung an.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup14" value="53" id="answerGroup_14">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup14" value="54" id="answerGroup_14">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Wir haben klare Verhaltensregeln für das Zusammenleben im Büro/der Arbeit.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup14" value="55" id="answerGroup_14">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup14" value="56" id="answerGroup_14">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading15">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse15" aria-expanded="false" aria-controls="collapse14">
                                <h4 class="mb-0">
                                    Frage 15<i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse15" class="collapse" role="tabpanel" aria-labelledby="heading15" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Bei uns herrscht eher eine Vertrauenskultur. Wenn z.B. kein Kaffee mehr da ist, bringt ihn der mit, der es am ersten bemerkt.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup15" value="57" id="answerGroup_15">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup15" value="58" id="answerGroup_15">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Wir halten solche Dinge fest. Jeder kommt im Umlauf mal dran. Sonst gibt es erfahrungsgemäß früher oder später Ärger.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup15" value="59" id="answerGroup_15">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup15" value="60" id="answerGroup_15">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading16">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse16" aria-expanded="false" aria-controls="collapse14">
                                <h4 class="mb-0">
                                    Frage 16<i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse16" class="collapse" role="tabpanel" aria-labelledby="heading16" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Die wirklich wichtigen Dinge sind allen klar. Protokolle werden eh nicht gelesen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup16" value="61" id="answerGroup_16">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup16" value="62" id="answerGroup_16">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Es gibt Protokolle aller wichtigen Sitzungen. Es gibt auch klare Prozedere, z.B. bis wann Tagesordnungspunkte einzureichen sind.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup16" value="63" id="answerGroup_16">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup16" value="64" id="answerGroup_16">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading17">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                <h4 class="mb-0">
                                    Frage 17<i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse17" class="collapse" role="tabpanel" aria-labelledby="heading17" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Bei uns geht es emotional schon mal auf und ab. Wir versuchen aber immer Lösungen zu finden, mit denen alle leben können.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup17" value="65" id="answerGroup_17">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup17" value="66" id="answerGroup_17">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Wenn wir uneins sind, entscheidet der Chef oder wir stimmen nach angemessener Zeit ab, sonst würde ewig diskutiert.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup17" value="67" id="answerGroup_17">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup17" value="68" id="answerGroup_17">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading18">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                <h4 class="mb-0">
                                    Frage 18<i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse18" class="collapse" role="tabpanel" aria-labelledby="heading18" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Bei uns wird es schon mal laut und emotional, aber wir lachen auch kräftig.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup18" value="69" id="answerGroup_18">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup18" value="70" id="answerGroup_18">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Bei uns geht es formell und geschäftsmäßig zu.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup18" value="71" id="answerGroup_18">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup18" value="72" id="answerGroup_18">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading19">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                <h4 class="mb-0">
                                    Frage 19<i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse19" class="collapse" role="tabpanel" aria-labelledby="heading19" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Bei uns gibt es klare Vorgaben. Unsere Aufgabe ist es, die Entscheidungen sauber umzusetzen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup19" value="73" id="answerGroup_19">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup19" value="74" id="answerGroup_19">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Jeder ist aufgefordert zu widersprechen, auch dem Chef, wenn ihm etwas nicht plausibel erscheint. Tragfähige Entscheidungen entstehen nur in offenen Auseinandersetzungen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup19" value="75" id="answerGroup_19">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup19" value="76" id="answerGroup_19">Eher Ja</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading20">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                <h4 class="mb-0">
                                    Frage 20<i class="fas fa-angle-down rotate-icon"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse20" class="collapse" role="tabpanel" aria-labelledby="heading20" data-parent="#accordionEx1">
                            <div class="card-body">
                                <div class="questions">
                                    <font size="3">These 1: Bei der Vielzahl der Absprachen kommt es schon mal vor, dass etwas übersehen wird. Wir steuern dann nach.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup20" value="77" id="answerGroup_20">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup20" value="78" id="answerGroup_20">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Auf Absprachen kann man sich bei uns verlassen. Wir müssen wenig nachsteuern.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup20" value="79" id="answerGroup_20">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup20" value="80" id="answerGroup_20">Eher Ja</label>
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
                    <div style="font-size:140%">{{ $errors->first('answerGroup11') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup12') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup13') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup14') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup15') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup16') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup17') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup18') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup19') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answerGroup20') }}</div>
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