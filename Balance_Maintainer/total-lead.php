<?php
//include('session.php');
include("header.php");
include("../config/database.php");
$main_tl_name=$_SESSION['sid'];
//----------------------------------------------------------------------
$sql_target=mysqli_query($conn,"select target from add_paymentor where email='$main_tl_name'");
$target1=mysqli_fetch_array($sql_target);
$cmplt_target=mysqli_query($conn,"select target_cmplt from add_paymentor where email='$main_tl_name'");
$dashboard_target_cmplt=mysqli_fetch_array($cmplt_target);
// $daily_target=($target1['target']/30)+1;
// $sql_update_daily_target=mysqli_query($conn,"update add_paymentor set today_target=$daily_target where email='$main_tl_name'");
$sql7=mysqli_query($conn,"select today_target from add_paymentor where email='$main_tl_name'");
$target_today=mysqli_fetch_array($sql7);
$limit_target=($target_today['today_target']-$dashboard_target_cmplt['target_cmplt']);
//----------------------------------------------------------------------
$sql=mysqli_query($conn,"select * from documentor_document where  varifier_status='yes' AND linkup_cnfrm='cnfrm' AND comment='NULL' order by id DESC LIMIT $limit_target");
$sql5=mysqli_query($conn,"select tl_name from add_paymentor where email='$main_tl_name'");
$fetch_tl_name=mysqli_fetch_array($sql5);
$tl_name=$fetch_tl_name['tl_name'];
$name=array();
$address=array();
$zip_code=array();
$contact=array();
$follow_cmnt=array();
$email=array();
$adhar_number=array();
$pan_number=array();
$pan_image=array();
$adhar_image=array();
$bank_image=array();
$photo=array();
$other_document=array();
$whenadded=array();
$dob=array();
$qualification=array();
$civil_report=array();
$comment=array();
$follow_up=array();
$id=array();
//$documentor_name_tl=array();
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
{
  $follow_cmnt[]=$row['follow_cmnt'];
  $id[]=$row['id'];
  $name[]=$row['name'];
  $address[]=$row['address'];
  $zip_code[]=$row['zip_code'];
  $contact[]=$row['contact'];
  $email[]=$row['email'];
  $adhar_number[]=$row['adhar_number'];
  $pan_number[]=$row['pan_number'];
  $pan_image[]=$row['pan_image'];
  $adhar_image[]=$row['adhar_image'];
  $bank_image[]=$row['bank_image'];
  $photo[]=$row['photo'];
  $other_document[]=$row['other_document'];
  $whenadded[]=$row['when_added'];
  $dob[]=$row['dob'];
  $qualification[]=$row['qualification'];
  $civil_report[]=$row['civil_report'];
  $comment[]=$row['comment'];
  $follow_up[]=$row['follow_up'];
  //$documentor_name_tl[]=$row['documentor_name'];
}
//-------------------------------------------------
$fetching_monthwise_target_left=mysqli_query($conn,"select DAY(target_add_month) AS t, MONTH(target_add_month) AS p from add_paymentor where email='$main_tl_name'");
$fetch_left_data=mysqli_fetch_array($fetching_monthwise_target_left);
$day=$fetch_left_data['t'];
$month=$fetch_left_data['p'];
//----------------------------------------------------------------
if($month!=date('m'))
{
  $update_all_data=mysqli_query($conn,"update add_paymentor set day_1='0',day_2='0',day_3='0',day_4='0',day_5='0',day_6='0',day_7='0',day_8='0',day_9='0',day_10='0',day_11='0',day_12='0',day_13='0',day_14='0',day_15='0',day_16='0',day_17='0',day_18='0',day_19='0',day_20='0',day_21='0',day_22='0',day_23='0',day_24='0',day_25='0',day_26='0',day_27='0',day_28='0',day_29='0',day_30='0',day_31='0' where email='$main_tl_name'");
}
//------------------------------------------------------------------
//check is the comment section is blank or not
$fetch_data=mysqli_query($conn,"select target_cmplt,month_target_cmplt,target,today_target from add_paymentor where email='$main_tl_name'");
                                $fetch_target_cmplt=mysqli_fetch_array($fetch_data);
                                 if($fetch_target_cmplt['target_cmplt']==$fetch_target_cmplt['today_target'])
                              {
                                 $sql_insert_target_cmplt=mysqli_query($conn,"update add_paymentor set target_cmplt='0' where email='$main_tl_name'");
                              }
                              if($fetch_target_cmplt['today_target']==$fetch_target_cmplt['target_cmplt'])
                              { 
                             ?>
                                    <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Congratulation!! Your Traget Completed
                    </div>

                                <?php
                                $add_benefit=mysqli_query($conn,"update add_paymentor set day_$day='1' where email='$main_tl_name' ");
                                // $update_month_target=mysqli_query($conn,"update add_documentor set month_target_cmplt='0' ");
                              }
