<?php
require_once("../database/databasecon.php");
require_once("functions.php");

if(isset($_POST['deletedata'])){
    $id = $_POST['delete_id'];
    deleteData($conn, 'accounts', $id);
    if(deleteData($conn, 'accounts', $id) === true)
        header("location: ../../components/pages/staff.php");
}
?>