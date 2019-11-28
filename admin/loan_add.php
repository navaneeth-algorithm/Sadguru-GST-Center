
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$title = $_POST['name'];
		$description = $_POST['description'];

		$conn = $pdo->open();
			try{
				$stmt = $conn->prepare("INSERT INTO `Loan` (`Title`,`Description`) VALUES (:title,:description)");
				$stmt->execute(['title'=>$title,'description'=>$description]);
				$_SESSION['success'] = 'Loan Details added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Loan form first';
	}

	header('location: loan.php');

?>