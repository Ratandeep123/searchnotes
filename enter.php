<?php
require("connection.php");
if(isset ($_POST['addd'])){
    $faculty = mysqli_real_escape_string($conn,$_POST['faculty']);
    $subject = mysqli_real_escape_string($conn,$_POST['subject']);
    $unit = mysqli_real_escape_string($conn,$_POST['unit']);
    $dname = mysqli_real_escape_string($conn,$_POST['department']);
    $link = mysqli_real_escape_string($conn,$_POST['link']);
    $sql = "INSERT INTO notes ". "(facultyName,subjectName,unitName,link,departmentName)"."VALUES ('$faculty','$subject','$unit','$link','$dname')";
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
       <h3>Data Uploaded Successfully.</h3> 
    </div>
    <a href = "index.php">
        <div align="center" style="color:#FFFFFF; font-size:medium; padding-top:20px">
           <h3>Back to Uploading Page.</h3> 
        </div>
    </a>

     </body>
     </html>
