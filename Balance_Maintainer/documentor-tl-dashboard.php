<?php
//include('session.php');
include("header.php");
include("../config/database.php");
$main_tl_name=$_SESSION['sid'];
if (!isset($_SESSION['sid']) ||(trim ($_SESSION['sid']) == '')) {
          header('location:../index.php');
          exit();
     }
// fetchint iterestde not-interested and follow data
  $fetch_interested=mysqli_query($conn,"select count(comment) AS interested from documentor_document where balance_maintainer_name='$main_tl_name' AND comment='INST'");
  $fetch_interested_data=mysqli_fetch_array($fetch_interested);
   $fetch_not_interested=mysqli_query($conn,"select count(comment) AS not_interested from documentor_document where balance_maintainer_name='$main_tl_name' AND comment='NINST'");
  $fetch_not_interested_data=mysqli_fetch_array($fetch_not_interested); 
    $fetch_flw_interested=mysqli_query($conn,"select count(comment) AS flw from documentor_document where balance_maintainer_name='$main_tl_name' AND comment='FLW'");
  $fetch_flw_interested_data=mysqli_fetch_array($fetch_flw_interested);   
//--------------------------------------------------------------------------------------
     $cmplt_target=mysqli_query($conn,"select target_cmplt from add_paymentor where email='$main_tl_name'");
$dashboard_target_cmplt=mysqli_fetch_array($cmplt_target);
     $sql1=mysqli_query($conn,"select target,today_target from add_paymentor where email='$main_tl_name'");
     $fetch_month_target=mysqli_fetch_array($sql1);
     // daily target
     $sql1=mysqli_query($conn,"select login,logout from admin where usename='$main_tl_name' AND status='payment'");
          $sql1_match_day=mysqli_query($conn,"select DAY(login) AS ln,DAY(logout) AS lo from admin where usename='$sid'");
$fetch_match_day=mysqli_fetch_array($sql1_match_day);
$sql3=mysqli_query($conn,"select * from documentor_document where  documentor_name='$sid' ");
$count_total_complete=mysqli_num_rows($sql3);
$login_data=mysqli_fetch_array($sql1);
// $daily_target=ceil($fetch_month_target['target']/25);
if($fetch_match_day['ln']!=$fetch_match_day['lo'])
{
     $fetch_remain_target=mysqli_query($conn,"select today_target_left from add_paymentor where email='$main_tl_name'");
     $fetch_left_target=mysqli_fetch_array($fetch_remain_target);
     $new_target=$fetch_month_target['today_target']+$fetch_left_target['today_target_left'];
    $update_month_target=mysqli_query($conn,"update add_paymentor set today_target='$new_target' ");
     $update_new=mysqli_query($conn,"update add_paymentor set target_cmplt='NULL',today_target_left='NULL'");
     $update_logout=mysqli_query($conn,"update admin set logout=NOW() where usename='$main_tl_name'");
}
// $sql2=mysqli_query($conn,"update add_paymentor set today_target=$daily_target where email='$main_tl_name'");
$target_left=$fetch_month_target['today_target']-$dashboard_target_cmplt['target_cmplt'];
$sql3=mysqli_query($conn,"update add_paymentor set today_target_left='$target_left' where email='$main_tl_name'");
$sql4=mysqli_query($conn,"select today_target_left from add_paymentor where email='$main_tl_name'");
$fetch=mysqli_fetch_array($sql4);
$target_left_data=$fetch['today_target_left'];
$sql5=mysqli_query($conn,"select month_target_cmplt from add_paymentor where email='$main_tl_name'");
$month_data_left=mysqli_fetch_array($sql5);
//updating monthly target left
$update_month_target_left=$fetch_month_target['target']-$month_data_left['month_target_cmplt'];
$sql_update_month=mysqli_query($conn,"update add_paymentor set month_wise_target_left='$update_month_target_left' where email='$main_tl_name'");
//fetching mobthwise target left
$fetching_monthwise_target_left=mysqli_query($conn,"select month_wise_target_left from add_paymentor where email='$main_tl_name'");
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
                         <div class="card-header text-center bg-dark text-light">This month target</div>
                         <div class="card-body bg-secondary"><h3 class="text-center text-light">
                         <i class="glyphicon glyphicon-file"></i>
                              <?php echo $fetch_month_target['target'];?></h3></div>
                    </div>
               </div>
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Monthly Target Completed</div>
                    <div class="card-body bg-success">
                         <h3 class="text-light text-center">
                              <i class="glyphicon glyphicon-hand-right"></i>
                             <?php echo $month_data_left['month_target_cmplt']; ?>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Monthly Target Left</div>
                    <div class="card-body bg-primary">
                         <h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-ok"></i>
                              <?php echo $fetch_month_left['month_wise_target_left']; ?></h3>
                    </div>
              </div>
          </div>
     </div>
          <div class="row">
              <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Today target</div>
                    <div class="card-body bg-success">
                         <h3 class="text-light text-center">
                              <i class="glyphicon glyphicon-hand-right"></i>
                             <?php echo $fetch_month_target['today_target']; ?>
                    </div>
               </div>
          </div>
                         <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Completed Targets</div>
                    <div class="card-body bg-primary">
                         <h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-ok"></i>
                              <?php echo $dashboard_target_cmplt['target_cmplt']; ?></h3>
                    </div>
              </div>
          </div>
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Target Left</div>
                    <div class="card-body bg-primary">
                         <h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-bell"></i>
                              <?php echo (int)$target_left_data; ?></h3>
                    </div>
               </div>
          </div>
          </div>
                    <div class="row">
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Total Follow Up</div>
                    <div class="card-body bg-primary">
                         <h3 class="text-light text-center">  
                         <i class="glyphicon glyphicon-user"></i>
                          <?php echo $fetch_flw_interested_data['flw'];?>
                         </h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Total Interested Lead</div>
                    <div class="card-body bg-warning">
                         <h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-user"></i>
                              <?php echo $fetch_interested_data['interested']; ?>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Total Not Interested</div>
                    <div class="card-body bg-secondary">
                         <h3 class="text-center text-light">
                              <i class="glyphicon glyphicon-user"></i>
                               <?php echo $fetch_not_interested_data['not_interested']; ?>
                         </h3>
                    </div>
               </div>
          </div>
          </div>
     </div>
</div>
 </div>