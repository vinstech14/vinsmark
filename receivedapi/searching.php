<?php
require_once("../database/databasecon.php");
require_once("../functions/functions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the data sent from the HTML page
    $data1 = isset($_POST["d1"]) ? $_POST["d1"] : null;
    $data2 = isset($_POST["d2"]) ? $_POST["d2"] : null;
    $data3 = isset($_POST["d3"]) ? $_POST["d3"] : null;
    $data4 = isset($_POST["d4"]) ? $_POST["d4"] : null;
    $column1 = isset($_POST["c1"]) ? $_POST["c1"] : null;
    $column2 = isset($_POST["c2"]) ? $_POST["c2"] : null;
    $column3 = isset($_POST["c3"]) ? $_POST["c3"] : null;
    $column4 = isset($_POST["c4"]) ? $_POST["c4"] : null;
    $table = isset($_POST["t"]) ? $_POST["t"] : null;

    if ($table === null) {
        echo json_encode([]);
        exit;
    }

    $columns = ["*"];
    $conditions = [];

    if (!empty($data1) && !empty($column1)) {
        $conditions[] = "$column1 = '$data1'";
    }
    if (!empty($data2) && !empty($column2)) {
        $conditions[] = "$column2 = '$data2'";
    }
    if (!empty($data3) && !empty($column3)) {
        $conditions[] = "$column3 >= '$data3'";
    }
    if (!empty($data4) && !empty($column4)) {
        $conditions[] = "$column4 <= '$data4'";
    }

    // Combine conditions into a single string
    $conditionString = '';
    if (count($conditions) > 0) {
        $conditionString = implode(' AND ', $conditions);
    }

    $res = selectData($conn, $table, $columns, $conditionString);
    echo json_encode($res);
} else {
    echo "Error: Invalid request method.";
}
?>
