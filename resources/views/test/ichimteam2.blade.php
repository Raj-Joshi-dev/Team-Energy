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
                    <h3>Bitte wählen Sie im folgenden, bei jeder Frage zuerst eine der beiden Thesen aus. <br> Danach entscheiden Sie in der ausgewählten Theses zwischen <span style="color: red; "><b>„Ja“ oder „Eher Ja“</b></span>. <br> Dann gehen Sie zur nächsten Frage!</h3>
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
                                    <font size="3">These 1: {{ $question1_these1 }}</font>
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
                                    <font size="3">These 2: {{ $question1_these2 }}</font>
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
                                    <font size="3">These 1: {{ $question2_these1 }}</font>
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
                                    <font size="3">These 2: {{ $question2_these2 }}</font>
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
                                    <font size="3">These 1: {{ $question3_these1 }}</font>
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
                                    <font size="3">These 2: {{ $question3_these2 }}</font>
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
                                    <font size="3">These 1: {{ $question4_these1 }}</font>
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
                                    <font size="3">These 2: {{ $question4_these2 }}</font>
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
                                    <font size="3">These 1: {{ $question5_these1 }}</font>
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
                                    <font size="3">These 2: {{ $question5_these2 }}</font>
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
                                    <font size="3">These 1: {{ $question6_these1 }}</font>
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
                                    <font size="3">These 2: {{ $question6_these2 }}</font>
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
                                    <font size="3">These 1: {{ $question7_these1 }}</font>
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
                                    <font size="3">These 2: {{ $question7_these2 }} </font>
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
                                    <font size="3">These 1: {{ $question8_these1 }}</font>
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
                                    <font size="3">These 2: {{ $question8_these2 }}</font>
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
                                    <font size="3">These 1: {{ $question9_these1 }}</font>
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
                                    <font size="3">These 2: {{ $question9_these2 }} </font>
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
                                    <font size="3">These 1: {{ $question10_these1 }}</font>
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
                                    <font size="3">These 2: {{ $question10_these2 }}</font>
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



                </div>
                <!-- Accordion wrapper -->
                <br>
                <div class="container text-center bottom">
                    <div style="font-size:140%">{{ $errors->first('answer[¹]') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answer[2]') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answer[3]') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answer[4]') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answer[5]') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answer[6]') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answer[7]') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answer[8]') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answer[9]') }}</div>
                    <div style="font-size:140%">{{ $errors->first('answer[10]') }}</div>
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