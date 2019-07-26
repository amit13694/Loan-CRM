<?php
include('../config/database.php');
$jan_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=1  AND MONTH(when_added)=MONTH(CURDATE()) ");
$fetch_jan_li=mysqli_fetch_array($jan_li);
$fetch_1_li=$fetch_jan_li['interested'];
//---------------------------------------------------------
$feb_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=2 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_feb_li=mysqli_fetch_array($feb_li);
$fetch_2_li=$fetch_feb_li['interested'];
//------------------------------------------------------------
$march_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=3 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_march_li=mysqli_fetch_array($march_li);
$fetch_3_li=$fetch_march_li['interested'];
//-----------------------------------------------------------
$april_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=4 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_april_li=mysqli_fetch_array($april_li);
$fetch_4_li=$fetch_april_li['interested'];
//----------------------------------------------------------
$may_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=5 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_may_li=mysqli_fetch_array($may_li);
$fetch_5_li=$fetch_may_li['interested'];
//-----------------------------------------------------------
$june_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=6 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_june_li=mysqli_fetch_array($june_li);
$fetch_6_li=$fetch_june_li['interested'];
//-------------------------------------------------------------
$july_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=7 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_july_li=mysqli_fetch_array($july_li);
$fetch_7_li=$fetch_july_li['interested'];
//---------------------------------------------------------------
$aug_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=8 AND MONTH(when_added)=MONTH(CURDATE())");
$fetch_aug_li=mysqli_fetch_array($aug_li);
$fetch_8_li=$fetch_aug_li['interested'];
//----------------------------------------------------------------
$sep_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=9 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_sep_li=mysqli_fetch_array($sep_li);
$fetch_9_li=$fetch_sep_li['interested'];
//-----------------------------------------------------------------
$oct_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=10 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_oct_li=mysqli_fetch_array($oct_li);
$fetch_10_li=$fetch_oct_li['interested'];
//-------------------------------------------------------------------
$nov_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=11 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_nov_li=mysqli_fetch_array($nov_li);
$fetch_11_li=$fetch_nov_li['interested'];
//------------------------------------------------------------------------
$dec_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=12 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_dec_li=mysqli_fetch_array($dec_li);
$fetch_12_li=$fetch_dec_li['interested'];
//-----------------------------------------------------------------------------
$jan_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=13  AND MONTH(when_added)=MONTH(CURDATE())");
$fetch_jan_li=mysqli_fetch_array($jan_li);
$fetch_13_li=$fetch_jan_li['interested'];
//------------------------------------------------------------
$march_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=14 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_march_li=mysqli_fetch_array($march_li);
$fetch_14_li=$fetch_march_li['interested'];
//-----------------------------------------------------------
$april_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=15 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_april_li=mysqli_fetch_array($april_li);
$fetch_15_li=$fetch_april_li['interested'];
//----------------------------------------------------------
$may_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=16 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_may_li=mysqli_fetch_array($may_li);
$fetch_16_li=$fetch_may_li['interested'];
//-----------------------------------------------------------
$june_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=17 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_june_li=mysqli_fetch_array($june_li);
$fetch_17_li=$fetch_june_li['interested'];
//-------------------------------------------------------------
$july_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=18 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_july_li=mysqli_fetch_array($july_li);
$fetch_18_li=$fetch_july_li['interested'];
//---------------------------------------------------------------
$aug_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=19 AND MONTH(when_added)=MONTH(CURDATE())");
$fetch_aug_li=mysqli_fetch_array($aug_li);
$fetch_19_li=$fetch_aug_li['interested'];
//----------------------------------------------------------------
$sep_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=20 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_sep_li=mysqli_fetch_array($sep_li);
$fetch_20_li=$fetch_sep_li['interested'];
//-----------------------------------------------------------------
$oct_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=21 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_oct_li=mysqli_fetch_array($oct_li);
$fetch_21_li=$fetch_oct_li['interested'];
//-------------------------------------------------------------------
$nov_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=22 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_nov_li=mysqli_fetch_array($nov_li);
$fetch_22_li=$fetch_nov_li['interested'];
//------------------------------------------------------------------------
$dec_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=23 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_dec_li=mysqli_fetch_array($dec_li);
$fetch_23_li=$fetch_dec_li['interested'];
//-----------------------------------------------------------------------
$jan_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=24  AND MONTH(when_added)=MONTH(CURDATE())");
$fetch_jan_li=mysqli_fetch_array($jan_li);
$fetch_24_li=$fetch_jan_li['interested'];
//---------------------------------------------------------
$feb_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=25 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_feb_li=mysqli_fetch_array($feb_li);
$fetch_25_li=$fetch_feb_li['interested'];
//------------------------------------------------------------
$march_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=26 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_march_li=mysqli_fetch_array($march_li);
$fetch_26_li=$fetch_march_li['interested'];
//-----------------------------------------------------------
$april_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=27 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_april_li=mysqli_fetch_array($april_li);
$fetch_27_li=$fetch_april_li['interested'];
//----------------------------------------------------------
$may_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=28 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_may_li=mysqli_fetch_array($may_li);
$fetch_28_li=$fetch_may_li['interested'];
//-----------------------------------------------------------
$june_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=29 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_june_li=mysqli_fetch_array($june_li);
$fetch_29_li=$fetch_june_li['interested'];
//-------------------------------------------------------------
$july_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=30 AND  MONTH(when_added)=MONTH(CURDATE())");
$fetch_july_li=mysqli_fetch_array($july_li);
$fetch_30_li=$fetch_july_li['interested'];
//---------------------------------------------------------------
$aug_li=mysqli_query($conn,"select count(when_added) AS interested from documentor_document where DAY(when_added)=31 AND MONTH(when_added)=MONTH(CURDATE())");
$fetch_aug_li=mysqli_fetch_array($aug_li);
$fetch_31_li=$fetch_aug_li['interested'];
//----------------------------------------------------------------

?>