<?php 
  require_once("../database/databasecon.php");
  require_once("functions.php");

  if(isset($_POST['submit'])){
    $email = $_POST['uemail'];
    $password = $_POST['pword'];
    $usertype = $_POST['userType'];
    
    if(authenticateLogin($conn, $email, $password, $usertype) === true){
      header("location: ../components/main.php");
      exit;
    } else {
      echo '<script>alert("Wrong Credentials");</script>';
      echo '<script>window.location.href = "/index.php" </script>';
      exit;
    }
}