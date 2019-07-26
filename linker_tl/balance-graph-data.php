<?php
include('../config/database.php');
$main_tl_name=$_SESSION['sid'];
$jan=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=1 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_jan=mysqli_fetch_array($jan);
$fetch_1=$fetch_jan['interested'];
//---------------------------------------------------------
$feb=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=2 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_feb=mysqli_fetch_array($feb);
$fetch_2=$fetch_feb['interested'];
//------------------------------------------------------------
$march=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=3 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_march=mysqli_fetch_array($march);
$fetch_3=$fetch_march['interested'];
//-----------------------------------------------------------
$april=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=4 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_april=mysqli_fetch_array($april);
$fetch_4=$fetch_april['interested'];
//----------------------------------------------------------
$may=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=5 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_may=mysqli_fetch_array($may);
$fetch_5=$fetch_may['interested'];
//-----------------------------------------------------------
$june=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=6 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_june=mysqli_fetch_array($june);
$fetch_6=$fetch_june['interested'];
//-------------------------------------------------------------
$july=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=7 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_july=mysqli_fetch_array($july);
$fetch_7=$fetch_july['interested'];
//---------------------------------------------------------------
$aug=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=8 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_aug=mysqli_fetch_array($aug);
$fetch_8=$fetch_aug['interested'];
//----------------------------------------------------------------
$sep=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=9 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_sep=mysqli_fetch_array($sep);
$fetch_9=$fetch_sep['interested'];
//-----------------------------------------------------------------
$oct=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=10 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_oct=mysqli_fetch_array($oct);
$fetch_10=$fetch_oct['interested'];
//-------------------------------------------------------------------
$nov=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=11 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_nov=mysqli_fetch_array($nov);
$fetch_11=$fetch_nov['interested'];
//------------------------------------------------------------------------
$dec=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=12 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_dec=mysqli_fetch_array($dec);
$fetch_12=$fetch_dec['interested'];
//---------------------------------------------------------------------------
$jan=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=13 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_jan=mysqli_fetch_array($jan);
$fetch_13=$fetch_jan['interested'];
//---------------------------------------------------------
$feb=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=14 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_feb=mysqli_fetch_array($feb);
$fetch_14=$fetch_feb['interested'];
//------------------------------------------------------------
$march=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=15 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_march=mysqli_fetch_array($march);
$fetch_15=$fetch_march['interested'];
//-----------------------------------------------------------
$april=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=16 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_april=mysqli_fetch_array($april);
$fetch_16=$fetch_april['interested'];
//----------------------------------------------------------
$may=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=17 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_may=mysqli_fetch_array($may);
$fetch_17=$fetch_may['interested'];
//-----------------------------------------------------------
$june=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=18 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_june=mysqli_fetch_array($june);
$fetch_18=$fetch_june['interested'];
//-------------------------------------------------------------
$july=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=19 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_july=mysqli_fetch_array($july);
$fetch_19=$fetch_july['interested'];
//---------------------------------------------------------------
$aug=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=20 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_aug=mysqli_fetch_array($aug);
$fetch_20=$fetch_aug['interested'];
//----------------------------------------------------------------
$sep=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=21 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_sep=mysqli_fetch_array($sep);
$fetch_21=$fetch_sep['interested'];
//-----------------------------------------------------------------
$oct=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=22 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_oct=mysqli_fetch_array($oct);
$fetch_22=$fetch_oct['interested'];
//-------------------------------------------------------------------
$nov=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=23 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_nov=mysqli_fetch_array($nov);
$fetch_23=$fetch_nov['interested'];
//------------------------------------------------------------------------
$dec=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=24 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_dec=mysqli_fetch_array($dec);
$fetch_24=$fetch_dec['interested'];
//-------------------------------------------------------------------------
$jan=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=25 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_jan=mysqli_fetch_array($jan);
$fetch_25=$fetch_jan['interested'];
//---------------------------------------------------------
$feb=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=26 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_feb=mysqli_fetch_array($feb);
$fetch_26=$fetch_feb['interested'];
//------------------------------------------------------------
$march=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=27 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_march=mysqli_fetch_array($march);
$fetch_27=$fetch_march['interested'];
//-----------------------------------------------------------
$april=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=28 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_april=mysqli_fetch_array($april);
$fetch_28=$fetch_april['interested'];
//----------------------------------------------------------
$may=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=29 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_may=mysqli_fetch_array($may);
$fetch_29=$fetch_may['interested'];
//-----------------------------------------------------------
$june=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=30 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_june=mysqli_fetch_array($june);
$fetch_30=$fetch_june['interested'];
//-------------------------------------------------------------
$july=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=31 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_july=mysqli_fetch_array($july);
$fetch_31=$fetch_july['interested'];
//---------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------
//---------------------------------------------NOT INTERESTED-----------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------
$jan_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=1 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_jan_ni=mysqli_fetch_array($jan_ni);
$fetch_1_ni=$fetch_jan_ni['nit'];
//---------------------------------------------------------
$feb_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=2 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_feb_ni=mysqli_fetch_array($feb_ni);
$fetch_2_ni=$fetch_feb_ni['nit'];
//------------------------------------------------------------
$march_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=3 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_march_ni=mysqli_fetch_array($march_ni);
$fetch_3_ni=$fetch_march_ni['nit'];
//-----------------------------------------------------------
$april_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=4 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_april_ni=mysqli_fetch_array($april_ni);
$fetch_4_ni=$fetch_april_ni['nit'];
//----------------------------------------------------------
$may_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=5 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_may_ni=mysqli_fetch_array($may_ni);
$fetch_5_ni=$fetch_may_ni['nit'];
//-----------------------------------------------------------
$june_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=6 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_june_ni=mysqli_fetch_array($june_ni);
$fetch_6_ni=$fetch_june_ni['nit'];
//-------------------------------------------------------------
$july_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=7 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_july_ni=mysqli_fetch_array($july_ni);
$fetch_7_ni=$fetch_july_ni['nit'];
//---------------------------------------------------------------
$aug_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=8 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_aug_ni=mysqli_fetch_array($aug_ni);
$fetch_8_ni=$fetch_aug_ni['nit'];
//----------------------------------------------------------------
$sep_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=9 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_sep_ni=mysqli_fetch_array($sep_ni);
$fetch_9_ni=$fetch_sep_ni['nit'];
//-----------------------------------------------------------------
$oct_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=10 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_oct_ni=mysqli_fetch_array($oct_ni);
$fetch_10_ni=$fetch_oct_ni['nit'];
//-------------------------------------------------------------------
$nov_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=11 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_nov_ni=mysqli_fetch_array($nov_ni);
$fetch_11_ni=$fetch_nov_ni['nit'];
//------------------------------------------------------------------------
$dec_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=12 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_dec_ni=mysqli_fetch_array($dec_ni);
$fetch_12_ni=$fetch_dec_ni['nit'];
//----------------------------------------------------------------------------
$jan_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=13 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_jan_ni=mysqli_fetch_array($jan_ni);
$fetch_13_ni=$fetch_jan_ni['nit'];
//---------------------------------------------------------
$feb_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=14 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_feb_ni=mysqli_fetch_array($feb_ni);
$fetch_14_ni=$fetch_feb_ni['nit'];
//------------------------------------------------------------
$march_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=15 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_march_ni=mysqli_fetch_array($march_ni);
$fetch_15_ni=$fetch_march_ni['nit'];
//-----------------------------------------------------------
$april_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=16 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_april_ni=mysqli_fetch_array($april_ni);
$fetch_16_ni=$fetch_april_ni['nit'];
//----------------------------------------------------------
$may_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=17 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_may_ni=mysqli_fetch_array($may_ni);
$fetch_17_ni=$fetch_may_ni['nit'];
//-----------------------------------------------------------
$june_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=18 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_june_ni=mysqli_fetch_array($june_ni);
$fetch_18_ni=$fetch_june_ni['nit'];
//-------------------------------------------------------------
$july_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=19 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_july_ni=mysqli_fetch_array($july_ni);
$fetch_19_ni=$fetch_july_ni['nit'];
//---------------------------------------------------------------
$aug_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=20 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_aug_ni=mysqli_fetch_array($aug_ni);
$fetch_20_ni=$fetch_aug_ni['nit'];
//----------------------------------------------------------------
$sep_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=21 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_sep_ni=mysqli_fetch_array($sep_ni);
$fetch_21_ni=$fetch_sep_ni['nit'];
//-----------------------------------------------------------------
$oct_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=22 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_oct_ni=mysqli_fetch_array($oct_ni);
$fetch_22_ni=$fetch_oct_ni['nit'];
//-------------------------------------------------------------------
$nov_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=23 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_nov_ni=mysqli_fetch_array($nov_ni);
$fetch_23_ni=$fetch_nov_ni['nit'];
//------------------------------------------------------------------------
$dec_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=24 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_dec_ni=mysqli_fetch_array($dec_ni);
$fetch_24_ni=$fetch_dec_ni['nit'];
//-------------------------------------------------------------------------------
$jan_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=25 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_jan_ni=mysqli_fetch_array($jan_ni);
$fetch_25_ni=$fetch_jan_ni['nit'];
//---------------------------------------------------------
$feb_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=26 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_feb_ni=mysqli_fetch_array($feb_ni);
$fetch_26_ni=$fetch_feb_ni['nit'];
//------------------------------------------------------------
$march_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=27 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_march_ni=mysqli_fetch_array($march_ni);
$fetch_27_ni=$fetch_march_ni['nit'];
//-----------------------------------------------------------
$april_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=28 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_april_ni=mysqli_fetch_array($april_ni);
$fetch_28_ni=$fetch_april_ni['nit'];
//----------------------------------------------------------
$may_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=29 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_may_ni=mysqli_fetch_array($may_ni);
$fetch_29_ni=$fetch_may_ni['nit'];
//-----------------------------------------------------------
$june_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=30 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_june_ni=mysqli_fetch_array($june_ni);
$fetch_30_ni=$fetch_june_ni['nit'];
//-------------------------------------------------------------
$july_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=31 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_july_ni=mysqli_fetch_array($july_ni);
$fetch_31_ni=$fetch_july_ni['nit'];
//---------------------------------------------------------------

?>