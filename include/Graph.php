<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {

	$.ajax({
		type: "GET",
		url:"data2.csv",
		dataType: "text",
		success: function(data) {processData(data);}
	});

	function processData( allText ) {
		var allLinesArray = allText.split("\n");
		if( allLinesArray.length > 0 ){
			var dataPoints = [];
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(",");
				dataPoints.push({ label:rowData[0], y:parseInt(rowData[1]) });
			}
			drawChart(dataPoints);
		}
	}

	function drawChart( dataPoints) {
		var chart = new CanvasJS.Chart("chartContainer", {
			title:{
				text: "ID"
			},
			axisX:{
				labelAngle: 0,
				labelWrap:true,
				labelAutoFit: false,
				labelFontSize: 15,
				labelMaxWidth: 200,
				labelFontColor: "black"
			},
			data: [
			{
				indexLabelPlacement: "outside",
				indexLabelFontWeight: "bold",
				indexLabelFontColor: "black",
				type: "column",
				dataPoints: dataPoints
			}
			]
		});
		chart.render();
	}
});
</script>
<script type="text/javascript" src="js/canvasjs.min.js"></script>
</head>
<body style="background-color: #ADB68B; background-image:url(../Images/bg_body_new.png); background-repeat: repeat-x;text-align:center">
<div id="chartContainer" style="height: 800px; width: 100%; background-image:url("fonto1.png"); background-repeat:no-repeat; background-position:center; background-size:100% 100%"></div>
<div style="text-align: center; color:red; font-size:25px;"><b>Τελευταία Ενημέρωση 27 Μαρ 2015 12:00</b></div>
</body>
</html>