<?php
include('../config/database.php');
$jan=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=1 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_jan=mysqli_fetch_array($jan);
$fetch_1v=$fetch_jan['interested'];
//---------------------------------------------------------
$feb=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=2 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_feb=mysqli_fetch_array($feb);
$fetch_2v=$fetch_feb['interested'];
//------------------------------------------------------------
$march=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=3 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_march=mysqli_fetch_array($march);
$fetch_3v=$fetch_march['interested'];
//-----------------------------------------------------------
$april=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=4 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_april=mysqli_fetch_array($april);
$fetch_4v=$fetch_april['interested'];
//----------------------------------------------------------
$may=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=5 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_may=mysqli_fetch_array($may);
$fetch_5v=$fetch_may['interested'];
//-----------------------------------------------------------
$june=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=6 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_june=mysqli_fetch_array($june);
$fetch_6v=$fetch_june['interested'];
//-------------------------------------------------------------
$july=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=7 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_july=mysqli_fetch_array($july);
$fetch_7v=$fetch_july['interested'];
//------v---------------------------------------------------------
$aug=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=8 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_aug=mysqli_fetch_array($aug);
$fetch_8v=$fetch_aug['interested'];
//----------------------------------------------------------------
$sep=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=9 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_sep=mysqli_fetch_array($sep);
$fetch_9v=$fetch_sep['interested'];
//-----------------------------------------------------------------
$oct=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=10 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_oct=mysqli_fetch_array($oct);
$fetch_10v=$fetch_oct['interested'];
//-------------------------------------------------------------------
$nov=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=11 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_nov=mysqli_fetch_array($nov);
$fetch_11v=$fetch_nov['interested'];
//------------------------------------------------------------------------
$dec=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=12 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_dec=mysqli_fetch_array($dec);
$fetch_12v=$fetch_dec['interested'];
//---------------------------------------------------------------------------
$jan=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=13 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_jan=mysqli_fetch_array($jan);
$fetch_13v=$fetch_jan['interested'];
//---------------------------------------------------------
$feb=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=14 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_feb=mysqli_fetch_array($feb);
$fetch_14v=$fetch_feb['interested'];
//------------------------------------------------------------
$march=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=15 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_march=mysqli_fetch_array($march);
$fetch_15v=$fetch_march['interested'];
//-----------------------------------------------------------
$april=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=16 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_april=mysqli_fetch_array($april);
$fetch_16v=$fetch_april['interested'];
//----------------------------------------------------------
$may=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=17 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_may=mysqli_fetch_array($may);
$fetch_17v=$fetch_may['interested'];
//-----------------------------------------------------------
$june=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=18 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_june=mysqli_fetch_array($june);
$fetch_18v=$fetch_june['interested'];
//-------------------------------------------------------------
$july=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=19 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_july=mysqli_fetch_array($july);
$fetch_19v=$fetch_july['interested'];
//---------------------------------------------------------------
$aug=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=20 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_aug=mysqli_fetch_array($aug);
$fetch_20v=$fetch_aug['interested'];
//----------------------------------------------------------------
$sep=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=21 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_sep=mysqli_fetch_array($sep);
$fetch_21v=$fetch_sep['interested'];
//-----------------------------------------------------------------
$oct=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=22 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_oct=mysqli_fetch_array($oct);
$fetch_22v=$fetch_oct['interested'];
//-------------------------------------------------------------------
$nov=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=23 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_nov=mysqli_fetch_array($nov);
$fetch_23v=$fetch_nov['interested'];
//------------------------------------------------------------------------
$dec=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=24 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_dec=mysqli_fetch_array($dec);
$fetch_24v=$fetch_dec['interested'];
//-------------------------------------------------------------------------
$jan=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=25 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_jan=mysqli_fetch_array($jan);
$fetch_25v=$fetch_jan['interested'];
//---------------------------------------------------------
$feb=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=26 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_feb=mysqli_fetch_array($feb);
$fetch_26v=$fetch_feb['interested'];
//------------------------------------------------------------
$march=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=27 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_march=mysqli_fetch_array($march);
$fetch_27v=$fetch_march['interested'];
//-----------------------------------------------------------
$april=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=28 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_april=mysqli_fetch_array($april);
$fetch_28v=$fetch_april['interested'];
//----------------------------------------------------------
$may=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=29 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_may=mysqli_fetch_array($may);
$fetch_29v=$fetch_may['interested'];
//-----------------------------------------------------------
$june=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=30 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_june=mysqli_fetch_array($june);
$fetch_30v=$fetch_june['interested'];
//-------------------------------------------------------------
$july=mysqli_query($conn,"select count(varifier_status) AS interested from documentor_document where DAY(varified_dat)=31 AND varifier_status='yes' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_july=mysqli_fetch_array($july);
$fetch_31v=$fetch_july['interested'];
//---------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------
//---------------------------------------------NOT INTERESTED-----------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------
$jan_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=1 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_jan_ni=mysqli_fetch_array($jan_ni);
$fetch_1v_ni=$fetch_jan_ni['nit'];
//---------------------------------------------------------
$feb_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=2 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_feb_ni=mysqli_fetch_array($feb_ni);
$fetch_2v_ni=$fetch_feb_ni['nit'];
//------------------------------------------------------------
$march_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=3 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) ");
$fetch_march_ni=mysqli_fetch_array($march_ni);
$fetch_3v_ni=$fetch_march_ni['nit'];
//-----------------------------------------------------------
$april_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=4 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) ");
$fetch_april_ni=mysqli_fetch_array($april_ni);
$fetch_4v_ni=$fetch_april_ni['nit'];
//----------------------------------------------------------
$may_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=5 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) ");
$fetch_may_ni=mysqli_fetch_array($may_ni);
$fetch_5v_ni=$fetch_may_ni['nit'];
//-----------------------------------------------------------
$june_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=6 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) ");
$fetch_june_ni=mysqli_fetch_array($june_ni);
$fetch_6v_ni=$fetch_june_ni['nit'];
//-------------------------------------------------------------
$july_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=7 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) ");
$fetch_july_ni=mysqli_fetch_array($july_ni);
$fetch_7v_ni=$fetch_july_ni['nit'];
//---------------------------------------------------------------
$aug_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=8 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) ");
$fetch_aug_ni=mysqli_fetch_array($aug_ni);
$fetch_8v_ni=$fetch_aug_ni['nit'];
//----------------------------------------------------------------
$sep_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=9 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_sep_ni=mysqli_fetch_array($sep_ni);
$fetch_9v_ni=$fetch_sep_ni['nit'];
//-----------------------------------------------------------------
$oct_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=10 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_oct_ni=mysqli_fetch_array($oct_ni);
$fetch_10v_ni=$fetch_oct_ni['nit'];
//-------------------------------------------------------------------
$nov_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=11 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_nov_ni=mysqli_fetch_array($nov_ni);
$fetch_11v_ni=$fetch_nov_ni['nit'];
//------------------------------------------------------------------------
$dec_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=12 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_dec_ni=mysqli_fetch_array($dec_ni);
$fetch_12v_ni=$fetch_dec_ni['nit'];
//----------------------------------------------------------------------------
$jan_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=13 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_jan_ni=mysqli_fetch_array($jan_ni);
$fetch_13v_ni=$fetch_jan_ni['nit'];
//---------------------------------------------------------
$feb_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=14 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_feb_ni=mysqli_fetch_array($feb_ni);
$fetch_14v_ni=$fetch_feb_ni['nit'];
//------------------------------------------------------------
$march_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=15 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_march_ni=mysqli_fetch_array($march_ni);
$fetch_15v_ni=$fetch_march_ni['nit'];
//-----------------------------------------------------------
$april_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=16 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_april_ni=mysqli_fetch_array($april_ni);
$fetch_16v_ni=$fetch_april_ni['nit'];
//----------------------------------------------------------
$may_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=17 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_may_ni=mysqli_fetch_array($may_ni);
$fetch_17v_ni=$fetch_may_ni['nit'];
//-----------------------------------------------------------
$june_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=18 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_june_ni=mysqli_fetch_array($june_ni);
$fetch_18v_ni=$fetch_june_ni['nit'];
//-------------------------------------------------------------
$july_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=19 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_july_ni=mysqli_fetch_array($july_ni);
$fetch_19v_ni=$fetch_july_ni['nit'];
//---------------------------------------------------------------
$aug_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=20 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) ");
$fetch_aug_ni=mysqli_fetch_array($aug_ni);
$fetch_20v_ni=$fetch_aug_ni['nit'];
//----------------------------------------------------------------
$sep_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=21 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) ");
$fetch_sep_ni=mysqli_fetch_array($sep_ni);
$fetch_21v_ni=$fetch_sep_ni['nit'];
//-----------------------------------------------------------------
$oct_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=22 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_oct_ni=mysqli_fetch_array($oct_ni);
$fetch_22v_ni=$fetch_oct_ni['nit'];
//-------------------------------------------------------------------
$nov_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=23 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_nov_ni=mysqli_fetch_array($nov_ni);
$fetch_23v_ni=$fetch_nov_ni['nit'];
//------------------------------------------------------------------------
$dec_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=24 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE()) ");
$fetch_dec_ni=mysqli_fetch_array($dec_ni);
$fetch_24v_ni=$fetch_dec_ni['nit'];
//-------------------------------------------------------------------------------
$jan_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=25 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_jan_ni=mysqli_fetch_array($jan_ni);
$fetch_25v_ni=$fetch_jan_ni['nit'];
//---------------------------------------------------------
$feb_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=26 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_feb_ni=mysqli_fetch_array($feb_ni);
$fetch_26v_ni=$fetch_feb_ni['nit'];
//------------------------------------------------------------
$march_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=27 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_march_ni=mysqli_fetch_array($march_ni);
$fetch_27v_ni=$fetch_march_ni['nit'];
//-----------------------------------------------------------
$april_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=28 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_april_ni=mysqli_fetch_array($april_ni);
$fetch_28v_ni=$fetch_april_ni['nit'];
//----------------------------------------------------------
$may_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=29 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_may_ni=mysqli_fetch_array($may_ni);
$fetch_29v_ni=$fetch_may_ni['nit'];
//-----------------------------------------------------------
$june_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=30 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_june_ni=mysqli_fetch_array($june_ni);
$fetch_30v_ni=$fetch_june_ni['nit'];
//-------------------------------------------------------------
$july_ni=mysqli_query($conn,"select count(varifier_status) AS nit from documentor_document where DAY(varified_dat)=31 AND varifier_status='no' AND MONTH(varified_dat)=MONTH(CURDATE())");
$fetch_july_ni=mysqli_fetch_array($july_ni);
$fetch_31v_ni=$fetch_july_ni['nit'];
//---------------------------------------------------------------

?>