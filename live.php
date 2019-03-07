<?php
require 'connection.php';
$key=mysqli_real_escape_string($conn,$_GET['key']);
$array = array();
$sql="select subjectName from notes where facultyName LIKE '%$key%' OR subjectName LIKE '%$key%'";
$sql2="select facultyName from notes where facultyName LIKE '%$key%' OR subjectName LIKE '%$key%'";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
while($row = $result->fetch_assoc()){
  $array[] = $row['subjectName'];
}
while($row = $result2->fetch_assoc()){
  $array[] = $row['facultyName'];
}

echo strtoupper(json_encode($array));

?>
