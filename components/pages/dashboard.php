<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="/custom.css" />
  <?php readfile('../../global/header.html');?>
</head>

<body class="generalbg">
  <div class="container">
    <div class="row mt-3">
    <div class="col-md-3">
    <div class="card text-success mt-3">
        <div class="row align-items-center">
            <a href="case.php" class="text-light text-center acase popin" style="text-decoration: none;">
                <h3><i class="fas fa-briefcase m-3"></i></h3>
            </a>
            <div class="col m-2 text-center">
              <div class="row">
                <h6>Active Cases</h6>
              </div>
            <div class="row">
                <?php  
                require_once("../../database/databasecon.php");
                require_once("../../functions/functions.php");
                $case = countData($conn, 'id', 'cases', "casestatus != 'terminated'");
                if($case !== false){
                ?>
                <h6><?php echo $case ?></h6>
                <?php } ?>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card text-success mt-3">
        <div class="row align-items-center">
            <a href="client.php" class="text-light aclient popin" style="text-decoration: none;">    
                <h3><i class="fas fa-user m-3"></i></h3>
            </a>
            <div class="col m-2 text-center">
                <div class="row">
                    <h6>Clients</h6>
                </div>
                <div class="row">
                    <?php  
                    require_once("../../database/databasecon.php");
                    require_once("../../functions/functions.php");
                    $client = countData($conn, 'id', 'client', 'id is not NULL');
                    if($client !== false){
                    ?>
                    <h6><?php echo $client ?></h6>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card text-success mt-3">
        <div class="row align-items-center">
        <a href="transaction.php" class="text-light atransaction popin" style="text-decoration: none;">
          <h3><i class="fas fa-handshake m-3"></i></h3></a>
            <div class="col m-2 text-center">
                <div class="row">
                  <h6>Transactions</h6>
                </div>
                <div class="row">
                <?php  
                    require_once("../../database/databasecon.php");
                    require_once("../../functions/functions.php");
                    $transaction = countData($conn, 'id', 'cases', "id is not null");
                    if($transaction !== false){
                    ?>
                    <h6><?php echo $transaction ?></h6>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card text-success mt-3">
        <div class="row align-items-center">
            <a href="archived.php" class="text-light aarchived popin" style="text-decoration: none;">
                <h3><i class="fas fa-calendar-check m-3"></i></h3>
            </a>
            <div class="col m-2 text-center">
                <div class="row">
                    <h6>Archive</h6>
                </div>
                <div class="row">
                    <?php  
                    require_once("../../database/databasecon.php");
                    require_once("../../functions/functions.php");
                    $archived = countData($conn, 'id', 'archived', 'id is not NULL');
                    if($archived !== false){
                    ?>
                    <h6><?php echo $archived ?></h6>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
      <div class="row mt-5">
          <div class="col-md-4">
        <div class="card text-success p-3 mt-5">
          <object type="text/html" data="../pagespart/graph.php" style="width: 100%; height: 40vh;" class="objres bluey"></object>
          <p class="text-center">Daily Count of Cases</p>
        </div>
    </div>
        <div class="col-md-4">
          <div class="card text-success p-3 mt-5">
            <object type="text/html" data="../pagespart/piegraph.php" style="width: 100%; height: 40vh;" class="objres orangey"></object>
            <p class="text-center">Monthly Count of Cases</p>
          </div>
        </div>
        <div class="col-md-4">
        <div class="card text-success p-3 mt-5">
          <object type="text/html" data="../pagespart/bargraph.php" style="width: 100%; height: 40vh;" class="objres redy"></object>
          <p class="text-center">Yearly Count of Cases</p>
        </div>
        </div>
  </div>
  </div>
</body>

</html>