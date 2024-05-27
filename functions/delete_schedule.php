<?php
require_once('../database/databasecon.php');

$id = $_POST['id'];

$query = "DELETE FROM schedule_list WHERE id=$id";

if ($conn->query($query) === TRUE) {
    echo "Success";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>