<?php
include("../config/database.php");
$tl_name=$_SESSION['sid'];
if(isset($_POST["download"])) {
	//--------------------------------------
$sql_query = "SELECT  name,address,zip_code,contact,email,adhar_number,pan_number,dob,qualification,civil_report FROM documentor_document where varifier_status='yes' AND DAY(when_added)=DAY(CURDATE())  AND tl_name='$tl_name'";
$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
$developer_records = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$developer_records[] = $rows;
}
	//--------------------------------------
$filename = "DSR_varified".date('Y/m/d') . ".xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");
$show_coloumn = false;
if(!empty($developer_records)) {
foreach($developer_records as $record) {
if(!$show_coloumn) {
// display field/column names in first row
echo implode("\t", array_keys($record)) . "\n";
$show_coloumn = true;
}
echo implode("\t", array_values($record)) . "\n";
}
}
exit;
}
?>