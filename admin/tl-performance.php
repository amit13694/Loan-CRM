<?php
include('header.php');
include('../config/database.php');
$sql=mysqli_query($conn,"select * from add_tl");
$name1=array();
$target1=array();
$target_cmplt1=array();
$target_left=array();
$daily_target=array();
$daily_target_cmplt=array();
$daily_target_left=array();
$department=array();
$count=mysqli_num_rows($sql);
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
{
  $department[]=$row['status'];
   $target_left[]=$row['target_left'];
   $daily_target[]=$row['daily_target'];
   $daily_target_cmplt[]=$row['daily_target_cmplt'];
   $daily_target_left[]=$row['daily_target_left'];
	$name1[]=$row['name'];
	$target1[]=$row['target'];
	$target_cmplt1[]=$row['target_cmplt'];
}
?>
<div class="container-fluid">
       <div class="row no-gutters">
               <div class="col-md-2">
    <?php include('sidepanel.php'); ?>
     </div>
     <div class="col-md-10 content">
      <div class="table-responsive">
        <form method="POST" action="tl-performance-download.php">
          <button type="submit" name="download" class="btn btn-primary btn-sm float-left" style="margin-top: 16px;">Download</button>
        </form>
      <table class="table table-bordered table-hover" id="myTable">
        <h4 class="text-center text-light">Documentor Details</h4>
        <thead class="bg-dark">
          <tr class="text-light">
            <td>TL Name</td>
            <td>Department</td>
            <td>Monthly Target</td>
            <td>Monthly Target Complete</td>
            <td>Monthly Target left</td>
            <td>Daily Target</td>
            <td>Daily Target Completed</td>
            <td>Daily Target Left</td>
          </tr>
        </thead>
        <tbody>
        	<?php
                for($i=0;$i<$count;$i++)
                { ?>
                    <tr class="text-light" style="background:#6D6E6A;"	>
                    	<td><?php echo $name1[$i]; ?></td>
                      <td><?php echo $department[$i]; ?></td>
                    	<td><?php echo $target1[$i]; ?></td>
                    	<td><?php echo $target_cmplt1[$i]; ?></td>
                      <td><?php echo $target_left[$i]; ?></td>
                      <td><?php echo $daily_target[$i]; ?></td>
                      <td><?php echo $daily_target_cmplt[$i]; ?></td>
                      <td><?php echo $daily_target_left[$i]; ?></td>
                    </tr>
                <?php }

        	?>
         
        </tbody>
      </table>
