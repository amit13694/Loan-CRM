<?php
include("../config/database.php");
session_start();
$logout_time=$_SESSION['sid'];
$sql=mysqli_query($conn,"update admin set logout=NOW(),attendance='NULL' where usename='$logout_time' AND status='varifier'");
session_destroy();
header("location:../index.php");
?>