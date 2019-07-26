<?php 
//include('session.php');
extract($_POST);
include('header.php');
include("../config/database.php");
$sid=$_SESSION['sid'];
$sql=mysqli_query($conn,"select name from add_linker where tl_name='$sid'");
// $sql1=mysqli_query($conn,"select name from add_varifier where tl_name='$sid'");
$name1=array();
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
    {
               $name1[]=$row['name'];	
    }
    //--------------------------------------------linker-------------------------------------------------
    if(isset($_POST['sub']))
    {
    	$target1=$_POST['target'];
    	$documentor1=$_POST['documentor'];
       $sql_update=mysqli_query($conn,"update add_linker set month_target_cmplt='NULL',target_cmplt='NULL',today_target='NULL',today_target_left='NULL',target_add_month='NOW()'");
      
    	
        if(!empty($target))
        {
        	$sql1=mysqli_query($conn,"update  add_linker set target='$target1' where tl_name='$sid' AND name='$documentor1'")or trigger_error(E_USER_ERROR);
        	if($sql1!=false)
        	{ ?>
        		<div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Data updated successfully!!
                    </div>
        	<?php }
        	else
        	{ ?>
                        <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      SQL error!!
                    </div>
        <?php	}
        }
        else
        { ?>
                    <div class="alert alert-light alert-dismissible" style="width:30%; margin-left: 44%;">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Please fill target field!!
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
   <div class="row">
   <div class="col-md-12">   
 <div class="card">
   <div class="card-header bg-dark">
     <h4 class="card-title text-center text-light">Add Target Linker</h4>
   </div>
   <div class="card-body">
          <form method="post">
        <div class="form-group">
          <label for="name" class="text-light" style="font-size: 20px; margin-left: 8px;">Name</label>
          <select class="form-control" name="documentor">
            <option>select</option>
                 <?php 
                   for($i=0;$i<count($name1);$i++)
                   { ?>
                     <option name="<?php echo $name1[$i];?>" value="<?php echo $name1[$i];?>"><?php echo $name1[$i];?></option>
                   <?php }
                 ?>
          </select>
        </div>
        <div class="form-group">
          <label for="number" class="text-light" style="font-size: 20px; margin-left: 8px;">Target</label>
          <input type="number" name="target" class="form-control">
        </div> 
        <div class="form-group text-center">
          <button type="submit" name="sub" class="btn btn-primary btn-lg">set</button>
        </div>
      </form>
   </div>
 </div>
 	   </div>
   </div>
   </div>
 	</div>
 </div>