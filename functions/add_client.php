<?php
require_once("../database/databasecon.php");
require_once("functions.php");

if(isset($_POST['submit'])){
    $firstname = $_POST['first_name'];
    $middlename = $_POST['middle_name'];
    $lastname = $_POST['last_name'];
    $birthdate = $_POST['dob'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $citizenship = $_POST['citizenship'];
    $civilstatus = $_POST['civilstatus'];
    $address = $_POST['address'];
    $region = $_POST['region'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $columns = ['firstname','middlename','lastname','birthdate','age','gender','religion','citizenship','civilstatus','address','region','mobilenumber','email'];
    $data = [$firstname,$middlename,$lastname,$birthdate,$age,$gender,$religion,$citizenship,$civilstatus,$address,$region,$mobile,$email];
    
    if(saveData($conn, 'client', $columns, $data)===true)
        header("location: ../../components/pages/client.php");
}
?>