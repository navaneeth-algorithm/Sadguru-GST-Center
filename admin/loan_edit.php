<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$description = $_POST['description'];

		try{
			$stmt = $conn->prepare("UPDATE Loan SET Title=:title, Description=:description WHERE id=:id");
			$stmt->execute(['title'=>$name,'description'=>$description, 'id'=>$id]);
			$_SESSION['success'] = 'Loan updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit Loan form first';
	}

	header('location: loan.php');

?>