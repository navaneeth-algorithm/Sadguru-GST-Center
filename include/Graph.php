
<div class="w3-card w3-padding">
		<?php
		
		$dataPoints1 = array(
			array("label"=> "2014", "y"=> 2016456 ),
			array("label"=> "2015", "y"=> 1985801 ),
			array("label"=> "2016", "y"=> 1755904 ),
			array("label"=> "2017", "y"=> 1847290 ),
			array("label"=> "2018", "y"=> 1733430 ),
		);
		
		$dataPoints2 = array(
			array("label"=> "2014", "y"=> 49505 ),
			array("label"=> "2015", "y"=> 31917 ),
			array("label"=> "2016", "y"=> 25972 ),
			array("label"=> "2017", "y"=> 23337 ),
			array("label"=> "2018", "y"=> 16086 ),
		);
		
		$dataPoints3 = array(
			array("label"=> "2014", "y"=> 896590 ),
			array("label"=> "2015", "y"=> 882981 ),
			array("label"=> "2016", "y"=> 920979 ),
			array("label"=> "2017", "y"=> 987697 ),
			array("label"=> "2018", "y"=> 1013689 ),
		);
		
		$dataPoints4 = array(
			array("label"=> "2014", "y"=> 806425 ),
			array("label"=> "2015", "y"=> 806208 ),
			array("label"=> "2016", "y"=> 798855 ),
			array("label"=> "2017", "y"=> 806968 ),
			array("label"=> "2018", "y"=> 790204 ),
		);
		
		$dataPoints5 = array(
			array("label"=> "2014", "y"=> 247510 ),
			array("label"=> "2015", "y"=> 254831 ),
			array("label"=> "2016", "y"=> 273445 ),
			array("label"=> "2017", "y"=> 260203 ),
			array("label"=> "2018", "y"=> 319355 ),
		);
		
		$dataPoints6 = array(
			array("label"=> "2014", "y"=> 612 ),
			array("label"=> "2015", "y"=> 864 ),
			array("label"=> "2016", "y"=> 891 ),
			array("label"=> "2017", "y"=> 1212 ),
			array("label"=> "2018", "y"=> 1818 ),
		);
		$dataPoints7 = array(
			array("label"=> "2014", "y"=> 312 ),
			array("label"=> "2015", "y"=> 321 ),
			array("label"=> "2016", "y"=> 321 ),
			array("label"=> "2017", "y"=> 122 ),
			array("label"=> "2018", "y"=> 645 ),
		);
		
		?>
		<script>
		window.onload = function () {
		
		var chart = new CanvasJS.Chart("chartContainer", { 
			theme: "light2",
			title: {
				text: "MileStone of Sadhguru from - 2014 to 2019",
				fontSize:15
			},
			subtitles: [{
				text: "In Years"
			}],
			axisY: {
				includeZero: false
			},
			legend:{
				cursor: "pointer",
				itemclick: toggleDataSeries
			},
			toolTip: {
				shared: true
			},
			data: [{
				type: "stackedArea",
				name: "Membership",
				showInLegend: true,
				visible: false,
				yValueFormatString: "#,##0 GWh",
				dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
			},
			{
				type: "stackedArea",
				name: "Share Capital",
				showInLegend: true,
				yValueFormatString: "#,##0 GWh",
				dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
			},
			{
				type: "stackedArea",
				name: "Deposits",
				showInLegend: true,
				visible: false,
				yValueFormatString: "#,##0 GWh",
				dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
			},
			{
				type: "stackedArea",
				name: "Loans",
				showInLegend: true,
				visible: false,
				yValueFormatString: "#,##0 GWh",
				dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
			},
			{
				type: "stackedArea",
				name: "Working Capital",
				showInLegend: true,
				visible: false,
				yValueFormatString: "#,##0 GWh",
				dataPoints: <?php echo json_encode($dataPoints5, JSON_NUMERIC_CHECK); ?>
			},
			{
				type: "stackedArea",
				name: "Profit",
				showInLegend: true,
				yValueFormatString: "#,##0 GWh",
				dataPoints: <?php echo json_encode($dataPoints6, JSON_NUMERIC_CHECK); ?>
			},
			{
				type: "stackedArea",
				name: "Dividend",
				showInLegend: true,
				yValueFormatString: "#,##0 GWh",
				dataPoints: <?php echo json_encode($dataPoints7, JSON_NUMERIC_CHECK); ?>
			}
			
			]
		});
		
		chart.render();
		
		function toggleDataSeries(e){
			if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
				e.dataSeries.visible = false;
			}
			else{
				e.dataSeries.visible = true;
			}
			chart.render();
		}
		
		}
		</script>
		<div id="chartContainer" style="height: 370px; width: 100%;"></div>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</div>