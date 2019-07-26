<?php
include("../config/database.php");
if(isset($_POST['delete_id']))
{
	$emp_data=$_POST["delete_id"];
	$emp_data1=$_POST["emp_status"];
	$sql=mysqli_query($conn,"select * from add_tl where email='$emp_data' AND status='$emp_data1' ");
	$row=mysqli_fetch_array($sql);
	echo json_encode($row);
}
?>