
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['description'];

		$conn = $pdo->open();
			try{
				$stmt = $conn->prepare("INSERT INTO `Branch` (`Name`,`Address`, `PhoneNumber`,`EmailId`) VALUES (:name,:address, :phone, :email)");
				$stmt->execute(['name'=>$name,'address'=>$address, 'phone'=>$phone, 'email'=>$email]);
				$_SESSION['success'] = 'Branch Details added successfully';
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