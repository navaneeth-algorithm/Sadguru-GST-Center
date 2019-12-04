<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM BusinessStatisticsData WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'about Data deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select about Data to delete first';
	}

	header('location: aboutdata.php');
	
?>