<?php
include('header.php');
include('../config/database.php');
include('balance-graph-data.php');
include('linker-graph-data.php');
?>
<div class="container-fluid">
	<div class="row no-gutters">
		<div class="col-md-2">
			<?php include('sidenav.php'); ?>
		</div>
		<div class="col-md-10 content">
			 <div class="row">
               <div class="col-md-12">
                    <div class="card">
                         <div class="card-header" style="background: #FFE57C;">
                              <h4 class="card-title text-dark text-center">Varifier</h4>
                         </div>
                         <div class="card-body" style="background: #295F2D; color: #FFE57C;">
                              <div id="balancechart" style="height: 250px;"></div>
                         </div>
                    </div>
               </div>
           </div>
           <div class="row">
               <div class="col-md-12">
                    <div class="card">
                         <div class="card-header" style="background: #EB8B5D;">
                              <h4 class="card-title text-dark text-center">Linker</h4>
                         </div>
                         <div class="card-body" style="background: #131945; color: #EB8B5D;">
                              <div id="linkerchart" style="height: 250px;"></div>
                         </div>
                    </div>
               </div>
          </div>
		</div>
	</div>
</div>
 <script>
 new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'balancechart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { day: '1', interested: <?php echo $fetch_1; ?>, not_interested: <?php echo $fetch_1_ni; ?>},
    { day: '2', interested: <?php echo $fetch_2; ?>, not_interested: <?php echo $fetch_2_ni; ?>},
    { day: '3', interested: <?php echo $fetch_3; ?>, not_interested: <?php echo $fetch_3_ni; ?>},
    { day: '4', interested: <?php echo $fetch_4; ?>, not_interested: <?php echo $fetch_4_ni; ?>},
    { day: '5', interested: <?php echo $fetch_5; ?>, not_interested: <?php echo $fetch_5_ni; ?>},
    { day: '6', interested: <?php echo $fetch_6; ?>, not_interested: <?php echo $fetch_6_ni; ?>},
    { day: '7', interested: <?php echo $fetch_7; ?>, not_interested: <?php echo $fetch_7_ni; ?>},
    { day: '8', interested: <?php echo $fetch_8; ?>, not_interested: <?php echo $fetch_8_ni; ?>},
    { day: '9', interested: <?php echo $fetch_9; ?>, not_interested: <?php echo $fetch_9_ni; ?>},
    { day: '10', interested: <?php echo $fetch_10; ?>, not_interested: <?php echo $fetch_10_ni; ?>},
    { day: '11', interested: <?php echo $fetch_11; ?>, not_interested: <?php echo $fetch_11_ni; ?>},
    { day: '12', interested: <?php echo $fetch_12; ?>, not_interested: <?php echo $fetch_12_ni; ?>},
    { day: '13', interested: <?php echo $fetch_13; ?>, not_interested: <?php echo $fetch_13_ni; ?>},
    { day: '14', interested: <?php echo $fetch_14; ?>, not_interested: <?php echo $fetch_14_ni; ?>},
    { day: '15', interested: <?php echo $fetch_15; ?>, not_interested: <?php echo $fetch_15_ni; ?>},
    { day: '16', interested: <?php echo $fetch_16; ?>, not_interested: <?php echo $fetch_16_ni; ?>},
    { day: '17', interested: <?php echo $fetch_17; ?>, not_interested: <?php echo $fetch_17_ni; ?>},
    { day: '18', interested: <?php echo $fetch_18; ?>, not_interested: <?php echo $fetch_18_ni; ?>},
    { day: '19', interested: <?php echo $fetch_19; ?>, not_interested: <?php echo $fetch_19_ni; ?>},
    { day: '20', interested: <?php echo $fetch_20; ?>, not_interested: <?php echo $fetch_20_ni; ?>},
    { day: '21', interested: <?php echo $fetch_21; ?>, not_interested: <?php echo $fetch_21_ni; ?>},
    { day: '22', interested: <?php echo $fetch_22; ?>, not_interested: <?php echo $fetch_22_ni; ?>},
    { day: '23', interested: <?php echo $fetch_23; ?>, not_interested: <?php echo $fetch_23_ni; ?>},
    { day: '24', interested: <?php echo $fetch_24; ?>, not_interested: <?php echo $fetch_24_ni; ?>},
    { day: '25', interested: <?php echo $fetch_25; ?>, not_interested: <?php echo $fetch_25_ni; ?>},
    { day: '26', interested: <?php echo $fetch_26; ?>, not_interested: <?php echo $fetch_26_ni; ?>},
    { day: '27', interested: <?php echo $fetch_27; ?>, not_interested: <?php echo $fetch_27_ni; ?>},
    { day: '28', interested: <?php echo $fetch_28; ?>, not_interested: <?php echo $fetch_28_ni; ?>},
    { day: '29', interested: <?php echo $fetch_29; ?>, not_interested: <?php echo $fetch_29_ni; ?>},
    { day: '30', interested: <?php echo $fetch_30; ?>, not_interested: <?php echo $fetch_30_ni; ?>},
    { day: '31', interested: <?php echo $fetch_31; ?>, not_interested: <?php echo $fetch_31_ni; ?>}
  ],
  // The name of the data record attribute that contains x-values.
  xLabels:'day',
  xkey: 'day',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['interested','not_interested'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  barColors:['green','red'],
  labels: ['varified','not varified']
});
new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'linkerchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { day: '1', interested: <?php echo $fetch_1_li; ?>, not_interested: <?php echo $fetch_1_ni_li; ?>, follow: <?php echo $fetch_1_fl_li; ?>},
    { day: '2', interested: <?php echo $fetch_2_li; ?>, not_interested: <?php echo $fetch_2_ni_li; ?>, follow: <?php echo $fetch_2_fl_li; ?>},
    { day: '3', interested: <?php echo $fetch_3_li; ?>, not_interested: <?php echo $fetch_3_ni_li; ?>, follow: <?php echo $fetch_3_fl_li; ?>},
    { day: '4', interested: <?php echo $fetch_4_li; ?>, not_interested: <?php echo $fetch_4_ni_li; ?>, follow: <?php echo $fetch_4_fl_li; ?>},
    { day: '5', interested: <?php echo $fetch_5_li; ?>, not_interested: <?php echo $fetch_5_ni_li; ?>, follow: <?php echo $fetch_5_fl_li; ?>},
    { day: '6', interested: <?php echo $fetch_6_li; ?>, not_interested: <?php echo $fetch_6_ni_li; ?>, follow: <?php echo $fetch_6_fl_li; ?>},
    { day: '7', interested: <?php echo $fetch_7_li; ?>, not_interested: <?php echo $fetch_7_ni_li; ?>, follow: <?php echo $fetch_7_fl_li; ?>},
    { day: '8', interested: <?php echo $fetch_8_li; ?>, not_interested: <?php echo $fetch_8_ni_li; ?>, follow: <?php echo $fetch_8_fl_li; ?>},
    { day: '9', interested: <?php echo $fetch_9_li; ?>, not_interested: <?php echo $fetch_9_ni_li; ?>, follow: <?php echo $fetch_9_fl_li; ?>},
    { day: '10', interested: <?php echo $fetch_10_li; ?>, not_interested: <?php echo $fetch_10_ni_li; ?>, follow: <?php echo $fetch_10_fl_li; ?>},
    { day: '11', interested: <?php echo $fetch_11_li; ?>, not_interested: <?php echo $fetch_11_ni_li; ?>, follow: <?php echo $fetch_11_fl_li; ?>},
    { day: '12', interested: <?php echo $fetch_12_li; ?>, not_interested: <?php echo $fetch_12_ni_li; ?>, follow: <?php echo $fetch_12_fl_li; ?>},
    { day: '13', interested: <?php echo $fetch_13_li; ?>, not_interested: <?php echo $fetch_13_ni_li; ?>, follow: <?php echo $fetch_13_fl_li; ?>},
    { day: '14', interested: <?php echo $fetch_14_li; ?>, not_interested: <?php echo $fetch_14_ni_li; ?>, follow: <?php echo $fetch_14_fl_li; ?>},
    { day: '15', interested: <?php echo $fetch_15_li; ?>, not_interested: <?php echo $fetch_15_ni_li; ?>, follow: <?php echo $fetch_15_fl_li; ?>},
    { day: '16', interested: <?php echo $fetch_16_li; ?>, not_interested: <?php echo $fetch_16_ni_li; ?>, follow: <?php echo $fetch_16_fl_li; ?>},
    { day: '17', interested: <?php echo $fetch_17_li; ?>, not_interested: <?php echo $fetch_17_ni_li; ?>, follow: <?php echo $fetch_17_fl_li; ?>},
    { day: '18', interested: <?php echo $fetch_18_li; ?>, not_interested: <?php echo $fetch_18_ni_li; ?>, follow: <?php echo $fetch_18_fl_li; ?>},
    { day: '19', interested: <?php echo $fetch_19_li; ?>, not_interested: <?php echo $fetch_19_ni_li; ?>, follow: <?php echo $fetch_19_fl_li; ?>},
    { day: '20', interested:<?php echo $fetch_20_li; ?>, not_interested: <?php echo $fetch_20_ni_li; ?>, follow: <?php echo $fetch_20_fl_li; ?>},
    { day: '21', interested: <?php echo $fetch_21_li; ?>, not_interested: <?php echo $fetch_21_ni_li; ?>, follow: <?php echo $fetch_21_fl_li; ?>},
    { day: '22', interested: <?php echo $fetch_22_li; ?>, not_interested: <?php echo $fetch_22_ni_li; ?>, follow: <?php echo $fetch_22_fl_li; ?>},
    { day: '23', interested: <?php echo $fetch_23_li; ?>, not_interested: <?php echo $fetch_23_ni_li; ?>, follow: <?php echo $fetch_23_fl_li; ?>},
    { day: '24', interested: <?php echo $fetch_24_li; ?>, not_interested: <?php echo $fetch_24_ni_li; ?>, follow: <?php echo $fetch_24_fl_li; ?>},
    { day: '25', interested: <?php echo $fetch_25_li; ?>, not_interested: <?php echo $fetch_25_ni_li; ?>, follow: <?php echo $fetch_25_fl_li; ?>},
    { day: '26', interested: <?php echo $fetch_26_li; ?>, not_interested: <?php echo $fetch_26_ni_li; ?>, follow: <?php echo $fetch_26_fl_li; ?>},
    { day: '27', interested: <?php echo $fetch_27_li; ?>, not_interested: <?php echo $fetch_27_ni_li; ?>, follow: <?php echo $fetch_27_fl_li; ?>},
    { day: '28', interested: <?php echo $fetch_28_li; ?>, not_interested: <?php echo $fetch_28_ni_li; ?>, follow: <?php echo $fetch_28_fl_li; ?>},
    { day: '29', interested: <?php echo $fetch_29_li; ?>, not_interested: <?php echo $fetch_29_ni_li; ?>, follow: <?php echo $fetch_29_fl_li; ?>},
    { day: '30', interested: <?php echo $fetch_30_li; ?>, not_interested: <?php echo $fetch_30_ni_li; ?>, follow: <?php echo $fetch_30_fl_li; ?>},
    { day: '31', interested: <?php echo $fetch_31_li; ?>, not_interested: <?php echo $fetch_31_ni_li; ?>, follow: <?php echo $fetch_31_fl_li; ?>}
  ],
  // The name of the data record attribute that contains x-values.
  xLabels:'day',
  xkey: 'day',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['interested','not_interested','follow'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  barColors:['green','red','blue'],
  labels: ['interested','not_interested','follow']
});
 </script>
