
<?php
require_once("../../database/databasecon.php");
require_once("../../functions/functions.php");

$query = "SELECT * FROM schedule_list";
$result = $conn->query($query);

$events = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $row['start_datetime'] = date("Y-m-d\TH:i:s", strtotime($row['start_datetime']));

        $events[] = $row;
    }
}

$conn->close();

header('Content-Type: application/json');
echo json_encode(['events' => $events]);
?>
