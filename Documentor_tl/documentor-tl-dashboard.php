<?php
//include('session.php');
include("header.php");
include("../config/database.php");
include('documentor-graph.php');
$main_tl_name=$_SESSION['sid'];
if (!isset($_SESSION['sid']) ||(trim ($_SESSION['sid']) == '')) {
          header('location:../index.php');
          exit();
     }
// fetching total lead
$sql=mysqli_query($conn,"select * from documentor_document where tl_name='$main_tl_name' AND MONTH(when_added)=MONTH(CURDATE())");
$sql4=mysqli_query($conn,"select * from add_documentor where tl_name='$main_tl_name'");
//fetching attendance
$sql5=mysqli_query($conn,"select * from admin where tl_name='$main_tl_name' AND attendance='1' ");
//fetching total detail form tl
$fetch_target_tl=mysqli_query($conn,"select target,target_cmplt,target_left,daily_target,daily_target_cmplt,daily_target_left from add_tl where email='$main_tl_name'");
$fetch_target=mysqli_fetch_array($fetch_target_tl);
//how many target cmplt in month
$fetch_target_cmplt=mysqli_query($conn,"select count(documentor_name) AS cmplt from documentor_document where MONTH(when_added)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
//how many target complete in days
$fetch_daily_target_cmplt=mysqli_query($conn,"select count(documentor_name) AS daily_cmplt from documentor_document where DAY(when_added)=DAY(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_daily_target_cmplt1=mysqli_fetch_array($fetch_daily_target_cmplt);
$count_daily_target_cmplt=$fetch_daily_target_cmplt1['daily_cmplt'];
//updattin daily cmplt
$update_daily_cmplt=mysqli_query($conn,"update add_tl set daily_target_cmplt='$count_daily_target_cmplt' where email='$main_tl_name'");
//updating daily target left
$updating_daily_target_left=$fetch_target['daily_target']-$count_daily_target_cmplt;
$updating_daily_target_left1=mysqli_query($conn,"update add_tl set daily_target_left='$updating_daily_target_left' where email='$main_tl_name'");
//---------------------------------------------
$total_attendance=mysqli_num_rows($sql5);
$total_lead=mysqli_num_rows($sql);
$total_documentor=mysqli_num_rows($sql4);
$fetch_data_for_updation=mysqli_fetch_array($fetch_target_cmplt);
$update_target=$fetch_data_for_updation['cmplt'];
$update=mysqli_query($conn,"update add_tl set target_cmplt='$update_target' where email='$main_tl_name'");
$fetch_cmplt=mysqli_fetch_array($fetch_target_cmplt);
//updating target left
$left_target=floor($fetch_target['target']-$update_target);
$update_target_left=mysqli_query($conn,"update add_tl set target_left='$left_target' where email='$main_tl_name'");
//automatic documentor monthly target
@$documentor_target=ceil($fetch_target['target']/$total_documentor);
//daily target for documentor tl document automatic divide according to number of documentor present
$documentor_daily_target=($fetch_target['daily_target']/$total_attendance);
$auto_documentor_target=mysqli_query($conn,"update add_documentor set target='$documentor_target',today_target='$documentor_daily_target' where tl_name='$main_tl_name'");
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
     				<div class="card-header text-center bg-dark text-light">Total Lead</div>
     				<div class="card-body bg-success"><h3 class="text-center text-light">
                         <i class="glyphicon glyphicon-file"></i>
     					<?php echo $total_lead;?></h3></div>
     			</div>
     		</div>
     		<div class="col-md-4">
     			<div class="card">
     			<div class="card-header text-center bg-dark text-light">Total Documentor</div>
     			<div class="card-body bg-warning">
     				<h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-user"></i>
     					<?php echo $total_documentor;?></h3>
     			</div>
     		</div>
     	</div>
     		<div class="col-md-4">
     			<div class="card">
     			<div class="card-header text-center bg-dark text-light">Present Documentor</div>
     			<div class="card-body" style="background:purple;">
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
                         <i class="glyphicon glyphicon-bell"></i>
                              <?php echo $fetch_target['target'];?></h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Monthly Target Complete</div>
                    <div class="card-body bg-secondary">
                         <h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-user"></i>
                              <?php echo $fetch_target['target_cmplt'];?></h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Monthly Target Left</div>
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
                    <div class="card-header text-center bg-dark text-light">Today Target</div>
                    <div class="card-body bg-secondary">
                         <h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-bell"></i>
                              <?php echo $fetch_target['daily_target'];?></h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Today Target Completed</div>
                    <div class="card-body bg-secondary">
                         <h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-user"></i>
                              <?php echo $count_daily_target_cmplt;?></h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Today Target Left</div>
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
                         <div class="card-header" style="background: #FFE57C;">
                              <h4 class="card-title text-dark text-center">Varifier</h4>
                         </div>
                         <div class="card-body" style="background: #295F2D; color: #FFE57C;">
                              <div id="balancechart" style="height: 250px;"></div>
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
  element: 'balancechart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { day: '1', interested: <?php echo $fetch_1_li; ?>},
    { day: '2', interested: <?php echo $fetch_2_li; ?>},
    { day: '3', interested: <?php echo $fetch_3_li; ?>},
    { day: '4', interested: <?php echo $fetch_4_li; ?>},
    { day: '5', interested: <?php echo $fetch_5_li; ?>},
    { day: '6', interested: <?php echo $fetch_6_li; ?>},
    { day: '7', interested: <?php echo $fetch_7_li; ?>},
    { day: '8', interested: <?php echo $fetch_8_li; ?>},
    { day: '9', interested: <?php echo $fetch_9_li; ?>},
    { day: '10', interested: <?php echo $fetch_10_li; ?>},
    { day: '11', interested: <?php echo $fetch_11_li; ?>},
    { day: '12', interested: <?php echo $fetch_12_li; ?>},
    { day: '13', interested: <?php echo $fetch_13_li; ?>},
    { day: '14', interested: <?php echo $fetch_14_li; ?>},
    { day: '15', interested: <?php echo $fetch_15_li; ?>},
    { day: '16', interested: <?php echo $fetch_16_li; ?>},
    { day: '17', interested: <?php echo $fetch_17_li; ?>},
    { day: '18', interested: <?php echo $fetch_18_li; ?>},
    { day: '19', interested: <?php echo $fetch_19_li; ?>},
    { day: '20', interested: <?php echo $fetch_20_li; ?>},
    { day: '21', interested: <?php echo $fetch_21_li; ?>},
    { day: '22', interested: <?php echo $fetch_22_li; ?>},
    { day: '23', interested: <?php echo $fetch_23_li; ?>},
    { day: '24', interested: <?php echo $fetch_24_li; ?>},
    { day: '25', interested: <?php echo $fetch_25_li; ?>},
    { day: '26', interested: <?php echo $fetch_26_li; ?>},
    { day: '27', interested: <?php echo $fetch_27_li; ?>},
    { day: '28', interested: <?php echo $fetch_28_li; ?>},
    { day: '29', interested: <?php echo $fetch_29_li; ?>},
    { day: '30', interested: <?php echo $fetch_30_li; ?>},
    { day: '31', interested: <?php echo $fetch_31_li; ?>}
  ],
  // The name of the data record attribute that contains x-values.
  xLabels:'day',
  xkey: 'day',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['interested'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  barColors:['blue'],
  labels: ['total lead']
});
 </script>