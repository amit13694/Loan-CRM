<?php
include("../config/database.php");
if(isset($_POST['emp_id']))
{
	$emp_data=$_POST["emp_id"];
	$sql=mysqli_query($conn,"select * from add_linker where id='$emp_data'");
	$row=mysqli_fetch_array($sql);
	echo json_encode($row);
}
?>