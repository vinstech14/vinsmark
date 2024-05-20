<?php
require_once("../database/databasecon.php");
require_once("functions.php");
require_once("mailer.php");

if(isset($_POST['ssubmit'])){
    $name = $_POST['sname'];
    $email = $_POST['email'];
    $password = $_POST['spword'];
    $confirmpw = $_POST['scpword'];
    $vcinput = $_POST['vcode'];
    $table = 'accounts';
    $columns = ['name', 'email', 'password', 'usertype'];
     // Generate a verification code
    $data = [$name, $email, $password, 'Client'];
    
    if($password === $confirmpw) {
        
    }
}
?>
