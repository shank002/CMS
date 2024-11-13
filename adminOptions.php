<?php
session_start();
$button=$_SESSION['pressedButton'];
switch($button){
    case "createStudent":
        createStudent();
        break;
    
    case "createFaculty":
        createFaculty();
        break;
    
    case "addCourse":
        addCourse();
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
        }
        .form-container {
            width: 100%;
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1em;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
</body>
<?php
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
function createStudent(){
    echo '
<div class="form-container">
<form action="adminOptions.php" method="POST">

    <div class="form-group">
        <label for="sid">SID:</label>
        <input type="text" id="sid" name="sid" required>
    </div>
    
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    

    <div class="form-group">
        <label for="roll">Roll_No:</label>
        <input type="text" id="roll_no" name="roll_no" required>
    </div>
    
    <div class="form-group">
        <label for="regulation">Regulation:</label>
        <input type="text" id="regulation" name="regulation" required>
    </div>
    
    <div class="form-group">
        <label for="courses">Courses Enrolled:</label>
        <input type="text" id="courses" name="courses">
    </div>
    
    <button type="submit" name="createSt" class="submit-btn">Create Student</button>
</form>
</div>
';
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['createSt'])){
    $sid=$_POST['sid'];
    $name=$_POST['name'];
    $roll=$_POST['roll_no'];
    $reg=$_POST['regulation'];
    $coursesEnrolled=$_POST['courses'];

    $createQuery = "INSERT INTO `StudentDetails` (`SID`, `Name`, `Roll_No`, `Regulation`, `CoursesEnrolled`) VALUES ('$sid', '$name', '$roll', '$reg', '$coursesEnrolled');";
    #mysqli_query(mysqli_connect("localhost", "root", "", "ProjectCMS"), $createQuery);
    alert('Student Account Created');
    header("location: admin.php");

}
}

function createFaculty(){
    echo '
<div class="form-container">
<form action="adminOptions.php" method="POST">

    <div class="form-group">
        <label for="fid">FID:</label>
        <input type="text" id="fid" name="fid" required>
    </div>
    
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    

    <div class="form-group">
        <label for="courseid">CourseID:</label>
        <input type="text" id="courseid" name="courseid" required>
    </div>
    
    <div class="form-group">
        <label for="designation">Designation:</label>
        <input type="text" id="desgination" name="designation" required>
    </div>
    
    <div class="form-group">
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject">
    </div>
    
    <button type="submit" name="createFac" class="submit-btn">Create Faculty</button>
</form>
</div>
';
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['createFac'])){
    $fid=$_POST['fid'];
    $name=$_POST['name'];
    $cid=$_POST['courseid'];
    $des=$_POST['designation'];
    $sub=$_POST['subject'];

    $createQuery = "INSERT INTO `FacultyDetails` (`FID`, `Name`, `CourseID`, `Designation`, `Subject`) VALUES ($fid', '$name', '$cid', '$des', '$sub');";
    #mysqli_query(mysqli_connect("localhost", "root", "", "ProjectCMS"), $createQuery);
    alert('Faculty Account Created');
    header("location: admin.php");
}
}
function addCourse(){
    echo '
<div class="form-container">
<form action="adminOptions.php" method="POST">

    <div class="form-group">
        <label for="cid">CourseID:</label>
        <input type="text" id="cid" name="cid" required>
    </div>
    
    <div class="form-group">
        <label for="name">Course Name:</label>
        <input type="text" id="coursename" name="coursename" required>
    </div>

    <div class="form-group">
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>
    </div>

    <div class="form-group">
        <label for="startDate">Start Date:</label>
        <input type="date" id="startdate" name="startdate" required>
    </div>
    
    <div class="form-group">
        <label for="enddate">End Date:</label>
        <input type="date" id="enddate" name="enddate" required>
    </div>
    
    <div class="form-group">
        <label for="link">Class Link:</label>
        <input type="text" id="link" name="link">
    </div>
    
    <button type="submit" name="add_course" class="submit-btn">Add Course</button>
</form>
</div>
';
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['add_course'])){
    $cid=$_POST['cid'];
    $cname=$_POST['coursename'];
    $subject=$_POST['subject'];
    $s_date=$_POST['startdate'];
    $e_date=$_POST['enddate'];
    $link=$_POST['link'];

    $createQuery = "INSERT INTO `CourseDetails` (`CourseID`, `CourseName`, `StartDate`, `EndDate`, `Subject`, `classLink`) 
    VALUES ($cid', '$cname', '$subject', '$s_date', '$e_date', '$link');";
    #mysqli_query(mysqli_connect("localhost", "root", "", "ProjectCMS"), $createQuery);
    alert('New Course Added');
    header("location: admin.php");

}
}
?>
</html>