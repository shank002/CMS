<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-color: grey;
        }
        .form {
            text-align: center;
            border: solid black;
            padding: 5%;
        }
        .loginButton{
            border: black solid;
            padding: 12px 22px;
            text-align: right;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Course Management System</h1><hr>
    <div class="form">
        <form action="index.php" method="post">
            <label>Username</label>
            <input type="text" name="username">
            <br><br>
            <label>Password</label>
            <input type="password" name="password">
            <br><br>
            <input type="submit" name="login" value="LOGIN" class="loginButton">
        </form>
    </div>
</body>
<?php
function make_connection(){
    try{
        $connection=mysqli_connect("localhost", "root", "", "ProjectCMS");
    }
    catch(mysqli_sql_exception){
        $error=mysqli_connect_error();
        echo "Could not connect to server due to $error";
    }
    return $connection;
}

function login($username, $password){
    $query="SELECT * FROM `LoginDetails` WHERE `Userid` = '$username';"; 
    $connect=make_connection();
    
    try{
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_array($result);
        #echo $row['Userid'], $row['Password'];
        
        if ($row['UserID'] == $username && $row['Password'] == $password){
            if($username[0] == "F"){
                header("location: FacultyLoginSuccessfull.php");
            }
            elseif($username[0] == "S"){
                header("location: StudentLoginSuccessfull.php");
            }
            elseif($username == "admin"){
                header("location: admin.php");
            }
        }

        elseif($row['Userid'] != $username || $row['Password'] != $password){
            echo "[x] Invalid Username or Password";
        }
    }
    catch(mysqli_sql_exception){
        $error=mysqli_error($connect);
        echo "[!] Request Could not be performed due to $error";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])){
    $username=$_SESSION["username"]=$_POST["username"];
    $password=$_SESSION["password"]=$_POST["password"];

    if (!empty($username) && !empty($password)){
        login($username, $password);
    }
    else{
        echo "[!] Please Enter Username And Password";
    }
}
?>

</html>