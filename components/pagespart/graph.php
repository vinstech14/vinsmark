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
    const days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
    const cases = [5, 20, 15, 30, 45, 10, 15];

    // Generate pastel colors avoiding shades of pink
    const pastelColors = '#8B4513';

    // Create the chart
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: days,
        datasets: [{
          label: 'Total Cases',
          data: cases,
          borderColor: pastelColors, // Use the first pastel color
          backgroundColor: pastelColors, // Use the first pastel color as background
          tension: 0.1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
            suggestedMax: 35,
          }
        },
        maintainAspectRatio: true
      }
    });
  </script>
</body>

</html>
