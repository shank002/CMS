<?php
session_start();
$user=$_SESSION['username'];
if(empty($user)){
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classRoom</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        
        .chat-container {
            position: fixed;
            bottom: 0px;
            right: 20px;
            width: 300px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px 8px 0 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .chat-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            border-radius: 8px 8px 0 0;
        }

        .chat-messages {
            height: 200px;
            overflow-y: scroll;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .chat-input {
            display: flex;
            padding: 10px;
        }

        .chat-input input[type="text"] {
            flex: 1;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-right: 5px;
        }

        .chat-input button {
            padding: 8px 12px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
        .notice-container {
            position: fixed;
            bottom: 0;
            right: 350px;
            width: 300px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px 8px 0 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .notice-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            border-radius: 8px 8px 0 0;
        }

        .notices {
            height: 100px;
            overflow-y: scroll;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }



        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 20px;
            width: 100%;
        }

        .button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 0 10px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .home-button {
            background-color: #4CAF50; /* Green */
        }

        .home-button:hover {
            background-color: #45a049;
        }

        .logout-button {
            background-color: #f44336; /* Red */
        }

        .logout-button:hover {
            background-color: #e53935;
        }


    </style>
</head>
<?php
getNotice($user[0]);
?>

<div class="chat-container">
    <div class="chat-header">Live Chat</div>
    <div id="chat-messages" class="chat-messages"></div>
    <div class="chat-input">
        <input type="text" id="username" value='<?php echo($user);?>' hidden>
        <input type="text" id="message" placeholder="Type a message" required>
        <button onclick="sendMessage()">Send</button>
    </div>
</div>


    <!-- TEST CODE _+_++_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_++__+_+_+_+_+_+_+_+_+_+__+_+_+_+_++_-->
    
    <form action="<?php echo $_SESSION['pageName'];?>" method="POST">
        <div class="button-container">
        <?php if($user[0] == "S"){
            echo '<a href="../StudentLoginSuccessfull.php">Home</a>';

        }elseif($user[0] == "F"){
            echo '<a href="../FacultyLoginSuccessfull.php">Home</a>';
        } ?>
        
        </div>
    </form>
    
    <?php
 
?>

    <!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_++_+__+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_++_+_+_+_ -->



<script>
// Fetch messages every 1 seconds
setInterval(fetchMessages, 1000);

// Send message to the server
function sendMessage() {
    const username = document.getElementById("username").value;
    const message = document.getElementById("message").value;

    if (username && message) {
        fetch("../chatBox/storeMessage.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `username=${username}&message=${message}`
        })
        .then(response => response.text())
        .then(data => {
            if (data === "success") {
                document.getElementById("message").value = "";
                fetchMessages();
            }
        });
    }
}

// Fetch messages from the server
function fetchMessages() {
    fetch("../chatBox/getMessages.php")
        .then(response => response.json())
        .then(data => {
            const chatMessages = document.getElementById("chat-messages");
            chatMessages.innerHTML = "";
            data.forEach(msg => {
                chatMessages.innerHTML += `<div><strong>${msg.username}:</strong> ${msg.message}</div>`;
            });
            chatMessages.scrollTop = chatMessages.scrollHeight;
        });
}
</script>
</body>
</html>

<?php
#####################################################################################################################
#####################################################################################################################
################# PHP FUNCTIONS BEGIN / NO PLAIN HTML CODE BELOW / BUT EMBEDDED INSIDE A FUNCTION ###################
echo "Hello: ".$user."<br>";
$code=(explode(".", explode("/", $_SERVER['SCRIPT_NAME'])[3])[0]);
$_SESSION["pageName"]=$code.".php";
$uCode=strtoupper($code);
$CourseCode=$_SESSION['CourseName']=$uCode;

getCourseData($uCode);
if ($user[0] == "F"){
    $is_faculty=True;
    Quiz($CourseCode);
    facultyUpload();
    callStudentEnrolled();
    
    }
elseif($user[0] == "S"){
    $is_student=True;
    Quiz($CourseCode);
    studentUpload();
}

function getCourseData($code){
    $query="SELECT * FROM `CourseDetails` WHERE `CourseDetails`.`CourseName` = '$code';";
    $connect=mysqli_connect("localhost", "root","", "ProjectCMS");
    try{
        #$result=mysqli_query(mysqli_connect("localhost", "root", "", "CMS"), $query);
        $row=mysqli_fetch_array(mysqli_query($connect, $query));
        echo "Course ID: ".$row['CourseID']."<br>";
        echo "Course Code: ".$row['CourseName']."<br>";
        echo "Subject: ".$row['Subject']."<br>";
        $sub=$row['Subject'];
        
        $getProf="SELECT * FROM `FacultyDetails` WHERE `FacultyDetails`.`Subject` = '$sub';";
        $row=mysqli_fetch_array(mysqli_query($connect, $getProf));
        echo "ProfName: ".$row['Name']."(".$row['FID'].")"."<br>";
    }
    catch(mysqli_sql_exception){
        $error=mysqli_error($connect);
        echo "[!] Request Could not be performed due to $error";
    }
}

function Quiz($CourseCode){
    global $is_faculty;
    echo "<table align='right' border='2' cellpadding='3' cellspacing='2' style='width:10%; text-align:center;'>
        <tr>
            <th>QUIZ</th>
        </tr>";
    
    for ($i=1; $i<=5; $i++){
        $checkQuery="SELECT COUNT(question_text) AS C FROM `questions` WHERE `courseCode` = '$CourseCode' AND `chapter` = $i;";
        $result=mysqli_query(mysqli_connect("localhost", "root", "", "quizCMS"), $checkQuery);
        $row=mysqli_fetch_assoc($result);
        if ($row['C'] > 1){
            echo "<tr>";
            echo "<td><a href='../QUIZMaker/quiz.php?chapter=$i;'target='_blank'>Quiz_$i</a></td>";
            echo "</tr>";
        }
    }
    if ($is_faculty){
        echo "<td><a href='../QUIZMaker/makeQuiz.php'>Create Quiz</a></td>";
    }
    
}

function passData($linkname,$cname){
    $query="UPDATE `CourseDetails` SET `Link` = './classroomLink/$linkname.php' WHERE `CourseDetails`.`CourseName` = '$cname';";
    try{
        mysqli_query(mysqli_connect("localhost", "root", "", "ProjectCMS"), $query);
    }
    catch(mysqli_sql_exception){
        $error=mysqli_error(mysqli_connect("localhost", "root", "", "ProjectCMS"));
        echo "[!] Request Could not be performed due to $error";
    }
}
function callStudentEnrolled(){
    $query="SELECT * FROM `FacultyDetails`;";
    $result=mysqli_query(mysqli_connect("localhost","root","","ProjectCMS"), $query);
    echo "<table align='left' border='2' cellpadding='3' cellspacing='2' style='width:40%'>
    <tr>
        <th>Name</th>
        <th>Desgination</th>
    </tr>";
    while($row=mysqli_fetch_assoc($result)){
        $name=$row['Name'];
        $des=$row['Designation'];
        echo"<tr>";
                echo"<td>$name</td>";
                echo"<td>$des</td>";
        echo "</tr>";
    }
}

function getnotice_non_userbased(){
    $server="localhost";
    $user="root";
    $password="";
    $database="Notice";
    $code=$_SESSION['CourseName'];
    try{
        $connect=mysqli_connect($server, $user, $password, $database);
        $query="SELECT * FROM `$code`;";
        $getData = mysqli_query($connect, $query);
        if(mysqli_num_rows($getData) === 0){
            echo "[x] No Notice<br>";
        }else{
            while($row=mysqli_fetch_assoc($getData)){
                $notice=$row['Notice'];
                echo "[+] $notice<br><br>";
            }
        }   
    }catch(Exception $error){
        if($error->getMessage() === "Table 'Notice.$code' doesn't exist"){
            echo "[x] No Notice";
        }
    }
}

function getNotice($who){
    if($who == "S"){
        echo '<div class="notice-container">
        <div class="notice-header">Notice</div>
        <div id="notice-messages" class="notice-messages">';
        getnotice_non_userbased();
        echo '</div>
        </div>';
    }

    elseif($who == "F"){
        echo '<div class="notice-container">
                <div class="notice-header">Notice</div>
                <div id="notices" class="notices">
                    ';
                    getnotice_non_userbased();
                 echo '
                </div>
                <div class="chat-input">
                    <form action="';echo $_SESSION['pageName'];echo'" method="POST">
                        <input type="text" name="notice" id="notice" placeholder="Create Notice" required>
                        <button name="submitNotice">Create</button>
                    </form>
                    </div>  
            </div>';
    
            
        
    
    }
}
##FILE UPLOAD################
function facultyUpload(){
    echo '<table align="right" border="1" cellpadding="2" cellspacing="2" style="width:20%; text-align: center;">
                        <tr>
                            <th>My Uploads</th>
                        </tr>';
                        getProfUploads();
        echo    '</table>
                    
            <table align="right" border="1" cellpadding=2" cellspacing="2" style="width:20%; text-align: center;">
                        <th>Upload Field</th>
                        <tr>
                            <form action="'; echo $_SESSION['pageName'];echo'" method="POST" enctype="multipart/form-data">
                                    <tr>
                                        <td>Choose File</td>
                                        <td><input type="file" name="document" required></td>
                                    </tr>
                            
                                    <tr>
                                        <td>Upload</td>
                                        <td><button type="submit" name="facultySubmit">Upload File</button></td>
                                    </tr>
                            </form>

                        </tr>
            </table>';
    
   
        
}

function studentUpload(){
            echo '<table align="right" border="1" cellpadding="2" cellspacing="2" style="width:20%; text-align: center;">
                        <tr>
                            <th>Professor Uploads</th>
                        </tr>';
                    getProfUploads(); #-Calls the files that have been uploaded by profs            
                    echo'<tr>
                            <th>My Uploads</th>
                        </tr>';

                    getUserUploads();

                                  
            echo    '</table>
                    
                    <table align="right" border="1" cellpadding=2" cellspacing="2" style="width:20%; text-align: center;">
                        <th>Upload Field</th>
                        <tr>
                            <form action="';echo $_SESSION['pageName'];echo'" method="POST" enctype="multipart/form-data">
                                    <tr>
                                        <td>Choose File</td>
                                        <td><input type="file" name="document" required></td>
                                    </tr>
                            
                                    <tr>
                                        <td>Upload</td>
                                        <td><button type="submit" name="studentSubmit">Upload File</button></td>
                                    </tr>
                            </form>

                        </tr>
                    </table>';
                   
                    
    
        
}

function getProfUploads(){
    $coursecode=$_SESSION['CourseName'];
    #$coursecode="IT303";
    $folder="../Uploads/$coursecode"; ###NEEDS TO CHANGE THE SRC FOR REAL FILE
    if(is_dir($folder)){
        #echo "[+] $folder is a Directory";
        $files=scandir($folder);  # -> This scandir() functions scans the folder, gives all the files and folder
        foreach($files as $f){

             # -> This line helps me print only files(documents that have been uploaded)
             #pathinfo($fileName, PATHINFO_EXTENSION) -> gets the extension of the fileName
            if(!is_dir($f) && pathinfo($f, PATHINFO_EXTENSION) != ""){ 
                $fileLink=$folder."/".$f;
                
                #Below Code puts the uploaded files in the table
                echo "<tr><td>"; 
                    echo "<a href='$fileLink'>$f</a><br>";
                echo "</td></tr>";
            }
        }
    }else{
        echo "[+] $folder is something else";
    }
}

function getUserUploads(){
    $coursecode=$_SESSION['CourseName'];
    #$coursecode="IT303";
    $folder="../Uploads/$coursecode";
    $fileCount=0;
    #$check=$folder."/"."Assignment_1";
    if(is_dir($folder)){
        $files=scandir($folder);
        foreach($files as $file){
            #echo $file."<br>";
            if(is_dir($folder."/".$file) && pathinfo($file, PATHINFO_EXTENSION) == "" && $file != ".." && $file != "."){
                #echo "[!] Checking $file<br>";
                ## FILE NAME= Assignment_1.(ROLL_NO).pdf
                $newFolder=$folder."/".$file."/";
                $newFiles=scandir($newFolder);
                #echo "[!] Checking $newFolder<br>";
                foreach($newFiles as $pdfs){
                    #echo "$pdfs<br>";
                    $searchParameter=explode(".", $pdfs)[1];
                    #echo $searchParameter."<br>";

                    ###########Function to extract the roll number

                    $userRoll = "2K22-ME-240"; 

                    if($userRoll == $searchParameter){
                        $fileLink=$newFolder."/".$pdfs;
                        $fileCount +=1;
                        echo "<tr><td>";
                            echo "<a href='$fileLink'>$pdfs</a>";
                        echo "</td></tr>";

                    }
                }
            }
        }
        if($fileCount == 0){
            echo "<tr><td>";
                echo "No Uploads";
            echo "</td></tr>";
        }
    }

}
#####################################################################################################################

###SUBMIT NOTICE
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submitNotice'])){
        $notice = $_POST['notice'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Notice";
        $code=$_SESSION['CourseName'];
        try{
            $connect=mysqli_connect($servername, $username, $password, $dbname);
            $query="INSERT INTO `$code` (Notice) VALUES ('$notice');";
            if(mysqli_query($connect, $query)){
                $page=strtolower($_SESSION["CourseName"]);
                header("location: $page.php");
            }
        
        }catch(Exception $error){
            #echo "[x] Error : ".$error->getMessage();
            if($error->getMessage() === "Table 'Notice.$code' doesn't exist"){
                $createTable="CREATE TABLE `Notice`.`$code` (`Sno` INT(255) NOT NULL AUTO_INCREMENT, `Notice` TEXT NOT NULL, 
                PRIMARY KEY (`Sno`)) ENGINE = InnoDB;";
                try{
                    mysqli_query($connect, $createTable);
                    getNotice("F");
                }catch(Exception $error1){
                        echo "[x] Error: ".$error1->getMessage();
                    }
        
                }
            }

}
########## FACULTY SUBMIT
elseif($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['facultySubmit'])){
        
    $allowedExt=["image/jpg", "image/jpeg", "image/png", "application/pdf"];
    if(isset($_FILES['document']) && $_FILES['document']['error'] == 0){
        $fileName=$_FILES['document']['name'];
        $fileType=$_FILES['document']['type'];
        $fileSize=$_FILES['document']['size'];
        $cc=$_SESSION['CourseName'];
        if (in_array($fileType, $allowedExt)){
            $maxFileSize=5*1024*1024;
                if ($fileSize < $maxFileSize){
                    $uploadDst="../Uploads/$cc/$fileName"; #### NEED TO CHANGE DST
                    $uploadSrc=$_FILES['document']['tmp_name'];
                    try{
                        move_uploaded_file($uploadSrc, $uploadDst);
                        #echo "[+] File Uploaded Successfully<br>";
                        if(explode("_", $fileName)[0] == "Assignment" or explode("_", $fileName)[0] == "assignment"){
                            #echo "[!] Making Folder<br>";
                            mkdir("../Uploads/$cc/".explode(".", $fileName)[0], 0777, true);
                            }
                    }
                    catch(Exception $error){
                        echo "[!] Error Occured: $error";
                    }
                                
                }
        }
    }
}

########## STUDENT SUBMIT
elseif($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['studentSubmit'])){
        
    $allowedExt=["image/jpg", "image/jpeg", "image/png", "application/pdf"];
    if(isset($_FILES['document']) && $_FILES['document']['error'] == 0){
        $fileName=$_FILES['document']['name'];
        $fileType=$_FILES['document']['type'];
        $fileSize=$_FILES['document']['size'];
                    
        if (in_array($fileType, $allowedExt)){
            $maxFileSize=5*1024*1024;
            if ($fileSize < $maxFileSize){
                ### Assumed FileName: Assignment_2.2K22-ME-240.pdf
                $dstFolder=explode(".", $fileName)[0];
                $cc=$_SESSION["CourseName"];
                $uploadDst="../Uploads/$cc/$dstFolder/$fileName";
                $uploadSrc=$_FILES['document']['tmp_name'];
                try{
                    move_uploaded_file($uploadSrc, $uploadDst);
                    echo "[+] File Uploaded Successfully<br>";
                }
                catch(Exception $error){
                    echo "[!] Error Occured: $error";
                }
                                            
            }
        }
    }
}

?>
