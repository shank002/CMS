<?php
session_start();
$course=$_SESSION['CourseName'];
$user=$_SESSION['username'];
$chap=$_GET["chapter"];


$conn = mysqli_connect("localhost", "root", "", "quizCMS");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT q.id AS q_id, q.question_text, a.id AS a_id, a.answer_text, q.correct_answer
        FROM questions q
        JOIN answers a ON q.id = a.question_id
        WHERE q.courseCode = '$course' AND q.chapter = '$chap'
        ORDER BY q.id, a.id";
#########################################################
$result = mysqli_query($conn, $sql);

## Organize questions and answers
$questions = [];
while ($row = mysqli_fetch_assoc($result)) {
    $questions[$row['q_id']]['question'] = $row['question_text'];
    $questions[$row['q_id']]['correct_answer'] = $row['correct_answer'];
    $questions[$row['q_id']]['answers'][$row['a_id']] = $row['answer_text'];
}

$score = 0;

## Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_answers = $_POST['answers'];
    
    ## Calculate score
    foreach ($user_answers as $q_id => $a_id) {
        echo $q_id."<br>".$a_id."<br>";
        $q1 = "SELECT `correct_answer` FROM `questions` WHERE `id` = '$q_id';";
        $q2 = "SELECT `answer_text` FROM `answers` WHERE `id` = '$a_id';";
        
        $r1 = mysqli_query($conn, $q1);
        $r2 = mysqli_query($conn, $q2);

        $c1 = mysqli_fetch_assoc($r1);
        $c2 = mysqli_fetch_assoc($r2);


        if ($c1['correct_answer'] == $c2['answer_text']) {
            $score++;
        }
    }

    
    $user_name = "$user";
    $stmt = mysqli_prepare($conn, "INSERT INTO results (user_name, score) VALUES (?, ?)");
    mysqli_stmt_bind_param($stmt, "si", $user_name, $score);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    echo "<h1>Your Score: $score</h1>";
    echo '<a href="../StudentLoginSuccessfull.php">Go TO Home</a>';
    mysqli_close($conn);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
</head>
<body>
    <h1>Course Quiz</h1>
    <form method="POST" action="quiz.php">
        <?php foreach ($questions as $q_id => $q_data): ?>
            <div>
                <p><strong><?php echo htmlspecialchars($q_data['question']); ?></strong></p>
                <?php foreach ($q_data['answers'] as $a_id => $answer_text): ?>
                    <label>
                        <input type="radio" name="answers[<?php echo $q_id; ?>]" value="<?php echo $a_id; ?>">
                        <?php echo htmlspecialchars($answer_text); ?>
                    </label><br>
                <?php endforeach; ?>
            </div>
            <br>
        <?php endforeach; ?>
        <input type="submit" value="Submit Quiz">
    </form>
</body>
</html>

<?php
mysqli_close($conn);
?>
