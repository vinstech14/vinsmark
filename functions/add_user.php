<?php
require_once("../database/databasecon.php");
require_once("functions.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $type = $_POST['user_type'];
    $columns = ['name', 'email', 'password', 'usertype'];
    $data = [$name, $email, $password, $type];
    
    if(saveData($conn, 'accounts', $columns, $data)==true)
        header("location: ../../components/pages/staff.php");
}
?>