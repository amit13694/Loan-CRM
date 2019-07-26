<?php
//include('session.php');
include('header.php');
include('../config/database.php');
//-----------------------------------

//------------------------------------
// fetching documentor leads
$total_D_leads=mysqli_query($conn,"select count(documentor_name) AS total_d_leads from documentor_document where MONTH(when_added)=MONTH(CURDATE())");
$fetch_documentor_lead=mysqli_fetch_array($total_D_leads);
//-------------------------------------------------------------------------------------------
// total balance leads
$total_B_leads=mysqli_query($conn,"select count(comment) AS total_b_leads from documentor_document where comment='INST' AND MONTH(when_added)=MONTH(CURDATE())");
$fetch_balance_lead=mysqli_fetch_array($total_B_leads);
//-------------------------------------------------------------------------------------
//varifier lead
$total_V_leads=mysqli_query($conn,"select count(varifier_status) AS total_v_leads from documentor_document where varifier_status='yes' AND MONTH(when_added)=MONTH(CURDATE())");
$fetch_varifier_lead=mysqli_fetch_array($total_V_leads);
//--------------------------------------------------------------------------------------
// total linker leads
$total_L_leads=mysqli_query($conn,"select count(linkup_cnfrm) AS total_l_leads from documentor_document where linkup_cnfrm='cnfrm' AND MONTH(when_added)=MONTH(CURDATE())");
$fetch_linker_lead=mysqli_fetch_array($total_L_leads);
//--------------------------------------------------------------------------------------
//not varified lead
$total_VR_leads=mysqli_query($conn,"select count(varifier_status) AS total_vr_leads from documentor_document where varifier_status='no' AND MONTH(when_added)=MONTH(CURDATE())");
$fetch_varifier_rejected_lead=mysqli_fetch_array($total_VR_leads);
// total balance rejected leads
$total_BR_leads=mysqli_query($conn,"select count(comment) AS total_br_leads from documentor_document where comment='NINST' AND MONTH(when_added)=MONTH(CURDATE())");
$fetch_balance_rejected_lead=mysqli_fetch_array($total_BR_leads);
//--------------------------------------------------------------------------------------
// total linker rejected leads
$total_LR_leads=mysqli_query($conn,"select count(linkup_cnfrm) AS total_lr_leads from documentor_document where linkup_cnfrm='ncnfrm' AND MONTH(when_added)=MONTH(CURDATE())");
$fetch_linker_rejected_lead=mysqli_fetch_array($total_LR_leads);
//--------------------------------------------------------------------------------------
// total balance follow leads
$total_BF_leads=mysqli_query($conn,"select count(comment) AS total_bf_leads from documentor_document where comment='FLW' AND MONTH(when_added)=MONTH(CURDATE())");
$fetch_balance_follow_lead=mysqli_fetch_array($total_BF_leads);
//--------------------------------------------------------------------------------------
// total linker follow leads
$total_LF_leads=mysqli_query($conn,"select count(linkup_cnfrm) AS total_lf_leads from documentor_document where linkup_cnfrm='lflw' AND MONTH(when_added)=MONTH(CURDATE())");
$fetch_linker_follow_lead=mysqli_fetch_array($total_LF_leads);
//--------------------------------------------------------------------------------------
//count documentor and attendance
$total_documentor=mysqli_query($conn,"select count(status) AS total_docs from admin where status='documentor' ");
$total_present_docs=mysqli_query($conn,"select count(attendance) AS present_docs from admin where status='documentor' AND attendance='1'");
$total_documentor_fetch=mysqli_fetch_array($total_documentor);
$total_present_docs_fetch=mysqli_fetch_array($total_present_docs);
$sid=$_SESSION['sid'];
//count balance maintainer
$total_balance_maintainer=mysqli_query($conn,"select count(status) AS total_balance from admin where status='payment'");
$total_balance_maintainer_fetch=mysqli_fetch_array($total_balance_maintainer);
$total_balance_maintainer_present=mysqli_query($conn,"select count(status) AS present_balance from admin where status='payment' AND attendance='1'");
$total_balance_maintainer_present_fetch=mysqli_fetch_array($total_balance_maintainer_present);
//count linker
$total_linker=mysqli_query($conn,"select count(status) AS total_linker from admin where status='linker'");
$total_linker_fetch=mysqli_fetch_array($total_linker);
$total_linker_present=mysqli_query($conn,"select count(status) AS present_linker from admin where status='linker' AND attendance='1'");
$total_linker_present_fetch=mysqli_fetch_array($total_linker_present);
//count varifier attendance
$total_varifier=mysqli_query($conn,"select count(status) AS total_var from admin where status='varifier' ");
$total_present_var=mysqli_query($conn,"select count(attendance) AS present_var from admin where status='varifier' AND attendance='1'");
$total_varifier_fetch=mysqli_fetch_array($total_varifier);
$total_present_varifier_fetch=mysqli_fetch_array($total_present_var);
$sid=$_SESSION['sid'];
//count team leader and attendaance
$total_team_leader=mysqli_query($conn,"select count(status) AS total_team_leader from admin where status='documentor_tl' OR status='paymentor_tl' OR status='linker_tl'");
$total_TL_fetch=mysqli_fetch_array($total_team_leader);
$total_TL_present=mysqli_query($conn,"select count(status) AS present_TL from admin where (status='documentor_tl' OR status='paymentor_tl' OR status='linker_tl') AND attendance='1'");
$total_TL_present_fetch=mysqli_fetch_array($total_TL_present);
if (!isset($_SESSION['sid']) ||(trim ($_SESSION['sid']) == '')) {
		header('location:../index.php');
		exit();
	}
