@extends('layouts.app')

<!DOCTYPE html>
<html>

<head>
    <script src="https://d3js.org/d3.v6.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pdfkit@0.10.0/js/pdfkit.standalone.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/svg-to-pdfkit@0.1.8/source.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-type" content="text/html; charset=UTF8">
    <script src="js/potentialimTeam.js"></script>
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
</head>
@section('content')

<body>
    <div align="center">
        <div id="graph"></div>
        <button id="download">Downloaden PDF</button>
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

    var xScale = d3.scaleLinear().domain([1, -1]).range([width - padding, padding]);
    var yScale = d3.scaleLinear().domain([-1, 1]).range([height - padding, padding]);

    // y axis
    var yAxis = d3.axisLeft()
        // .orient("left")
        .tickValues([])
        .scale(yScale);

    // x axis
    var xAxis = d3.axisBottom()
        // .orient("bottom")
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

    var x_value = @json($potential_point_x);
    var y_value = @json($potential_point_y);

    var data = [{
        x: x_value,
        y: y_value

    }];

    vis.append("text")
        .style("font", "16px")
        .attr("font-weight", 700)
        .attr("transform", "translate(340,50)")
        .text("POTENTIAL IM TEAM")



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


    vis.selectAll("point")
        .data(data)
        .enter().append("circle")
        .attr("class", "point")
        .attr("r", 5)
        .style("fill", "purple")
        .attr("cx", function (p) {
            return xScale(p.x);
        })
        .attr("cy", function (p) {
            return yScale(p.y);
        });


    vis.append("text")
        .style("font", "15px 'Arial'")
        .attr("transform", "translate(70,710)")
        .attr("font-weight", 300)
        .text("Hier sehen Sie das Ergebnis aus der Eingabe ")
        .append("tspan")
        .attr("font-weight", 700)
        .text("„Ich im Team privat und beruflich“")
        .append("tspan")
        .attr("font-weight", 300)
        .text(" aller Team-Mitglieder.")

    vis.append("text")
        .style("font", "15px 'Arial'")
        .attr("transform", "translate(70,730)")
        .text(
            "Es zeigt Ihnen den Mittelwert des privaten und beruflichen Bereiches jedes einzelnen Teammitglieds in der "
        );

    vis.append("text")
        .style("font", "15px 'Arial'")
        .attr("transform", "translate(70,750)")
        .text("Übersicht. Wir nennen dies die „Potentiale im Team“.");

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
