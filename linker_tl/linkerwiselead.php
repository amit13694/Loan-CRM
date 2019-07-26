<?php
include('header.php');
include('../config/database.php');
$tl_name1=$_SESSION['sid'];
$sql=mysqli_query($conn,"select * from add_linker where tl_name='$tl_name1'");
$cmplt_target=mysqli_query($conn,"select * from add_linker where tl_name='$tl_name1'");
$count=mysqli_num_rows($sql);
$name1=array();
$target1=array();
$month_target_cmplt=array();
$target_cmplt=array();
$today_target=array();
$today_target_left=array();
$email=array();
$day_1=array();
$day_2=array();
$day_3=array();
$day_4=array();
$day_5=array();
$day_6=array();
$day_7=array();
$day_8=array();
$day_9=array();
$day_10=array();
$day_11=array();
$day_12=array();
$day_13=array();
$day_14=array();
$day_15=array();
$day_16=array();
$day_17=array();
$day_18=array();
$day_19=array();
$day_20=array();
$day_21=array();
$day_22=array();
$day_23=array();
$day_24=array();
$day_25=array();
$day_26=array();
$day_27=array();
$day_28=array();
$day_29=array();
$day_30=array();
$day_31=array();
while($row=mysqli_fetch_array($sql))
{
  $email[]=$row['email'];
    $name1[]=$row['name'];
    $target1[]=$row['target'];
    $month_target_cmplt[]=$row['month_target_cmplt'];
    $month_wise_target_left[]=$row['month_wise_target_left'];
    $target_cmplt[]=$row['target_cmplt'];
    $today_target[]=$row['today_target'];
    $today_target_left[]=$row['today_target_left'];
    $day_1[]=$row['day_1'];
    $day_2[]=$row['day_2'];
    $day_3[]=$row['day_3'];
    $day_4[]=$row['day_4'];
    $day_5[]=$row['day_5'];
    $day_6[]=$row['day_6'];
    $day_7[]=$row['day_7'];
    $day_8[]=$row['day_8'];
    $day_9[]=$row['day_9'];
    $day_10[]=$row['day_10'];
    $day_11[]=$row['day_11'];
    $day_12[]=$row['day_12'];
     $day_13[]=$row['day_13'];
    $day_14[]=$row['day_14'];
    $day_15[]=$row['day_15'];
    $day_16[]=$row['day_16'];
    $day_17[]=$row['day_17'];
    $day_18[]=$row['day_18'];
    $day_19[]=$row['day_19'];
    $day_20[]=$row['day_20'];
    $day_21[]=$row['day_21'];
    $day_22[]=$row['day_22'];
    $day_23[]=$row['day_23'];
    $day_24[]=$row['day_24'];
     $day_25[]=$row['day_25'];
    $day_26[]=$row['day_26'];
    $day_27[]=$row['day_27'];
    $day_28[]=$row['day_28'];
    $day_29[]=$row['day_29'];
    $day_30[]=$row['day_30'];
    $day_31[]=$row['day_31'];
}
?>
<div class="container-fluid">
       <div class="row no-gutters">
         <div class="col-md-2">
<?php include('sidenav.php'); ?>
</div>
<div class="col-md-10 content">
    <h4 class="text-light text-center">View Details</h4>
    <form method="POST" action="linkerwise_download.php">
      <button type="submit" name="callerwise" class="btn btn-primary btn-sm float-left">Download</button>
    </form>
        <div class="table-responsive">
        <div class="table-responsive" style="overflow-x: auto;" style="color: white;">
        <table class="table table-hover table-bordered table-sm" id="myTable">
            <thead>
                <tr class="bg-dark text-light">
                    <td>Documentor Name</td>
                    <td>email</td>
                    <td>Monthly Target</td>
                    <td>Monthly Target Completed</td>
              
                    <td>Daily Target</td>
                    <td>Daily Target Completed</td>
                    <td>Today target Left</td>
                    <td>Day 1</td>
                    <td>Day 2</td>
                    <td>Day 3</td>
                    <td>Day 4</td>
                    <td>Day 5</td>
                    <td>Day 6</td>
                    <td>Day 7</td>
                    <td>Day 8</td>
                    <td>Day 9</td>
                    <td>Day 10</td>
                    <td>Day 11</td>
                    <td>Day 12</td>
                    <td>Day 13</td>
                    <td>Day 14</td>
                    <td>Day 15</td>
                    <td>Day 16</td>
                    <td>Day 17</td>
                    <td>Day 18</td>
                    <td>Day 19</td>
                    <td>Day 20</td>
                    <td>Day 21</td>
                    <td>Day 22</td>
                    <td>Day 23</td>
                    <td>Day 24</td>
                    <td>Day 25</td>
                    <td>Day 26</td>
                    <td>Day 27</td>
                    <td>Day 28</td>
                    <td>Day 29</td>
                    <td>Day 30</td>
                    <td>Day 31</td>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                for($i=0;$i<$count;$i++)
                { 

                  ?>
                     <tr class="text-light" style="background:#6D6E6A;">
                        <a href="<php echo $name[$i];>" data-toggle="collapse"></a><td><?php echo $name1[$i];?></td>
                        <td><?php echo $email[$i];?></td>
                        <td><?php echo $target1[$i];?></td>
                        <td><?php echo $month_target_cmplt[$i];?></td>
                       
                        <td><?php echo $today_target[$i];?></td>
                        <td><?php echo $target_cmplt[$i];?></td>
                        <td><?php echo $today_target_left[$i];?></td>
                        <td><?php  if($day_1[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                                                <td><?php  if($day_2[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                                                <td><?php  if($day_3[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                                                <td><?php  if($day_4[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                                                <td><?php  if($day_5[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                                                <td><?php  if($day_6[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                                                <td><?php  if($day_7[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                                                <td><?php  if($day_8[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                                                <td><?php  if($day_9[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                                                <td><?php  if($day_10[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                                                <td><?php  if($day_11[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                                                <td><?php  if($day_12[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_13[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_14[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_15[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_16[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_17[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_18[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_19[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_20[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_21[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_22[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_23[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_24[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_25[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_26[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_27[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_28[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_29[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_30[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                             <td><?php  if($day_31[$i]==1)
                                      { ?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                      <?php }
                                      else
                                      { ?>
                                        <span class="glyphicon glyphicon-remove"></span>
                                      <?php }
                        ?></td>
                     </tr>
                    
                    
                <?php }
                ?>              
            </tbody>
        </table>
       
    </div>
 </div>
</div>
</div>
</div>
