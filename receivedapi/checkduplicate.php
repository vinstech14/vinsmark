<?php
require_once("../database/databasecon.php");
require_once("../functions/functions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the data sent from the HTML page
    $data1 = $_POST["data1"];
    $column1 = $_POST["column1"];
    $columns = ["id"];
    $table = $_POST["t"];
    $conditions = "$column1 = '$data1'";
    $res = selectData($conn, $table, $columns, $conditions);

    if (!empty($res)) {
        echo json_encode(['status' => 'exists']);
    } else {
        echo json_encode(['status' => 'available']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
