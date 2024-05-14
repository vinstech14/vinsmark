<?php 
  require_once("../database/databasecon.php");
  require_once("functions.php");

  if(isset($_POST['submit'])){
    $region = $_POST['region'];
    $districtOffice = $_POST['do'];
    $date = $_POST['date'];
    $controlNo = $_POST['controlNo'];
    $referredBy = $_POST['referredBy'];
    $table = 'representation';
    $columns = ['region', 'district_office', 'date', 'control_number', 'referred_by'];
    $data = [$region, $districtOffice, $date, $controlNo, $referredBy];
    foreach ($data as $key => $value) {
        if ($value === '')
          $data[$key] = null;
      }
    saveData($conn, $table, $columns, $data);
  }
?>