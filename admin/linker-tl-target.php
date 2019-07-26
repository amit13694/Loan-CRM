<?php 
//include('session.php');
extract($_POST);
include('../admin/header.php');
include("../config/database.php");
$sid=$_SESSION['sid'];
$sql=mysqli_query($conn,"select name,email from add_tl where status='linker_tl'");
$name1=array();
$email1=array();
//automatic set target of tl if admin not set at every month target become same as previuos month
$sql_auto=mysqli_query($conn,"select MONTH(target_add_month) AS m,target,target_var from add_tl where status='linker_tl'");
$fetch_auto_update=mysqli_fetch_array($sql_auto);
$auto_update_target=$fetch_auto_update['target'];
$auto_update_daily_target=ceil($fetch_auto_update['target']/25);
$auto_update_target_var=$fetch_auto_update['target_var'];
$auto_update_daily_target_var=ceil($fetch_auto_update['target_var']/25);
if($fetch_auto_update['m']!=date('m'))
{
 
       $sql_update1=mysqli_query($conn,"update add_linker set month_target_cmplt='NULL',target_cmplt='NULL',today_target='NULL',today_target_left='NULL',target_add_month='NOW()'");
       $sql_update1=mysqli_query($conn,"update add_varifier set month_target_cmplt='NULL',target_cmplt='NULL',today_target='NULL',today_target_left='NULL',target_add_month='NOW()'");

}
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
    {
               $name1[]=$row['name'];
               @$email1[]=$row['email'];	
    }
    if(isset($_POST['sub']))
    {
    	$target1=$_POST['target'];
    	$documentor1=$_POST['documentor'];
       $tl_daily_target=ceil($target1/25);

       $sql_update=mysqli_query($conn,"update add_tl set target_add_month='NOW()',target_cmplt='NULL',daily_target_cmplt='NULL',daily_target_left='NULL',target_left='NULL',daily_target_cmplt_var='NULL',daily_target_left_var='NULL',month_target_cmplt_var='NULL',month_target_left_var='NULL',target_var='NULL' where email='$documentor1' AND status='linker_tl'");
       $sql_update1=mysqli_query($conn,"update add_linker set month_target_cmplt='NULL',target_cmplt='NULL',today_target='NULL',today_target_left='NULL',target_add_month='NOW()' where tl_name='$documentor1'");
      
        if(!empty($target))
        {
        	$sql1=mysqli_query($conn,"update  add_tl set target='$target1',daily_target='$tl_daily_target' where status='linker_tl' AND email='$documentor1'")or trigger_error(E_USER_ERROR);
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
    // adding varifier tl monthly target
        if(isset($_POST['sub_var']))
    {
      
      $target11=$_POST['target1'];
      $documentor11=$_POST['documentor1'];
       @$tl_daily_target1=ceil($target11/25);
       $sql_update=mysqli_query($conn,"update add_tl set target_add_month='NOW()',target_cmplt='NULL',daily_target_cmplt='NULL',daily_target_left='NULL',target_left='NULL',daily_target_cmplt_var='NULL',daily_target_left_var='NULL',month_target_cmplt_var='NULL',month_target_left_var='NULL',target_var='NULL',target='NULL' where email='$documentor11' AND status='varifier_tl'");
       $sql_update1=mysqli_query($conn,"update add_varifier set month_target_cmplt='NULL',target_cmplt='NULL',today_target='NULL',today_target_left='NULL',target_add_month='NOW()' where tl_name='$documentor11'");
      
        if(!empty($target11))
        {
          $sql1=mysqli_query($conn,"update  add_tl set daily_target='$tl_daily_target1',target_var='$target11' where status='varifier_tl' AND email='$documentor11'")or trigger_error(E_USER_ERROR);
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
        <?php }
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
 		<?php include('sidepanel.php'); ?>
 	   </div>
 	   <div class="col-md-10 content">
      <h3 class="text-center">Add Linker TL Target</h3>
 	   	<form method="post">
 	   		<div class="form-group">
 	   			<label for="name" class="text-light" style="font-size: 20px; margin-left: 8px;">Name</label>
 	   			<select class="form-control" name="documentor">
 	   				<option>select</option>
                 <?php 
                   for($i=0;$i<count($name1);$i++)
                   { ?>
                     <option name="<?php echo $email1[$i];?>" value="<?php echo $email1[$i];?>"><?php echo $name1[$i];?></option>
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
      <!--varifier form-->
            <h3 class="text-center">Add Varifier TL Target</h3>
      <form method="post">
        <div class="form-group">
          <label for="name" class="text-light" style="font-size: 20px; margin-left: 8px;">Name</label>
          <select class="form-control" name="documentor1">
            <option>select</option>
                 <?php 
                   for($i=0;$i<count($name1);$i++)
                   { ?>
                     <option name="<?php echo $email1[$i];?>" value="<?php echo $email1[$i];?>"><?php echo $name1[$i];?></option>
                   <?php }
                 ?>
          </select>
        </div>
        <div class="form-group">
          <label for="number" class="text-light" style="font-size: 20px; margin-left: 8px;">Target</label>
          <input type="number" name="target1" class="form-control">
        </div> 
        <div class="form-group text-center">
          <button type="submit" name="sub_var" class="btn btn-primary btn-lg">set</button>
        </div>
      </form>
 	   </div>
 	</div>
 </div>