@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>

<head>
  <script  data-require="d3@3.5.17" data-semver="3.5.17" src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.js"></script>
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
  <script  src="https://cdn.jsdelivr.net/npm/pdfkit@0.10.0/js/pdfkit.standalone.js"></script>
  <script  src="https://cdn.jsdelivr.net/npm/svg-to-pdfkit@0.1.8/source.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
  var width = 750,
    height = 750,
    padding = 70;

  // svg container
  var vis = d3.select("#graph")
    .append("svg:svg")
    .attr("width", width)
    .attr("height", height);

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

  vis.selectAll(".xaxis text") // select all the text elements for the xaxis
    .attr("transform", function(d) {
      return "translate(" + this.getBBox().height * -2 + "," + this.getBBox().height + ")rotate(-45)";
    });

  vis.append("text")
    .attr("text-anchor", "midde")
    .attr("transform", "translate(30,370)")
    .text("Gemeinsinn");

  vis.append("text")
    .attr("text-anchor", "midde")
    .attr("transform", "translate(345,700)")
    .text("Flexibilität");

  vis.append("text")
    .attr("text-anchor", "midde")
    .attr("transform", "translate(345,60)")
    .text("Stabilität");

  vis.append("text")
    .attr("text-anchor", "midde")
    .attr("transform", "translate(600,370)")
    .text("Selbstverwirklichung");

  vis.selectAll(".point")
    .data(data)
    .enter().append("circle")
    .attr("class", "point")
    .attr("r", 5)
    .style("fill", "steelblue")
    .attr("cx", function(d) {
      return xScale(d.x);
    })
    .attr("cy", function(d) {
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
    .attr("cx", function(d) {
      return xScale(d.x);
    })
    .attr("cy", function(d) {
      return yScale(d.y);
    });

  const svgToPdfExample = (svg) => {
    const doc = new window.PDFDocument();
    const chunks = [];
    const stream = doc.pipe({
      // writable stream implementation
      write: (chunk) => chunks.push(chunk),
      end: () => {
        const pdfBlob = new Blob(chunks, {
          type: "application/pdf",
        });
        var blobUrl = URL.createObjectURL(pdfBlob);
        //window.open(`${blobUrl}?customfilename.pdf`);

        /* custom file name download */
        const a = document.createElement("a");
        document.body.appendChild(a);
        a.style = "display: none";
        a.href = blobUrl;
        a.download = "graph.pdf"; // <---- 👈 file name
        a.click();
        window.URL.revokeObjectURL(url);
      },
      // readable streaaam stub iplementation
      on: (event, action) => {},
      once: (...args) => {},
      emit: (...args) => {},
    });

    window.SVGtoPDF(doc, svg, 0, 0);

    doc.end();
  };

  document.getElementById("download").addEventListener("click", function() {
    const svgElement = document.getElementById("graph");
    svgToPdfExample(svgElement.innerHTML);
  });
</script>

</html>
@endsection