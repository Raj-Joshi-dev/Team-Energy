@extends('layouts.app')

@section('content')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
<div class="container">
    <h1>Bitte wählen Sie einen Test aus</h1>
    <a style="font-size: 22px" href="{{ route('ques1') }}">Ich Im Team-Privater Bereich</a><br><br>
    <a style="font-size: 22px" href="{{ route('test2') }}">Ich Im Team-Beruflicher Bereich</a><br><br>
    <a style="font-size: 22px" href="{{ route('test3') }}">Kultur im Team</a><br><br>
</div>
</body>
</html>


@endsection
