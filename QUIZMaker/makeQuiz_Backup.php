<?php
###
##SHOWS THE GENERAL INFORMATION OF THE COURSE##
session_start();
$user=$_SESSION['username'];
$c=$_SESSION['CourseName'];
#$code=(explode(".", explode("/", $_SERVER['SCRIPT_NAME'])[3])[0]);
#$uCode=strtoupper($code);
#getCourseData($uCode);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Quiz</title>
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
        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
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
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1em;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <br>
    <div class="login-container">
    <h2>Create Quiz</h2>
    <form action="makeQuiz.php" method="POST">
        <div class="form-group">
            <label for="chapter">Chapter:</label>
            <input type="text" id="chapter" name="chapter" required>
        </div>
        <div class="form-group">
            <label for="question">Question:</label>
            <input type="question" id="question" name="question" required>
        </div>
        <div class="form-group">
            <label for="correctAns">Corrent Ans:</label>
            <input type="correctAns" id="correctAns" name="correctAns" required>
        </div>
        <div class="form-group">
            <label for="options">Options:</label>
            <input type="options" id="options" name="options" required>
        </div>
        <button type="submit" class="submit-btn">Submit Question</button>
    </form>
</div>
</body>
<?php
function make_connection(){
    try{
        $connection=mysqli_connect("localhost", "root", "", "quizCMS");
    }
    catch(mysqli_sql_exception){
        $error=mysqli_connect_error();
        echo "Could not connect to server due to $error";
    }
    return $connection;
}

function createQuestion($chapter, $quest, $answer, $options, $courseCode){
    $questionQuery="INSERT INTO `questions` (`question_text`, `correct_answer`, `courseCode`, `chapter`) 
    VALUES ('$quest', '$answer', '$courseCode', '$chapter');";
    mysqli_query(mysqli_connect("localhost", "root", "", "quizCMS"), $questionQuery);    

    #echo $quest;
    $idQuery="SELECT `id` FROM  `questions` WHERE `question_text` = '$quest';";
    $getData=mysqli_query(mysqli_connect("localhost", "root", "", "quizCMS"), $idQuery);
    $row=mysqli_fetch_assoc($getData);
    $qID=$row['id'];
    #echo $qID;

    $optionsArray=explode(",", $options);
    $op1=ltrim($optionsArray[0]);
    $op2=ltrim($optionsArray[1]);
    $op3=ltrim($optionsArray[2]);
    $op4=ltrim($optionsArray[3]);
    $ansQuery = "INSERT INTO `answers` (`question_id`, `answer_text`) VALUES ('$qID', '$op1'), ('$qID', '$op2'), ('$qID', '$op3'), ('$qID', '$op4');";
    mysqli_query(mysqli_connect("localhost", "root", "", "quizCMS"), $ansQuery);
}


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $chapter=$_POST["chapter"];
    $question=$_POST["question"];
    $correctAnswer=$_POST["correctAns"];
    $options=$_POST["options"];
    $cCode=$_SESSION['code'];

    createQuestion($chapter, $question, $correctAnswer, $options, $c);
    
}
?>
</html>