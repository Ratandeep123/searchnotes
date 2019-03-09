<?php
  require("connection.php");
  session_start();
  if(empty($_SESSION['username'])){
    $name = mysqli_real_escape_string($conn,$_POST['uname']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $sql= "SELECT username,password FROM users WHERE username='$name' AND password='$password'";  
    $result = $conn->query($sql);
    if($result->num_rows==1){
      $_SESSION['username']=$name;
    }
    else{
      header("Location:index.php");
    }
  }
  
?>

<!DOCTYPE html>
<html>
    <?php include("headtag.php"); ?>
    <body style = "background-color:#1D1D1D">
         <a href="logout.php">
                <div style = "float:right; padding:10px 10px 0 0; color:#3a8594; font-size:medium">
                    <span><b>&nbspLogout</b></span>
                </div>
                <div style = "float:right; padding:10px 0 0 0; color:#3a8594; font-size:medium">
                    <span class="glyphicon glyphicon-log-out"></span>
                </div>

         </a>

         <div class="container">
             <div align="center">
                 <a href="https://localhost/insta/index.php">
                </a>
             </div>
         </div>


    <div class="container center wow fadeIn">
            <form role="form" action="enter.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="sr-only" for="form-first-name">Faculty</label>
                    <input type="text" name="faculty" placeholder="Faculty Name..." class="form-control" required>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="form-last-name">Subject</label>
                  <input type="text" name="subject" placeholder="Subject..." class="form-control" required>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="form-email">Unit</label>
                  <input type="text" name="unit" placeholder="Unit Name..." class="form-control" required>
                </div>
                <div class="form-group">
                  <div class="row linkRow">
                        <div class="notesLink col-lg-5 col-md-5 col-sm-5">
                            <label class="sr-only" for="form-first-name">Notes Url</label>
                            <input type="text" name="link" placeholder="Notes Url ..." class="form-control">
                        </div>
                        <div class="notesLink col-lg-2 col-md-2 col-sm-2">
                          <h4>Or</h4>
                        </div>
                        <div class="notesLink col-lg-5 col-md-5 col-sm-5">
                            <label class="sr-only" for="form-first-name">File Upload</label>
                            <input type="file" name="fileToUpload" id="fileToUpload" placeholder="File Link..." class="form-control">
                        </div>
                  </div>
                </div>            
                <div class="form-group">
                  <label class="sr-only" for="form-first-name">Department</label>
                  <input type="text" name="department" placeholder="Department Name..." class="form-control" required>
                </div>
                <div style = "padding:0 0 0 45%">
                  <input name="addd" class="btn btn-default" type="submit" value="Submit" style="background-color:#3a8594; color:#FFFFFF; border-style:none">
                </div>
            </form>
  	</div>
    </body>
</html>