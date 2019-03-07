<?php
session_start();
if(!empty($_SESSION['username'])){
    header('Location: home.php');
}
?>
<html>
    <?php include("headtag.php"); ?>
    <body class="container-fluid MainClass">
        <?php include("search.php"); include("logoNdBox.php");?>
    </body>
</html>


