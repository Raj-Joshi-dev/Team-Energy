@extends('layouts.app')

@section('content')
    <div align="center;padding-bottom:100px;"><img src="{{URL::asset('/images/Compass_Trainer_Network_LOGO_green.jpg')}}" alt="Company Pic" height="300" width="1150"></div>

    <p style="font-size:110%">Wir bieten Ihnen verschiedene Instrumente an, um als Individuum im Team (z.B. auch als Chef im Team) oder als gesamtes Team noch erfolgreicher zu <sein class="br"></sein>

    <p style="font-size:110%">Unsere Fragebogen und die Auswertungen dazu geben Ihnen einen sofortigen, zumindest grob richtigen, Anhaltspunkt. Idealerweise wirken sie zusammen mit unseren Trainingsmaßnahmen, bei denen Sie &bdquo;echte&ldquo; Situationen durchleben und als ganze Pers&ouml;nlichkeit agieren. Beide Elemente, die wissenschaftlich fundierte Auswertung des Fragebogens und das Feedback aus den Erlebnisaktionen erlauben eine optimale Analyse und praxisgerechte Anleitung f&uuml;r die Umsetzung in Ihrem Unternehmensalltag.</p>

    <p style="font-size:110%">Wir beleuchten ein Team aus 3 Perspektiven (Ich im Team, Potentiale im Team und Kultur im Team), um die gewonnenen Erkenntnisse mit den Zielen und Aufgaben des Teams zu vergleichen. Passen Potentiale und Kultur zu den Aufgaben oder liegen die Schwerpunkte &ndash; mit dem Modell gesprochen &ndash; in unterschiedlichen Quadranten. Das gibt die Antwort auf die entscheidende Frage: <strong>wie soll sich das Team kurzfristig aufstellen, gibt es Entwicklungsbedarf und wenn ja, in welche Richtung?</strong></p>

    <p style="font-size:110%">Sie k&ouml;nnen alle Fragebogen &uuml;ber das Internet bearbeiten und erhalten sofort eine Auswertung. Wir erl&auml;utern Ihnen die detaillierten Ergebnisse im pers&ouml;nlichen Gespr&auml;ch.</p>

    <p style="font-size:110%">Weitere Informationen finden Sie im Abschnitt <a href="{{ route('information') }}">Information.</a></p>
@endsection
