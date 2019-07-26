<?php
include('design.php');
include("config/database.php");
//fetching username pass from admin
// $time=now();
$fetch_crm_status=mysqli_query($conn,"select * from crm_status");
$fetch_crm_status1=mysqli_fetch_array($fetch_crm_status);
if(isset($_POST['sub']))
{
	$name=$_POST['username'];
	$password=$_POST['userpass'];
	@$status1=$_POST['ad'];
  if($fetch_crm_status1['status']=='on')
  {
	//--------------------------------------------------------------------
	if(!empty($name)&&!empty($password))
	{
		$sql=mysqli_query($conn,"select usename,password,status from admin where usename='$name' AND password='$password'");
        $sql1=mysqli_query($conn,"select * from admin");
        $totaluser=mysqli_num_rows($sql1);

	    // $username=array();
	    // $password1=array();
	    // $status=array();
     while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
      {
	    $username=$row['usename'];
	    $password1=$row['password'];
	    $status=$row['status'];
      }
          if(@$status=="admin")
           {
           	 session_start();
             $_SESSION['sid']=$name;
             //$_SESSION['sta']=$status1;
             
             $sql1=mysqli_query($conn,"update admin set login=NOW(),attendance='1' where usename='$name' AND status='admin'");
     	     header("location:admin/admin.php");
           }
           else if(@$status=="documentor")
           {
           	session_start();
            //$_SESSION['sta']=$status1;
             $_SESSION['sid']=$name;
             $sql1=mysqli_query($conn,"update admin set login=NOW(), attendance='1' where usename='$name' AND status='documentor'");
           	header("location:documentor/add-documentor-dashboard.php");
           }
           else if(@$status=="linker")
           {
           	session_start();
            //$_SESSION['sta']=$status1;
             $_SESSION['sid']=$name;
             $sql1=mysqli_query($conn,"update admin set login=NOW(),attendance='1' where usename='$name' AND status='linker'");
           	header("location:linker/documentor-tl-dashboard.php");
           }
           else if(@$status=="payment")
           {
           	session_start();
            //$_SESSION['sta']=$status1;
             $_SESSION['sid']=$name;
             $sql1=mysqli_query($conn,"update admin set login=NOW(),attendance='1' where usename='$name' AND status='payment'");
           	header("location:Balance_maintainer/documentor-tl-dashboard.php");
           }
          else if(@$status=="varifier")
           {
            session_start();
            //$_SESSION['sta']=$status1;
             $_SESSION['sid']=$name;
             $sql1=mysqli_query($conn,"update admin set login=NOW(),attendance='1' where usename='$name' AND status='varifier'");
            header("location:varifier/add-documentor-dashboard.php");
           }
           else if(@$status=='documentor_tl')
           {
           	 session_start();
             //$_SESSION['sta']=$status1;
             $_SESSION['sid']=$name;
             $sql1=mysqli_query($conn,"update admin set login=NOW(),attendance='1' where usename='$name' AND status='documentor_tl'");
           	header("location:Documentor_tl/documentor-tl-dashboard.php");
           }
           else if(@$status=='linker_tl')
           {
             session_start();
             //$_SESSION['sta']=$status1;
             $_SESSION['sid']=$name;
             $sql1=mysqli_query($conn,"update admin set login=NOW(),attendance='1' where usename='$name' AND status='linker_tl'");
            header("location:Linker_tl/documentor-tl-dashboard.php");
           }
            else if(@$status=='paymentor_tl')
           {
             session_start();
             //$_SESSION['sta']=$status1;
             $_SESSION['sid']=$name;
             $sql1=mysqli_query($conn,"update admin set login=NOW(),attendance='1' where usename='$name' AND status='paymentor_tl'");
            header("location:paymentor_tl/documentor-tl-dashboard.php");
           }
            else{
     	         ?>
                  <div class="alert alert-light alert-dismissible" style="width:40%; margin-left: 30%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Please insert correct data
                    </div>
     	         <?php
	            }
       }   
     else
     {?>
      <div class="alert alert-light alert-dismissible" style="width:40%; margin-left: 30%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Please fill all field
                    </div>
     <?php
 }
}
else if($fetch_crm_status1['status']=='off' && $fetch_crm_status1['username']==$name && $fetch_crm_status1['password']==$password){
     session_start();
             $_SESSION['sid']=$name;
             //$_SESSION['sta']=$status1;
             
             $sql1=mysqli_query($conn,"update admin set login=NOW(),attendance='1' where usename='$name' AND status='admin'");
           header("location:admin/admin.php");

}
else{

   ?>
           <div class="alert alert-light alert-dismissible" style="width:40%; margin-left: 30%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Access Denied!!
                    </div>
           <?php
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>AdminLogin</title>
	<link rel="stylesheet" type="text/css" href="css/index/indexpage.css">
</head>
<body>
<section class="container-fluid">
  <section class="row justify-content-center">	
	<section class="col-12 col-sm-6 col-md-3">
		<img src="image/user3.png" class="form-image">
		<form class="form-container" method="POST">
			<h4 class="text-center font-weight-bold">Login Form</h4>
			<div class="form-group">
				<label for="name">Username</label>
				<input type="text" name="username" placeholder="Enter user name" class="form-control">
			</div>
			<div class="form-group">
				<label for="pass">Password</label>
				<input type="password" name="userpass" placeholder="Enter user password" class="form-control">
			</div>
		<!--	<div class="form-group">
				<label for="designation">Designation</label>
				<select class="form-control" name="ad">
					<option>select</option>
					<option name="admin" value="admin">Admin</option>
					<option name="linker" value="linker">Linker</option>
					<option name="payment" value="payment">Paymentor</option>
					<option name="documentor" value="documentor">Documentor</option>
					<option name="documentor_tl" value="documentor_tl">Documentor TL</option>
          <option name="linker_tl" value="linker_tl">Linker TL</option>
          <option name="paymentor_tl" value="paymentor_tl">Paymentor TL</option>
				</select>
			</div>-->
			<div class="form-group text-center">
			<button type="submit" class="btn btn-sm btn-primary btn-block" name="sub">Login</button>
		    </div>
	</section>
   </section>
</section>
</body>
</html>