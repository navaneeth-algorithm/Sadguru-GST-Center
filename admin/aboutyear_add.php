
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$title = $_POST['name'];

		$conn = $pdo->open();
			try{
				$stmt = $conn->prepare("INSERT INTO `BusinessstatisticsYear` (`Year`) VALUES (:title)");
				$stmt->execute(['title'=>$title]);
				$_SESSION['success'] = 'About Year added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up About Year form first';
	}

	header('location: aboutyear.php');

?>