<?php
require_once("../database/databasecon.php");
require_once("functions.php");

if(isset($_POST['ssubmit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $name = $fname . ' ' . $lname;
    $email = $_POST['email'];
    $password = $_POST['spword'];
    $vcinput = $_POST['vcode'];
    $vcinputconfirm = $_POST['vcname'];
    $table = 'accounts';
    $columns = ['name', 'email', 'password', 'usertype'];
     // Generate a verification code
    $data = [$name, $email, $password, 'Client'];
    
    if($vcinput === $vcinputconfirm){
        if(saveData($conn, $table, $columns, $data))
            header("location: ../components/main.php");
    }
    else {
        header("location: ../components/signup.php");
        echo '<script>
                var checkl = document.getElementById("plschck");
                checkl.disabled = false;
                checkl.innerText = "Incorrect Verification Code";
            </script>';
           
    }
    }

?>
