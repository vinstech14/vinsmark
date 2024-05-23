<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Case Graph</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
  <link rel="stylesheet" href="/customcss/custom.css" />
</head>

<body>
  <div class="container-fluid">
    <canvas id="myChart" width="300" height="225"></canvas> <!-- Set canvas dimensions -->
  </div>
  <script>
    // Sample data (replace with your actual data)
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const cases = [10, 20, 15, 30, 25, 35, 40, 45, 50, 55, 60, 65]; // Sample cases data for each month

    // Generate shades of green
    const greenShades = [
      '#7c1158', // Coffee
      '#5ad45a', // Dark Coffee
      '#4421af', // Extremely Coffee
      '#e60049', 
      '#0bb4ff', 
      '#50e991', 
      '#e6d800', 
      '#9b19f5', 
      '#ffa300', 
      '#dc0ab4', 
      '#b3d4ff', 
      '#00bfa0',
    ];

    // Create the chart
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'pie', // Change chart type to pie
      data: {
        labels: months,
        datasets: [{
          label: "Total Cases",
          data: cases,
          backgroundColor: greenShades, // Set shades of green for each month
        }]
      },
      options: {
        maintainAspectRatio: false, // Set maintainAspectRatio to false
      }
    });
  </script>
</body>

</html>
