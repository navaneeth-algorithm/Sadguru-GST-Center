<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$data = $_POST['data'];

		try{
			$stmt = $conn->prepare("UPDATE BusinessStatisticsData SET Data=:data WHERE id=:id");
			$stmt->execute(['data'=>$data, 'id'=>$id]);
			$_SESSION['success'] = 'About Data updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit About Data form first';
	}

	header('location: aboutdata.php');

?>