<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM businessstatistics WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'about name deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select about name to delete first';
	}

	header('location: aboutname.php');
	
?>