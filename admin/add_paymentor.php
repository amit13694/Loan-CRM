<?php
//include('session.php');
extract($_POST);
include('header.php');
include('../config/database.php');
$sql_tl=mysqli_query($conn,"select add_tl.name,add_tl.email from add_tl INNER JOIN admin ON add_tl.email=admin.usename where add_tl.status='paymentor_tl'");
$total_tl=mysqli_num_rows($sql_tl);
$fetch_tl=array();
$fetch_tl_email=array();
while($row=mysqli_fetch_array($sql_tl))
{
	$fetch_tl_email[]=$row['email'];
	$fetch_tl[]=$row['name'];
}
if(isset($_POST['sub']))
{
    $unique=rand(0,10000);
	if(!empty($empname)&&!empty($empnumber)&&!empty($empemail)&&!empty($empdate)&&!empty($emppass))
	{
		$sql=mysqli_query($conn,"insert into admin(usename,name,password,status,tl_name,documentor_unique,logout,sidenav,container,header)values('$empemail','$empname','$emppass','paymentor','$select_tl','$unique',NOW(),'#343A40','#6D6E6A','#343A40')");
        $sql1=mysqli_query($conn,"insert into add_paymentor(name,contact,email,joining_date,paymentor_pass,tl_name,unique_number,target)values('$empname','$empnumber','$empemail','$empdate','$emppass','$select_tl','$unique','0')")or trigger_error("sql error".mysqli_error($conn),E_USER_ERROR);
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
		<?php } 
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
     			<h4 class="text-light text-center">ADD PAYMENTOR</h4>
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
     					<label for="tl">Team Leader Email</label>
     					<select name="select_tl" class="form-control">
     						<option>select</option>
     						<?php
                                for($i=0;$i<$total_tl;$i++)
                                { ?>
                                 <option name="<?php echo $fetch_tl_email[$i]?>" value="<?php echo $fetch_tl_email[$i]?>"><?php echo $fetch_tl[$i]?></option>
                               <?php }
     						?>
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