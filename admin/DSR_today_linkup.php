<?php
$sql=mysqli_query($conn,"select * from documentor_document where linkup_cnfrm='cnfrm' AND DAY(when_added)=DAY(CURDATE()) order by id DESC");
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
//$comment=array();
$follow_up=array();
$id=array();
//$documentor_name_tl=array();
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
  $whenadded[]=$row['when_added'];
  $dob[]=$row['dob'];
  $qualification[]=$row['qualification'];
  $civil_report[]=$row['civil_report'];
  // $comment[]=$row['comment'];
  $follow_up[]=$row['follow_up'];
  //$documentor_name_tl[]=$row['documentor_name'];
}
?>
 	   	<h4 class="text-light text-center">Today Linkup</h4>
 	   	<div class="table-responsive">
 	   	<div class="table-responsive" style="overflow-x: auto;" style="color: white;">
 	   	<table class="table table-hover table-bordered table-sm" id="myTable_doc">
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
            <td>Follow Up</td>
           
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
                      <td><?php echo $follow_up[$i];?></td>
                      
                    </tr>
                  <?php }
 	   			?>
 	   		</tbody>
 	   	</table>
     </div>
   </div>
   
       