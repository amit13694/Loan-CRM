<?php
//include('session.php');
include("header.php");
@$name1=$_SESSION['sid'];
include("../config/database.php");
$name=array();
$contact=array();
$email=array();
$joining_date=array();
$id=array();
$target1=array();
$attendance=array();
@$id1=$_POST['emp_id'];
@$empname1=$_POST['empname'];
@$empnumber1=$_POST['empnumber'];
@$empemail1=$_POST['empemail'];
@$empnumber1=$_POST['empnumber'];
@$empdate1=$_POST['empdate'];
@$target2=$_POST['target'];
$sql=mysqli_query($conn,"select add_paymentor.target,add_paymentor.id,add_paymentor.name,add_paymentor.contact,add_paymentor.email,add_paymentor.joining_date,admin.attendance,admin.login,admin.logout from add_paymentor INNER JOIN admin ON add_paymentor.tl_name=admin.tl_name AND add_paymentor.email=admin.usename");
$count1=mysqli_num_rows($sql);
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
{  
  $login[]=$row['login'];
  $logout[]=$row['logout'];
  $attendance[]=$row['attendance'];
  $target1[]=$row['target'];
	$id[]=$row['id'];
    $name[]=$row['name'];
    $contact[]=$row['contact'];
    $email[]=$row['email'];
    $joining_date[]=$row['joining_date'];
}
if(isset($_POST['sub']))
{
$sql1=mysqli_query($conn,"update add_documentor set name='$empname1',contact='$empnumber1',email='$empemail1',joining_date='$empdate1',target='$target2' where id='$id1'");
if($sql1!=false)
{ ?>
              <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Update successfully!!
                    </div>
<?php 
                     header("Refresh:1; url=tl-documentor.php");
}
else{ ?>
                  <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      There is some error!! Please check your Data
                    </div>
<?php }
}
// if(isset($_POST['delete_data']))
// {
//   echo "hello";
// }
if(isset($_POST['delete_sub']))
{
  $del=$_POST['delete_emp_id'];
  $sql4=mysqli_query($conn,"delete from add_documentor where email='$del'");
  $sql5=mysqli_query($conn,"delete from admin where usename='$del'");
  if($sql4!=false && $sql5!=false)
  {
    header("location:view-documentor.php");
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
 		<?php include ('sidenav.php'); ?>
 	   </div>
     <div class="col-md-10 content">
     	<h4 class="text-light text-center">Employe Details</h4>
     	<div class="table-responsive">
     	<table class="table table-stripped table-hover table-bordered" style="overflow-x: auto;" id="myTable">
     		<thead>
     			<tr class="bg-dark text-light">
     				<td>Name</td>
     				<td>Contact</td>
     				<td>Email</td>
     				<td>Joining Date</td>
            <td>Target</td>
            <td>Attendance</td>
            <td>Login</td>
            <td>Logout</td>
     				<td>Action</td>
     			</tr>
     		</thead>
     		<tbody>
     			<?php
                 for($i=0;$i<$count1;$i++)
                 { ?>
                      <tr class="text-light" style="background: #6D6E6A;">
                      	<td><?php echo $name[$i];?></td>
                      	<td><?php echo $contact[$i];?></td>
                      	<td><?php echo $email[$i];?></td>
                      	<td><?php echo $joining_date[$i];?></td>
                        <td><?php echo $target1[$i];?></td>
                        <td><?php if($attendance[$i]=='1')
                                { ?>
                                     <span class="glyphicon glyphicon-ok"></span>
                               <?php }
                               else{ ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                               <?php }
                        ?></td>
                        <td><?php echo $login[$i]?></td>
                        <td><?php echo $logout[$i]?></td>
                      	<td>
                      		<button type="button" class="text-light btn btn-default data_edit" data-toggle="modal" data-target="#edit" style="cursor: pointer;" id="<?php echo $id[$i];?>"><i class="glyphicon glyphicon-edit"></i></button>&emsp;
                   	  	
                      	</td>
                      </tr>
                 <?php }
     			?>
     		</tbody>
     	</table>
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
     					<label for="name">Name of Employe</label>
     					<input type="text" name="empname" id="empname" class="form-control" placeholder="Name of employe" id="empname">
     				</div>
     				<div class="form-group">
     					<label for="number">Contact Number</label>
     					<input type="number" name="empnumber" id="empnumber" class="form-control" placeholder="Contact number" id="empnumber">
     				</div>
     				<div class="form-group">
     					<label for="email">Employe Email</label>
     					<input type="email" name="empemail" id="empemail" class="form-control" placeholder="Email of employe" id="empemail">
     				</div>
     				<div class="form-group">
     					<label for="date">Joining Date</label>
     					<input type="date" name="empdate" id="empdate" class="form-control" id="empdate">
     				</div>
            <div class="form-group">
              <label for="target">Target</label>
              <input type="number" name="target" id="target" class="form-control">
            </div>
                     <input type="hidden" name="emp_id" id="emp_id">
     				<div class="form-group text-center">
     					<button type="submit" class="btn btn-primary" name="sub" id="sub" >save</button>
     				</div>
     			</form>
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
        url:"documentor-edit.php",
        method:"POST",
        data:{emp_id:emp_id},
        dataType:"json",
        success:function(data)
        {
          $('#empname').val(data.name);
          $('#empnumber').val(data.contact);
          $('#empemail').val(data.email);
          $('#empdate').val(data.joining_date);
          $('#emp_id').val(data.id);
           $('#target').val(data.target);
          $('#edit').modal('show');
        }

       });
    });
});
 </script>
  <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>  