<?php
require_once('../../database/databasecon.php');

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$start_datetime = $_POST['start_datetime'];


if (empty($id)) {
    // Insert new event
    $query = "INSERT INTO schedule_list (title, description, start_datetime) VALUES ('$title', '$description', '$start_datetime')";
} else {
    // Update existing event
    $query = "UPDATE schedule_list SET title='$title', description='$description', start_datetime='$start_datetime' WHERE id=$id";
}

if ($conn->query($query) === TRUE) {
    echo "Success";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>