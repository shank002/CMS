<?php
use function PHPSTORM_META\type;
session_start();
$uname=$_SESSION["username"];
$pass=$_SESSION["password"];

if (empty($uname) || empty($pass)){
    header("location: AccessDenied.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
    <style>
        .logout_button_form{
            display: inline-block;
        }
        .logoutButton{
            border: black solid;
            margin-left: 800%;
            padding: 12px 32px;
            text-align: right;
            font-size: 16px;
            cursor: pointer;
        }
        body{
            background-color: grey;
        }
        .detail{
            text-align: center;
        }

    </style>
</head>
<body>
    <h1 class="logout_button_form">Welcome Student  <?php echo $uname?></h1>
    
    <div class="logout_button_form">
        <form method="post" action="StudentLoginSuccessfull.php">
            <input type="submit" name="logout" value="LOGOUT" class="logoutButton"> 
        </form>
    </div>
    
    <br>
    <div class="profilePic detail">
        <img src="./profileImage/ukUser.jpg" height=200px width="150px">
    </div>
    <div class="detail">
        <?php $get=Studentquery($uname)?>
        <table align = "center" border = "1" cellpadding = "3" cellspacing = "2">  
            <tr>
                <td>CourseID</td>
                <td>Course Name</td>
                <td>Subject</td>
                <td>Start Date</td>
                <td>End Date</td>
                <td>ClassRoom Link</td>
            </tr>
            <?php CoursesQuery($get);?>
        </table>
        <br><br>
        <a href="./courseList.php">List of other available courses</a>
    </div>
</body>
<?php
function make_connection(){
    try{
        $connect=mysqli_connect("localhost", "root", "", "ProjectCMS");
    }
    catch(mysqli_sql_exception){
        $error=mysqli_connect_error();
        echo "[x] Could not connect to MySQL Server due to $error";
    }
    return $connect;
}

function Studentquery($sid){
    $query="SELECT * FROM `StudentDetails` WHERE `SID` = '$sid';";
    $link=make_connection();
    try{
        #header('Content-Type: text/plain');
        $result=mysqli_query($link, $query);
        $row=mysqli_fetch_array($result);
        echo "StudentID------>",$row['SID'],"<br>";
        echo "Name----------->",$row['Name'],"<br>";
        echo "Roll_No-------> ",$row['Roll_No'],"<br>";
        echo "Regulation--->",$row['Regulation'],"<br><br>";
        echo "Courses Enrolled <br>";
        #echo "Courses Enrolled --> ", $row['CoursesEnrolled'],"<br>";
        $subArray=explode(",", $row['CoursesEnrolled']);
        return $subArray;
    }
    catch(mysqli_sql_exception){
        $error=mysqli_error($link);
        echo "[!] Request Could not be performed due to $error";
    }
}

function CoursesQuery($array1){
    #echo $name;
    foreach($array1 as $name){
        $sub=trim($name);
        if (!empty($sub)){
            $query="SELECT * FROM `CourseDetails` WHERE `CourseName` = '$sub';";
            $connect=make_connection();
        
            try{
                $result=mysqli_query($connect, $query);
                $row=mysqli_fetch_array($result);
                $cid=$row['CourseID'];
                $cname=$row['CourseName'];
                $subject=$row['Subject'];
                $sdate=$row['StartDate'];
                $edate=$row['EndDate'];
                $link=$row['classLink'];
                echo"<tr>";
                    echo"<td>$cid</td>";
                    echo"<td>$cname</td>";
                    echo"<td>$subject</td>";
                    echo"<td>$sdate</td>";
                    echo"<td>$edate</td>";
                    echo "<td><a href=$link>Room</a></td>";
                echo "</tr>";
            }
            catch(mysqli_sql_exception){
                $error=mysqli_error($connect);
                echo "[!] Request Could not be performed due to $error";
            }
        }
    }
}   
function logout(){
        session_unset();
        session_destroy();
        header("location: index.php");
}

if($_SERVER["REQUEST_METHOD"] = "POST" && isset($_POST["logout"])){
    logout();
}
?>
</html>