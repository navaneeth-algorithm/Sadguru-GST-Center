
<?php
	include 'includes/session.php';

	
		if(isset($_POST['add'])){
		$nameid = $_POST['addaboutname'];
		//echo $nameid;
		$yearid = $_POST['addaboutyear'];
		//echo $yearid;
		$datapoints = $_POST['datapoints'];
		//echo $datapoints;

		$conn = $pdo->open();
			try{
				$stmt = $conn->prepare("INSERT INTO `BusinessStatisticsData` (`NameId`,`YearId`,`Data`) VALUES (:nameid,:yearid,:data)");
				$stmt->execute(['nameid'=>$nameid,'yearid'=>$yearid,'data'=>$datapoints]);
				$_SESSION['success'] = 'Data added Successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		$pdo->close();
		}else{
			$_SESSION['error']="Fill the Data Form";
		}


	header('location: aboutdata.php');

?>