<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['description'];

		try{
			$stmt = $conn->prepare("UPDATE Links SET Name=:name, Email=:email, PhoneNumber=:phone, EmailId=:email WHERE id=:id");
			$stmt->execute(['name'=>$name,'address'=>$address, 'phone'=>$phone, 'email'=>$email, 'id'=>$id]);
			$_SESSION['success'] = 'Branch updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Branch form first';
	}

	header('location: branch.php');

?>