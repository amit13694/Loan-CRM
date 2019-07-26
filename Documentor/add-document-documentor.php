<?php
//include('session.php');
 extract($_POST);
include("header.php");
include("../config/database.php");
$doc_name=$_SESSION['sid'];
$sql=mysqli_query($conn,"select target from add_documentor where email='$sid'");
$target1=mysqli_fetch_array($sql);
$sql4=mysqli_query($conn,"select tl_name from admin where usename='$doc_name' AND status='documentor'");
$row2=mysqli_fetch_array($sql4);
$tl_name1=$row2['tl_name'];
$sql7=mysqli_query($conn,"select today_target from add_documentor where email='$doc_name'");
$target_today=mysqli_fetch_array($sql7);
//-------------------------------------------------
$fetching_monthwise_target_left=mysqli_query($conn,"select DAY(target_add_month) AS t, MONTH(target_add_month) AS p from add_documentor where email='$doc_name'");
$fetch_left_data=mysqli_fetch_array($fetching_monthwise_target_left);
$day=$fetch_left_data['t'];
$month=$fetch_left_data['p'];
//----------------------------------------------------------------
if($month!=date('m'))
{
  $update_all_data=mysqli_query($conn,"update add_documentor set day_1='0',day_2='0',day_3='0',day_4='0',day_5='0',day_6='0',day_7='0',day_8='0',day_9='0',day_10='0',day_11='0',day_12='0',day_13='0',day_14='0',day_15='0',day_16='0',day_17='0',day_18='0',day_19='0',day_20='0',day_21='0',day_22='0',day_23='0',day_24='0',day_25='0',day_26='0',day_27='0',day_28='0',day_29='0',day_30='0',day_31='0' where email='$doc_name'");
}
//------------------------------------------------------------------
//check is the comment section is blank or not
$fetch_data=mysqli_query($conn,"select target_cmplt,month_target_cmplt,target,today_target from add_documentor where email='$doc_name'");
                                $fetch_target_cmplt=mysqli_fetch_array($fetch_data);
                                 if($fetch_target_cmplt['target_cmplt']==$target_today['today_target'])
                              {
                                 $sql_insert_target_cmplt=mysqli_query($conn,"update add_documentor set target_cmplt='0',today_target_left='0' where email='$doc_name'");
                              }
                              if($fetch_target_cmplt['today_target']==$fetch_target_cmplt['target_cmplt'])
                              { 
                             ?>
                                    <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Congratulation!! Your Traget Completed
                    </div>

                                <?php
                                $add_benefit=mysqli_query($conn,"update add_documentor set day_$day='1' where email='$doc_name' ");
                                // $update_month_target=mysqli_query($conn,"update add_documentor set month_target_cmplt='0' ");
                              }
