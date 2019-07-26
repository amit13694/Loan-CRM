<?php
include('../config/database.php');
// $main_tl_name=$_SESSION['sid'];
$jan=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where MONTH(varified_dat)=1 AND varifier_status='yes' AND YEAR(varified_dat)=YEAR(CURDATE())");
$fetch_jan=mysqli_fetch_array($jan);
$fetch_jan1=$fetch_jan['interested'];
//---------------------------------------------------------
$feb=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where MONTH(varified_dat)=2 AND varifier_status='yes' AND YEAR(varified_dat)=YEAR(CURDATE()) ");
$fetch_feb=mysqli_fetch_array($feb);
$fetch_feb1=$fetch_feb['interested'];
//------------------------------------------------------------
$march=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where MONTH(varified_dat)=3 AND varifier_status='yes' AND YEAR(varified_dat)=YEAR(CURDATE()) ");
$fetch_march=mysqli_fetch_array($march);
$fetch_march1=$fetch_march['interested'];
//-----------------------------------------------------------
$april=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where MONTH(varified_dat)=4 AND varifier_status='yes' AND YEAR(varified_dat)=YEAR(CURDATE()) ");
$fetch_april=mysqli_fetch_array($april);
$fetch_april1=$fetch_april['interested'];
//----------------------------------------------------------
$may=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where MONTH(varified_dat)=5 AND varifier_status='yes' AND YEAR(varified_dat)=YEAR(CURDATE())");
$fetch_may=mysqli_fetch_array($may);
$fetch_may1=$fetch_may['interested'];
//-----------------------------------------------------------
$june=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where MONTH(varified_dat)=6 AND varifier_status='yes' AND YEAR(varified_dat)=YEAR(CURDATE())");
$fetch_june=mysqli_fetch_array($june);
$fetch_june1=$fetch_june['interested'];
//-------------------------------------------------------------
$july=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where MONTH(varified_dat)=7 AND varifier_status='yes' AND YEAR(varified_dat)=YEAR(CURDATE()) ");
$fetch_july=mysqli_fetch_array($july);
$fetch_july1=$fetch_july['interested'];
//---------------------------------------------------------------
$aug=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where MONTH(varified_dat)=8 AND varifier_status='yes' AND YEAR(varified_dat)=YEAR(CURDATE()) ");
$fetch_aug=mysqli_fetch_array($aug);
$fetch_aug1=$fetch_aug['interested'];
//----------------------------------------------------------------
$sep=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where MONTH(varified_dat)=9 AND varifier_status='yes' AND YEAR(varified_dat)=YEAR(CURDATE()) ");
$fetch_sep=mysqli_fetch_array($sep);
$fetch_sep1=$fetch_sep['interested'];
//-----------------------------------------------------------------
$oct=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where MONTH(varified_dat)=10 AND varifier_status='yes' AND YEAR(varified_dat)=YEAR(CURDATE())");
$fetch_oct=mysqli_fetch_array($oct);
$fetch_oct1=$fetch_oct['interested'];
//-------------------------------------------------------------------
$nov=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where MONTH(varified_dat)=11 AND varifier_status='yes' AND YEAR(varified_dat)=YEAR(CURDATE()) ");
$fetch_nov=mysqli_fetch_array($nov);
$fetch_nov1=$fetch_nov['interested'];
//------------------------------------------------------------------------
$dec=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where MONTH(varified_dat)=12 AND varifier_status='yes' AND YEAR(varified_dat)=YEAR(CURDATE())");
$fetch_dec=mysqli_fetch_array($dec);
$fetch_dec1=$fetch_dec['interested'];


//----------------------------------------------------------------------------------------------------------------------
//---------------------------------------------NOT INTERESTED-----------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------
$jan_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where MONTH(varified_dat)=1 AND varifier_status='no' AND YEAR(varified_dat)=YEAR(CURDATE()) ");
$fetch_jan_ni=mysqli_fetch_array($jan_ni);
$fetch_jan1_ni=$fetch_jan_ni['nit'];
//---------------------------------------------------------
$feb_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where MONTH(varified_dat)=2 AND varifier_status='no' AND YEAR(varified_dat)=YEAR(CURDATE())");
$fetch_feb_ni=mysqli_fetch_array($feb_ni);
$fetch_feb1_ni=$fetch_feb_ni['nit'];
//------------------------------------------------------------
$march_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where MONTH(varified_dat)=3 AND varifier_status='no' AND YEAR(varified_dat)=YEAR(CURDATE()) ");
$fetch_march_ni=mysqli_fetch_array($march_ni);
$fetch_march1_ni=$fetch_march_ni['nit'];
//-----------------------------------------------------------
$april_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where MONTH(varified_dat)=4 AND varifier_status='no' AND YEAR(varified_dat)=YEAR(CURDATE())");
$fetch_april_ni=mysqli_fetch_array($april_ni);
$fetch_april1_ni=$fetch_april_ni['nit'];
//----------------------------------------------------------
$may_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where MONTH(varified_dat)=5 AND varifier_status='no' AND YEAR(varified_dat)=YEAR(CURDATE()) ");
$fetch_may_ni=mysqli_fetch_array($may_ni);
$fetch_may1_ni=$fetch_may_ni['nit'];
//-----------------------------------------------------------
$june_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where MONTH(varified_dat)=6 AND varifier_status='no' AND YEAR(varified_dat)=YEAR(CURDATE())");
$fetch_june_ni=mysqli_fetch_array($june_ni);
$fetch_june1_ni=$fetch_june_ni['nit'];
//-------------------------------------------------------------
$july_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where MONTH(varified_dat)=7 AND varifier_status='no' AND YEAR(varified_dat)=YEAR(CURDATE())");
$fetch_july_ni=mysqli_fetch_array($july_ni);
$fetch_july1_ni=$fetch_july_ni['nit'];
//---------------------------------------------------------------
$aug_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where MONTH(varified_dat)=8 AND varifier_status='no' AND YEAR(varified_dat)=YEAR(CURDATE())");
$fetch_aug_ni=mysqli_fetch_array($aug_ni);
$fetch_aug1_ni=$fetch_aug_ni['nit'];
//----------------------------------------------------------------
$sep_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where MONTH(varified_dat)=9 AND varifier_status='no' AND YEAR(varified_dat)=YEAR(CURDATE())");
$fetch_sep_ni=mysqli_fetch_array($sep_ni);
$fetch_sep1_ni=$fetch_sep_ni['nit'];
//-----------------------------------------------------------------
$oct_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where MONTH(varified_dat)=10 AND varifier_status='no' AND YEAR(varified_dat)=YEAR(CURDATE())");
$fetch_oct_ni=mysqli_fetch_array($oct_ni);
$fetch_oct1_ni=$fetch_oct_ni['nit'];
//-------------------------------------------------------------------
$nov_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where MONTH(varified_dat)=11 AND varifier_status='no' AND YEAR(varified_dat)=YEAR(CURDATE())");
$fetch_nov_ni=mysqli_fetch_array($nov_ni);
$fetch_nov1_ni=$fetch_nov_ni['nit'];
//------------------------------------------------------------------------
$dec_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where MONTH(varified_dat)=12 AND varifier_status='no' AND YEAR(varified_dat)=YEAR(CURDATE()) ");
$fetch_dec_ni=mysqli_fetch_array($dec_ni);
$fetch_dec1_ni=$fetch_dec_ni['nit'];
?>