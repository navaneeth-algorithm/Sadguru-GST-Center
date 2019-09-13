
<div class="w3-card w3-padding">

		<script>
		window.onload = function () {
		
		var chart = new CanvasJS.Chart("chartContainer", { 
			theme: "light2",
			title: {
				text: "Buisness Statastics of Sadhguru from - 2014 to 2019",
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
				yValueFormatString: "#,##0 no's",
				dataPoints: <?php echo json_encode($dataPoints[0], JSON_NUMERIC_CHECK); ?>
			},
			{
				type: "stackedArea",
				name: "Share Capital",
				showInLegend: true,
				yValueFormatString: "#,##0 lakhs",
				dataPoints: <?php echo json_encode($dataPoints[1], JSON_NUMERIC_CHECK); ?>
			},
			{
				type: "stackedArea",
				name: "Deposits",
				showInLegend: true,
				visible: false,
				yValueFormatString: "#,##0 lakhs",
				dataPoints: <?php echo json_encode($dataPoints[2], JSON_NUMERIC_CHECK); ?>
			},
			{
				type: "stackedArea",
				name: "Loans",
				showInLegend: true,
				visible: false,
				yValueFormatString: "#,##0 lakhs",
				dataPoints: <?php echo json_encode($dataPoints[3], JSON_NUMERIC_CHECK); ?>
			},
			{
				type: "stackedArea",
				name: "Working Capital",
				showInLegend: true,
				visible: false,
				yValueFormatString: "#,##0 lakhs",
				dataPoints: <?php echo json_encode($dataPoints[4], JSON_NUMERIC_CHECK); ?>
			},
			{
				type: "stackedArea",
				name: "Profit",
				showInLegend: true,
				yValueFormatString: "#,##0 lakhs",
				dataPoints: <?php echo json_encode($dataPoints[5], JSON_NUMERIC_CHECK); ?>
			},
			{
				type: "stackedArea",
				name: "Dividend",
				showInLegend: true,
				yValueFormatString: "#,##0 lakhs",
				dataPoints: <?php echo json_encode($dataPoints[6], JSON_NUMERIC_CHECK); ?>
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