<?php
include('../config/database.php');
//session_start();
$main_tl_name=$_SESSION['sid'];
$jan=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=1 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_jan=mysqli_fetch_array($jan);
$fetch_1=$fetch_jan['interested'];
//---------------------------------------------------------
$feb=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=2 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_feb=mysqli_fetch_array($feb);
$fetch_2=$fetch_feb['interested'];
//------------------------------------------------------------
$march=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=3 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_march=mysqli_fetch_array($march);
$fetch_3=$fetch_march['interested'];
//-----------------------------------------------------------
$april=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=4 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_april=mysqli_fetch_array($april);
$fetch_4=$fetch_april['interested'];
//----------------------------------------------------------
$may=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=5 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_may=mysqli_fetch_array($may);
$fetch_5=$fetch_may['interested'];
//-----------------------------------------------------------
$june=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=6 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_june=mysqli_fetch_array($june);
$fetch_6=$fetch_june['interested'];
//-------------------------------------------------------------
$july=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=7 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_july=mysqli_fetch_array($july);
$fetch_7=$fetch_july['interested'];
//---------------------------------------------------------------
$aug=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=8 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_aug=mysqli_fetch_array($aug);
$fetch_8=$fetch_aug['interested'];
//----------------------------------------------------------------
$sep=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=9 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_sep=mysqli_fetch_array($sep);
$fetch_9=$fetch_sep['interested'];
//-----------------------------------------------------------------
$oct=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=10 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_oct=mysqli_fetch_array($oct);
$fetch_10=$fetch_oct['interested'];
//-------------------------------------------------------------------
$nov=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=11 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_nov=mysqli_fetch_array($nov);
$fetch_11=$fetch_nov['interested'];
//------------------------------------------------------------------------
$dec=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=12 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_dec=mysqli_fetch_array($dec);
$fetch_12=$fetch_dec['interested'];
//--------------------------------------------------------------------------
$jan=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=13 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_jan=mysqli_fetch_array($jan);
$fetch_13=$fetch_jan['interested'];
//---------------------------------------------------------
$feb=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=14 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_feb=mysqli_fetch_array($feb);
$fetch_14=$fetch_feb['interested'];
//------------------------------------------------------------
$march=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=15 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_march=mysqli_fetch_array($march);
$fetch_15=$fetch_march['interested'];
//-----------------------------------------------------------
$april=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=16 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_april=mysqli_fetch_array($april);
$fetch_16=$fetch_april['interested'];
//----------------------------------------------------------
$may=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=17 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE()) ");
$fetch_may=mysqli_fetch_array($may);
$fetch_17=$fetch_may['interested'];
//-----------------------------------------------------------
$june=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=18 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_june=mysqli_fetch_array($june);
$fetch_18=$fetch_june['interested'];
//-------------------------------------------------------------
$july=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=19 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_july=mysqli_fetch_array($july);
$fetch_19=$fetch_july['interested'];
//---------------------------------------------------------------
$aug=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=20 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_aug=mysqli_fetch_array($aug);
$fetch_20=$fetch_aug['interested'];
//----------------------------------------------------------------
$sep=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=21 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_sep=mysqli_fetch_array($sep);
$fetch_21=$fetch_sep['interested'];
//-----------------------------------------------------------------
$oct=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=22 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_oct=mysqli_fetch_array($oct);
$fetch_22=$fetch_oct['interested'];
//-------------------------------------------------------------------
$nov=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=23 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE()) ");
$fetch_nov=mysqli_fetch_array($nov);
$fetch_23=$fetch_nov['interested'];
//------------------------------------------------------------------------
$dec=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=24 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE()) ");
$fetch_dec=mysqli_fetch_array($dec);
$fetch_24=$fetch_dec['interested'];
//---------------------------------------------------------------------------
$jan=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=25 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE()) ");
$fetch_jan=mysqli_fetch_array($jan);
$fetch_25=$fetch_jan['interested'];
//---------------------------------------------------------
$feb=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=26 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE()) ");
$fetch_feb=mysqli_fetch_array($feb);
$fetch_26=$fetch_feb['interested'];
//------------------------------------------------------------
$march=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=27 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())  ");
$fetch_march=mysqli_fetch_array($march);
$fetch_27=$fetch_march['interested'];
//-----------------------------------------------------------
$april=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=28 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE()) ");
$fetch_april=mysqli_fetch_array($april);
$fetch_28=$fetch_april['interested'];
//----------------------------------------------------------
$may=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=29 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_may=mysqli_fetch_array($may);
$fetch_29=$fetch_may['interested'];
//-----------------------------------------------------------
$june=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=30 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE()) ");
$fetch_june=mysqli_fetch_array($june);
$fetch_30=$fetch_june['interested'];
//-------------------------------------------------------------
$july=mysqli_query($conn,"select count(comment) AS interested from documentor_document where DAY(balance_dat)=31 AND comment='INST' AND MONTH(balance_dat)=MONTH(CURDATE()) ");
$fetch_july=mysqli_fetch_array($july);
$fetch_31=$fetch_july['interested'];
//---------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------
//-----------------------------------------FOLLOW UP----------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------
$jan_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=1 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE()) ");
$fetch_jan_fl=mysqli_fetch_array($jan_fl);
$fetch_1_fl=$fetch_jan_fl['follow'];
//---------------------------------------------------------
$feb_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=2 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE()) ");
$fetch_feb_fl=mysqli_fetch_array($feb_fl);
$fetch_2_fl=$fetch_feb_fl['follow'];
//------------------------------------------------------------
$march_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=3 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_march_fl=mysqli_fetch_array($march_fl);
$fetch_3_fl=$fetch_march_fl['follow'];
//-----------------------------------------------------------
$april_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=4 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE()) ");
$fetch_april_fl=mysqli_fetch_array($april_fl);
$fetch_4_fl=$fetch_april_fl['follow'];
//----------------------------------------------------------
$may_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=5 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_may_fl=mysqli_fetch_array($may_fl);
$fetch_5_fl=$fetch_may_fl['follow'];
//-----------------------------------------------------------
$june_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=6 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_june_fl=mysqli_fetch_array($june_fl);
$fetch_6_fl=$fetch_june_fl['follow'];
//-------------------------------------------------------------
$july_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=7 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_july_fl=mysqli_fetch_array($july_fl);
$fetch_7_fl=$fetch_july_fl['follow'];
//---------------------------------------------------------------
$aug_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=8 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_aug_fl=mysqli_fetch_array($aug_fl);
$fetch_8_fl=$fetch_aug_fl['follow'];
//----------------------------------------------------------------
$sep_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=9 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_sep_fl=mysqli_fetch_array($sep_fl);
$fetch_9_fl=$fetch_sep_fl['follow'];
//-----------------------------------------------------------------
$oct_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=10 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE()) ");
$fetch_oct_fl=mysqli_fetch_array($oct_fl);
$fetch_10_fl=$fetch_oct_fl['follow'];
//-------------------------------------------------------------------
$nov_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=11 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_nov_fl=mysqli_fetch_array($nov_fl);
$fetch_11_fl=$fetch_nov_fl['follow'];
//------------------------------------------------------------------------
$dec_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=12 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_dec_fl=mysqli_fetch_array($dec_fl);
$fetch_12_fl=$fetch_dec_fl['follow'];
//---------------------------------------------------------------------------
$jan_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=13 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE()) ");
$fetch_jan_fl=mysqli_fetch_array($jan_fl);
$fetch_13_fl=$fetch_jan_fl['follow'];
//---------------------------------------------------------
$feb_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=14 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_feb_fl=mysqli_fetch_array($feb_fl);
$fetch_14_fl=$fetch_feb_fl['follow'];
//------------------------------------------------------------
$march_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=15 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_march_fl=mysqli_fetch_array($march_fl);
$fetch_15_fl=$fetch_march_fl['follow'];
//-----------------------------------------------------------
$april_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=16 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_april_fl=mysqli_fetch_array($april_fl);
$fetch_16_fl=$fetch_april_fl['follow'];
//----------------------------------------------------------
$may_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=17 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_may_fl=mysqli_fetch_array($may_fl);
$fetch_17_fl=$fetch_may_fl['follow'];
//-----------------------------------------------------------
$june_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=18 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_june_fl=mysqli_fetch_array($june_fl);
$fetch_18_fl=$fetch_june_fl['follow'];
//-------------------------------------------------------------
$july_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=19 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_july_fl=mysqli_fetch_array($july_fl);
$fetch_19_fl=$fetch_july_fl['follow'];
//---------------------------------------------------------------
$aug_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=20 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_aug_fl=mysqli_fetch_array($aug_fl);
$fetch_20_fl=$fetch_aug_fl['follow'];
//----------------------------------------------------------------
$sep_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=21 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_sep_fl=mysqli_fetch_array($sep_fl);
$fetch_21_fl=$fetch_sep_fl['follow'];
//-----------------------------------------------------------------
$oct_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=22 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_oct_fl=mysqli_fetch_array($oct_fl);
$fetch_22_fl=$fetch_oct_fl['follow'];
//-------------------------------------------------------------------
$nov_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=23 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_nov_fl=mysqli_fetch_array($nov_fl);
$fetch_23_fl=$fetch_nov_fl['follow'];
//------------------------------------------------------------------------
$dec_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=24 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_dec_fl=mysqli_fetch_array($dec_fl);
$fetch_24_fl=$fetch_dec_fl['follow'];
//--------------------------------------------------------------------------
$jan_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=25 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_jan_fl=mysqli_fetch_array($jan_fl);
$fetch_25_fl=$fetch_jan_fl['follow'];
//---------------------------------------------------------
$feb_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=26 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_feb_fl=mysqli_fetch_array($feb_fl);
$fetch_26_fl=$fetch_feb_fl['follow'];
//------------------------------------------------------------
$march_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=27 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_march_fl=mysqli_fetch_array($march_fl);
$fetch_27_fl=$fetch_march_fl['follow'];
//-----------------------------------------------------------
$april_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=28 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_april_fl=mysqli_fetch_array($april_fl);
$fetch_28_fl=$fetch_april_fl['follow'];
//----------------------------------------------------------
$may_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=29 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_may_fl=mysqli_fetch_array($may_fl);
$fetch_29_fl=$fetch_may_fl['follow'];
//-----------------------------------------------------------
$june_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=30 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_june_fl=mysqli_fetch_array($june_fl);
$fetch_30_fl=$fetch_june_fl['follow'];
//-------------------------------------------------------------
$july_fl=mysqli_query($conn,"select count(comment) AS follow from documentor_document where DAY(balance_dat)=31 AND comment='FLW' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_july_fl=mysqli_fetch_array($july_fl);
$fetch_31_fl=$fetch_july_fl['follow'];
//----------------------------------------------------------------------------------------------------------------------
//---------------------------------------------NOT INTERESTED-----------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------
$jan_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=1 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_jan_ni=mysqli_fetch_array($jan_ni);
$fetch_1_ni=$fetch_jan_ni['nit'];
//---------------------------------------------------------
$feb_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=2 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE()) ");
$fetch_feb_ni=mysqli_fetch_array($feb_ni);
$fetch_2_ni=$fetch_feb_ni['nit'];
//------------------------------------------------------------
$march_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=3 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_march_ni=mysqli_fetch_array($march_ni);
$fetch_3_ni=$fetch_march_ni['nit'];
//-----------------------------------------------------------
$april_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=4 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_april_ni=mysqli_fetch_array($april_ni);
$fetch_4_ni=$fetch_april_ni['nit'];
//----------------------------------------------------------
$may_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=5 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_may_ni=mysqli_fetch_array($may_ni);
$fetch_5_ni=$fetch_may_ni['nit'];
//-----------------------------------------------------------
$june_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=6 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_june_ni=mysqli_fetch_array($june_ni);
$fetch_6_ni=$fetch_june_ni['nit'];
//-------------------------------------------------------------
$july_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=7 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_july_ni=mysqli_fetch_array($july_ni);
$fetch_7_ni=$fetch_july_ni['nit'];
//---------------------------------------------------------------
$aug_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=8 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_aug_ni=mysqli_fetch_array($aug_ni);
$fetch_8_ni=$fetch_aug_ni['nit'];
//----------------------------------------------------------------
$sep_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=9 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_sep_ni=mysqli_fetch_array($sep_ni);
$fetch_9_ni=$fetch_sep_ni['nit'];
//-----------------------------------------------------------------
$oct_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=10 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_oct_ni=mysqli_fetch_array($oct_ni);
$fetch_10_ni=$fetch_oct_ni['nit'];
//-------------------------------------------------------------------
$nov_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=11 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_nov_ni=mysqli_fetch_array($nov_ni);
$fetch_11_ni=$fetch_nov_ni['nit'];
//------------------------------------------------------------------------
$dec_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=12 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_dec_ni=mysqli_fetch_array($dec_ni);
$fetch_12_ni=$fetch_dec_ni['nit'];
$jan_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=13 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE()) ");
$fetch_jan_ni=mysqli_fetch_array($jan_ni);
$fetch_13_ni=$fetch_jan_ni['nit'];
//---------------------------------------------------------
$feb_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=14 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_feb_ni=mysqli_fetch_array($feb_ni);
$fetch_14_ni=$fetch_feb_ni['nit'];
//------------------------------------------------------------
$march_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=15 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_march_ni=mysqli_fetch_array($march_ni);
$fetch_15_ni=$fetch_march_ni['nit'];
//-----------------------------------------------------------
$april_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=16 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_april_ni=mysqli_fetch_array($april_ni);
$fetch_16_ni=$fetch_april_ni['nit'];
//----------------------------------------------------------
$may_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=17 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_may_ni=mysqli_fetch_array($may_ni);
$fetch_17_ni=$fetch_may_ni['nit'];
//-----------------------------------------------------------
$june_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=18 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_june_ni=mysqli_fetch_array($june_ni);
$fetch_18_ni=$fetch_june_ni['nit'];
//-------------------------------------------------------------
$july_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=19 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_july_ni=mysqli_fetch_array($july_ni);
$fetch_19_ni=$fetch_july_ni['nit'];
//---------------------------------------------------------------
$aug_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=20 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_aug_ni=mysqli_fetch_array($aug_ni);
$fetch_20_ni=$fetch_aug_ni['nit'];
//----------------------------------------------------------------
$sep_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=21 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_sep_ni=mysqli_fetch_array($sep_ni);
$fetch_21_ni=$fetch_sep_ni['nit'];
//-----------------------------------------------------------------
$oct_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=22 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_oct_ni=mysqli_fetch_array($oct_ni);
$fetch_22_ni=$fetch_oct_ni['nit'];
//-------------------------------------------------------------------
$nov_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=23 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE()) ");
$fetch_nov_ni=mysqli_fetch_array($nov_ni);
$fetch_23_ni=$fetch_nov_ni['nit'];
//------------------------------------------------------------------------
$dec_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=24 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_dec_ni=mysqli_fetch_array($dec_ni);
$fetch_24_ni=$fetch_dec_ni['nit'];
$jan_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=25 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_jan_ni=mysqli_fetch_array($jan_ni);
$fetch_25_ni=$fetch_jan_ni['nit'];
//---------------------------------------------------------
$feb_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=26 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_feb_ni=mysqli_fetch_array($feb_ni);
$fetch_26_ni=$fetch_feb_ni['nit'];
//------------------------------------------------------------
$march_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=27 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_march_ni=mysqli_fetch_array($march_ni);
$fetch_27_ni=$fetch_march_ni['nit'];
//-----------------------------------------------------------
$april_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=28 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_april_ni=mysqli_fetch_array($april_ni);
$fetch_28_ni=$fetch_april_ni['nit'];
//----------------------------------------------------------
$may_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=29 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_may_ni=mysqli_fetch_array($may_ni);
$fetch_29_ni=$fetch_may_ni['nit'];
//-----------------------------------------------------------
$june_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=30 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_june_ni=mysqli_fetch_array($june_ni);
$fetch_30_ni=$fetch_june_ni['nit'];
//-------------------------------------------------------------
$july_ni=mysqli_query($conn,"select count(comment) AS nit from documentor_document where DAY(balance_dat)=31 AND comment='NINST' AND MONTH(balance_dat)=MONTH(CURDATE())");
$fetch_july_ni=mysqli_fetch_array($july_ni);
$fetch_31_ni=$fetch_july_ni['nit'];

?>