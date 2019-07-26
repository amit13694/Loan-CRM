<?php
include('header.php');
include('../config/database.php');
if(isset($_POST['sub']))
{
	$status1=$_POST['op1'];
	$sql=mysqli_query($conn,"update crm_status set status='$status1'");
	if($sql=true)
	{ ?>
		 <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      CRM <?php echo $status1; ?> Successfully!!
                    </div>
	<?php }

}
$fetch_status=mysqli_query($conn,"select status from crm_status");
$fetch_crm_status=mysqli_fetch_array($fetch_status);
?>
<div class="row no-gutters">
	<div class="col-md-2">
		<?php include('sidepanel.php'); ?>
	</div>
	<div class="col-md-10">
		<div class="card">
	<div class="card-header bg-dark">
		<h4 class="text-light">Current Status <span class="badge badge-primary"><?php echo $fetch_crm_status['status']; ?></span></h4>
		<h4 class="text-light text-center"> ShutDown CRM</h4>
	</div>
	<div class="card-body text-center">
		<form method="POST">
			<div class="form-check-inline">
        <label class="form-check-label">
		    <input type="radio" class="form-check-input" name="op1" value='on'>ON
		  </label>
		</div>
		<div class="form-check-inline">
		  <label class="form-check-label">
		    <input type="radio" class="form-check-input" name="op1" value="off">OFF
		  </label>
</div>
<div class="form-group">
	<button type="submit" class="btn btn-primary" name="sub">Apply</button>
</div>
		</form>
	</div>
</div>
	</div>
</div>