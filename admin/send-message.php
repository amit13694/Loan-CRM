<?php
include("../config/database.php");
if(isset($_POST['send']))
{
	$msg1=$_POST['msg'];
	$sql=mysqli_query($conn,"update admin set message='$msg1' where usename='admin'");
}
?>