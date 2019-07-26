<?php
//include('session.php');
include('header.php');
include('../config/database.php');
$sid=$_SESSION['sid'];
// $sta=$_SESSION['sta'];
if (!isset($_SESSION['sid']) ||(trim ($_SESSION['sid']) == '')) {
		header('location:../index.php');
		exit();
	}
//$sql=mysqli_query($conn,"select * from ")
$cmplt_target=mysqli_query($conn,"select target_cmplt from add_varifier where email='$sid'");
$dashboard_target_cmplt=mysqli_fetch_array($cmplt_target);
$sql=mysqli_query($conn,"select target,today_target from add_varifier where email='$sid'");
$target1=mysqli_fetch_array($sql);
$sql1=mysqli_query($conn,"select login,logout from admin where usename='$sid'");
$sql1_match_day=mysqli_query($conn,"select DAY(login) AS ln,DAY(logout) AS lo from admin where usename='$sid'");
$fetch_match_day=mysqli_fetch_array($sql1_match_day);
//$sql3=mysqli_query($conn,"select * from documentor_document where  documentor_name='$sid' ");
//$count_total_complete=mysqli_num_rows($sql3);
$login_data=mysqli_fetch_array($sql1);
// $daily_target=ceil($target1['target']/25);
if($fetch_match_day['ln']!=$fetch_match_day['lo'])
{
 	$fetch_remain_target=mysqli_query($conn,"select today_target_left from add_varifier where email='$sid'");
 	$fetch_left_target=mysqli_fetch_array($fetch_remain_target);
 	$new_target=$target1['today_target']+$fetch_left_target['today_target_left'];
    $update_month_target=mysqli_query($conn,"update add_varifier set today_target='$new_target' where email='$sid' ");
    $update_new=mysqli_query($conn,"update add_varifier set target_cmplt='NULL',today_target_left='NULL' where email='$sid'");
    $update_logout=mysqli_query($conn,"update admin set logout=NOW() where usename='$sid'");
}
// $sql2=mysqli_query($conn,"update add_varifier set today_target=$daily_target where email='$sid'");
$target_left=$target1['today_target']-$dashboard_target_cmplt['target_cmplt'];
$sql3=mysqli_query($conn,"update add_varifier set today_target_left='$target_left' where email='$sid'");
$sql4=mysqli_query($conn,"select today_target_left from add_varifier where email='$sid'");
$fetch=mysqli_fetch_array($sql4);
$target_left_data=$fetch['today_target_left'];
$sql5=mysqli_query($conn,"select month_target_cmplt from add_varifier where email='$sid'");
$month_data_left=mysqli_fetch_array($sql5);
//updating monthly target left
$update_month_target_left=$target1['target']-$month_data_left['month_target_cmplt'];
$sql_update_month=mysqli_query($conn,"update add_varifier set month_wise_target_left='$update_month_target_left' where email='$sid'");
//fetching mobthwise target left
$fetching_monthwise_target_left=mysqli_query($conn,"select month_wise_target_left from add_varifier where email='$sid'");
$fetch_month_left=mysqli_fetch_array($fetching_monthwise_target_left);
?>
<div class="container-fluid">
  <div class="row no-gutters">
 	     <div class="col-md-2">
<?php include('sidenav.php'); ?>
 	   </div>
 	   <div class="col-md-10 content">
 	   <div class="row">
 	   	<div class="col-md-4">
 	   		<div class="card">
 	   			<div class="card-header bg-dark text-light">
 	   				<h6 class="text-center">This month targets</h6>
                    </div>
 	   			<div class="card-body bg-primary">
 	   			<h4 class="text-light text-center">
 	   				<i class="glyphicon glyphicon-check"></i>
 	   				<?php echo $target1['target'];?>
 	   			</h4>
 	   			</div>
 	   		</div>
 	   	</div>
 	   	<div class="col-md-4">
 	   		<div class="card">
 	   			<div class="card-header bg-dark text-light">
 	   				<h6 class="text-center">Monthly Target Complete</h6>
 	   			</div>
 	   			<div class="card-body bg-success">
 	   				<h4 class="text-center text-light">
 	   				<i class="glyphicon glyphicon-log-in"></i>
 	   				<?php echo $month_data_left['month_target_cmplt']; ?>
 	   			    </h4>
 	   			</div>
 	   		</div>
 	   	</div>
 	   	<div class="col-md-4">
 	   		<div class="card">
 	   			<div class="card-header bg-dark text-light">
 	   				<h6 class="text-center">Monthly Target Left</h6>
 	   			</div>
 	   			<div class="card-body bg-danger">
 	  				<h4 class="text-center text-light">
 	   				<i class="glyphicon glyphicon-log-out"></i>
 	   				<?php echo $fetch_month_left['month_wise_target_left'];?>
 	   			    </h4>
 	   			</div>
 	   		</div>
 	   	</div>
 	   </div>
 	    	   <div class="row">
 	   	<div class="col-md-4">
 	   		<div class="card">
 	   			<div class="card-header bg-dark text-light">
 	   				<h6 class="text-center">Today Targets</h6>
 	   			</div>
 	   			<div class="card-body bg-info">
 	   				<h4 class="text-center text-light">
 	   				<i class="glyphicon glyphicon-dashboard"></i>
 	   				<?php echo $target1['today_target']; ?>
 	   			    </h4>
 	   			</div>
 	   		</div>
 	   	</div>
 	   	<div class="col-md-4">
 	   		<div class="card">
 	   			<div class="card-header bg-dark text-light">
 	   				<h6 class="text-center">Completed Target</h6>
 	   			</div>
 	   			<div class="card-body bg-success">
 	   				<h4 class="text-center text-light">
 	   				<i class="glyphicon glyphicon-thumbs-up"></i>
 	   				<?php echo $dashboard_target_cmplt['target_cmplt']; ?>
 	   			    </h4>
 	   			</div>
 	   		</div>
 	   	</div>
 	   	<div class="col-md-4">
 	   		<div class="card">
 	   			<div class="card-header bg-dark text-light">
 	   				<h6 class="text-center">Target Left</h6>
 	   			</div>
 	   			<div class="card-body" style="background: red;">
 	   				<h4 class="text-center text-light">
 	   				<i class="glyphicon glyphicon-hand-right"></i>
 	   				<?php echo (int)$target_left_data; ?>
 	   			    </h4>
 	   			</div>
 	   		</div>
 	   	</div>
 	   </div>	
 	   </div>
 	</div>
 </div>