<?php
include('../config/database.php');
if(isset($_POST['callerwise']))
{
		//--------------------------------------
$sql_query = "SELECT  name,contact,email,target,month_target_cmplt,today_target,target_cmplt,today_target_left FROM add_documentor";
$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
$developer_records = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$developer_records[] = $rows;
}
	//--------------------------------------
$filename = "callerwise_lead".date('Y/m/d') . ".xls";
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