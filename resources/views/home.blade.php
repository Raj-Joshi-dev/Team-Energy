@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <div align="center" class="pb-3"><img src="{{URL::asset('/images/Compass_Trainer_Network_LOGO_green.jpg')}}" alt="Company Pic" height="300" width="1150"></div> -->
        <div align="center" class="pb-3"><img src="/images/Compass_Trainer_Network_LOGO_green.jpg" alt="Company Pic" height="300" width="1150"></div>
        <p style="font-size:120%">Wir bieten Ihnen verschiedene Instrumente an, um als Individuum im Team (z.B. auch als Chef im Team) oder als gesamtes Team noch erfolgreicher zu.</p>
        <p style="font-size:120%">Unsere Fragebogen und die Auswertungen dazu geben Ihnen einen sofortigen, zumindest grob richtigen, Anhaltspunkt. Idealerweise wirken sie zusammen mit unseren Trainingsmaßnahmen, bei denen Sie &bdquo;echte&ldquo; Situationen durchleben und als ganze Pers&ouml;nlichkeit agieren. Beide Elemente, die wissenschaftlich fundierte Auswertung des Fragebogens und das Feedback aus den Erlebnisaktionen erlauben eine optimale Analyse und praxisgerechte Anleitung f&uuml;r die Umsetzung in Ihrem Unternehmensalltag.</p>
        <p style="font-size:120%">Wir beleuchten ein Team aus 3 Perspektiven (Ich im Team, Potentiale im Team und Kultur im Team), um die gewonnenen Erkenntnisse mit den Zielen und Aufgaben des Teams zu vergleichen. Passen Potentiale und Kultur zu den Aufgaben oder liegen die Schwerpunkte &ndash; mit dem Modell gesprochen &ndash; in unterschiedlichen Quadranten. Das gibt die Antwort auf die entscheidende Frage: <strong>wie soll sich das Team kurzfristig aufstellen, gibt es Entwicklungsbedarf und wenn ja, in welche Richtung?</strong></p>
        <p style="font-size:120%">Sie k&ouml;nnen alle Fragebogen &uuml;ber das Internet bearbeiten und erhalten sofort eine Auswertung. Wir erl&auml;utern Ihnen die detaillierten Ergebnisse im pers&ouml;nlichen Gespr&auml;ch.</p>
        <p style="font-size:120%">Weitere Informationen finden Sie im Abschnitt <a href="{{ route('information') }}">Information.</a></p>
    </div>
</div>
@endsection
