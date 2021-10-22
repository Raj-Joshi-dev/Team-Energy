@extends('layouts.app')

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if($team_name == null)
        <title>{{ $user_name }} - Privater Bereich_#{{ $result_id }} | Team-Energy</title>
    @else
        <title>{{ $user_name }} - Privater Bereich_#{{ $result_id }}_{{ $team_name }} | Team-Energy</title>
    @endif
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .center {
            margin: 0 auto;
            text-align: center;
        }

        .text {
            font-family: 'Arial', serif;
            font-size: 14px;
        }

        @media print {
            #printPageButton {
                display: none !important;
            }

            #noprint {
                display: none !important;
            }

            @page {
                margin: 0;
            }

            body {
                margin: 1.6cm;
            }
        }
    </style>
</head>
@section('content')
    <div class="container">
        @if(auth()->user()->is_admin)

        @else
            <a id="noprint" class="btn btn-warning float-right" href="{{ route('dashboard') }}" role="button"><i
                    class="fas fa-arrow-circle-left"></i>&nbsp;Zurück zu Dashboard</a>
        @endif
        <h5>Name: {{ $user_name }}</h5>
        @if($team_name == null)
            <h5>Ergebnis-ID: {{ $result_id }}</h5>
        @else
            <h5>Team Name: {{ $team_name }}</h5>
            <h5>Ergebnis-ID: {{ $result_id }}</h5>
        @endif

    </div>
    <body>
    <div class="center">
        <!-- SVG dimensions -->
        <svg width="820" height="820" padding="150" xmlns="http://www.w3.org/2000/svg">

            <!-- Inner-Rectangle -->
            <rect x="70" y="110" width="710" height="590" fill="none" stroke="black" stroke-width="border"/>

            <!-- user data container -->
            <g id="data"></g>

            <!-- Cartesian Axes -->

            <!-- Y-Axis -->
            <g>
                <path d="M410 145 V 665" stroke="black" stroke-width="1"></path>
            </g>

            <!-- X-Axis -->
            <g>
                <path d="M150 410 H 665" stroke="black" stroke-width="1"></path>
            </g>

            <!-- QUADRANT 1 -->

            <!-- Top point - Stabilität -->
            <text class="text" transform="translate(385,135)">Stabilität</text>

            <!-- QUADRANT 2 -->

            <!-- Side-right point - Selbstverwirklichung -->
            <text class="text" transform="translate(640,400)">Selbstverwirklichung</text>


            <!-- QUADRANT 3 -->

            <!-- Bottom point - Flexibilität -->
            <text class="text" transform="translate(380,685)">Flexibilität</text>


            <!-- QUADRANT 4 -->

            <!-- Side-left point - Gemeinsinn -->
            <text class="text" transform="translate(90,400)">Gemeinsinn</text>

            <text class="description" style="font-weight: bold;" x="350" y="100">ICH IM TEAM - Privat</text>
            <text class="description" x="70" y="715">Hier sehen Sie das Ergebnis aus Ihrer Eingabe zum</text>
            <text class="description" style="font-weight: bold;" x="435" y="715">privaten Bereich.</text>
            <text class="description" x="563" y="715">Es zeigt Ihnen den Schwerpunkt/</text>
            <text class="description" x="70" y="735">Mittelpunkt der vier Seiten Ihrer Persönlichkeit. Diese kann zum
                beruflichen Bereich Abweichungen aufzeigen,
            </text>
            <text class="description" x="70" y="755">weil ein bestimmtes Rollenverhalten im beruflichen Kontext erwartet
                wird.
            </text>
            <text class="description" style="font-size: 12px;" x="70" y="775">Wir empfehlen Ihnen dazu auch die
                Ausführungen im Kapitel 10 und 11 aus dem Buch:
            </text>
            <text class="description" style="font-size: 12px;" x="70" y="792">,,Dynamik in Gruppen“ von Eberhard Stahl
                aus dem Beltz Verlag PVU
            </text>
            <text class="description" style="font-size: 12px;" x="70" y="810">ISBN 3-407-27515-0</text>


        </svg>
        <div class="center">
            <button class="btn btn-primary" id="printPageButton" onClick="window.print();">Downloaden</button>
        </div>
    </div>


    <script type="application/javascript">
        const container = document.getElementById('data');
        const center = 410;
        const range = 250;
        const ns = 'http://www.w3.org/2000/svg';
        const maxUsers = 1;
        const useBackground = maxUsers <= 5;
        let added = 0;
        let userG = document.createElementNS(ns, 'g');

        function addUser(pts, label) {
            added += 1;

            // label
            let hue = added * 40 % 255;
            let color = `hsl(${hue}, 80%, 60%)`;
            let text = document.createElementNS(ns, 'text');
            let textX = center + range;
            let textY = center - range - 40 + added * 15;
            let pipX = textX - 6;
            let pipY = textY - 4;
            text.appendChild(document.createTextNode(label));
            text.setAttribute('x', textX)
            text.setAttribute('y', textY);
            text.classList.add('text');
            userG.appendChild(text);

            // label pip to quadrant pip
            // let line = document.createElementNS(ns, 'path');
            // line.setAttribute('d', `M${pipX},${pipY} L${pts[0].x},${pts[0].y}`);
            // line.setAttribute('stroke', 'gray')
            // userG.appendChild(line);

            // label pip
            let pip = document.createElementNS(ns, 'circle');
            pip.setAttribute('cx', pipX)
            pip.setAttribute('cy', pipY)
            pip.setAttribute('r', 5)
            pip.setAttribute('fill', '#ff0000')
            userG.appendChild(pip);

            // background
            let bg = document.createElementNS(ns, 'path');
            let path = pts.map(({x, y}, n) => {
                return `${n === 0 ? 'M' : 'L'}${x},${y} `;
            }).join('') + 'Z';
            bg.setAttribute('d', path);
            if (useBackground) {
                bg.setAttribute('fill', 'rgba(0, 0, 200, 0.2)');
                bg.setAttribute('stroke', 'none');
            } else {
                bg.setAttribute('fill', 'none');
                bg.setAttribute('stroke', 'steelblue');
            }
            userG.appendChild(bg);

            //edge points
            pts.forEach(({x, y}, n) => {
                let node = document.createElementNS(ns, 'circle');
                node.setAttribute('cx', ~~x)
                node.setAttribute('cy', ~~y)
                node.setAttribute('r', 5)
                node.setAttribute('fill', color)
                userG.appendChild(node);
            })

            container.appendChild(userG);
        }

        function generateRandomUser() {
            const user = consumeAPI()
            return calculatePlot(user)
        }

        function consumeAPI() {

            var x_quad1 = {{ $quadrant1_x }};
            var y_quad1 = {{ $quadrant1_y }};

            var x_quad2 = {{ $quadrant2_x }};
            var y_quad2 = {{ $quadrant2_y }};

            var x_quad3 = {{ $quadrant3_x }};
            var y_quad3 = {{ $quadrant3_y }};

            var x_quad4 = {{ $quadrant4_x }};
            var y_quad4 = {{ $quadrant4_y }};

            return {
                x1: (x_quad1 * range),
                y1: (y_quad1 * range),
                x2: (x_quad2 * range),
                y2: (y_quad2 * range),
                x3: (x_quad3 * range),
                y3: (y_quad3 * range),
                x4: (x_quad4 * range),
                y4: (y_quad4 * range)
            }
        }

        function calculatePlot(user) {
            return [{
                x: center + user.x1,
                y: center - user.y1
            }, {
                x: center + user.x2,
                y: center - user.y2
            }, {
                x: center + user.x3,
                y: center - user.y3
            }, {
                x: center + user.x4,
                y: center - user.y4
            }]
        }

        const additionReducer = (accumulator, currentValue) => {
            return accumulator + currentValue
        }

        function calculateMidPoint(plot) {
            // console.log(plot)
            let node = document.createElementNS(ns, 'circle');
            let color = '#ff0000'
            node.setAttribute('cx', (plot.map(point => point.x).reduce(additionReducer, 0)) / 4)
            node.setAttribute('cy', (plot.map(point => point.y).reduce(additionReducer, 0)) / 4)
            node.setAttribute('r', 5)
            node.setAttribute('fill', color)
            userG.appendChild(node);

        }

        for (let i = 0; i < maxUsers; i++) {
            let plot = generateRandomUser();
            let label = `Mittelpunkt`;
            addUser(plot, label);
            calculateMidPoint(plot);
        }
    </script>
    </body>

</html>
@endsection
