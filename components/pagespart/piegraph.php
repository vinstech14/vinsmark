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
    <canvas id="myChart" width="300" height="225"></canvas> <!-- Set canvas dimensions -->
  </div>
  <script>
    // Sample data (replace with your actual data)
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const cases = [10, 20, 15, 30, 25, 35, 40, 45, 50, 55, 60, 65]; // Sample cases data for each month

    // Generate shades of green
    const greenShades = [
      '#F0E68C', // Khaki
      '#D2B48C', // Tan
      '#C3B091', // Khaki web color
      '#CD853F', // Peru
      '#DEB887', // BurlyWood
      '#D2691E', // Chocolate 
      '#8B4513', // SaddleBrown
      '#A0522D', // Sienna
      '#A52A2A', // Brown
      '#6B4423', // Coffee
      '#5C4033', // Dark Coffee
      '#4B3621', // Extremely Coffee
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
