<?php
	include 'includes/session.php';

	if(isset($_POST['update'])){
		$id = 1;
		$message = $_POST['message'];

		try{
			$stmt = $conn->prepare("UPDATE Parameter SET Message=:message WHERE id=:id");
			$stmt->execute(['message'=>$message,'id'=>$id]);
			$_SESSION['success'] = 'President Message updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Message  form first';
	}

	header('location: presidentmessage.php');

?>