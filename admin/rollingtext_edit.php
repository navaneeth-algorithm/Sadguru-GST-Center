<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		//$description = $_POST['description'];
		//$link = $_POST['link'];

		try{
			$stmt = $conn->prepare("UPDATE RollingText SET Content=:title WHERE id=:id");
			$stmt->execute(['title'=>$name, 'id'=>$id]);
			$_SESSION['success'] = 'Rolling Text updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Rolling Text form first';
	}

	header('location: rollingtext.php');

?>