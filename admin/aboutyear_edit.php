<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];

		try{
			$stmt = $conn->prepare("UPDATE BusinessStatisticsYear SET `Year`=:title WHERE id=:id");
			$stmt->execute(['title'=>$name,'id'=>$id]);
			$_SESSION['success'] = 'About Year updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit About Year form first';
	}

	header('location: aboutyear.php');

?>