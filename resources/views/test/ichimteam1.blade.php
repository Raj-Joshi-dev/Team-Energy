@extends('layouts.app')

@section('content')


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@section('title','Ich im Team - Privat | Team-Energy')</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{ asset('css/ques.css') }}" rel="stylesheet">
    </head>

    <body>
    <form action="{{ route('store1') }}" method="post">
        @csrf
        {{ csrf_field() }}
        <div class="container">
            <div class="preview">
                <div class="questions">
                    <a class="btn btn-warning float-right" href="{{ route('dashboard') }}" role="button"><i
                            class="fas fa-arrow-circle-left"></i>&nbsp;Zurück zu Dashboard</a>
                    <h4>Ich im Team - Privater Bereich</h4>
                </div>
                <div class="answerList">
                    <h5>Bitte wählen Sie im folgenden, bei jeder Frage zuerst eine der beiden Thesen aus. <br> Danach
                        entscheiden Sie in der ausgewählten Theses zwischen <span style="color: red; "><b>„Ja“ oder
                                „Eher Ja“</b></span>. <br> Dann gehen Sie zur nächsten Frage!</h5>
                </div>
            @include('partials.alerts')
            <!-- Accordion wrapper -->
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                    <!-- Accordion card -->
                    <div>
                        @foreach($questions as $question)
                            <div class="card">

                                <!-- Card header -->

                                <div class="card-header" role="tab" id="headingOne">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx"
                                       href="#collapse{{ $question->ques_id }}" aria-expanded="false"
                                       aria-controls="collapse">
                                        <h5 class="mb-0">
                                            Frage {{ $question->ques_id }}&nbsp;<i class="fa fa-angle-down"></i> <br>
                                        </h5>
                                    </a>
                                </div>


                                <!-- Card body -->
                                <div id="collapse{{ $question->ques_id }}" class="collapse" role="tabpanel"
                                     aria-labelledby="headingOne" data-parent="#accordionEx">
                                    <div class="card-body">
                                        <div class="questions">
                                            These 1: {{ $question->these1 }}
                                        </div>
                                        <ul class="answerList">
                                            <li>
                                                <label><input type="radio" name="answer[{{ $question->ques_id }}]"
                                                              value="ja_x1,ja_y1"
                                                              {{ old('answer.'.$question->ques_id) == "ja_x1,ja_y1" ? 'checked' : '' }}
                                                              id="answerGroup_1"> Ja</label>
                                            </li>
                                            <li>
                                                <label><input type="radio" name="answer[{{ $question->ques_id }}]"
                                                              value="eherja_x1,eherja_y1"
                                                              {{ old('answer.'.$question->ques_id) == "eherja_x1,eherja_y1" ? 'checked' : '' }}
                                                              id="answerGroup_1"> Eher Ja</label>
                                            </li>
                                        </ul>
                                        <div class="questions">
                                            These 2: {{ $question->these2 }}
                                        </div>
                                        <ul class="answerList">
                                            <li>
                                                <label><input type="radio" name="answer[{{ $question->ques_id }}]"
                                                              value="ja_x2,ja_y2"
                                                              {{ old('answer.'.$question->ques_id) == "ja_x2,ja_y2" ? 'checked' : '' }}
                                                              id="answerGroup_1"> Ja</label>
                                            </li>
                                            <li>
                                                <label><input type="radio" name="answer[{{ $question->ques_id }}]"
                                                              value="eherja_x2,eherja_y2"
                                                              {{ old('answer.'.$question->ques_id) == "eherja_x2,eherja_y2" ? 'checked' : '' }}
                                                              id="answerGroup_1"> Eher Ja</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Accordion card -->

                </div>
                <!-- Accordion wrapper -->
                <br>

                <div class="container text-center bottom">
                    <button id="submit-btn" class="btn btn-primary"
                            value="data"><i class="fas fa-check"></i>&nbsp;Senden
                    </button>
                    <a class="btn btn-secondary" href="{{ url()->previous() }}" role="button"><i
                            class="fas fa-times"></i>&nbsp;Absagen</a>
                </div>
            </div>
        </div>
    </form>


    </body>

@endsection