if(isset($_POST['sub']))
{
 $empcomment1=$_POST['empcomment'];
          if($empcomment1!='')
          {
          $_SESSION['i'] = isset($_SESSION['i']) ? ++$fetch_target_cmplt['target_cmplt'] : ++$fetch_target_cmplt['target_cmplt'];
          $_SESSION['j'] = isset($_SESSION['j']) ? ++$fetch_target_cmplt['month_target_cmplt'] : ++$fetch_target_cmplt['month_target_cmplt'];
                              $data=$_SESSION['j'];
                              $target_in_database=$_SESSION['i'];
                              $sql_insert_target_cmplt=mysqli_query($conn,"update add_paymentor set target_cmplt='$target_in_database',month_target_cmplt='$data' where email='$main_tl_name'");
          }
          @$empname1=$_POST['empname'];
          @$empadd1=$_POST['empadd'];
          @$empzip1=$_POST['empzip'];
          @$empnumb1=$_POST['empnumb'];
          @$empemail1=$_POST['empemail'];
          @$empuid1=$_POST['empuid'];
          @$emppan1=$_POST["emppan"];
          @$empdob1=$_POST['empdob'];
          @$empqualification1=$_POST['empqualification'];
          @$empcivil1=$_POST['empcivil'];
          @$empcomment1=$_POST['empcomment'];
          @$empfollow1=$_POST['empfollow'];
          @$follow_cmnt1=$_POST['follow_cmnt'];
          // @$emppanimage1=$_POST['emppanimage'];
          // @$empadharimage1=$_POST["empadharimage"];
          // @$empbankimage1=$_POST['empbankimage'];
          // @$empphoto1=$_POST['empphoto'];
          @$empotherdocument1=$_POST['empotherdocument'];
          @$emp_id1=$_POST['emp_id2'];
//----------------------------------------------------------------------------------------------
     @$file_name_pan=$_FILES["pan_image"]["name"];
     if($file_name_pan=='')
    {
      $file_name_pan='a.jpg';
    }
    @$file_temp_pan=$_FILES["pan_image"]["tmp_name"];
    @$file_type_pan=$_FILES["pan_image"]["type"];
    @$file_name_uid=$_FILES["adhar_image"]["name"];
    if($file_name_uid=='')
    {
      $file_name_uid='a.jpg';
    }
    @$file_temp_uid=$_FILES["adhar_image"]["tmp_name"];
    @$file_type_uid=$_FILES["adhar_image"]["type"];
    @$file_name_bank=$_FILES["bank_image"]["name"];
     if($file_name_bank=='')
    {
      $file_name_bank='a.jpg';
    }
    @$file_temp_bank=$_FILES["bank_image"]["tmp_name"];
    @$file_type_bank=$_FILES["bank_image"]["type"];
    @$file_name_other=$_FILES["other_document"]["name"];
     if($file_name_other=='')
    {
      $file_name_other='a.jpg';
    }
    @$file_temp_other=$_FILES["other_document"]["tmp_name"];
    @$file_type_other=$_FILES["other_document"]["type"];
    @$file_name_user=$_FILES["photo"]["name"];
     if($file_name_user=='')
    {
      $file_name_user='a.jpg';
    }
    @$file_temp_user=$_FILES["photo"]["tmp_name"];
    @$file_type_user=$_FILES["photo"]["type"];
    @$ext_pan=strtolower(pathinfo($file_name_pan,PATHINFO_EXTENSION));
    @$ext_uid=strtolower(pathinfo($file_name_uid,PATHINFO_EXTENSION));
    @$ext_other=strtolower(pathinfo($file_name_other,PATHINFO_EXTENSION));
    @$ext_user=strtolower(pathinfo($file_name_user,PATHINFO_EXTENSION));
    @$ext_bank=strtolower(pathinfo($file_name_bank,PATHINFO_EXTENSION));
    $expension=array("jpeg","jpg","png");
    $pan_filename=$empname1.".".$ext_pan;
    $uid_filename=$empname1.".".$ext_uid;
    $bank_filename=$empname1.".".$ext_bank;
    $other_filename=$empname1.".".$ext_other;
    $user_filename=$empname1.".".$ext_user;
//----------------------------------------------------------------------------------------------          
          $sql1=mysqli_query($conn,"update documentor_document set name='$empname1',address='$empadd1',zip_code='$empzip1',contact='$empnumb1',email='$empemail1',adhar_number='$empuid1',pan_number='$emppan1',pan_image='$pan_filename',adhar_image='$uid_filename',bank_image='$bank_filename',photo='$user_filename',other_document='$other_filename',dob='$empdob1',qualification='$empqualification1',civil_report='$empcivil1',comment='$empcomment1',follow_up='$empfollow1',balance_maintainer_name='$main_tl_name',tl_name='$tl_name',balance_dat=NOW(),follow_cmnt='$follow_cmnt1' where id='$emp_id1'");
          if($sql1!=false)
          { 

                  move_uploaded_file($file_temp_pan,"../image/PAN/".$pan_filename);
                  move_uploaded_file($file_temp_uid,"../image/UID/".$uid_filename); 
                  move_uploaded_file($file_temp_bank,"../image/BANK/".$bank_filename);
                  move_uploaded_file($file_temp_other,"../image/Other_document/".$other_filename);
                  move_uploaded_file($file_temp_user,"../image/user/".$user_filename);

           ?>
              <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Update successfully!!
                    </div>
          <?php          
                            
                              
                     header("Refresh:1; url=total-lead.php");
          }
          else
          { ?>
             <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      There is some error!! Please check your Data
                    </div>
         <?php }
}
                        if(isset($_POST['delete_sub']))
                      {
                        $del=$_POST['delete_emp_id'];
                        $sql4=mysqli_query($conn,"delete from documentor_document where id='$del'");
                        if($sql4!=false)
                        {
                          header("location:total-lead.php");
                        }
                        else
                        { ?>
                           <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            Data not deleted!!
                                          </div>
                       <?php }
                      }
