<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		try{
			$stmt = $conn->prepare("UPDATE Designation SET Name=:name WHERE id=:id");
			$stmt->execute(['name'=>$name,'id'=>$id]);
			$_SESSION['success'] = 'Designation updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}	
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit Designation form first';
	}

	header('location: board.php');

?>