<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied</title>
    <style>
        .button1{
            border: black solid;
            padding: 12px 22px;
            text-align: right;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1> Access Denied</h1>
    <form action="AccessDenied.php" method="post"> 
        <input type="submit" name="Login" value="Go To Login Page" class="button1">
    </form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] = "POST" && isset($_POST["Login"])){
    sleep(3);
    header("location: index.php");
}
?>
</html>