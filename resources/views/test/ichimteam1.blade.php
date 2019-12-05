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
            <form action="{{ route('store') }}" method="post">
                @csrf
                <div class="questions">
                    <h2>Ich im Team - Privater Bereich</h2>
                </div>
                <div class="answerList">
                    <h3>Bitte wählen Sie im folgenden, bei jeder Frage zuerst eine der beiden Thesen aus. <br> Danach entscheiden Sie in der ausgewählten Theses zwischen  <span style="color: red; "><b>„Ja“ oder „Eher Ja“</b></span>. <br> Dann gehen Sie zur nächsten Frage!</h3>
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
                                    <font size="3">These 1: Ich fahre gerne an ein bekanntes und bewährtes Urlaubsziel zurück. Da weiß ich was ich habe.</font>
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
                                    <font size="3">These 2: Im Urlaub suche ich neue unbekannte Ziele. Mich reizt das Neue.</font>
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
                                    <font size="3">These 1: Ich bevorzuge ausgesuchte Bekanntschaften und Gespräche mit Tiefgang.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup2" value="1" id="answerGroup_2">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup2" value="2" id="answerGroup_2">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Mich interessieren neue Bekanntschaften und schnell ins Gespräch zu kommen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup2" value="3" id="answerGroup_2">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup2" value="4" id="answerGroup_2">Eher Ja</label>
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
                                    <font size="3">These 1: Jeder hat mal einen schlechten Tag. Dafür zeige ich auch Verständnis.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup3" value="1" id="answerGroup_3">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup3" value="2" id="answerGroup_3">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Auch als Privatperson bin ich Rollenwerwartungen ausgesetzt. Schwäche und Rückzug akzeptiere ich nicht.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup3" value="3" id="answerGroup_3">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup3" value="4" id="answerGroup_3">Eher Ja</label>
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
                                    <font size="3">These 1: Ich habe meinen privaten Bereich weitgehend durchdacht und geordnet. Um mich richtig wohl zu fühlen brauche ich ein gewisses Maß an Berechenbarkeit und Sicherheit.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup4" value="1" id="answerGroup_4">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup4" value="2" id="answerGroup_4">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Im privaten Bereich bin ich eher spontan und flexibel. Mein Privatbereich soll Aufregendes und Überraschungen bieten.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup4" value="3" id="answerGroup_4">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup4" value="4" id="answerGroup_4">Eher Ja</label>
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
                                    <font size="3">These 1: Bei uns zuhause gibt es ein paar feste Regeln (Essenszeiten, Familienzeiten,..), die uns helfen ein erfülltes Familienleben zu haben.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup5" value="1" id="answerGroup_5">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup5" value="2" id="answerGroup_5">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Bei uns zuhause geht es vor allem nach Zweckmäßigkeit. Wer Hunger hat, isst etwas, .. usw.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup5" value="3" id="answerGroup_5">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup5" value="4" id="answerGroup_5">Eher Ja</label>
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
                                    <font size="3">These 1: Wenn wir in einer großen Gruppe Essen gehen, finde ich es eine schöne Geste, wenn wir die Rechnung durch die Anzahl der Köpfe teilen – auch wenn ich mehr zahle als ich konsumiert habe.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup6" value="1" id="answerGroup_6">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup6" value="2" id="answerGroup_6">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Mir ist es lieber, wenn jeder seine eigene Rechnung zahlt. Ich will weder von anderen „subventioniert“ werden, noch für andere mitzahlen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup6" value="3" id="answerGroup_6">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup6" value="4" id="answerGroup_6">Eher Ja</label>
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
                                    <font size="3">These 1: Vertrautes Miteinander ist mir wichtiger als persönliche Interessen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup7" value="1" id="answerGroup_7">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup7" value="2" id="answerGroup_7">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Meine persönlichen Hobbies und Interessen sind meine stärktste Kraftquelle.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup7" value="3" id="answerGroup_7">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup7" value="4" id="answerGroup_7">Eher Ja</label>
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
                                    <font size="3">These 1: Wenn ich mich mit Freunden treffen will, machen wir meist einen Termin aus.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup8" value="1" id="answerGroup_8">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup8" value="2" id="answerGroup_8">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Mit Freunden treffe ich mich meist spontan?</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup8" value="3" id="answerGroup_8">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup8" value="4" id="answerGroup_8">Eher Ja</label>
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
                                    <font size="3">These 1: Geld ist Mittel zum Zweck. In einer Notlage würde ich Freunden und Angehörigen helfen oder mir helfen lassen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup9" value="1" id="answerGroup_9">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup9" value="2" id="answerGroup_9">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Ein finanzielles Polster ist wichtig für die Unabhängigkeit. Jeder ist verantwortlich für Notlagen vorzusorgen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup9" value="3" id="answerGroup_9">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup9" value="4" id="answerGroup_9">Eher Ja</label>
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
                                    <font size="3">These 1: Die Welt wird besser, wenn jeder mehr auf seine Mitmenschen eingeht.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup10" value="1" id="answerGroup_10">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup10" value="2" id="answerGroup_10">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Die Welt wird besser, wenn jeder bei sich selbst anfängt, Dinge besser zu machen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup10" value="3" id="answerGroup_10">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup10" value="4" id="answerGroup_10">Eher Ja</label>
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
                                    <font size="3">These 1: Manchmal halte ich notwendige Kritik zurück, weil ich Andere nicht verletzen will.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup11" value="1" id="answerGroup_11">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup11" value="2" id="answerGroup_11">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Für eine wirklich gute und stabile Beziehung halte ich es für notwendig, dass ich auch offen die Meinung sage.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup11" value="3" id="answerGroup_11">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup11" value="4" id="answerGroup_11">Eher Ja</label>
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
                                    <font size="3">These 1: Auf Schwächere muss man Rücksicht nehmen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup12" value="1" id="answerGroup_12">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup12" value="2" id="answerGroup_12">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Auch Schwächere müssen sich bemühen und dürfgen es sich nicht bequem machen. </font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup12" value="3" id="answerGroup_12">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup12" value="4" id="answerGroup_12">Eher Ja</label>
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
                                    <font size="3">These 1: Im Sport tobe ich mich so richtig aus</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup13" value="1" id="answerGroup_13">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup13" value="2" id="answerGroup_13">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Im Sport habe ich ein Trainingsprogramm und ein klares Ziel</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup13" value="3" id="answerGroup_13">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup13" value="4" id="answerGroup_13">Eher Ja</label>
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
                                    <font size="3">These 1: Man sollte Dinge ausdiskutieren, bis ein Kompromiss gefunden ist, mit dem Alle leben können.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup14" value="1" id="answerGroup_14">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup14" value="2" id="answerGroup_14">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Wenn nach einer angemessenen Zeit keine Einigung zu erzielen ist, sollte einfach abgestimmt werden.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup14" value="3" id="answerGroup_14">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup14" value="4" id="answerGroup_14">Eher Ja</label>
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
                                    <font size="3">These 1: Wenn jemand aus meinem Bekanntenkreis ein Problem hat, bin ich oft ein Ansprechpartner, der Trost spendet.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup15" value="1" id="answerGroup_15">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup15" value="2" id="answerGroup_15">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Ich versuche Hilfe zur Selbsthilfe zu geben. Am Ende muss jeder lernen, sich selbst zu helfen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup15" value="3" id="answerGroup_15">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup15" value="4" id="answerGroup_15">Eher Ja</label>
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
                                    <font size="3">These 1: Ich vertraue meinem Partner/meinem besten Freund 100% und hinterfrage nicht.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup16" value="1" id="answerGroup_16">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup16" value="2" id="answerGroup_16">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Jeder Mensch ist Versuchungen ausgesetzt. Es ist weltfremd und unverantwortlich, blind zu vertrauen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup16" value="3" id="answerGroup_16">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup16" value="4" id="answerGroup_16">Eher Ja</label>
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
                                    <font size="3">These 1: Beim Skifahren sollte der Langsamste das Tempo bestimmen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup17" value="1" id="answerGroup_17">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup17" value="2" id="answerGroup_17">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Es sollten Leistungsgruppen gebildet werden. Man kann sich ja in Abständen treffen.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup17" value="3" id="answerGroup_17">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup17" value="4" id="answerGroup_17">Eher Ja</label>
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
                                    <font size="3">These 1: In Liebesfragen orientiere ich mich rein nach meinem Bauchgefühl.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup18" value="1" id="answerGroup_18">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup18" value="2" id="answerGroup_18">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Eine langfristig erfüllende Beziehung ist nur möglich, wenn gleichartige Grundhaltungen und gemeinsame Ziele gegeben sind.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup18" value="3" id="answerGroup_18">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup18" value="4" id="answerGroup_18">Eher Ja</label>
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
                                    <font size="3">These 1: Ich spende gerne und oft.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup19" value="1" id="answerGroup_19">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup19" value="2" id="answerGroup_19">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Wenn Personen unverschuldet in Not geraten helfe ich gezielt.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup19" value="3" id="answerGroup_19">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup19" value="4" id="answerGroup_19">Eher Ja</label>
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
                                    <font size="3">These 1: Ich spende gerne und oft.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup20" value="1" id="answerGroup_20">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup20" value="2" id="answerGroup_20">Eher Ja</label>
                                    </li>
                                </ul>
                                <div class="questions">
                                    <font size="3">These 2: Wenn Personen unverschuldet in Not geraten helfe ich gezielt.</font>
                                </div>
                                <ul class="answerList">
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup20" value="3" id="answerGroup_20">Ja</label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="answerGroup20" value="4" id="answerGroup_20">Eher Ja</label>
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
                    <button id="submit-btn" style="font-size:150%" class="btn btn-primary btn-lg" value="data">Senden</button>
                </div>
            </form>
            <br><br>
        </div>
    </div>


</body>

</html>

@endsection