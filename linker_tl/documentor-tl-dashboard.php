<?php
//include('session.php');
include("header.php");
include("../config/database.php");
$main_tl_name=$_SESSION['sid'];
if (!isset($_SESSION['sid']) ||(trim ($_SESSION['sid']) == '')) {
    header('location:../index.php');
    exit();
  }
  //total varified document in month
  $sql9=mysqli_query($conn,"select varifier_status from documentor_document where varifier_status='yes' AND tl_name='$main_tl_name' AND MONTH(varified_dat)=MONTH(CURDATE())");
  //total not varified document in month
$sql10=mysqli_query($conn,"select varifier_status from documentor_document where varifier_status='no' AND tl_name='$main_tl_name' AND MONTH(varified_dat)=MONTH(CURDATE())");
//fetch total lead for varification
$sql=mysqli_query($conn,"select * from documentor_document where varifier_status='' ");
//total linkup document
$sql1=mysqli_query($conn,"select * from documentor_document where tl_name='$main_tl_name' AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE())");
//total not cnfrm linnkup
$sql2=mysqli_query($conn,"select * from documentor_document where tl_name='$main_tl_name' AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE())");
//total follow up linkup
$sql3=mysqli_query($conn,"select * from documentor_document where tl_name='$main_tl_name' AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE())");
//total linker under this TL
$sql4=mysqli_query($conn,"select * from add_linker where tl_name='$main_tl_name'");
//total varifier under this TL
$sql7=mysqli_query($conn,"select * from add_varifier where tl_name='$main_tl_name'");
//total present linker
$sql5=mysqli_query($conn,"select * from admin where tl_name='$main_tl_name' AND attendance='1' AND status='linker' ");
//total varifier present
$sql8=mysqli_query($conn,"select * from admin where tl_name='$main_tl_name' AND attendance='1' AND status='varifier' ");
//tl login logout time
$sql6=mysqli_query($conn,"select login,logout from admin where usename='$sid'");
//fetching login logout data
$login_data=mysqli_fetch_array($sql6);
//fetching total linker present
$total_attendance=mysqli_num_rows($sql5);
//fetching total lead
$total_lead=mysqli_num_rows($sql);
//total cnfrm lead
$total_inst_lead=mysqli_num_rows($sql1);
//total not cnfrm lead
$total_not_lead=mysqli_num_rows($sql2);
//total follow up lead
$total_flw_lead=mysqli_num_rows($sql3);
//fetching total linker
$total_linker=mysqli_num_rows($sql4);
//fetching total varifier
$total_varifier=mysqli_num_rows($sql7);
//total present varifier
$present_varifier=mysqli_num_rows($sql8);
//total varified document
$total_varified=mysqli_num_rows($sql9);
//total not varified document
$total_not_varified=mysqli_num_rows($sql10);
//---------------------------------------------------------
//fetching basic data from tl where status is linker_tl
$fetch_target_tl=mysqli_query($conn,"select target,target_var,target_cmplt,target_left,daily_target,daily_target_cmplt,daily_target_left,daily_target_cmplt_var,daily_target_left_var,month_target_cmplt_var,month_target_left_var from add_tl where email='$main_tl_name' AND status='linker_tl'");
$fetch_target=mysqli_fetch_array($fetch_target_tl);
//fetching basic detail from tk where status is varifier_tl
$fetch_target_tl_var=mysqli_query($conn,"select target,target_var,target_cmplt,target_left,daily_target,daily_target_cmplt,daily_target_left,daily_target_cmplt_var,daily_target_left_var,month_target_cmplt_var,month_target_left_var from add_tl where email='$main_tl_name' AND status='varifier_tl'");
$fetch_target_var=mysqli_fetch_array($fetch_target_tl_var);
//monthly cmplt target linker
$fetch_target_cmplt=mysqli_query($conn,"select count(linker_name) AS cmplt_link from documentor_document where MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_data_for_updation=mysqli_fetch_array($fetch_target_cmplt);
$update_target=$fetch_data_for_updation['cmplt_link'];
//daily target cmplt linker
$fetch_daily_target_cmplt=mysqli_query($conn,"select count(linker_name) AS daily_cmplt_link from documentor_document where DAY(linkup_dat)=DAY(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_daily_target_cmplt1=mysqli_fetch_array($fetch_daily_target_cmplt);
$count_daily_target_cmplt=$fetch_daily_target_cmplt1['daily_cmplt_link'];
//updattin daily cmplt linker
$update_daily_cmplt=mysqli_query($conn,"update add_tl set daily_target_cmplt='$count_daily_target_cmplt' where email='$main_tl_name' AND status='linker_tl'");
//updating daily target left
$updating_daily_target_left=$fetch_target['daily_target']-$count_daily_target_cmplt;
$updating_daily_target_left1=mysqli_query($conn,"update add_tl set daily_target_left='$updating_daily_target_left' where email='$main_tl_name' AND status='linker_tl'");
$update=mysqli_query($conn,"update add_tl set target_cmplt='$update_target' where email='$main_tl_name' AND status='linker_tl'");
$fetch_cmplt=mysqli_fetch_array($fetch_target_cmplt);
//---------------------------------------------------------
//updating target left
$left_target=floor($fetch_target['target']-$update_target);
$update_target_left=mysqli_query($conn,"update add_tl set target_left='$left_target' where email='$main_tl_name' AND status='linker_tl'");
//--------------------------------------------------------------------------------
//--------------------------------------------------------------------------------
//monthly cmplt target varifier
$fetch_target_cmplt_var=mysqli_query($conn,"select count(varifier_name) AS cmplt from documentor_document where MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_data_for_updation_var=mysqli_fetch_array($fetch_target_cmplt_var);
$update_target_var=$fetch_data_for_updation_var['cmplt'];
//daily target cmplt varfier
$fetch_daily_target_cmplt_var=mysqli_query($conn,"select count(varifier_name) AS daily_cmplt from documentor_document where DAY(varified_dat)=DAY(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_daily_target_cmplt1_var=mysqli_fetch_array($fetch_daily_target_cmplt_var);
$count_daily_target_cmplt_var=$fetch_daily_target_cmplt1_var['daily_cmplt'];
//updattin daily cmplt varifer
$update_daily_cmplt_var=mysqli_query($conn,"update add_tl set daily_target_cmplt_var='$count_daily_target_cmplt_var' where email='$main_tl_name' AND status='varifier_tl'");
//updating daily target left
$updating_daily_target_left_var=$fetch_target_var['daily_target']-$count_daily_target_cmplt_var;
$updating_daily_target_left1_var=mysqli_query($conn,"update add_tl set daily_target_left_var='$updating_daily_target_left_var' where email='$main_tl_name' AND status='varifier_tl'");
$update_var=mysqli_query($conn,"update add_tl set month_target_cmplt_var='$update_target_var' where email='$main_tl_name' AND status='varifier_tl'");
$fetch_cmplt_var=mysqli_fetch_array($fetch_target_cmplt_var);
//---------------------------------------------------------
//updating target left
$left_target_var=floor($fetch_target_var['target_var']-$update_target_var);
$update_target_left=mysqli_query($conn,"update add_tl set month_target_left_var='$left_target_var' where email='$main_tl_name' AND status='varifier_tl'");
//--------------------------------------------------------------------------------
//automatic linker monthly target
@$documentor_target=ceil($fetch_target['target']/$total_linker);
$auto_documentor_target=mysqli_query($conn,"update add_linker set target='$documentor_target' where tl_name='$main_tl_name'");
//automatic varifier monthly target
@$varifier_target=ceil($fetch_target_var['target_var']/$total_varifier);
$auto_documentor_target=mysqli_query($conn,"update add_varifier set target='$varifier_target' where tl_name='$main_tl_name'");
//daily target for linker tl document automatic divide according to number of linker present
@$linker_daily_target=$fetch_target['daily_target']/$total_attendance;
$auto_linker_target=mysqli_query($conn,"update add_linker set target='$documentor_target',today_target='$linker_daily_target' where tl_name='$main_tl_name'");
//daily target for varifeir tl document automatic divide according to number of varifier present
@$varifier_daily_target1=$fetch_target_var['daily_target']/$present_varifier;
@$auto_varifier_target=mysqli_query($conn,"update add_varifier set target='$varifier_target',today_target='$varifier_daily_target1' where tl_name='$main_tl_name'");
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
     				<div class="card-body bg-secondary"><h3 class="text-center text-light">
                         <i class="glyphicon glyphicon-file"></i>
     					<?php echo $total_lead;?></h3></div>
     			</div>
     		</div>
     		<div class="col-md-4">
     			<div class="card">
     			<div class="card-header text-center bg-dark text-light">Total varified Lead</div>
     			<div class="card-body bg-success">
     				<h3 class="text-light text-center">
     					<i class="glyphicon glyphicon-hand-right"></i>
     					<?php echo $total_varified;?></h3>
     			</div>
     		</div>
     	</div>
     		<div class="col-md-4">
     			<div class="card">
     			<div class="card-header text-center bg-dark text-light">Total Not Varified Lead</div>
     			<div class="card-body bg-danger">
     				<h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-remove-circle"></i>
     					<?php echo $total_not_varified;?></h3>
     			</div>
     	    </div>
     	</div>
     </div>
     	<div class="row">
     		<div class="col-md-4">
     			<div class="card">
     			<div class="card-header text-center bg-dark text-light">Total Interested</div>
     			<div class="card-body bg-success">
     				<h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-bell"></i>
     					<?php echo $total_inst_lead;?></h3>
     			</div>
     		</div>
     	</div>
     		<div class="col-md-4">
     			<div class="card">
     			<div class="card-header text-center bg-dark text-light">Total Not Interested</div>
     			<div class="card-body bg-danger">
     				<h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-user"></i>
     					<?php echo $total_not_lead;?></h3>
     			</div>
     		</div>
     	</div>
     		<div class="col-md-4">
     			<div class="card">
     			<div class="card-header text-center bg-dark text-light">Total Follow Up</div>
     			<div class="card-body bg-primary">
     				<h3 class="text-center text-light">
     					<i class="glyphicon glyphicon-user"></i>
                              <?php echo $total_flw_lead;?>
     				</h3>
     			</div>
     		</div>
     	</div>
     	</div>
                    <div class="row">
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Total Employee</div>
                    <div class="card-body" style="background: purple;">
                         <h3 class="text-light text-center">
                         
                         <table class="table">
                              <tbody>
                                   <tr>
                                        <td class="text-light">Total Linker</td>
                                        <td class="text-light"><?php echo $total_linker; ?></td>
                                        <td class="text-light">Total Varifier</td>
                                        <td class="text-light"><?php echo $total_varifier; ?></td>
                                   </tr>
                                  
                              </tbody>
                         </table>
                              </h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card" style="height:19vh;" >
                    <div class="card-header text-center bg-dark text-light">Presenter Linker</div>
                    <div class="card-body" style="background: #F08035;">
                         <h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-user"></i>
                              <?php echo $total_attendance; ?></h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card" style="height:19vh;">
                    <div class="card-header text-center bg-dark text-light">Present Varifer</div>
                    <div class="card-body" style="background: #1B5869;">
                         <h3 class="text-center text-light">
                              <i class="glyphicon glyphicon-user"></i>
                              <?php echo $present_varifier;?>
                         </h3>
                    </div>
               </div>
          </div>
          </div>
                            <div class="row">
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Total Monthly Target Linker</div>
                    <div class="card-body" style="background: #C78D89;">
                         <h3 class="text-light text-center">
                         
                         <?php echo $fetch_target['target']; ?>
                              </h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card" >
                    <div class="card-header text-center bg-dark text-light">Monthly Target Completed Linker</div>
                    <div class="card-body" style="background: #BCD531;">
                         <h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-user"></i>
                              <?php echo $fetch_target['target_cmplt']; ?></h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card" >
                    <div class="card-header text-center bg-dark text-light">Monhtly Target Left Linker</div>
                    <div class="card-body" style="background: #BB2424;">
                         <h3 class="text-center text-light">
                              <i class="glyphicon glyphicon-user"></i>
                              <?php echo $fetch_target['target_left']; ?>
                         </h3>
                    </div>
               </div>
          </div>
          </div>
                       <div class="row">
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Total Monthly Target Varifier</div>
                    <div class="card-body" style="background: #EEEC25;">
                         <h3 class="text-light text-center">
                         
                         <?php echo $fetch_target_var['target_var']; ?>
                              </h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card" >
                    <div class="card-header text-center bg-dark text-light">Monthly Target Completed Varifier</div>
                    <div class="card-body" style="background: #D06474;">
                         <h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-user"></i>
                              <?php echo $fetch_target_var['month_target_cmplt_var']; ?></h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card" >
                    <div class="card-header text-center bg-dark text-light">Monhtly Target Left Varifier</div>
                    <div class="card-body" style="background: #4B3427;">
                         <h3 class="text-center text-light">
                              <i class="glyphicon glyphicon-user"></i>
                              <?php echo $fetch_target_var['month_target_left_var']; ?>
                         </h3>
                    </div>
               </div>
          </div>
          </div>
                                 <div class="row">
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Daily Target Varifier</div>
                    <div class="card-body" style="background: #A3A249;">
                         <h3 class="text-light text-center">
                         
                         <?php echo $fetch_target_var['daily_target']; ?>
                              </h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card" >
                    <div class="card-header text-center bg-dark text-light">Daily Target Completed Varifier</div>
                    <div class="card-body" style="background: #B178A1;">
                         <h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-user"></i>
                              <?php echo $fetch_target_var['daily_target_cmplt_var']; ?></h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card" >
                    <div class="card-header text-center bg-dark text-light">Daily Target Left Varifier</div>
                    <div class="card-body" style="background: #181E2E;">
                         <h3 class="text-center text-light">
                              <i class="glyphicon glyphicon-user"></i>
                              <?php echo $fetch_target_var['daily_target_left_var']; ?>
                         </h3>
                    </div>
               </div>
          </div>
          </div>
                                        <div class="row">
               <div class="col-md-4">
                    <div class="card">
                    <div class="card-header text-center bg-dark text-light">Daily Target Linker</div>
                    <div class="card-body" style="background: #B4634D;">
                         <h3 class="text-light text-center">
                         
                         <?php echo $fetch_target['daily_target']; ?>
                              </h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card" >
                    <div class="card-header text-center bg-dark text-light">Daily Target Completed Linker</div>
                    <div class="card-body" style="background: #B02222;">
                         <h3 class="text-light text-center">
                         <i class="glyphicon glyphicon-user"></i>
                              <?php echo $fetch_target['daily_target_cmplt']; ?></h3>
                    </div>
               </div>
          </div>
               <div class="col-md-4">
                    <div class="card" >
                    <div class="card-header text-center bg-dark text-light">Daily Target Left Linker</div>
                    <div class="card-body" style="background: #F62A32;">
                         <h3 class="text-center text-light">
                              <i class="glyphicon glyphicon-user"></i>
                              <?php echo $fetch_target['daily_target_left']; ?>
                         </h3>
                    </div>
               </div>
          </div>
          </div>
     </div>
</div>
 </div>