if(isset($_POST['sub']))
{        

                                         
          $_SESSION['i'] = isset($_SESSION['i']) ? ++$fetch_target_cmplt['target_cmplt'] : ++$fetch_target_cmplt['target_cmplt'];
          $_SESSION['j'] = isset($_SESSION['j']) ? ++$fetch_target_cmplt['month_target_cmplt'] : ++$fetch_target_cmplt['month_target_cmplt'];
                              $data=$_SESSION['j'];
                              $target_in_database=$_SESSION['i'];
                              $sql_insert_target_cmplt=mysqli_query($conn,"update add_documentor set target_cmplt='$target_in_database',month_target_cmplt='$data' where email='$doc_name'");
  // $count++;
  // echo $count;
  // // $name1=$_POST['name'];
  // $add1=$_POST['add'];
  // $add_zip1=$_POST['add_zip'];
  // $numb1=$_POST['numb'];
  // $email1=$_POST['email'];
  // $UID1=$_POST['UID'];
  // $pan1=$_POST['pan'];
   // @$pan_image1=$_POST['pan_image'];
   // @$adhar_image1=$_POST['adhar_image'];
   // @$bank_image1=$_POST['bank_image'];
   // @$photo1=$_POST['photo'];
   // @$other_document1=$_POST['other_document'];
  // $doc_name1=$_POST['doc_name'];
  // $dob1=$_POST['dob'];
  // $Qualification1=$_POST['Qualification'];
  // $civil1=$_POST['civil'];
  // $comment1=$_POST['comment'];
  // $follow1=$_POST['follow'];
  // //-----------------------------------------------------------------------------------------------
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
    $pan_filename=$name.".".$ext_pan;
    $uid_filename=$name.".".$ext_uid;
    $bank_filename=$name.".".$ext_bank;
    $other_filename=$name.".".$ext_other;
    $user_filename=$name.".".$ext_user;
    $sql=mysqli_query($conn,"insert into documentor_document(name,address,zip_code,contact,email,adhar_number,pan_number,pan_image,adhar_image,bank_image,photo,other_document,documentor_name,dob,qualification,civil_report,comment,follow_up,tl_name,follow_cmnt,documentor_status)values('$name','$add','$add_zip','$numb','$email','$UID','$pan','$pan_filename','$uid_filename','$bank_filename','$user_filename','$other_filename','$doc_name','$dob','$Qualification','$civil','NULL','$follow','$tl_name1','$follow_cmnt','$follow_status')");
   if($sql!=false)
   {

 //uploading image to server
          move_uploaded_file($file_temp_pan,"../image/PAN/".$pan_filename);
          move_uploaded_file($file_temp_uid,"../image/UID/".$uid_filename); 
          move_uploaded_file($file_temp_bank,"../image/BANK/".$bank_filename);
          move_uploaded_file($file_temp_other,"../image/Other_document/".$other_filename);
          move_uploaded_file($file_temp_user,"../image/user/".$user_filename);
           
    ?>
   <?php
  ?>

                     <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Data Inserted
                      </div>
 <?php
                     
    }
   else
   { ?>
      <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Ooopss there is some error please check your data!!
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
     	<div class="card ">
     		<div class="card-header bg-dark text-light text-center">Add Data</div>
     		<div class="card-body">
     	<form method="POST" enctype = "multipart/form-data">
     		<div class="form-group">
     			<label for="name">Name</label>
     			<input type="text" name="name" class="form-control" required>
     		</div>
     		<div class="form-group">
     			<label for="add">Address</label>
     			<input type="text" name="add" class="form-control">
                    <label for="add">Zip Code</label>
                    <input type="number" name="add_zip" class="form-control">
     		</div>
     		<div class="form-group">
     			<label for="name">Contact Number</label>
     			<input type="number" name="numb" class="form-control" required>
     		</div>
     		<div class="form-group">
     			<label for="email">Email</label>
     			<input type="email" name="email" class="form-control">
     		</div>
     		<div class="form-group">
     			<label for="UID">Adhar Number</label>
     			<input type="number" name="UID" class="form-control">
     		</div>
     		<div class="form-group">
     			<label for="pan">PAN Number</label>
     			<input type="number" name="pan" class="form-control">
     		</div>
               <div class="form-group">
                    <label for="dob">Date Of Birth</label>
                    <input type="date" name="dob" class="form-control">
               </div>
               <div class="form-group">
                    <label for="Qualification">Qualification</label>
                    <input type="text" name="Qualification" class="form-control">
               </div>
               <div class="form-group">
                    <label for="civil">Civil Report</label>
                    <input type="text" name="civil" class="form-control">
               </div>
               <div class="form-group">
                    <label for="follow">Follow Up status</label>
                    <input type="text" name="follow_status" class="form-control">
               </div>
               <div class="form-group">
                    <label for="follow">Follow Up Date</label>
                    <input type="datetime-local" name="follow" class="form-control">
               </div>
               <div class="form-group">
                    <label for="follow">Follow Up Comment</label>
                    <input type="text" name="follow_cmnt" class="form-control">
               </div>
               <div class="row">
                    <div class="col-md-3">
                         <div class="form-group">
                              <label for="pan_image">PAN Image</label>
                              <input type="file" name="pan_image" class="form-control">
                         </div>
                    </div>
                    <div class="col-md-2">
                         <div class="form-group">
                              <label for="adhar_image">UID Image</label>
                              <input type="file" name="adhar_image" class="form-control">
                         </div>
                    </div>
                    <div class="col-md-2">
                         <div class="form-group">
                              <label for="bank_image">Bank Detail Image</label>
                              <input type="file" name="bank_image" class="form-control">
                         </div>
                    </div>
                    <div class="col-md-2">
                         <div class="form-group">
                              <label for="photo">User Image</label>
                              <input type="file" name="photo" class="form-control">
                         </div>
                    </div>
                    <div class="col-md-3">
                         <div class="form-group">
                              <label for="other_image">Other Image</label>
                              <input type="file" name="other_document" class="form-control">
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
 