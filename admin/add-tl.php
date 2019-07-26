<?php
//include('session.php');
extract($_POST);
include("header.php");
include('../config/database.php');
if(isset($_POST['sub']))
{
	//$tl1=$_POST['tl'];
    $unique=rand(0,10000);
	if(!empty($empname)&&!empty($empnumber)&&!empty($empemail)&&!empty($empdate)&&!empty($emppass))
	{
        if($designation=='linker_tl')
        {
		$sql1=mysqli_query($conn,"insert into add_tl(name,contact,email,joining_date,tl_pass,status,unique_number)values('$empname','$empnumber','$empemail','$empdate','$emppass','linker_tl','$unique')")or trigger_error("sql error".mysqli_error($conn),E_USER_ERROR);
        $sql1=mysqli_query($conn,"insert into add_tl(name,contact,email,joining_date,tl_pass,status,unique_number)values('$empname','$empnumber','$empemail','$empdate','$emppass','varifier_tl','$unique')")or trigger_error("sql error".mysqli_error($conn),E_USER_ERROR);
		$sql=mysqli_query($conn,"insert into admin(usename,name,password,status,tl_name,unique_tl,logout,sidenav,container,header)values('$empemail','$empname','$emppass','$designation','$unique','0',NOW(),'#343A40','#6D6E6A','#343A40')");
         }
         else{
            $sql1=mysqli_query($conn,"insert into add_tl(name,contact,email,joining_date,tl_pass,status,unique_number)values('$empname','$empnumber','$empemail','$empdate','$emppass','$designation','$unique')")or trigger_error("sql error".mysqli_error($conn),E_USER_ERROR);
            $sql=mysqli_query($conn,"insert into admin(usename,name,password,status,tl_name,unique_tl,logout,sidenav,container,header)values('$empemail','$empname','$emppass','$designation','$unique','0',NOW(),'#343A40','#6D6E6A','#343A40')");
         }
		if($sql!=false && $sql1!=false)
		{ ?>
			      <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Data inserted successfully
                    </div>
		<?php }
		else
		{ ?>
			     <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Ooops there is some error! please check your data
                    </div>
		<?php
		 } 
	}
	else
	{ ?>
		             <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Please fill all mendatory fields
                    </div>
	<?php }

}
?>
<div class="container-fluid">
       <div class="row no-gutters">
 	      <div class="col-md-2">
 		<?php include('sidepanel.php'); ?>
 	   </div>
     <div class="col-md-10 content">
     	<div class="card mx-auto" style="width:60%;">
     		<div class="card-header bg-dark">
     			<h4 class="text-light text-center">ADD DOCUMENTOR</h4>
     		</div>
     		<div class="card-body">
     			<form method="POST">
     				<div class="form-group">
     					<label for="name">Name of Employe</label>
     					<input type="text" name="empname" class="form-control" placeholder="Name of employe">
     				</div>
     				<div class="form-group">
     					<label for="number">Contact Number</label>
     					<input type="number" name="empnumber" class="form-control" placeholder="Contact number">
     				</div>
     				<div class="form-group">
     					<label for="email">Employe Email</label>
     					<input type="email" name="empemail" class="form-control" placeholder="Email of employe">
     				</div>
     				<div class="form-group">
     					<label for="date">Joining Date</label>
     					<input type="date" name="empdate" class="form-control">
     				</div>
     				<div class="form-group">
     					<label for="password">Create Password</label>
     					<input type="text" name="emppass" class="form-control" placeholder="Create password">
     				</div>
     				<div class="form-group">
     					<label for="sel">Designation</label>
     					<select class="form-control" name="designation">
     						<option>select</option>
     						<option name='documentor_tl' value="documentor_tl">Documentor TL</option>
     						<option name='linker_tl' value="linker_tl">Linker TL</option>
     						<option name='paymentor_tl' value="paymentor_tl">Paymentor TL</option>
     					</select>
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