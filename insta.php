<?php
  include("connection.php");
  $query = mysqli_real_escape_string($conn,$_POST["Search"]); 
  $sql = "SELECT * FROM notes where subjectName="."'".$query."'"." OR facultyName="."'".$query."'"." OR unitName="."'".$query."'";
  $result = $conn->query($sql);
  
?>
<!DOCTYPE html>
<html>
<?php include("headtag.php"); ?>
<body>
<div class="container-fluid MainClass">
  <?php include("search.php"); ?>
  <?php include("logoNdBox.php"); ?>  
  <?php
    if($result->num_rows > 0){
  ?>
    <table class="table table-bordered">
      <tr class="tableHead th">
        <th>Faculty</th>
        <th>Department</th>
        <th>Subject</th>
        <th>Unit</th>
        <th>Download</th>
      </tr>
    <?php
        while($row = $result->fetch_assoc()) {
    ?>
      <tr class="tableData">
        <td><?php echo $row["facultyName"] ?></td>
        <td><?php echo $row["departmentName"]?></td>
        <td><?php echo $row["subjectName"] ?></td>
        <td><?php echo $row["unitName"]?></td>
        <td><a href="<?php echo $row["link"] ?>"  class="rang" target="_blank">Download</a></td>
      </tr>
    <?php
        }
      }
    ?>
    </table>
</div>
</body>
</html>