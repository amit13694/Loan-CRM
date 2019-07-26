<?php
//include('session.php');
include("header.php");
include("../config/database.php");
$main_tl_name=$_SESSION['sid'];
$sql=mysqli_query($conn,"select * from documentor_document where comment='INST' order by id DESC");
$name=array();
$address=array();
$zip_code=array();
$contact=array();
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
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
{
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
$whenadded[]=$row['balance_dat'];
$dob[]=$row['dob'];
$qualification[]=$row['qualification'];
$civil_report[]=$row['civil_report'];
$comment[]=$row['comment'];
$follow_up[]=$row['follow_up'];
}
if(isset($_POST['sub']))
{
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
          @$emppanimage1=$_POST['emppanimage'];
          @$empadharimage1=$_POST["empadharimage"];
          @$empbankimage1=$_POST['empbankimage'];
          @$empphoto1=$_POST['empphoto'];
          @$empotherdocument1=$_POST['empotherdocument'];
          @$emp_id1=$_POST['emp_id'];
          $sql1=mysqli_query($conn,"update documentor_document set name='$empname1',address='$empadd1',zip_code='$empzip1',contact='$empnumb1',email='$empemail1',adhar_number='$empuid1',pan_number='$emppan1',dob='$empdob1',qualification='$empqualification1',civil_report='$empcivil1',comment='$empcomment1',follow_up='$empfollow1' where id='$emp_id1'");
          if($sql1!=false)
          { ?>
              <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Update successfully!!
                    </div>
<?php 
                     header("Refresh:1; url=admin-paymentor.php");
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
    header("location:admin-paymentor.php");
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
 		<?php include('sidepanel.php'); ?>
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
 	   				<td>When checked</td>
            <td>Balance Maintainer Status</td>
            <td>Follow Up</td>
            <td>Action</td>
 	   			</tr>
 	   		</thead>
 	   		<tbody>
 	   			<?php 
                  for($i=0;$i<count($name);$i++)
                  {
                  	if($comment[$i]=='INST')
                  	{
                  		$color='green';
                  	}
                  	else if($comment[$i]=='NINST')
                  	{
                  		$color="red";
                  	}
                  	else if($comment[$i]=='FLW')
                  	{
                  		$color='blue';
                  	}
                  	else{
                  		$color="#6D6E6A";
                  	}
                    ?>
                    <tr class="text-light" style="background:<?php echo $color; ?>" >
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
                      <td>
                          <button type="button" class="text-light btn btn-default data_edit" data-toggle="modal" data-target="#edit" style="cursor: pointer;" id="<?php echo $id[$i];?>"><i class="glyphicon glyphicon-edit"></i></button>&emsp;
                          <button type="button" class="text-light btn btn-default data_delete" data-toggle="modal" data-target="#delete" style="cursor: pointer;" id="<?php echo $id[$i];?>"><i class="glyphicon glyphicon-trash"></i></button>
                        
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
                <form method="POST">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="empname" id="empname" class="form-control">
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
                    <label for="comment">Balance maintainer status</label>
                    <input type="text" name="empcomment" class="form-control" id="empcomment">
               </div>
               <div class="form-group">
                    <label for="follow">Follow Up</label>
                    <input type="datetime-local" name="empfollow" class="form-control" id="empfollow">
               </div>
               <input type="hidden" name="emp_id" id="emp_id">
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
        url:"documentor-edit-data.php",
        method:"POST",
        data:{emp_id:emp_id},
        dataType:"json",
        success:function(data)
        {
          $('#empname').val(data.name);
           $('#emp_id').val(data.id);
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
        url:"documentor-delete-data.php",
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