<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$description = $_POST['description'];

		try{
			$stmt = $conn->prepare("UPDATE Services SET Head=:title, Content=:description WHERE id=:id");
			$stmt->execute(['title'=>$name,'description'=>$description, 'id'=>$id]);
			$_SESSION['success'] = 'Services updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit Services form first';
	}

	header('location: services.php');

?>