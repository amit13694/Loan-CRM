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
//today linkup
$today_linkup=mysqli_query($conn,"select * from documentor_document where linkup_cnfrm='cnfrm' AND DAY(when_added)=DAY(CURDATE())");
$count_today_linkup=mysqli_num_rows($today_linkup);
//today balance
$today_balance=mysqli_query($conn,"select * from documentor_document where comment='INST' AND DAY(when_added)=DAY(CURDATE())");
$count_today_balance=mysqli_num_rows($today_balance);
//today balance follow
$today_balance_follow=mysqli_query($conn,"select * from documentor_document where comment='FLW' AND DAY(when_added)=DAY(CURDATE())");
$count_today_balance_follow=mysqli_num_rows($today_balance_follow);
//today balance not interested
$today_balance_NI=mysqli_query($conn,"select * from documentor_document where comment='NINST' AND DAY(when_added)=DAY(CURDATE())");
$count_today_balance_NI=mysqli_num_rows($today_balance_NI);
?>
<div class="container-fluid">
       <div class="row no-gutters">
               <div class="col-md-2">
    <?php include('sidenav.php'); ?>
     </div>
     <div class="col-md-10 content">
      <div class="table-responsive">
      <table class="table table-bordered table-hover" id="myTable">
        <h4 class="text-center text-light">Documentor Details</h4>
        <thead class="bg-dark">
          <tr>
            <td><a href="#link" data-toggle="collapse" class="text-light">Today Linkup</a>
            <form method="POST" action="download_today_linkup_dsr.php">
            <button type="submit" name="download" class="badge badge-primary float-left" >Download</button>
            </form>
            </td>
            <td><a href="#bal" data-toggle="collapse" class="text-light">Today Balance</a>
               <form method="POST" action="download_today_balance_dsr.php">
            <button type="submit" name="download" class="badge badge-primary float-left" >Download</button>
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
          </tr>
        </thead>
        <tbody>
         <tr class="text-light bg-dark">
            <td><?php echo $count_today_linkup; ?></td>
            <td><?php echo $count_today_balance; ?></td>
            <td><?php echo $count_today_balance_follow; ?></td>
            <td><?php echo $count_today_balance_NI; ?></td>
          </tr>
        </tbody>
      </table>
    </div>
      <div id="link" class="collapse" style="margin-left: 10px;"><?php include('DSR_today_linkup.php'); ?></div>
      <div id="bal" class="collapse" style="margin-left: 10px;"><?php include('DSR_today_balance.php'); ?></div>
      <div id="fbal" class="collapse" style="margin-left: 10px;"><?php include('DSR_today_balance_follow.php'); ?></div>
      <div id="Nbal" class="collapse" style="margin-left: 10px;"><?php include('DSR_today_balance_NI.php'); ?></div>
</div>