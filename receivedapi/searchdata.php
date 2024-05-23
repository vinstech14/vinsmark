<?php
require_once("../database/databasecon.php");
require_once("../functions/functions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the data sent from the HTML page
    $data1 = $_POST["data1"];
    $column2 = $_POST["column2"];
    $columns = ["id"]; // Corrected variable name
    $table = $_POST["t"];
    $conditions = "$column2='$data1'";

    $result = selectData($conn, $table, $columns, $conditions);

    if ($result && count($result) > 0) {
        echo json_encode(['exists' => true]);
    } else {
        echo json_encode(['exists' => false]);
    }
} else {
    echo json_encode(['error' => 'Invalid request method.']);
}
?>