?>
<div class="container-fluid">
       <div class="row no-gutters">
             <div class="col-md-2">
    <?php include('sidenav.php'); ?>
     </div>
    <div class="col-md-10 content">
      <h4 class="text-light text-center">View Details</h4>
      <div class="table-responsive">
      <div class="table-responsive" style="overflow-x: auto;" style="color: white;">
      <table class="table table-hover table-bordered table-sm" id="myTable">
        <thead>
          <tr class="bg-dark text-light">
            <td>Name</td>
            <td>Address</td>
            <td>Zip Code</td>
            <td>Contact</td>
            <td>Email</td>
            <td>DOB</td>
            <td>Qualification</td>
            <td>Civil Report</td>
            <td>UID</td>
            <td>PAN</td>
            <td>Photo</td>
            <td>PAN Image</td>
            <td>UID Image</td>
            <td>Bank Image</td>
            <td>Other Document</td>
            <td>When Added</td>
            <td>Balance Maintainer Status</td>
            <td>Follow Up</td>
            <td>Follow Up Comment</td>
            <td>Action</td>
          </tr>
        </thead>
        <tbody>
          <?php 
                  for($i=0;$i<count($name);$i++)
                  {
                    ?>
                    <tr class="text-light" style="background:#6D6E6A;" >
                      <td><?php echo $name[$i];?></td>
                      <td><?php echo $address[$i];?></td>
                      <td><?php echo $zip_code[$i];?></td>
                      <td><?php echo $contact[$i];?></td>
                      <td><?php echo $email[$i];?></td>
                      <td><?php echo $dob[$i];?></td>
                      <td><?php echo $qualification[$i];?></td>
                      <td><?php echo $civil_report[$i];?></td>
                      <td><?php echo $adhar_number[$i];?></td>
                      <td><?php echo $pan_number[$i];?></td>
                      <td><img src="<?php echo '../image/user/'.$photo[$i];?>" style="height: 40px; width: 40px;"></td>
                      <td><img src="<?php echo '../image/PAN/'.$pan_image[$i];?>" style="height: 40px; width: 40px;"></td>
                      <td><img src="<?php echo '../image/UID/'.$adhar_image[$i];?>" style="height: 40px; width: 40px;"></td>
                      <td><img src="<?php echo '../image/BANK/'.$bank_image[$i];?>" style="height: 40px; width: 40px;"></td>
                      <td><img src="<?php echo '../image/Other_document/'.$other_document[$i];?>" style="height: 40px; width: 40px;"></td>
                      <td><?php echo $whenadded[$i];?></td>
                      <td><?php echo $comment[$i];?></td>
                      <td><?php echo $follow_up[$i];?></td>
                      <td><?php echo $follow_cmnt[$i];?></td>
                      <td>
                          <button type="button" class="text-light btn btn-default data_edit" data-toggle="modal" data-target="#edit" style="cursor: pointer;" id="<?php echo $id[$i];?>"><i class="glyphicon glyphicon-edit"></i></button>&emsp;
                           
                      </td>
                    </tr>
                  <?php }
          ?>
        </tbody>
      </table>
       <div class="modal" id="delete">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Are You Sure You Want To Delete</h4>
          </div>
          <div class="modal-body">
            <form method="post">
              <input type="hidden" name="delete_emp_id" id="delete_emp_id">
               <button type="button" class="close" data-dismiss="modal" style="font-weight: bold;margin-top: 10px;">NO</button>
            <button type="submit" name="delete_sub" class="btn btn-default" style="font-size: 20px; font-weight: bold;">YES</button>
              </form>
          </div>
        </div>
      </div>
    </div>
            <div class="modal" id="edit">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
          
          <input type="hidden" name="empname" id="empname" class="form-control">
        </div>
        <div class="form-group">
          <label for="add">Address</label>
          <input type="text" name="empadd" id="empadd" class="form-control">
                    <label for="add">Zip Code</label>
                    <input type="number" id="empzip" name="empzip" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Contact Number</label>
          <input type="number" name="empnumb" id="empnumb" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="empemail" id="empemail" class="form-control">
        </div>
        <div class="form-group">
          <label for="UID">Adhar Number</label>
          <input type="number" name="empuid" class="form-control" id="empuid">
        </div>
        <div class="form-group">
          <label for="pan">PAN Number</label>
          <input type="number" name="emppan" class="form-control" id="emppan">
        </div>
               <div class="form-group">
                    <label for="dob">Date Of Birth</label>
                    <input type="date" name="empdob" class="form-control" id="empdob">
               </div>
               <div class="form-group">
                    <label for="Qualification">Qualification</label>
                    <input type="text" name="empqualification" class="form-control" id="empqualification">
               </div>
               <div class="form-group">
                    <label for="civil">Civil Report</label>
                    <input type="text" name="empcivil" class="form-control" id="empcivil">
               </div>
               <div class="form-group">
                    <label for="follow">Follow Up</label>
                    <input type="datetime-local" name="empfollow" class="form-control" id="empfollow">
               </div>
               <div class="form-group">
                    <label for="follow">Follow Up Comment</label>
                    <input type="text" name="follow_cmnt" class="form-control" id="follow_cmnt">
               </div>
                  <div class="form-group">
                    <label for="comment">Balance Maintainer Status</label>
                    <input type="text" name="empcomment" class="form-control" id="empcomment">
               </div>
               <input type="hidden" name="emp_id2" id="emp_id2">
               <div class="row">
                    <div class="col-md-3">
                         <div class="form-group">
                              <label for="pan_image">PAN Image</label>
                              <input type="file" name="pan_image" value="" class="form-control" id="emppanimage">
                         </div>
                    </div>
                    <div class="col-md-2">
                         <div class="form-group">
                              <label for="adhar_image">UID Image</label>
                              <input type="file" name="adhar_image" value="" class="form-control" id="empadharimage">
                         </div>
                    </div>
                    <div class="col-md-2">
                         <div class="form-group">
                              <label for="bank_image">Bank Detail Image</label>
                              <input type="file" name="bank_image" value="" class="form-control" id="empbankimage">
                         </div>
                    </div>
                    <div class="col-md-2">
                         <div class="form-group">
                              <label for="photo">User Image</label>
                              <input type="file" name="photo" value="" class="form-control" id="empphoto">
                         </div>
                    </div>
                    <div class="col-md-3">
                         <div class="form-group">
                              <label for="other_image">Other Image</label>
                              <input type="file" name="other_document" value="" class="form-control" id="empotherdocument">
                         </div>
                    </div>
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
  </div>
     </div>
  </div>
 </div>
 <script>
  $(document).ready(function () {
  $('#myTable').DataTable({
    responsive: true
  });
    $(document).on('click' ,'.data_edit' , function(){
       var emp_id=$(this).attr('id');
       $.ajax({
        url:"total-lead-edit.php",
        method:"POST",
        data:{emp_id:emp_id},
        dataType:"json",
        success:function(data)
        {
          $('#empname').val(data.name);
          $('#follow_cmnt').val(data.follow_cmnt);
          $('#emp_id2').val(data.id);
          $('#empadd').val(data.address);
          $('#empzip').val(data.zip_code);
          $('#empnumb').val(data.contact);
          $('#empemail').val(data.email);
          $('#empuid').val(data.adhar_number);
          $("#emppan").val(data.pan_number);
          $('#empdob').val(data.dob);
          $('#empqualification').val(data.qualification);
          $('#empcivil').val(data.civil_report);
          $('#empcomment').val(data.comment);
          $('#empfollow').val(data.follow_up);
          $('#emppanimage').val(data.pan_image);
          $("#empadharimage").val(data.adhar_image);
          $('#empbankimage').val(data.bank_image);
          $('#empphoto').val(data.photo);
          $('#empotherdocument').val(data.other_document);
          $('#edit').modal('show');
        }

       });
    });
    $(document).on('click','.data_delete',function(){
      var delete_id=$(this).attr('id');
      $.ajax({
        url:"documentor-tl-delete.php",
        method:'POST',
        data:{delete_id:delete_id},
        dataType:"json",
        success:function(delete1)
        {
         $('#delete_emp_id').val(delete1.id);
         $('#delete').modal('show');
        }
      });
    });
  }); 
 </script>
  <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>

     </div>
  </div>