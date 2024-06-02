<?php
require_once('../database/databasecon.php');

// Get and sanitize input data
$id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$title = isset($_POST['title']) ? $conn->real_escape_string($_POST['title']) : '';
$description = isset($_POST['description']) ? $conn->real_escape_string($_POST['description']) : '';
$start_datetime = isset($_POST['start_datetime']) ? $conn->real_escape_string($_POST['start_datetime']) : '';

if (empty($title) || empty($description) || empty($start_datetime)) {
    echo "Error: All fields are required.";
    exit;
}

if ($id === 0) {
    // Insert new event
    $query = $conn->prepare("INSERT INTO schedule_list (title, description, start_datetime) VALUES (?, ?, ?)");
    $query->bind_param('sss', $title, $description, $start_datetime);
} else {
    // Update existing event
    $query = $conn->prepare("UPDATE schedule_list SET title=?, description=?, start_datetime=? WHERE id=?");
    $query->bind_param('sssi', $title, $description, $start_datetime, $id);
}

if ($query->execute()) {
    echo "Success";
} else {
    echo "Error: " . $query->error;
}

$query->close();
$conn->close();
?>
