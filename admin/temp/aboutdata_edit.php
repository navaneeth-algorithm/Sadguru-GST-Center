<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];

		try{
			$stmt = $conn->prepare("UPDATE businessstatistics SET Name=:title WHERE id=:id");
			$stmt->execute(['title'=>$name,'description'=>$description, 'id'=>$id]);
			$_SESSION['success'] = 'News updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit About Name form first';
	}

	header('location: aboutname.php');

?>