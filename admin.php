<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
        }
        .button-container {
            display: flex;
            gap: 20px;
        }
        .button {
            padding: 15px 30px;
            font-size: 16px;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .button1 {
            background-color: #007bff;
        }
        .button2 {
            background-color: #28a745;
        }
        .button3 {
            background-color: Grey;
        }
        .button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
<form action="admin.php" method="POST">
    <h1>Create Account</h1>
    <div class="button-container">
        <button type="submit" name="createStudent" class="button button1">Student Account</button>
        <button type="submit" name="createFaculty" class="button button2">Faculty Account</button>
    </div>
    <h1>Create Course</h1>
    <div class="button-container">
        <button type="submit" name="addCourse" class="button button3">Add Course</button>
    </div>

    <h1>Manage Account</h1>
    <div class="button-container">
        <button type="submit" name="manageStudent" class="button button1" >Manage Student</button>
        <button type="submit" name="manageFaculty" class="button button2">Manage Faculty</button>
    </div>
</form>

</body>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if (isset($_POST['createStudent'])){
        $_SESSION["pressedButton"] = "createStudent";
        header("location: adminOptions.php");
    }
    elseif(isset($_POST['createFaculty'])){
        $_SESSION["pressedButton"] = "createFaculty";
        header("location: adminOptions.php");
    }
    elseif(isset($_POST['addCourse'])){
        $_SESSION["pressedButton"] = "addCourse";
        header("location: adminOptions.php");
    }
    elseif(isset($_POST['manageStudent'])){
        $_SESSION["pressedButton"] = "manageStudent";
        header("location: adminOptions.php");
    }
    elseif(isset($_POST['manageFaculty'])){
        $_SESSION["pressedButton"] = "manageFaculty";
        header("location: adminOptions.php");
    }
    else{
        header("location: AccessDenied.php");
    }
}   
?>
</html>
