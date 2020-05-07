<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
  <script src="https://www.chartjs.org/samples/latest/utils.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
  <title></title>
  <style>
    button {
      margin-top: 30px;
      padding: 10px 20px;
      border-radius: 0;
    }
  </style>
</head>

<body>

  <div align="center">
    <div style="width:85%">
      <canvas id="bubbleChart"></canvas>
    </div>
  </div>
  <div align="center">
    <button type="button" id="download-pdf">Ergebnis Herunterladen</button>
  </div>


  <script type="application/javascript">
    window.onload = function() {
      var x_value = @json($x);
      var y_value = @json($y);
      var ctx = document.getElementById("bubbleChart").getContext('2d');
      window.myBubble = new Chart(ctx, {
        type: 'bubble',
        data: {
          datasets: [{
            label: ["Ich im Team - Privater Bereich"],
            backgroundColor: "rgba(193,46,12,0.2)",
            borderColor: "rgba(193,46,12,1)",
            data: [{
                x: -10,
                y: -10,
                r: 0,
              },
              {
                x: 10,
                y: 10,
                r: 0,
              },
              {
                x: -10,
                y: 10,
                r: 0,
              },
              {
                x: 10,
                y: -10,
                r: 0,
              },
              // change value below
              {
                x: x_value,
                y: y_value,
                r: 60,
              }
            ],
          }]
        },
        options: {
          responsive: true,
          legend: {
            display: true,
            boxWidth: 50,
            fontSize: 40,
            position: 'bottom'
          },
          title: {
            display: true,
            position: 'top',
            fontSize: 20,
            text: 'Ich im Team Results!'
          },
          scales: {
            yAxes: [{
                type: 'linear',
                position: 'left',
                scaleLabel: {
                  display: true,
                  fontStyle: 'bold',
                  fontSize: 20,
                  fontColor: 'rgba(0,0,0,1)',
                  labelString: 'Gemeinsinn',
                  padding: 4
                },
                ticks: {
                  display: false,
                  autoSkip: false,
                  minRotation: 90,
                  maxRotation: 90,
                  beginAtZero: true,
                  maxTicksLimit: 3
                }
              },
              {
                type: 'linear',
                position: 'right',
                scaleLabel: {
                  display: true,
                  fontStyle: 'bold',
                  fontColor: 'rgba(0,0,0,1)',
                  fontSize: 20,
                  labelString: "Selbstverwirklichung",
                  padding: 4
                },
                ticks: {
                  display: false,
                  autoSkip: false,
                  minRotation: 90,
                  maxRotation: 90,
                  maxTicksLimit: 3
                },
              }
            ],
            xAxes: [{
                type: 'linear',
                display: 'true',
                position: 'top',
                scaleLabel: {
                  display: true,
                  fontStyle: 'bold',
                  fontSize: 20,
                  fontColor: 'rgba(0,0,0,1)',
                  labelString: 'Stabilität'
                },
                ticks: {
                  display: false,
                  maxRotation: 0,
                  beginAtZero: true,
                  maxTicksLimit: 3
                }
              },
              {
                display: true,
                position: 'bottom',
                scaleLabel: {
                  display: true,
                  fontStyle: 'bold',
                  fontSize: 20,
                  fontColor: 'rgba(0,0,0,1)',
                  labelString: "Flexibilität"
                },
                ticks: {
                  display: false,
                  maxRotation: 0,
                  position: 'right',
                  beginAtZero: true,
                  maxTicksLimit: 3
                },
                gridLines: {
                  display: true,
                  zeroLineColor: 'rgba(0,0,0,1)'
                }
              }
            ],
          }
        }
      });
    };

    var canvas = document.querySelector('#bubbleChart');
    var context = canvas.getContext('2d');

    document.getElementById('download-pdf').addEventListener("click", downloadPDF);

    function downloadPDF() {
      var canvas = document.querySelector('#bubbleChart');
      var canvasImg = canvas.toDataURL("image/png", 1.0);

      var doc = new jsPDF('landscape');
      doc.setFontSize(20);
      doc.addImage(canvasImg, 'PNG', 10, 10, 280, 150);
      doc.save('YourResult.pdf');
    }
  </script>
</body>

</html>