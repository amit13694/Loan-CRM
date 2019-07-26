<?php
//include('session.php');
extract($_POST);
include('header.php');
include('../config/database.php');
$sql=mysqli_query($conn,"select add_paymentor.id AS doc_id,add_paymentor.name AS doc,admin.login,admin.logout,add_paymentor.contact,add_paymentor.email,add_paymentor.joining_date,add_paymentor.paymentor_pass,add_tl.name,add_paymentor.target,add_paymentor.target_cmplt,admin.attendance from add_paymentor INNER JOIN admin ON admin.usename=add_paymentor.email INNER JOIN add_tl on add_tl.email=add_paymentor.tl_name");
$name=array();
$number=array();
$email=array();
$date=array();
$pass=array();
$tl=array();
$login=array();
$logout=array();
$target=array();
$target_cmplt=array();
$attendance=array();
$id=array();
@$id1=$_POST['emp_id'];
@$empname1=$_POST['empname'];
@$empnumber1=$_POST['empnumber'];
@$empemail1=$_POST['empemail'];
@$empnumber1=$_POST['empnumber'];
@$empdate1=$_POST['empdate'];
@$emppass1=$_POST['emppass'];
@$emptarget1=$_POST['emptarget'];
@$emptl1=$_POST['emptl'];
@$unique_id1=$_POST['unique_id'];
//matcing the tl name with data base
$match_name=mysqli_query($conn,"select name from add_tl where email='$empemail1'");
$fetch_name_of_tl=mysqli_fetch_array($match_name); 
//---------------------------------
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
{
  @$login[]=$row['login'];
  @$logout[]=$row['logout'];
  @$id[]=$row['doc_id'];
  @$name[]=$row['doc'];
  @$number[]=$row['contact'];
  @$email[]=$row['email'];
  @$date[]=$row['joining_date'];
  @$pass[]=$row['paymentor_pass'];
  @$tl[]=$row['name'];
  @$target[]=$row['target'];
  @$target_cmplt[]=$row['target_cmplt'];
  @$attendance[]=$row['attendance'];
}
if(isset($_POST['sub']))
{
  $sql2=mysqli_query($conn,"update admin set password='$emppass1' where usename='$empemail1' AND paymentor_unique='$unique_id1'");
$sql1=mysqli_query($conn,"update add_paymentor set name='$empname1',contact='$empnumber1',email='$empemail1',joining_date='$empdate1',paymentor_pass='$emppass1',target='$emptarget1' where email='$empemail1' AND unique_number='$unique_id1'");
if($sql1!=false)
{ ?>
              <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Update successfully!!
                    </div>
<?php 
                     header("Refresh:1; url=view-paymentor.php");
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
    header("location:view-paymentor.php");
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
      <div class="table-responsive">
      <table class="table table-bordered table-hover" id="myTable">
        <h4 class="text-center text-light">Documentor Details</h4>
        <thead class="bg-dark">
          <tr class="text-light">
            <td>Name</td>
            <td>Contact</td>
            <td>Email</td>
            <td>Date of Joining</td>
            <td>Login Time</td>
            <td>Logout Time</td>
            <td>Target</td>
            <td>Completed Target</td>
            <td>Attendance</td>
            <td>TL Name</td>
            <td>Password</td>
            <td>Action</td>
          </tr>
        </thead>
        <tbody>
          <?php
                   for($i=0;$i<count($email);$i++)
                   { ?>
                      <tr  class="text-light" style="background: #6D6E6A;">
                        <td><?php echo $name[$i]?></td>
                        <td><?php echo $number[$i]?></td>
                        <td><?php echo $email[$i]?></td>
                        <td><?php echo $date[$i]?></td>
                        <td><?php echo $login[$i]?></td>
                        <td><?php echo $logout[$i]?></td>
                        <td><?php echo $target[$i]?></td>
                        <td><?php echo $target_cmplt[$i]?></td>
                        <td><?php if($attendance[$i]=='1')
                                { ?>
                                     <span class="glyphicon glyphicon-ok"></span>
                               <?php }
                               else{ ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                               <?php }
                        ?></td>
                        <td><?php echo $tl[$i]?></td>
                        <td><?php echo $pass[$i]?></td>

                        <td>
                          <button type="button" class="text-light btn btn-default data_edit" data-toggle="modal" data-target="#edit" style="cursor: pointer;" id="<?php echo $email[$i];?>"><i class="glyphicon glyphicon-edit"></i></button>&emsp;
                          <button type="button" class="text-light btn btn-default data_delete" data-toggle="modal" data-target="#delete" style="cursor: pointer;" id="<?php echo $email[$i];?>"><i class="glyphicon glyphicon-trash"></i></button>
                        </td>
                      </tr>
                        
                   <?php }
          ?>
        </tbody>
      </table>
     </div>
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
              <label for="name">Name of Employe</label>
              <input type="text" name="empname" id="empname" class="form-control" placeholder="Name of employe" id="empname">
            </div>
            <div class="form-group">
              <label for="number">Contact Number</label>
              <input type="number" name="empnumber" id="empnumber" class="form-control" placeholder="Contact number" id="empnumber">
            </div>
            <div class="form-group">
              
              <input type="hidden" name="empemail" id="empemail" class="form-control" placeholder="Email of employe" id="empemail">
            </div>
            <div class="form-group">
              <label for="date">Joining Date</label>
              <input type="date" name="empdate" id="empdate" class="form-control" id="empdate">
            </div>
            <div class="form-group">
              <label for="target">Target</label>
              <input type="text" name="emptarget" id="emptarget" class="form-control" placeholder="Target" >
            </div>
            <div class="form-group">
              <label for="password">password</label>
              <input type="text" name="emppass" id="emppass" class="form-control" placeholder="Password" id="emppass">
            </div>
              <input type="hidden" name="unique_id" id="unique_id">
              <div class="form-group">
              <label for="password">TL Name</label>
              <input type="text" name="emptl" id="emptl" class="form-control" placeholder="TL Name">
              
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
  $(document).ready(function(){
    $(document).on('click' ,'.data_edit' , function(){
       var emp_id=$(this).attr('id');
       $.ajax({
        url:"paymentor-edit.php",
        method:"POST",
        data:{emp_id:emp_id},
        dataType:"json",
        success:function(data)
        {
          $('#empname').val(data.name);
          $('#empnumber').val(data.contact);
          $('#empemail').val(data.email);
          $('#empdate').val(data.joining_date);
          $('#emppass').val(data.paymentor_pass);
          $('#emp_id').val(data.id);
          $('#unique_id').val(data.unique_number);
          $('#emptarget').val(data.target);
          $('#emptl').val(data.tl_name);
          $("#sub").val("update");
          $('#edit').modal('show');
        }

       });
    });
 
    $(document).on('click','.data_delete',function(){
      var delete_id=$(this).attr('id');
      $.ajax({
        url:"paymentor-delete.php",
        method:'POST',
        data:{delete_id:delete_id},
        dataType:"json",
        success:function(delete1)
        {
         $('#delete_emp_id').val(delete1.email);
         $('#delete').modal('show');
        }
      });
    });
  }); 
  // $('#edit').on('show.bs.modal',function(event){
  //      var button=$(event.relatedTarget)
  //      var n1=button.data('name1')
  //      console.log("e");
  //      var n2=button.data('number1')
  //      var n3=button.data('email1')
  //      var n4=button.data('date1')
  //      var n5=button.data('pass1')
  //      var modal=$(this)
  //      modal.find('.modal-body #empname').val(n1);
  //      modal.find('.modal-body #empnumber').val(n2);
  //      modal.find('.modal-body #empemail').val(n3);
  //      modal.find('.modal-body #empdate').val(n4);
  //      modal.find('.modal-body #emppass').val(n5);
  //    })
  
 </script>
  <script>
  $(document).ready(function () {
  $('#myTable').DataTable({
    responsive: true
  });
});
 </script>
  <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>