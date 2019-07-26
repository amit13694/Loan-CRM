<?php
include("../config/database.php");
if(isset($_POST['delete_id']))
{
	$emp_data=$_POST["delete_id"];
	$sql=mysqli_query($conn,"select * from add_varifier where email='$emp_data'");
	$row=mysqli_fetch_array($sql);
	echo json_encode($row);
}
?>