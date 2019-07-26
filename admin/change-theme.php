<?php
include('header.php');
$user=$_SESSION['sid'];
include('../config/database.php');
if(isset($_POST['set_sidenav_back']))
{
	$sidenav=$_POST['side_back'];
	$sql=mysqli_query($conn,"update admin set sidenav='$sidenav' where usename='$user'");
	header("location:change-theme.php");
}
//container
if(isset($_POST['set_container']))
{
	$set_middle=$_POST['side_container'];
	
	$sql=mysqli_query($conn,"update admin set container='$set_middle' where usename='$user'");
	header("location:change-theme.php");
}
//header
if(isset($_POST['set_header']))
{
	$set_header1=$_POST['change_header'];
	
	$sql=mysqli_query($conn,"update admin set header='$set_header1' where usename='$user'");
	header("location:change-theme.php");
}
?>
<div class="container-fluid">
	<div class="row no-gutters">
		<div class="col-md-2">
			<?php include('sidepanel.php'); ?>
		</div>
		<div class="col-md-10 content">
			<div class="table-responsive">
				<h4 class="text-center">Change Theme</h4>
			<table class="table table-bordered">
				<tr class="bg-dark">
					<td class="text-center text-light">Change Left Sidenav Background</td>
					<td>
						<form method="POST">
							<input type="color" name="side_back" class="form-control">
					</td>
					<td class="text-center">
						<button type="submit" name="set_sidenav_back" class="btn btn-primary">change</button>
					</form>
					</td>
				</tr>
								<tr class="bg-dark">
					<td class="text-center text-light">Change Container Background</td>
					<td>
						<form method="POST">
							<input type="color" name="side_container" class="form-control">
					</td>
					<td class="text-center">
						<button type="submit" name="set_container" class="btn btn-primary">change</button>
					</form>
					</td>
				</tr>
							<tr class="bg-dark">
					<td class="text-center text-light">Change Header Background</td>
					<td>
						<form method="POST">
							<input type="color" name="change_header" class="form-control">
					</td>
					<td class="text-center">
						<button type="submit" name="set_header" class="btn btn-primary">change</button>
					</form>
					</td>
				</tr>
			</table>
		</div>
		</div>
	</div>
</div>