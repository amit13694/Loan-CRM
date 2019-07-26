<?php
include('../config/database.php');
$main_tl_name=$_SESSION['sid'];
$jan_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=1 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_jan_li=mysqli_fetch_array($jan_li);
$fetch_1_li=$fetch_jan_li['interested'];
//---------------------------------------------------------
$feb_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=2 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_feb_li=mysqli_fetch_array($feb_li);
$fetch_2_li=$fetch_feb_li['interested'];
//------------------------------------------------------------
$march_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=3 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_march_li=mysqli_fetch_array($march_li);
$fetch_3_li=$fetch_march_li['interested'];
//-----------------------------------------------------------
$april_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=4 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_april_li=mysqli_fetch_array($april_li);
$fetch_4_li=$fetch_april_li['interested'];
//----------------------------------------------------------
$may_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=5 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_may_li=mysqli_fetch_array($may_li);
$fetch_5_li=$fetch_may_li['interested'];
//-----------------------------------------------------------
$june_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=6 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_june_li=mysqli_fetch_array($june_li);
$fetch_6_li=$fetch_june_li['interested'];
//-------------------------------------------------------------
$july_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=7 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_july_li=mysqli_fetch_array($july_li);
$fetch_7_li=$fetch_july_li['interested'];
//---------------------------------------------------------------
$aug_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=8 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_aug_li=mysqli_fetch_array($aug_li);
$fetch_8_li=$fetch_aug_li['interested'];
//----------------------------------------------------------------
$sep_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=9 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_sep_li=mysqli_fetch_array($sep_li);
$fetch_9_li=$fetch_sep_li['interested'];
//-----------------------------------------------------------------
$oct_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=10 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_oct_li=mysqli_fetch_array($oct_li);
$fetch_10_li=$fetch_oct_li['interested'];
//-------------------------------------------------------------------
$nov_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=11 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_nov_li=mysqli_fetch_array($nov_li);
$fetch_11_li=$fetch_nov_li['interested'];
//------------------------------------------------------------------------
$dec_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=12 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_dec_li=mysqli_fetch_array($dec_li);
$fetch_12_li=$fetch_dec_li['interested'];
//-------------------------------------------------------------------------
$jan_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=13 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_jan_li=mysqli_fetch_array($jan_li);
$fetch_13_li=$fetch_jan_li['interested'];
//---------------------------------------------------------
$feb_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=14 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_feb_li=mysqli_fetch_array($feb_li);
$fetch_14_li=$fetch_feb_li['interested'];
//------------------------------------------------------------
$march_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=15 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_march_li=mysqli_fetch_array($march_li);
$fetch_15_li=$fetch_march_li['interested'];
//-----------------------------------------------------------
$april_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=16 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_april_li=mysqli_fetch_array($april_li);
$fetch_16_li=$fetch_april_li['interested'];
//----------------------------------------------------------
$may_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=17 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_may_li=mysqli_fetch_array($may_li);
$fetch_17_li=$fetch_may_li['interested'];
//-----------------------------------------------------------
$june_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=18 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_june_li=mysqli_fetch_array($june_li);
$fetch_18_li=$fetch_june_li['interested'];
//-------------------------------------------------------------
$july_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=19 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_july_li=mysqli_fetch_array($july_li);
$fetch_19_li=$fetch_july_li['interested'];
//---------------------------------------------------------------
$aug_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=20 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_aug_li=mysqli_fetch_array($aug_li);
$fetch_20_li=$fetch_aug_li['interested'];
//----------------------------------------------------------------
$sep_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=21 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_sep_li=mysqli_fetch_array($sep_li);
$fetch_21_li=$fetch_sep_li['interested'];
//-----------------------------------------------------------------
$oct_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=22 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_oct_li=mysqli_fetch_array($oct_li);
$fetch_22_li=$fetch_oct_li['interested'];
//-------------------------------------------------------------------
$nov_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=23 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_nov_li=mysqli_fetch_array($nov_li);
$fetch_23_li=$fetch_nov_li['interested'];
//------------------------------------------------------------------------
$dec_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=24 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_dec_li=mysqli_fetch_array($dec_li);
$fetch_24_li=$fetch_dec_li['interested'];
//-------------------------------------------------------------------------
$jan_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=25 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_jan_li=mysqli_fetch_array($jan_li);
$fetch_25_li=$fetch_jan_li['interested'];
//---------------------------------------------------------
$feb_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=26 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_feb_li=mysqli_fetch_array($feb_li);
$fetch_26_li=$fetch_feb_li['interested'];
//------------------------------------------------------------
$march_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=27 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_march_li=mysqli_fetch_array($march_li);
$fetch_27_li=$fetch_march_li['interested'];
//-----------------------------------------------------------
$april_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=28 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_april_li=mysqli_fetch_array($april_li);
$fetch_28_li=$fetch_april_li['interested'];
//----------------------------------------------------------
$may_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=29 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_may_li=mysqli_fetch_array($may_li);
$fetch_29_li=$fetch_may_li['interested'];
//-----------------------------------------------------------
$june_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=30 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_june_li=mysqli_fetch_array($june_li);
$fetch_30_li=$fetch_june_li['interested'];
//-------------------------------------------------------------
$july_li=mysqli_query($conn,"select count(linkup_cnfrm) AS interested from documentor_document where DAY(linkup_dat)=31 AND linkup_cnfrm='cnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_july_li=mysqli_fetch_array($july_li);
$fetch_31_li=$fetch_july_li['interested'];
//---------------------------------------------------------------

//------------------------------------------------------------------------------------------------------------------------
//-----------------------------------------FOLLOW UP----------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------
$jan_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=1 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_jan_fl_li=mysqli_fetch_array($jan_fl_li);
$fetch_1_fl_li=$fetch_jan_fl_li['follow'];
//---------------------------------------------------------
$feb_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=2 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_feb_fl_li=mysqli_fetch_array($feb_fl_li);
$fetch_2_fl_li=$fetch_feb_fl_li['follow'];
//------------------------------------------------------------
$march_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=3 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_march_fl_li=mysqli_fetch_array($march_fl_li);
$fetch_3_fl_li=$fetch_march_fl_li['follow'];
//-----------------------------------------------------------
$april_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=4 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_april_fl_li=mysqli_fetch_array($april_fl_li);
$fetch_4_fl_li=$fetch_april_fl_li['follow'];
//----------------------------------------------------------
$may_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=5 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_may_fl_li=mysqli_fetch_array($may_fl_li);
$fetch_5_fl_li=$fetch_may_fl_li['follow'];
//-----------------------------------------------------------
$june_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=6 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_june_fl_li=mysqli_fetch_array($june_fl_li);
$fetch_6_fl_li=$fetch_june_fl_li['follow'];
//-------------------------------------------------------------
$july_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=7 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_july_fl_li=mysqli_fetch_array($july_fl_li);
$fetch_7_fl_li=$fetch_july_fl_li['follow'];
//---------------------------------------------------------------
$aug_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=8 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_aug_fl_li=mysqli_fetch_array($aug_fl_li);
$fetch_8_fl_li=$fetch_aug_fl_li['follow'];
//----------------------------------------------------------------
$sep_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=9 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_sep_fl_li=mysqli_fetch_array($sep_fl_li);
$fetch_9_fl_li=$fetch_sep_fl_li['follow'];
//-----------------------------------------------------------------
$oct_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=10 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_oct_fl_li=mysqli_fetch_array($oct_fl_li);
$fetch_10_fl_li=$fetch_oct_fl_li['follow'];
//-------------------------------------------------------------------
$nov_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=11 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_nov_fl_li=mysqli_fetch_array($nov_fl_li);
$fetch_11_fl_li=$fetch_nov_fl_li['follow'];
//------------------------------------------------------------------------
$dec_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=12 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_dec_fl_li=mysqli_fetch_array($dec_fl_li);
$fetch_12_fl_li=$fetch_dec_fl_li['follow'];
//---------------------------------------------------------------------------
$jan_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=13 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_jan_fl_li=mysqli_fetch_array($jan_fl_li);
$fetch_13_fl_li=$fetch_jan_fl_li['follow'];
//---------------------------------------------------------
$feb_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=14 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_feb_fl_li=mysqli_fetch_array($feb_fl_li);
$fetch_14_fl_li=$fetch_feb_fl_li['follow'];
//------------------------------------------------------------
$march_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=15 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_march_fl_li=mysqli_fetch_array($march_fl_li);
$fetch_15_fl_li=$fetch_march_fl_li['follow'];
//-----------------------------------------------------------
$april_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=16 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_april_fl_li=mysqli_fetch_array($april_fl_li);
$fetch_16_fl_li=$fetch_april_fl_li['follow'];
//----------------------------------------------------------
$may_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=17 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_may_fl_li=mysqli_fetch_array($may_fl_li);
$fetch_17_fl_li=$fetch_may_fl_li['follow'];
//-----------------------------------------------------------
$june_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=18 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_june_fl_li=mysqli_fetch_array($june_fl_li);
$fetch_18_fl_li=$fetch_june_fl_li['follow'];
//-------------------------------------------------------------
$july_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=19 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_july_fl_li=mysqli_fetch_array($july_fl_li);
$fetch_19_fl_li=$fetch_july_fl_li['follow'];
//---------------------------------------------------------------
$aug_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=20 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_aug_fl_li=mysqli_fetch_array($aug_fl_li);
$fetch_20_fl_li=$fetch_aug_fl_li['follow'];
//----------------------------------------------------------------
$sep_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=21 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_sep_fl_li=mysqli_fetch_array($sep_fl_li);
$fetch_21_fl_li=$fetch_sep_fl_li['follow'];
//-----------------------------------------------------------------
$oct_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=22 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_oct_fl_li=mysqli_fetch_array($oct_fl_li);
$fetch_22_fl_li=$fetch_oct_fl_li['follow'];
//-------------------------------------------------------------------
$nov_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=23 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_nov_fl_li=mysqli_fetch_array($nov_fl_li);
$fetch_23_fl_li=$fetch_nov_fl_li['follow'];
//------------------------------------------------------------------------
$dec_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=24 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_dec_fl_li=mysqli_fetch_array($dec_fl_li);
$fetch_24_fl_li=$fetch_dec_fl_li['follow'];
//-------------------------------------------------------------------------
$jan_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=25 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_jan_fl_li=mysqli_fetch_array($jan_fl_li);
$fetch_25_fl_li=$fetch_jan_fl_li['follow'];
//---------------------------------------------------------
$feb_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=26 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_feb_fl_li=mysqli_fetch_array($feb_fl_li);
$fetch_26_fl_li=$fetch_feb_fl_li['follow'];
//------------------------------------------------------------
$march_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=27 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_march_fl_li=mysqli_fetch_array($march_fl_li);
$fetch_27_fl_li=$fetch_march_fl_li['follow'];
//-----------------------------------------------------------
$april_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=28 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_april_fl_li=mysqli_fetch_array($april_fl_li);
$fetch_28_fl_li=$fetch_april_fl_li['follow'];
//----------------------------------------------------------
$may_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=29 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_may_fl_li=mysqli_fetch_array($may_fl_li);
$fetch_29_fl_li=$fetch_may_fl_li['follow'];
//-----------------------------------------------------------
$june_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=30 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_june_fl_li=mysqli_fetch_array($june_fl_li);
$fetch_30_fl_li=$fetch_june_fl_li['follow'];
//-------------------------------------------------------------
$july_fl_li=mysqli_query($conn,"select count(linkup_cnfrm) AS follow from documentor_document where DAY(linkup_dat)=31 AND linkup_cnfrm='lflw' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_july_fl_li=mysqli_fetch_array($july_fl_li);
$fetch_31_fl_li=$fetch_july_fl_li['follow'];
//---------------------------------------------------------------

//----------------------------------------------------------------------------------------------------------------------
//---------------------------------------------NOT INTERESTED-----------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------
$jan_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=1 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_jan_ni_li=mysqli_fetch_array($jan_ni_li);
$fetch_1_ni_li=$fetch_jan_ni_li['nit'];
//---------------------------------------------------------
$feb_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=2 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_feb_ni_li=mysqli_fetch_array($feb_ni_li);
$fetch_2_ni_li=$fetch_feb_ni_li['nit'];
//------------------------------------------------------------
$march_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=3 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_march_ni_li=mysqli_fetch_array($march_ni_li);
$fetch_3_ni_li=$fetch_march_ni_li['nit'];
//-----------------------------------------------------------
$april_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=4 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_april_ni_li=mysqli_fetch_array($april_ni_li);
$fetch_4_ni_li=$fetch_april_ni_li['nit'];
//----------------------------------------------------------
$may_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=5 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_may_ni_li=mysqli_fetch_array($may_ni_li);
$fetch_5_ni_li=$fetch_may_ni_li['nit'];
//-----------------------------------------------------------
$june_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=6 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_june_ni_li=mysqli_fetch_array($june_ni_li);
$fetch_6_ni_li=$fetch_june_ni_li['nit'];
//-------------------------------------------------------------
$july_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=7 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_july_ni_li=mysqli_fetch_array($july_ni_li);
$fetch_7_ni_li=$fetch_july_ni_li['nit'];
//---------------------------------------------------------------
$aug_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=8 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_aug_ni_li=mysqli_fetch_array($aug_ni_li);
$fetch_8_ni_li=$fetch_aug_ni_li['nit'];
//----------------------------------------------------------------
$sep_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=9 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_sep_ni_li=mysqli_fetch_array($sep_ni_li);
$fetch_9_ni_li=$fetch_sep_ni_li['nit'];
//-----------------------------------------------------------------
$oct_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=10 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_oct_ni_li=mysqli_fetch_array($oct_ni_li);
$fetch_10_ni_li=$fetch_oct_ni_li['nit'];
//-------------------------------------------------------------------
$nov_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=11 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_nov_ni_li=mysqli_fetch_array($nov_ni_li);
$fetch_11_ni_li=$fetch_nov_ni_li['nit'];
//------------------------------------------------------------------------
$dec_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=12 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_dec_ni_li=mysqli_fetch_array($dec_ni_li);
$fetch_12_ni_li=$fetch_dec_ni_li['nit'];
//--------------------------------------------------------------------------
$jan_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=1 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_jan_ni_li=mysqli_fetch_array($jan_ni_li);
$fetch_13_ni_li=$fetch_jan_ni_li['nit'];
//---------------------------------------------------------
$feb_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=2 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_feb_ni_li=mysqli_fetch_array($feb_ni_li);
$fetch_14_ni_li=$fetch_feb_ni_li['nit'];
//------------------------------------------------------------
$march_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=3 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_march_ni_li=mysqli_fetch_array($march_ni_li);
$fetch_15_ni_li=$fetch_march_ni_li['nit'];
//-----------------------------------------------------------
$april_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=4 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_april_ni_li=mysqli_fetch_array($april_ni_li);
$fetch_16_ni_li=$fetch_april_ni_li['nit'];
//----------------------------------------------------------
$may_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=5 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_may_ni_li=mysqli_fetch_array($may_ni_li);
$fetch_17_ni_li=$fetch_may_ni_li['nit'];
//-----------------------------------------------------------
$june_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=6 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_june_ni_li=mysqli_fetch_array($june_ni_li);
$fetch_18_ni_li=$fetch_june_ni_li['nit'];
//-------------------------------------------------------------
$july_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=7 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_july_ni_li=mysqli_fetch_array($july_ni_li);
$fetch_19_ni_li=$fetch_july_ni_li['nit'];
//---------------------------------------------------------------
$aug_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=8 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_aug_ni_li=mysqli_fetch_array($aug_ni_li);
$fetch_20_ni_li=$fetch_aug_ni_li['nit'];
//----------------------------------------------------------------
$sep_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=9 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_sep_ni_li=mysqli_fetch_array($sep_ni_li);
$fetch_21_ni_li=$fetch_sep_ni_li['nit'];
//-----------------------------------------------------------------
$oct_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=10 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_oct_ni_li=mysqli_fetch_array($oct_ni_li);
$fetch_22_ni_li=$fetch_oct_ni_li['nit'];
//-------------------------------------------------------------------
$nov_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=11 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_nov_ni_li=mysqli_fetch_array($nov_ni_li);
$fetch_23_ni_li=$fetch_nov_ni_li['nit'];
//------------------------------------------------------------------------
$dec_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=12 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_dec_ni_li=mysqli_fetch_array($dec_ni_li);
$fetch_24_ni_li=$fetch_dec_ni_li['nit'];
//---------------------------------------------------------------------
$jan_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=1 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_jan_ni_li=mysqli_fetch_array($jan_ni_li);
$fetch_25_ni_li=$fetch_jan_ni_li['nit'];
//---------------------------------------------------------
$feb_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=2 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_feb_ni_li=mysqli_fetch_array($feb_ni_li);
$fetch_26_ni_li=$fetch_feb_ni_li['nit'];
//------------------------------------------------------------
$march_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=3 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_march_ni_li=mysqli_fetch_array($march_ni_li);
$fetch_27_ni_li=$fetch_march_ni_li['nit'];
//-----------------------------------------------------------
$april_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=4 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_april_ni_li=mysqli_fetch_array($april_ni_li);
$fetch_28_ni_li=$fetch_april_ni_li['nit'];
//----------------------------------------------------------
$may_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=5 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_may_ni_li=mysqli_fetch_array($may_ni_li);
$fetch_29_ni_li=$fetch_may_ni_li['nit'];
//-----------------------------------------------------------
$june_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=6 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_june_ni_li=mysqli_fetch_array($june_ni_li);
$fetch_30_ni_li=$fetch_june_ni_li['nit'];
//-------------------------------------------------------------
$july_ni_li=mysqli_query($conn,"select count(linkup_cnfrm) AS nit from documentor_document where DAY(linkup_dat)=7 AND linkup_cnfrm='ncnfrm' AND MONTH(linkup_dat)=MONTH(CURDATE()) AND tl_name='$main_tl_name'");
$fetch_july_ni_li=mysqli_fetch_array($july_ni_li);
$fetch_31_ni_li=$fetch_july_ni_li['nit'];
//---------------------------------------------------------------
?>