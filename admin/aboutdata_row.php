<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT BusinessStatisticsData.Id AS `Id`,`Name`,`Year` ,`Data`,`NameId`,`YearId`
		FROM `BusinessStatisticsData`
		LEFT JOIN BusinessStatistics ON BusinessStatistics.Id=BusinessStatisticsData.NameId
		LEFT JOIN BusinessStatisticsYear ON BusinessStatisticsYear.Id=BusinessStatisticsData.YearId WHERE BusinessStatisticsData.Id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
		
		$pdo->close();

		echo json_encode($row);
	}
?>