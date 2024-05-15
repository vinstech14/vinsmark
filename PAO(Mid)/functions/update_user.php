<?php
require_once("../database/databasecon.php");
require_once("functions.php");

if(isset($_POST['updatedatastaff'])){
    $id = $_POST['update_id'];
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $password = $_POST['upassword'];
    $usertype = $_POST['uusertype'];
   
    $columns = ['name','email','password','usertype'];
    $data = [$name, $email, $password, $usertype];
    $conditions = "id = '$id'";

    if(updateData($conn, 'accounts', $columns, $data, $conditions)===true)
        header("location: ../../components/pages/staff.php");

}
?>