?>
<div class="container-fluid">
       <div class="row no-gutters">
 	     	      <div class="col-md-2">
 		<?php include('sidepanel.php'); ?>
 	   </div>
     <div class="col-md-10 content">
     	<div class="row">
     		<div class="col-md-3">
     			<div class="card" style="border-radius: 0px; height: 51vh;">
     				<div class="card-header" style="background:yellow;">
     					<h4 class="card-title text-dark text-center">Total Leads</h4>
     				</div>
     				<div class="card-body" style="background: black; color: yellow; ">
     					<table class="table">
     						<tbody>
     							<tr style="background: black; color: yellow; font-weight: bold;">
     								<td>Documentor Leads</td>
     								<td><?php echo $fetch_documentor_lead['total_d_leads']; ?></td>
     							</tr>
                                        <tr style="background: black; color: yellow; font-weight: bold;">
                                             <td>Varifier Leads</td>
                                             <td><?php echo $fetch_documentor_lead['total_d_leads']; ?></td>
                                        </tr>
                                        <tr style="background: black; color: yellow; font-weight: bold;">
                                             <td>Linker Leads</td>
                                             <td><?php echo $fetch_varifier_lead['total_v_leads']; ?></td>
                                        </tr>
     							<tr style="background: black; color: yellow; font-weight: bold;">
     								<td>Balance Leads</td>
     								<td><?php echo $fetch_linker_lead['total_l_leads']; ?></td>
     							</tr>
     						</tbody>
     					</table>
     				</div>
     			</div>
     		</div>
     		     		<div class="col-md-3">
     			<div class="card" style="border-radius: 0px; height: 51vh;">
     				<div class="card-header" style="background:#DE668B;">
     					<h4 class="card-title text-dark text-center" style="font-size: 23px;">Total Confirm Leads</h4>
     				</div>
     				<div class="card-body" style="background:#3D155F; color:#DE668B;">
     					<table class="table">
     						<tbody>
                                        <tr style="background:#3D155F; color:#DE668B; font-weight: bold;">
                                             <td>Varifier confirm Leads</td>
                                             <td><?php echo $fetch_varifier_lead['total_v_leads']; ?></td>
                                        </tr>
     							<tr style="background:#3D155F; color:#DE668B; font-weight: bold;">
                                             <td>Linker confirm Leads</td>
                                             <td><?php echo $fetch_linker_lead['total_l_leads']; ?></td>
                                        </tr>
     							<tr style="background:#3D155F; color:#DE668B; font-weight: bold;">
     								<td>Balance Interested Leads</td>
     								<td><?php echo $fetch_balance_lead['total_b_leads']; ?></td>
     							</tr>
     						</tbody>
     					</table>
     				</div>
     			</div>
     		</div>
     		     		<div class="col-md-3">
     			<div class="card"  style="border-radius: 0px; height: 51vh;">
     				<div class="card-header" style="background:#CBF381;">
     					<h4 class="card-title text-dark text-center" style="font-size: 17.6px;">Total Not Confirmed leads</h4>
     				</div>
     				<div class="card-body" style="background: #4831D4; color:#CBF381;">
     					<table class="table">
     						<tbody>
     							<tr style="background: #4831D4; color:#CBF381; font-weight: bold;">
                                             <td>Not Varified Leads</td>
                                             <td><?php echo $fetch_varifier_rejected_lead['total_vr_leads']; ?></td>
                                        </tr>
     							<tr style="background: #4831D4; color:#CBF381; font-weight: bold;">
     								<td>Balance Rejected Leads</td>
     								<td><?php echo $fetch_balance_rejected_lead['total_br_leads']; ?></td>
     							</tr>
     							<tr style="background: #4831D4; color:#CBF381; font-weight: bold;">
     								<td>Linker Rejected Leads</td>
     								<td><?php echo $fetch_linker_rejected_lead['total_lr_leads']; ?></td>
     							</tr>
     						</tbody>
     					</table>
     				</div>
     			</div>
     		</div>
     		     		<div class="col-md-3">
     			<div class="card" style="border-radius: 0px; height: 51vh;">
     				<div class="card-header" style="background: #FCA87E;">
     					<h4 class="card-title text-dark text-center" style="font-size: 21px;">Total Follow up Leads</h4>
     				</div>
     				<div class="card-body" style="background: #4A274F; color: #FCA87E;">
     						<table class="table">
     						<tbody>
     							
     							<tr style="background: #4A274F; color: #FCA87E; font-weight: bold;">
     								<td>Balance Follow Up Leads</td>
     								<td><?php echo $fetch_balance_follow_lead['total_bf_leads']; ?></td>
     							</tr>
     							<tr style="background: #4A274F; color: #FCA87E; font-weight: bold;">
     								<td>Linker Follow Up Leads</td>
     								<td><?php echo $fetch_linker_follow_lead['total_lf_leads']; ?></td>
     							</tr>
     						</tbody>
     					</table>
     				</div>
     			</div>
     		</div>
     	</div>
     	     	<div class="row">
     		<div class="col-md-3">
     			<div class="card" style="border-radius: 0px; height: 42.5vh;">
     				<div class="card-header" style="background:#EF5455;">
     					<h4 class="card-title text-dark text-center">Documentor</h4>
     				</div>
     				<div class="card-body" style="background: #2A3252; color:#EF5455;">
     					<table class="table">
     						<tbody>
     							
     							<tr style="background: #2A3252; color:#EF5455; font-weight: bold;">
     								<td>Total Documentors</td>
     								<td><?php echo $total_documentor_fetch['total_docs']; ?></td>
     							</tr>
     							<tr style="background: #2A3252; color:#EF5455; font-weight: bold;">
     								<td>Present Documentors</td>
     								<td><?php echo $total_present_docs_fetch['present_docs']; ?></td>
     							</tr>
     						</tbody>
     					</table>
     				</div>
     			</div>
     		</div>
     		     		<div class="col-md-3">
     			<div class="card" style="border-radius: 0px; height: 42.5vh;">
     				<div class="card-header" style="background:yellow;">
     					<h4 class="card-title text-dark text-center">Balance Maintainer</h4>
     				</div>
     				<div class="card-body" style="background:#3C1A5B; color:yellow;">
     					<table class="table">
     						<tbody>
     							
     							<tr style="background:#3C1A5B; color:yellow; font-weight: bold;">
     								<td>Total Balance Maintainers </td>
     								<td><?php echo $total_balance_maintainer_fetch['total_balance']; ?></td>
     							</tr>
     							<tr style="background:#3C1A5B; color:yellow; font-weight: bold;">
     								<td>Present Balance Maintainers</td>
     								<td><?php echo $total_balance_maintainer_present_fetch['present_balance'];?></td>
     							</tr>
     						</tbody>
     					</table>
     				</div>
     			</div>
     		</div>
     		     		<div class="col-md-3">
     			<div class="card" style="border-radius: 0px; height: 42.5vh;">
     				<div class="card-header" style="background:#FBEAEA;">
     					<h4 class="card-title text-dark text-center">Linker</h4>
     				</div>
     				<div class="card-body" style="background: #2F3C7E; color:#FBEAEA;">
     					<table class="table">
     						<tbody>
     							
     							<tr style="background: #2F3C7E; color:#FBEAEA; font-weight: bold;">
     								<td>Total Linkers</td>
     								<td><?php echo $total_linker_fetch['total_linker']; ?></td>
     							</tr>
     							<tr style="background: #2F3C7E; color:#FBEAEA; font-weight: bold;">
     								<td>Present Linkers</td>
     								<td><?php echo $total_linker_present_fetch['present_linker'];?></td>
     							</tr>
     						</tbody>
     					</table>
     				</div>
     			</div>
     		</div>
     		     		<div class="col-md-3">
     			<div class="card" style="border-radius: 0px; height: 42.5vh;">
     				<div class="card-header" style="background: #EC4D37;">
     					<h4 class="card-title text-dark text-center">Team Leaders</h4>
     				</div>
     				<div class="card-body" style="background:#1C1A1A; color:#EC4D37;">
     					<table class="table">
     						<tbody>
     							
     							<tr style="background:#1C1A1A; color:#EC4D37; font-weight: bold;">
     								<td>Total Team Leaders</td>
     								<td><?php echo $total_TL_fetch['total_team_leader'];?></td>
     							</tr>
     							<tr style="background:#1C1A1A; color:#EC4D37; font-weight: bold;">
     								<td>Present Team Leaders</td>
     								<td><?php echo $total_TL_present_fetch['present_TL'];?></td>
     							</tr>
     						</tbody>
     					</table>

     				</div>
     			</div>
     		</div>
     	</div>
          <div class="row">
               <div class="col-md-3">
                    <div class="card" style="border-radius: 0px; height: 42.5vh;">
                         <div class="card-header" style="background:#FAE596;">
                              <h4 class="card-title text-dark text-center">Documentor</h4>
                         </div>
                         <div class="card-body" style="background: #3FB0AC; color:#EF5455;">
                              <table class="table">
                                   <tbody>
                                        
                                        <tr style="background: #3FB0AC; color:#FAE596; font-weight: bold;">
                                             <td>Total Varifier</td>
                                             <td><?php echo $total_varifier_fetch['total_var']; ?></td>
                                        </tr>
                                        <tr style="background: #3FB0AC; color:#FAE596; font-weight: bold;">
                                             <td>Present Varifier</td>
                                             <td><?php echo $total_present_varifier_fetch['present_var'];?></td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
 </div>

