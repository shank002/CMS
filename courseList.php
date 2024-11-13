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
    <title>Course List</title>
    <style>
        body{
            background-color: grey;
        }
    </style>
</head>
<body>
    <table align = "center" border = "1" cellpadding = "3" cellspacing = "2">  
            <tr>
                <td>CourseID</td>
                <td>Course Name</td>
                <td>Subject</td>
                <td>Start Date</td>
                <td>End Date</td>
            </tr>
            <?php CoursesQuery(); ?>
    </table>
</body>
</html>

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

function CoursesQuery(){
            $query="SELECT * FROM `CourseDetails`;";
            $connect=make_connection();
            try{
                $result=mysqli_query($connect, $query);
                while($row=mysqli_fetch_assoc($result)){
                    $cid=$row['Couseid'];
                    $cname=$row['CourseName'];
                    $subject=$row['Subject'];
                    $sdate=$row['StartDate'];
                    $edate=$row['EndDate'];
                    echo"<tr>";
                    echo"<td>$cid</td>";
                    echo"<td>$cname</td>";
                    echo"<td>$subject</td>";
                    echo"<td>$sdate</td>";
                    echo"<td>$edate</td>";
                echo "</tr>";
                }
            }
            catch(mysqli_sql_exception){
                $error=mysqli_error($connect);
                echo "[!] Request Could not be performed due to $error";
            }
        }
?>
