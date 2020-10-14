@extends('layouts.app')


@section('content')

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('title', 'Information | Team-Energy')</title>
</head>

<body>
    <div class="container">
        <div class="card border-warning ">
            <div class="card-header" style="font-weight: bold;font-size: 22px">Persönlichkeitstest-Typen</div>
            <div id="accordion" role="tab" aria-multiselectable="true" class="accordion">
                <div class="card multi">
                    <div class="card-body">
                        <div aria-multiselectable="true" class="accordion" id="accorID" role="tablist">
                            <div class="card multi">
                                <div class="card-header" id="headerOne" role="tabpanel">
                                    <h5 class="mb-0">
                                        <button id="acclaimTooltip" style="font-weight: bold;font-size: 20px"
                                            title="Ich im Team" type="button" class="btn btn-light"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne" aria-multiselectable="true">Ich Im Team</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseOne" aria-labelledby="headerOne"
                                    data-parent="#accorID">
                                    <div class="card-body" style="font-size: 17px">Sie lernen die Chancen und Risiken
                                        Ihrer
                                        Pers&ouml;nlichkeit besser kennen. Sie erkennen, wie Sie zu einem fiktiven
                                        &bdquo;Durchschnitt&ldquo; stehen. Sie erhalten Hinweise, ob Sie in Ihrer
                                        beruflichen Funktion Ihre Potentiale aussch&ouml;pfen oder falsch eingesetzt
                                        sind.
                                        Sie k&ouml;nnen bewusste Entscheidungen zu einer gew&uuml;nschten Entwicklung
                                        treffen und erhalten Hinweise auf die Entwicklungsrichtung - und
                                        ma&szlig;nahmen.
                                    </div>
                                </div>
                            </div>

                            <div class="card multi">
                                <div class="card-header" id="headerTwo" role="tabpanel">
                                    <h5 class="mb-0">
                                        <button id="acclaimTooltip" style="font-weight: bold;font-size: 20px"
                                            title="Potentiale im Team" type="button" class="btn btn-light"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">Potentiale im Team</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseTwo" aria-labelledby="headerTwo"
                                    data-parent="#accorID">
                                    <div class="card-body" style="font-size: 17px">Sie sehen die Potentiale aller
                                        Individuen
                                        in Ihrem Team in einer Gesamtschau. Sie erkennen, ob Sie &uuml;berwiegend
                                        &bdquo;von
                                        der gleichen Art&ldquo; oder bunt gemischt&ldquo; sind. Sie erkennen, welche Art
                                        vonAufgaben Ihnen als Team besonders liegen und womit Sie wahrscheinlich
                                        Schwierigkeiten haben. Sie k&ouml;nnen bewusste Entscheidungen zu einer
                                        gew&uuml;nschten Entwicklung treffen und erhalten Hinweise auf die
                                        Entwicklungsrichtung und - ma&szlig;nahmen.
                                    </div>
                                </div>
                            </div>

                            <div class="card multi">
                                <div class="card-header" id="headerThree" role="tabpanel">
                                    <h5 class="mb-0">
                                        <button type="button" id="acclaimTooltip"
                                            style="font-weight: bold;font-size: 20px" title="Kultur im Team"
                                            class="btn btn-light" data-toggle="collapse" data-target="#collapseThree"
                                            aria-expanded="true" aria-controls="collapseThree">Kultur im Team</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseThree" aria-labelledby="headerThree"
                                    data-parent="#accorID">
                                    <div class="card-body" style="font-size: 17px">Die Kultur in einem Team ist mehr und
                                        anders als die Summe der
                                        Einzelpotentiale.<br />
                                        Der Chef pr&auml;gt die Kultur wesentlich, alle (dienst-)&auml;lteren
                                        Mitarbeiter
                                        pr&auml;gen die Kultur st&auml;rker als ein neuer Mitarbeiter.<br />
                                        Sie erkennen Ihre Arbeitskultur und Sie erkennen auch, ob eine weitgehend
                                        einheitliche Auffassung hier&uuml;ber besteht oder ob die Kultur unterschiedlich
                                        wahrgenommen wird. Sie verstehen, warum Sie mit manchen Aufgaben Schwierigkeiten
                                        haben und erkennen, was Ihnen fehlt, um noch erfolgreicher zu arbeiten.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
