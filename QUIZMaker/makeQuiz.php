<?php
session_start();
$user=$_SESSION['username'];
$course=$_SESSION['CourseName'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
        }
        .form-container {
            width: 100%;
            max-width: 800px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .form-container h2 {
            text-align: center;
        }
        .input-set {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9;
        }
        .input-set h3 {
            margin: 0;
            font-size: 1.2em;
            color: #333;
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
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .submit-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1.2em;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="form-container">
    <div class="home" style="display:inline-block">
        <a href="../FacultyLoginSuccessfull.php">HOME</a>
    </div>
    <div class="home" style="display:inline-block">
        <a href="../FacultyLoginSuccessfull.php">ClassLink</a>
    </div>

    <h2>Create Quiz</h2>
    <form action="makeQuiz.php" method="POST">
            <div class="form-group">
                <label for="chapter">Chapter:</label>
                <input type="text" id="chapter" name="chapter">
            </div>
            
        <?php for ($i = 1; $i <= 10; $i++): ?>
        <div class="input-set">
            <h3>Question <?php echo $i; ?></h3>
            
            <div class="form-group">
                <label for="question_<?php echo $i; ?>">Question:</label>
                <input type="text" id="question_<?php echo $i; ?>" name="question_<?php echo $i; ?>">
            </div>
            
            <div class="form-group">
                <label for="correctAns_<?php echo $i; ?>">Answer:</label>
                <input type="text" id="correctAns_<?php echo $i; ?>" name="correctAns_<?php echo $i; ?>">
            </div>

            <div class="form-group">
                <label for="options_<?php echo $i; ?>">Options:</label>
                <input type="text" id="options_<?php echo $i; ?>" name="options_<?php echo $i; ?>">
            </div>
        </div>
        <?php endfor; ?>
        <button type="submit" class="submit-btn">Submit Quiz</button>
    </form>
</div>
</body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    for ($i = 1; $i <=10 ; $i++){
        $chapter=$_POST['chapter'];
        $question=$_POST["question_$i"];
        $answer=$_POST["correctAns_$i"];
        $options=$_POST["options_$i"];
        if (empty($question) && empty($answer)){
            break;
        }
        else{
            createQuestion($chapter, $question, $answer, $options, $course);
        }
        
    }
    alert("Question Has been submitted!!");
    header("location: ../FacultyLoginSuccessfull.php");
}
function createQuestion($chapter, $quest, $answer, $options, $courseCode){
    $questionQuery="INSERT INTO `questions` (`question_text`, `correct_answer`, `courseCode`, `chapter`) 
    VALUES ('$quest', '$answer', '$courseCode', '$chapter');";
    mysqli_query(mysqli_connect("localhost", "root", "", "quizCMS"), $questionQuery);    

    $idQuery="SELECT `id` FROM  `questions` WHERE `question_text` = '$quest';";
    $getData=mysqli_query(mysqli_connect("localhost", "root", "", "quizCMS"), $idQuery);
    $row=mysqli_fetch_assoc($getData);
    $qID=$row['id'];

    $optionsArray=explode(",", $options);
    $op1=ltrim($optionsArray[0]);
    $op2=ltrim($optionsArray[1]);
    $op3=ltrim($optionsArray[2]);
    $op4=ltrim($optionsArray[3]);
    $ansQuery = "INSERT INTO `answers` (`question_id`, `answer_text`) VALUES ('$qID', '$op1'), ('$qID', '$op2'), ('$qID', '$op3'), ('$qID', '$op4');";
    mysqli_query(mysqli_connect("localhost", "root", "", "quizCMS"), $ansQuery);
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>
</html>
