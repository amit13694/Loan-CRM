<?php
$host="localhost";
$username="root";
$password="";
$database="CRM";
$conn=mysqli_connect($host,$username,$password,$database);
if($conn!=false)
{
	//echo "database connected";
}
else
{
	echo mysqli_connect_erro();
}


?>