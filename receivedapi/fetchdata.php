<?php
require_once("../database/databasecon.php");
require_once("../functions/functions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the data sent from the HTML page
    $id = $_POST["id"];
    $columns = ["*"];
    $table = $_POST["t"];
    $conditions = "id='$id'";
    $res = selectData($conn, $table, $columns, $conditions);
    
    echo json_encode($res);
} else
    echo "Error: Invalid request method.";
?>