<?php
include("../config/database.php");
session_start();
$logout_time=$_SESSION['sid'];
// $sta=$_SESSION['sta'];
$sql=mysqli_query($conn,"update admin set logout=NOW(),attendance='NULL' where usename='$logout_time' AND status='documentor'");
session_destroy();
header("location:../index.php");
?>