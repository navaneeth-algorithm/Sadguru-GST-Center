
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$title = $_POST['name'];
		//$description = $_POST['description'];
		//$link = $_POST['link'];

		$conn = $pdo->open();
			try{
				$stmt = $conn->prepare("INSERT INTO `RollingText` (`Content`) VALUES (:title)");
				$stmt->execute(['title'=>$title]);
				$_SESSION['success'] = 'Rolling Text added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
				echo $e;
			}
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Rolling Text form first';
	}

	header('location: rollingtext.php');

?>