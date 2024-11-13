<?php
$connect = mysqli_connect("localhost", "root", "", "ChatBase");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $message = mysqli_real_escape_string($connect, $_POST['message']);
    $query = "INSERT INTO messages (username, message) VALUES ('$username', '$message')";
    
    if (mysqli_query($connect, $query)) {
        echo "success";
    } else {
        echo "error";
    }
}
mysqli_close($connect);
?>
