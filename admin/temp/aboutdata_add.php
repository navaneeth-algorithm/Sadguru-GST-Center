
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$title = $_POST['name'];

		$conn = $pdo->open();
			try{
				$stmt = $conn->prepare("INSERT INTO `businessstatistics` (`Name`) VALUES (:title)");
				$stmt->execute(['title'=>$title]);
				$_SESSION['success'] = 'About Name added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up About Name form first';
	}

	header('location: aboutname.php');

?>