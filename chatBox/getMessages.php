<?php
$sql = "SELECT username, message, timestamp FROM messages ORDER BY timestamp ASC";
$result = mysqli_query(mysqli_connect("localhost", "root", "", "ChatBase"), $sql);
$messages = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $messages[] = $row;
    }
}
header('Content-Type: application/json');
echo json_encode($messages);
mysqli_close($conn);
?>
