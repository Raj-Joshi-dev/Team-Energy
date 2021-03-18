@extends('layouts.app')

<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $user_name }} - Beruflicher Bereich_#{{ $result_id }}_{{ $team_name }} | Team-Energy</title>
    <script data-require="d3@3.5.17" data-semver="3.5.17" src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pdfkit@0.10.0/js/pdfkit.standalone.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/svg-to-pdfkit@0.1.8/source.js"></script>
{{--    <script src="js/ichimTeamBeruf.js"></script>--}}

    <style>
        body {
            font: 15px Arial;
        }

        path {
            stroke: steelblue;
            stroke-width: 2;
        }

        .axis path,
        .axis line {
            fill: none;
            stroke: grey;
            stroke-width: 1;
            shape-rendering: crispEdges;
        }
    </style>
    <style type="text/css" media="print">
        @media print {
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
        <h5>Name: {{ $user_name }}</h5>
        <h5>Team Name: {{ $team_name }}</h5>
        <h5>Ergebnis-ID: {{ $result_id }}</h5>
    </div>

<body>
    <div align="center">
        <div id="graph"></div>
        <button class="btn btn-primary" onclick="window.print()" value="Print" >Downloaden</button>
    </div>
    <svg></svg>
    <canvas id="canvasId"></canvas>
</body>
<script type="application/javascript">
    // graph dimensions
    var width = 820,
        height = 820,
        padding = 150;

    // svg container
    var vis = d3.select("#graph")
        .append("svg")
        // .attr("style", "outline: solid black;")
        .attr("width", height)
        .attr("height", width);

    var border = 1;
    var bordercolor = 'black';

    vis.append("rect")
        .attr("x", 70)
        .attr("y", 65)
        .attr("height", 630)
        .attr("width", 700)
        .style("stroke", bordercolor)
        .style("fill", "none")
        .style("stroke-width", border);

    var xScale = d3.scale.linear().domain([1, -1]).range([width - padding, padding]);
    var yScale = d3.scale.linear().domain([-1, 1]).range([height - padding, padding]);

    // y axis
    var yAxis = d3.svg.axis()
        .orient("left")
        .tickValues([])
        .scale(yScale);

    // x axis
    var xAxis = d3.svg.axis()
        .orient("bottom")
        .tickValues([])
        .scale(xScale);


    var xAxisPlot = vis.append("g")
        .attr("class", "axis axis--x")
        .attr("transform", "translate(0," + (height / 2) + ")")
        .call(xAxis) //.tickSize(-height, 0));

    var yAxisPlot = vis.append("g")
        .attr("class", "axis axis--y")
        .attr("transform", "translate(" + (width / 2) + ",0)")
        .call(yAxis) //.tickSize(-width, 0));

    var x_quad1 = @json($quadrant1_x);
    var y_quad1 = @json($quadrant1_y);

    var x_quad2 = @json($quadrant2_x);
    var y_quad2 = @json($quadrant2_y);

    var x_quad3 = @json($quadrant3_x);
    var y_quad3 = @json($quadrant3_y);

    var x_quad4 = @json($quadrant4_x);
    var y_quad4 = @json($quadrant4_y);

    var data = [{
        x: x_quad1,
        y: y_quad1
    }, {
        x: x_quad2,
        y: y_quad2
    }, {
        x: x_quad3,
        y: y_quad3
    }, {
        x: x_quad4,
        y: y_quad4
    }];

    var data2 = data.concat([{
        x: d3.sum(data, d => d.x) / data.length,
        y: d3.sum(data, d => d.y) / data.length
    }]);

    vis.append("text")
        .style("font", "16px")
        .attr("font-weight", 700)
        .attr("transform", "translate(340,50)")
        .text("ICH IM TEAM")
        .append("tspan")
        .attr("font-weight", 700)
        .text(" - BERUFLICH")



    vis.selectAll(".xaxis text") // select all the text elements for the xaxis
        .attr("transform", function (d) {
            return "translate(" + this.getBBox().height * -2 + "," + this.getBBox().height + ")rotate(-45)";
        });

    vis.append("text")
        .style("font", "14px 'Arial'")
        .attr("transform", "translate(90,400)")
        .text("Gemeinsinn");

    vis.append("text")
        .style("font", "14px 'Arial'")
        .attr("transform", "translate(380,685)")
        .text("Flexibilität");

    vis.append("text")
        .style("font", "14px 'Arial'")
        .attr("transform", "translate(375,145)")
        .text("Stabilität");

    vis.append("text")
        .style("font", "14px 'Arial'")
        .attr("transform", "translate(640,400)")
        .text("Selbstverwirklichung");

    vis.selectAll(".point")
        .data(data)
        .enter().append("circle")
        .attr("class", "point")
        .attr("r", 5)
        .style("fill", "steelblue")
        .attr("cx", function (d) {
            return xScale(d.x);
        })
        .attr("cy", function (d) {
            return yScale(d.y);
        });

    vis.append('path')
        .datum(data)
        .attr('fill', '#00FFFF')
        .attr("opacity", "0.5")
        .attr('stroke', '#69b3a2')
        .attr('stroke-width', 1.5)
        .attr('d', d => d3.svg.line()
            .x(d => xScale(d.x))
            .y(d => yScale(d.y))(d) + 'Z')

    vis.selectAll(".point")
        .data(data2)
        .enter().append("circle")
        .attr("class", "point")
        .attr("r", 5)
        .style("fill", "red")
        .attr("cx", function (d) {
            return xScale(d.x);
        })
        .attr("cy", function (d) {
            return yScale(d.y);
        });

    vis.append("text")
        .style("font", "15px 'Arial'")
        .attr("transform", "translate(70,710)")
        .attr("font-weight", 300)
        .text("Hier sehen Sie das Ergebnis aus Ihrer Eingabe zum ")
        .append("tspan")
        .attr("font-weight", 700)
        .text("beruflichen Bereich")
        .append("tspan")
        .attr("font-weight", 300)
        .text(". Es zeigt Ihnen den Schwerpunkt/")

    vis.append("text")
        .style("font", "15px 'Arial'")
        .attr("transform", "translate(70,730)")
        .text(
            "Mittelpunkt der vier Seiten Ihrer Persönlichkeit. Diese kann zum beruflichen Bereich Abweichungen aufzeigen,"
        );

    vis.append("text")
        .style("font", "15px 'Arial'")
        .attr("transform", "translate(70,750)")
        .text("weil ein bestimmtes Rollenverhalten im beruflichen Kontext erwartet wird.");

    vis.append("text")
        .style("font", "12px 'Arial'")
        .attr("transform", "translate(70,770)")
        .text("Wir empfehlen Ihnen dazu auch die Ausführungen im Kapitel 10 und 11 aus dem Buch:");

    vis.append("text")
        .style("font", "12px 'Arial'")
        .attr("transform", "translate(70,790)")
        .text("„Dynamik in Gruppen“ von Eberhard Stahl aus dem Beltz Verlag PVU");

    vis.append("text")
        .style("font", "12px 'Arial'")
        .attr("transform", "translate(70,810)")
        .text("ISBN 3-407-27515-0");

</script>

</html>
@endsection
