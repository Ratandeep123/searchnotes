<?php
require("connection.php");
$flag = true;
$msg = 'Data Uploaded Successfully.';
if(isset ($_POST['addd'])){
    $faculty = mysqli_real_escape_string($conn,$_POST['faculty']);
    $subject = mysqli_real_escape_string($conn,$_POST['subject']);
    $unit = mysqli_real_escape_string($conn,$_POST['unit']);
    $dname = mysqli_real_escape_string($conn,$_POST['department']);
    $link = mysqli_real_escape_string($conn,$_POST['link']);
    $checkSQL = "SELECT * FROM  notes where facultyName='$faculty' and subjectName='$subject' and unitName='$unit' and link='$link' and departmentName='$dname'";
    $res = $conn->query($checkSQL);
    if($res->num_rows > 0){
        $msg = "Data Already Exist";
        $flag = false;
    }
 }

 if(empty($link)){
    $target_dir = "uploads/";
    $link = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if(file_exists($link)){
        $msg ="File already exist";
        $flag=false;
    }

    if ($_FILES["fileToUpload"]["size"] > 20000000) { //20MB
       $msg ="File is Large";
       $flag=false;
    }
}

if($flag ==  true){
    $sql = "INSERT INTO notes ". "(facultyName,subjectName,unitName,link,departmentName)"."VALUES ('$faculty','$subject','$unit','$link','$dname')";
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $link);     
    $retval = $conn->query($sql);
    if(!$retval){
        die('Could not enter data:' .mysql_error());
    }
}

?>
    <!DOCTYPE html>
    <html>
    <?php include("headtag.php"); ?>
    <body style="background-color:#1D1D1D">
         <div class="log">
        <a href="logout.php">
            <div style = "float:right; padding: 10px 0 0; color:#08D671; font-size:large">
                <span>Logout</span>
            </div>
            <div style = "float:right; padding:10px 0 0 0; color:#08D671; font-size:large">
                       <span class="glyphicon glyphicon-log-out"></span>
             </div>
        </a>
        
        <div class="container">
            <div align="center">
                <a href="http://18.191.128.102/insta/search.php">
            </a>
            </div>
        </div>
       <div align="center" style="color:#FFFFFF; font-size:medium; padding-top:20px">
       <h3><?= $msg ?></h3> 
    </div>
    <a href = "index.php">
        <div align="center" style="color:#FFFFFF; font-size:medium; padding-top:20px">
           <h3>Back to Uploading Page.</h3> 
        </div>
    </a>

     </body>
     </html>
