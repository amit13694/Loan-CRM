<?php
//include('session.php');
extract($_POST);
include('header.php');
include('../config/database.php');
$admin_name=$_SESSION['sid'];
$sql=mysqli_query($conn,"select password from admin where usename='$admin_name' AND status='linker'");
$fetch_password=mysqli_fetch_array($sql);
if(isset($_POST['sub']))
{
	if(!empty($old)&&!empty($new))
	{ 
		if($old==$fetch_password['password'])
		{
			$sql=mysqli_query($conn,"update admin set password='$new' where usename='$admin_name' AND status='linker'");
      $sql1=mysqli_query($conn,"update add_linker set linker_pass='$new' where email='$admin_name'");

		?>	
		     <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Updated successfully
                    </div>
		<?php }
		else
		{ ?>
			 <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Old password not match!!
                    </div>
	<?php	}
	}
	else
	{ ?>
             <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Please insert data in all fields!!
                    </div>
	<?php }
}

?>
<div class="container-fluid">
       <div class="row no-gutters">
 	  	      <div class="col-md-2">
 		<?php include('sidenav.php'); ?>
 	   </div>
     <div class="col-md-10 content">
     	<div class="card">
     		<div class="card-header">
     			<h4 class="card-title text-center">Change Password</h4>
     		</div>
     		<div class="card-body">
     			<form method="POST">
     				<div class="form-group">
     					<label for="old-password">Enter Old Password</label>
     					<input type="password" name="old" class="form-control" placeholder="Old password">
     				</div>
     				<div class="form-group">
     					<label for="new-password">Enter New Password</label>
     					<input type="password" name="new" class="form-control" placeholder="New password">
     				</div>
     				<div class="form-group text-center">
     					<button type="submit" class="btn btn-primary" name="sub">save</button>
     				</div>
     			</form>
     		</div>
     	</div>
     </div>
</div>
 </div>