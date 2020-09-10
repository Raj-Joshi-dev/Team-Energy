 @extends('layouts.app')

 @section('content')

 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Persönlichkeitstest</title>
   <!-- CSRF Token -->
   <meta name="csrf-tkn" content="{{ csrf_token() }}">
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
   <link href="{{ asset('css/ques.css') }}" rel="stylesheet">
 </head>

 <body>
   <form action="{{ route('test') }}" method="post">
     @csrf
     {{ csrf_field() }}
     <div class="container">
       <div class=" preview">
         <div class="questions">
           <h5>Ich im Team - Privater Bereich</h5>
         </div>
         <div class="answerList">
           <h5>Bitte wählen Sie im folgenden, bei jeder Frage zuerst eine der beiden Thesen aus. <br> Danach entscheiden Sie in der ausgewählten Theses zwischen <span style="color: red; "><b>„Ja“ oder „Eher Ja“</b></span>. <br> Dann gehen Sie zur nächsten Frage!</h5>
         </div>

         <!--Accordion wrapper-->
         <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

           <!-- Accordion card -->
           <div>
             @foreach($questions as $question)
             <div class="card">

               <!-- Card header -->

               <div class="card-header" role="tab" id="headingOne">
                 <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse{{$question->tid }}" aria-expanded="false" aria-controls="collapse">
                   <h6 class="mb-0">
                     Frage {{$question->tid }}<i class="fa fa-angle-down"></i> <br>
                   </h6>
                 </a>
               </div>


               <!-- Card body -->
               <div id="collapse{{$question->tid }}" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
                 <div class="card-body">
                   <div class="questions">
                     <font size="3">These 1: {{ $question->these1 }}</font>
                   </div>
                   <ul class="answerList">
                     <li>
                       <label><input type="radio" name="answer[{{ $question->tid }}]" value="ja_x1,ja_y1" {{ old('answer.'.$question->tid) == "ja_x1,ja_y1" ? 'checked' : '' }} id="answerGroup_1">Ja</label>
                     </li>
                     <li>
                       <label><input type="radio" name="answer[{{ $question->tid }}]" value="eherja_x1,eherja_y1" {{ old('answer.'.$question->tid) == "eherja_x1,eherja_y1" ? 'checked' : '' }} id="answerGroup_1">Eher Ja</label>
                     </li>
                   </ul>
                   <div class="questions">
                     <font size="3">These 2: {{ $question->these2 }}</font>
                   </div>
                   <ul class="answerList">
                     <li>
                       <label><input type="radio" name="answer[{{ $question->tid }}]" value="ja_x2,ja_y2" {{ old('answer.'.$question->tid) == "ja_x2,ja_y2" ? 'checked' : '' }} id="answerGroup_1">Ja</label>
                     </li>
                     <li>
                       <label><input type="radio" name="answer[{{ $question->tid }}]" value="eherja_x2,eherja_y2" {{ old('answer.'.$question->tid) == "eherja_x2,eherja_y2" ? 'checked' : '' }} id="answerGroup_1">Eher Ja</label>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
             @endforeach
           </div>
           @if ($errors->any())
           <div class="alert alert-danger">
             <ul>
               @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
               @endforeach
             </ul>
           </div>
           @endif
           <!-- Accordion card -->

         </div>
         <!-- Accordion wrapper -->
         <br>

         <div class="container text-center bottom">
           <button id="submit-btn" style="font-size:100%" class="btn btn-primary btn-lg" value="data">Senden</button>
         </div>
   </form>

 </body>

 </html>

 @endsection