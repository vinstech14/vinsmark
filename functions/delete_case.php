<?php
require_once("../database/databasecon.php");
require_once("functions.php");

if(isset($_POST['deletedata'])){
    $id = $_POST['delete_id'];
    
    if(deleteData($conn, 'cases', $id) === true)
        header("location: ../../components/pages/transaction.php");
}
?>