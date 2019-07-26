<?php
include('header.php');
include('../config/database.php');
//fetching document
// $sql=mysqli_query($conn,"select * from documentor_document where varifier_status='' AND DAY(when_added)=DAY(CURDATE()) order by id DESC");
// $name=array();
// $address=array();
// $zip_code=array();
// $contact=array();
// $email=array();
// $adhar_number=array();
// $pan_number=array();
// $pan_image=array();
// $adhar_image=array();
// $bank_image=array();
// $photo=array();
// $other_document=array();
// $whenadded=array();
// $dob=array();
// $qualification=array();
// $civil_report=array();
// //$comment=array();
// $follow_up=array();
// $id=array();
// //$documentor_name_tl=array();
// while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
// {
//   $id[]=$row['id'];
//   $name[]=$row['name'];
//   $address[]=$row['address'];
//   $zip_code[]=$row['zip_code'];
//   $contact[]=$row['contact'];
//   $email[]=$row['email'];
//   $adhar_number[]=$row['adhar_number'];
//   $pan_number[]=$row['pan_number'];
//   $pan_image[]=$row['pan_image'];
//   $adhar_image[]=$row['adhar_image'];
//   $bank_image[]=$row['bank_image'];
//   $photo[]=$row['photo'];
//   $other_document[]=$row['other_document'];
//   $whenadded[]=$row['when_added'];
//   $dob[]=$row['dob'];
//   $qualification[]=$row['qualification'];
//   $civil_report[]=$row['civil_report'];
//   // $comment[]=$row['comment'];
//   $follow_up[]=$row['follow_up'];
//   //$documentor_name_tl[]=$row['documentor_name'];
// }
//today document
$today_document=mysqli_query($conn,"select * from documentor_document where DAY(when_added)=DAY(CURDATE())");
$count_today_document=mysqli_num_rows($today_document);
//today varified document
$today_varified_document=mysqli_query($conn,"select * from documentor_document where varifier_status='yes' AND DAY(when_added)=DAY(CURDATE())");
$count_today_varified_document=mysqli_num_rows($today_varified_document);
//today not varified document
$today_not_varified_document=mysqli_query($conn,"select * from documentor_document where varifier_status='no' AND DAY(when_added)=DAY(CURDATE())");
$count_today_not_varified_document=mysqli_num_rows($today_not_varified_document);
//today follow
$today_varified_follow=mysqli_query($conn,"select * from documentor_document where varifier_status='vflw' AND DAY(when_added)=DAY(CURDATE())");
$count_varified_follow=mysqli_num_rows($today_varified_follow);
//today linkup
$today_linkup=mysqli_query($conn,"select * from documentor_document where linkup_cnfrm='cnfrm' AND DAY(when_added)=DAY(CURDATE())");
$count_today_linkup=mysqli_num_rows($today_linkup);
//today linkup follow
$today_linkup_follow=mysqli_query($conn,"select * from documentor_document where linkup_cnfrm='lflw' AND DAY(when_added)=DAY(CURDATE())");
$count_today_linkup_follow=mysqli_num_rows($today_linkup_follow);
//linkup NI
$today_linkup_NI=mysqli_query($conn,"select * from documentor_document where linkup_cnfrm='ncnfrm' AND DAY(when_added)=DAY(CURDATE())");
$count_today_linkup_NI=mysqli_num_rows($today_linkup_NI);
//today balance
$today_balance=mysqli_query($conn,"select * from documentor_document where comment='INST' AND DAY(when_added)=DAY(CURDATE())");
$count_today_balance=mysqli_num_rows($today_balance);
//today balance follow
$today_balance_follow=mysqli_query($conn,"select * from documentor_document where comment='FLW' AND DAY(when_added)=DAY(CURDATE())");
$count_today_balance_follow=mysqli_num_rows($today_balance_follow);
//today balance not interested
$today_balance_NI=mysqli_query($conn,"select * from documentor_document where comment='NINST' AND DAY(when_added)=DAY(CURDATE())");
$count_today_balance_NI=mysqli_num_rows($today_balance_NI);
//today attendance
$today_attendance=mysqli_query($conn,"select * from admin where attendance='1'");
$count_today_attendance=mysqli_num_rows($today_attendance);
?>
<div class="container-fluid">
       <div class="row no-gutters">
               <div class="col-md-2">
    <?php include('sidepanel.php'); ?>
     </div>
     <div class="col-md-10 content">
      <div class="table-responsive">
      <table class="table table-bordered table-hover" id="myTable">
        <h4 class="text-center text-light">Documentor Details</h4>
        <thead class="bg-dark">
          <tr>
            <td><a href="#doc" data-toggle="collapse" class="text-light">Today Document</a>
             <form method="POST" action="download_today_document_dsr.php">
            <button type="submit" name="download" class="badge badge-primary float-left" style="margin-top: 21px;">Download</button>
            </form>
            </td>
            <td><a href="#var" data-toggle="collapse" class="text-light">Today Varified</a>
             <form method="POST" action="download_today_varified_document_dsr.php">
            <button type="submit" name="download" class="badge badge-primary float-left" style="margin-top: 21px;">Download</button>
            </form>
            </td>
            <td><a href="#nvar" data-toggle="collapse" class="text-light">Today Not Varified</a>
              <form method="POST" action="download_today_not_varified_document_dsr.php">
            <button type="submit" name="download" class="badge badge-primary float-left" style="margin-top: 1px;">Download</button>
            </form>
            </td>
            <td><a href="#fvar" data-toggle="collapse" class="text-light">Today Varification Follow Up</a>
            <form method="POST" action="download_today_varification_follow_dsr.php">
            <button type="submit" name="download" class="badge badge-primary float-left" style="margin-top: 1px;">Download</button>
            </form>
            </td>
            <td><a href="#link" data-toggle="collapse" class="text-light">Today Linkup</a>
            <form method="POST" action="download_today_linkup_dsr.php">
            <button type="submit" name="download" class="badge badge-primary float-left" style="margin-top: 21px;">Download</button>
            </form>
            </td>
            <td><a href="#flink" data-toggle="collapse" class="text-light">Today linkup Follow Up</a>
             <form method="POST" action="download_today_linkup_follow_dsr.php">
            <button type="submit" name="download" class="badge badge-primary float-left" style="margin-top: 1px;">Download</button>
            </form>
            </td>
            <td><a href="#Nlink" data-toggle="collapse" class="text-light">Today linkup NI</a>
              <form method="POST" action="download_today_linkup_NI_dsr.php">
            <button type="submit" name="download" class="badge badge-primary float-left" style="margin-top: 21px;">Download</button>
            </form>
            </td>
            <td><a href="#bal" data-toggle="collapse" class="text-light">Today Balance</a>
               <form method="POST" action="download_today_balance_dsr.php">
            <button type="submit" name="download" class="badge badge-primary float-left" style="margin-top: 21px;">Download</button>
            </form>
             </td>
            <td><a href="#fbal" data-toggle="collapse" class="text-light">Today Balance Follow Up</a>
               <form method="POST" action="download_today_balance_follow_dsr.php">
            <button type="submit" name="download" class="badge badge-primary float-left">Download</button>
            </form>
            </td>
             <td><a href="#Nbal" data-toggle="collapse" class="text-light">Today Balance NI</a>
                <form method="POST" action="download_today_balance_NI_dsr.php">
            <button type="submit" name="download" class="badge badge-primary float-left">Download</button>
            </form>
             </td>
            <td><a href="#att" data-toggle="collapse" class="text-light">Today Attendance</a></td>
          </tr>
        </thead>
        <tbody>
         <tr class="text-light bg-dark">
            <td><?php echo $count_today_document; ?></td>
            <td><?php echo $count_today_varified_document; ?></td>
            <td><?php echo $count_today_not_varified_document; ?></td>
             <td><?php echo $count_varified_follow; ?></td>
            <td><?php echo $count_today_linkup; ?></td>
            <td><?php echo $count_today_linkup_follow;  ?></td>
             <td><?php echo $count_today_linkup_NI;  ?></td>
            <td><?php echo $count_today_balance; ?></td>
            <td><?php echo $count_today_balance_follow; ?></td>
            <td><?php echo $count_today_balance_NI; ?></td>
            <td><?php echo $count_today_attendance; ?></td>
          </tr>
        </tbody>
      </table>
    </div>
      <div id="doc" class="collapse" style="margin-left: 10px;">
         <?php include('DSR_today_document.php'); ?>
      </div>
      <div id="var" class="collapse" style="margin-left: 10px;"><?php include('DSR_varified_document.php'); ?></div>
      <div id="nvar" class="collapse" style="margin-left: 10px;"><?php include('DSR_not_varified_document.php'); ?></div>
      <div id="fvar" class="collapse" style="margin-left: 10px;"><?php include('DSR_today_varification_follow.php'); ?></div>
      <div id="link" class="collapse" style="margin-left: 10px;"><?php include('DSR_today_linkup.php'); ?></div>
      <div id="flink" class="collapse" style="margin-left: 10px;"><?php include('DSR_today_linkup_follow.php'); ?></div>
      <div id="Nlink" class="collapse" style="margin-left: 10px;"><?php include('DSR_today_linkup_NI.php'); ?></div>
      <div id="bal" class="collapse" style="margin-left: 10px;"><?php include('DSR_today_balance.php'); ?></div>
      <div id="fbal" class="collapse" style="margin-left: 10px;"><?php include('DSR_today_balance_follow.php'); ?></div>
      <div id="Nbal" class="collapse" style="margin-left: 10px;"><?php include('DSR_today_balance_NI.php'); ?></div>
      <div id="att" class="collapse" style="margin-left: 10px;"><?php include('DSR_today_attendance.php'); ?></div>
</div>