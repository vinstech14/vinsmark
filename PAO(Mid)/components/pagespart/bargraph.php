<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Case Graph</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
  <link rel="stylesheet" href="/custom.css" />
</head>

<body>
  <div class="container-fluid">
    <canvas id="myChart" width="300" height="250"></canvas>
  </div>
  <script>
    // Sample data (replace with your actual data)
    const years = ["Year 1", "Year 2", "Year 3", "Year 4", "Year 5"];
    const cases = [100, 150, 200, 250, 300]; // Sample cases data for each year

    // Generate shades of green that are not too bright and not too dark
    const greenShades = '#98FB98';

    // Create the chart
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar', // Change chart type to bar
      data: {
        labels: years,
        datasets: [{
          label: 'Total Cases',
          data: cases,
          backgroundColor: greenShades, // Use shades of green for bars
        }]
      },
      options: {
        indexAxis: 'y', // Horizontal bar chart
        scales: {
          x: {
            beginAtZero: true,
          },
          y: {
            beginAtZero: true,
          }
        },
        maintainAspectRatio: true
      }
    });
  </script>
</body>

</html>
