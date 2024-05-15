<?php
require_once("../database/databasecon.php");
require_once("functions.php");

if(isset($_POST['updatedata'])){
    $id = $_POST['uupdate_id'];
    $firstname = $_POST['ufirst_name'];
    $middlename = $_POST['umiddle_name'];
    $lastname = $_POST['ulast_name'];
    $birthdate = $_POST['udob'];
    $age = $_POST['uage'];
    $gender = $_POST['ugender'];
    $religion = $_POST['ureligion'];
    $citizenship = $_POST['ucitizenship'];
    $civilstatus = $_POST['ucivilstatus'];
    $address = $_POST['uaddress'];
    $region = $_POST['uregion'];
    $mobile = $_POST['umobile'];
    $email = $_POST['uemail'];
    $columns = ['firstname','middlename','lastname','birthdate','age','gender','religion','citizenship','civilstatus','address','region','mobilenumber','email'];
    $data = [$firstname, $middlename, $lastname, $birthdate, $age, $gender, $religion, $citizenship, $civilstatus, $address, $region, $mobile, $email];
    $conditions = "id = '$id'";

    if(updateData($conn, 'client', $columns, $data, $conditions)===true)
        header("location: ../../components/pages/client.php");

}
?>