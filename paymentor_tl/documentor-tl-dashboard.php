<?php
//include('session.php');
include("header.php");
include("../config/database.php");
include('linker-graph-data.php');
$main_tl_name=$_SESSION['sid'];
if (!isset($_SESSION['sid']) ||(trim ($_SESSION['sid']) == '')) {
          header('location:../index.php');
          exit();
     }
     //fetching lead for balance maintainig
$sql=mysqli_query($conn,"select * from documentor_document where linkup_cnfrm='cnfrm' AND (comment='' OR comment='NULL')");
//total interested lead
$sql1=mysqli_query($conn,"select * from documentor_document where tl_name='$main_tl_name' AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
//total not interested lead
$sql2=mysqli_query($conn,"select * from documentor_document where tl_name='$main_tl_name' AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
//total lead for follow
$sql3=mysqli_query($conn,"select * from documentor_document where tl_name='$main_tl_name' AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
//total balance maintainer under this tl
$sql4=mysqli_query($conn,"select * from add_paymentor where tl_name='$main_tl_name'");
//total present balance maintainer
$sql5=mysqli_query($conn,"select * from admin where tl_name='$main_tl_name' AND attendance='1' ");
//fetching login logout time
$sql6=mysqli_query($conn,"select login,logout from admin where usename='$sid'");
//fetching login data
$login_data=mysqli_fetch_array($sql6);
//fetching total present
$total_attendance=mysqli_num_rows($sql5);
//fetching lead for balance maintain
$total_lead=mysqli_num_rows($sql);
//fethcing total inst lead
$total_inst_lead=mysqli_num_rows($sql1);
//fetching not inst lead
$total_not_lead=mysqli_num_rows($sql2);
//fetching total flw lead
$total_flw_lead=mysqli_num_rows($sql3);
//fetching total maintainer 
$total_documentor=mysqli_num_rows($sql4);
//-------------------------------------------------------
//fetching detail from balance tl
$fetch_target_tl=mysqli_query($conn,"select target,target_cmplt,target_left,daily_target,daily_target_cmplt,daily_target_left from add_tl where email='$main_tl_name'");
$fetch_target=mysqli_fetch_array($fetch_target_tl);
//fetching total document cmplt in month
$fetch_target_cmplt=mysqli_query($conn,"select count(balance_maintainer_name) AS cmplt from documentor_document where MONTH(balance_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_data_for_updation=mysqli_fetch_array($fetch_target_cmplt);
$update_target=$fetch_data_for_updation['cmplt'];
$update=mysqli_query($conn,"update add_tl set target_cmplt='$update_target' where email='$main_tl_name'");
$fetch_cmplt=mysqli_fetch_array($fetch_target_cmplt);
//how many target complete in days
$fetch_daily_target_cmplt=mysqli_query($conn,"select count(balance_maintainer_name) AS daily_cmplt from documentor_document where DAY(balance_dat)=DAY(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_daily_target_cmplt1=mysqli_fetch_array($fetch_daily_target_cmplt);
$count_daily_target_cmplt=$fetch_daily_target_cmplt1['daily_cmplt'];
//updattin daily cmplt
$update_daily_cmplt=mysqli_query($conn,"update add_tl set daily_target_cmplt='$count_daily_target_cmplt' where email='$main_tl_name'");
//updating daily target left
$updating_daily_target_left=$fetch_target['daily_target']-$count_daily_target_cmplt;
$updating_daily_target_left1=mysqli_query($conn,"update add_tl set daily_target_left='$updating_daily_target_left' where email='$main_tl_name'");
//-------------------------------------------------------
//updating target left
$left_target=floor($fetch_target['target']-$update_target);
$update_target_left=mysqli_query($conn,"update add_tl set target_left='$left_target' where email='$main_tl_name'");
//automatic documentor monthly target
@$documentor_target=ceil($fetch_target['target']/$total_documentor);
$auto_documentor_target=mysqli_query($conn,"update add_paymentor set target='$documentor_target' where tl_name='$main_tl_name'");
//daily target for documentor tl document automatic divide according to number of documentor present
@$documentor_daily_target=($fetch_target['daily_target']/$total_attendance);
$auto_documentor_target=mysqli_query($conn,"update add_paymentor set target='$documentor_target',today_target='$documentor_daily_target' where tl_name='$main_tl_name'");
?>
<div class="container-fluid">
       <div class="row no-gutters">
 	     <div class="col-md-2">
 		<?php include ('sidenav.php'); ?>
 	   </div>
     <div class="col-md-10 content">
     	<div class="row">
     		<div class="col-md-4">
     			<div class="card">
     				<div class="card-header text-center bg-dark text-light">Total Lead</div>
     				<div class="card-body bg-secondary"><h3 class="text-center text-light">
                         <i class="glyphicon glyphicon-file"></i>
     					<?php echo $total_lead;?></h3></div>
     			</div>
     		</div>
     		<div class="col-md-4">
     			<div class="card">
     			<div class="card-header text-center bg-dark text-light">Total Interested Lead</div>
     			<div class="card-body bg-success">
     				<h3 class="text-light text-center">
     					<i class="glyphicon glyphicon-hand-right"></i>
     					<?php echo $total_inst_lead;?></h3>
     			</div>
     		</div>
     	</div>
     		<div class="col-md-4">
     			<div class="card">
     			<div class="card-header text-center bg-dark text-light">Total Not Interested Lead</div>
     			<div class="card-body bg-danger">
     				<h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-remove-circle"></i>
     					<?php echo $total_not_lead;?></h3>
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
                         <i class="glyphicon glyphicon-bell"></i>
     					<?php echo $total_flw_lead;?></h3>
     			</div>
     		</div>
     	</div>
     		<div class="col-md-4">
     			<div class="card">
     			<div class="card-header text-center bg-dark text-light">Total Balance Maintainer</div>
     			<div class="card-body bg-warning">
     				<h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-user"></i>
     					<?php echo $total_documentor;?></h3>
     			</div>
     		</div>
     	</div>
     		<div class="col-md-4">
     			<div class="card">
     			<div class="card-header text-center bg-dark text-light">Present Balance Maintainer</div>
     			<div class="card-body bg-secondary">
     				<h3 class="text-center text-light">
     					<i class="glyphicon glyphicon-user"></i>
                              <?php echo $total_attendance;?>
     				</h3>
     			</div>
     		</div>
     	</div>
     	</div>
                    <div class="row">
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Monthly Target</div>
                    <div class="card-body bg-secondary">
                         <h3 class="text-light text-center">
                         <?php echo $fetch_target['target'];?>
                              </h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Target Complete</div>
                    <div class="card-body bg-secondary">
                         <h3 class="text-light text-center">
                         
                              <?php echo $fetch_target['target_cmplt'];?></h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Target Left</div>
                    <div class="card-body bg-secondary">
                         <h3 class="text-center text-light">
                              <i class="glyphicon glyphicon-user"></i>
                              <?php echo $left_target;?>
                         </h3>
                    </div>
               </div>
          </div>
          </div>
             <div class="row">
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Daily Target</div>
                    <div class="card-body bg-secondary">
                         <h3 class="text-light text-center">
                          <?php echo $fetch_target['daily_target'];?>
                              </h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Daily Target Complete</div>
                    <div class="card-body bg-secondary">
                         <h3 class="text-light text-center">
                         
                              <?php echo $count_daily_target_cmplt;?></h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Daily Target Left</div>
                    <div class="card-body bg-secondary">
                         <h3 class="text-center text-light">
                              <i class="glyphicon glyphicon-user"></i>
                             <?php echo $updating_daily_target_left; ?>
                         </h3>
                    </div>
               </div>
          </div>
          </div>
          <div class="row">
                 <div class="col-md-12">
                    <div class="card">
                         <div class="card-header" style="background: #EB8B5D;">
                              <h4 class="card-title text-dark text-center">Linker</h4>
                         </div>
                         <div class="card-body" style="background: #131945; color: #EB8B5D;">
                              <div id="linkerchart" style="height: 250px;"></div>
                         </div>
                    </div>
               </div>
          </div>
          
     </div>
</div>
 </div>
 <script>
      new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'linkerchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
    data: [
    { day: '1', interested: <?php echo $fetch_1; ?>, not_interested: <?php echo $fetch_1_ni; ?>, follow: <?php echo $fetch_1_fl; ?>},
    { day: '2', interested: <?php echo $fetch_2; ?>, not_interested: <?php echo $fetch_2_ni; ?>, follow: <?php echo $fetch_2_fl; ?>},
    { day: '3', interested: <?php echo $fetch_3; ?>, not_interested: <?php echo $fetch_3_ni; ?>, follow: <?php echo $fetch_3_fl; ?>},
    { day: '4', interested: <?php echo $fetch_4; ?>, not_interested: <?php echo $fetch_4_ni; ?>, follow: <?php echo $fetch_4_fl; ?>},
    { day: '5', interested: <?php echo $fetch_5; ?>, not_interested: <?php echo $fetch_5_ni; ?>, follow: <?php echo $fetch_5_fl; ?>},
    { day: '6', interested: <?php echo $fetch_6; ?>, not_interested: <?php echo $fetch_6_ni; ?>, follow: <?php echo $fetch_6_fl; ?>},
    { day: '7', interested: <?php echo $fetch_7; ?>, not_interested: <?php echo $fetch_7_ni; ?>, follow: <?php echo $fetch_7_fl; ?>},
    { day: '8', interested: <?php echo $fetch_8; ?>, not_interested: <?php echo $fetch_8_ni; ?>, follow: <?php echo $fetch_8_fl; ?>},
    { day: '9', interested: <?php echo $fetch_9; ?>, not_interested: <?php echo $fetch_9_ni; ?>, follow: <?php echo $fetch_9_fl; ?>},
    { day: '10', interested: <?php echo $fetch_10; ?>, not_interested: <?php echo $fetch_10_ni; ?>, follow: <?php echo $fetch_10_fl; ?>},
    { day: '11', interested: <?php echo $fetch_11; ?>, not_interested: <?php echo $fetch_11_ni; ?>, follow: <?php echo $fetch_11_fl; ?>},
    { day: '12', interested: <?php echo $fetch_12; ?>, not_interested: <?php echo $fetch_12_ni; ?>, follow: <?php echo $fetch_12_fl; ?>},
        { day: '13', interested: <?php echo $fetch_13; ?>, not_interested: <?php echo $fetch_13_ni; ?>, follow: <?php echo $fetch_13_fl; ?>},
    { day: '14', interested: <?php echo $fetch_14; ?>, not_interested: <?php echo $fetch_14_ni; ?>, follow: <?php echo $fetch_14_fl; ?>},
    { day: '15', interested: <?php echo $fetch_15; ?>, not_interested: <?php echo $fetch_15_ni; ?>, follow: <?php echo $fetch_15_fl; ?>},
    { day: '16', interested: <?php echo $fetch_16; ?>, not_interested: <?php echo $fetch_16_ni; ?>, follow: <?php echo $fetch_16_fl; ?>},
    { day: '17', interested: <?php echo $fetch_17; ?>, not_interested: <?php echo $fetch_17_ni; ?>, follow: <?php echo $fetch_17_fl; ?>},
    { day: '18', interested: <?php echo $fetch_18; ?>, not_interested: <?php echo $fetch_18_ni; ?>, follow: <?php echo $fetch_18_fl; ?>},
    { day: '19', interested: <?php echo $fetch_19; ?>, not_interested: <?php echo $fetch_19_ni; ?>, follow: <?php echo $fetch_19_fl; ?>},
    { day: '20', interested: <?php echo $fetch_20; ?>, not_interested: <?php echo $fetch_20_ni; ?>, follow: <?php echo $fetch_20_fl; ?>},
    { day: '21', interested: <?php echo $fetch_21; ?>, not_interested: <?php echo $fetch_21_ni; ?>, follow: <?php echo $fetch_21_fl; ?>},
    { day: '22', interested: <?php echo $fetch_22; ?>, not_interested: <?php echo $fetch_22_ni; ?>, follow: <?php echo $fetch_22_fl; ?>},
    { day: '23', interested: <?php echo $fetch_23; ?>, not_interested: <?php echo $fetch_23_ni; ?>, follow: <?php echo $fetch_23_fl; ?>},
    { day: '24', interested: <?php echo $fetch_24; ?>, not_interested: <?php echo $fetch_24_ni; ?>, follow: <?php echo $fetch_24_fl; ?>},
        { day: '25', interested: <?php echo $fetch_25; ?>, not_interested: <?php echo $fetch_25_ni; ?>, follow: <?php echo $fetch_25_fl; ?>},
    { day: '26', interested: <?php echo $fetch_26; ?>, not_interested: <?php echo $fetch_26_ni; ?>, follow: <?php echo $fetch_26_fl; ?>},
    { day: '27', interested: <?php echo $fetch_27; ?>, not_interested: <?php echo $fetch_27_ni; ?>, follow: <?php echo $fetch_27_fl; ?>},
    { day: '28', interested: <?php echo $fetch_28; ?>, not_interested: <?php echo $fetch_28_ni; ?>, follow: <?php echo $fetch_28_fl; ?>},
    { day: '29', interested: <?php echo $fetch_29; ?>, not_interested: <?php echo $fetch_29_ni; ?>, follow: <?php echo $fetch_29_fl; ?>},
    { day: '30', interested: <?php echo $fetch_30; ?>, not_interested: <?php echo $fetch_30_ni; ?>, follow: <?php echo $fetch_30_fl; ?>},
    { day: '31', interested: <?php echo $fetch_31; ?>, not_interested: <?php echo $fetch_31_ni; ?>, follow: <?php echo $fetch_31_fl; ?>}
  ],
  // The name of the data record attribute that contains x-values.
  xLabels:'day',
  xkey: 'day',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['interested','not_interested','follow'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  barColors:['green','red','blue'],
  labels: ['interested','not_interested','follow']
});

 </script>