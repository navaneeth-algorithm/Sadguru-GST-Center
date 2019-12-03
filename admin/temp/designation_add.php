
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$conn = $pdo->open();
		$designation = $_POST['name'];
			try{
				$stmt = $conn->prepare("INSERT INTO `Designation` (`Name`) VALUES (:name)");
				$stmt->execute(['name'=>$designation]);
				$_SESSION['success'] = 'Designation Details added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Designation form first';
	}

	header('location: board.php');

?>