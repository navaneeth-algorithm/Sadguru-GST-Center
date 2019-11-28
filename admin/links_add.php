
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$title = $_POST['name'];
		$description = $_POST['description'];
		$link = $_POST['link'];

		$conn = $pdo->open();
			try{
				$stmt = $conn->prepare("INSERT INTO `Links` (`Head`,`Content`,`Link`) VALUES (:title,:description,:link)");
				$stmt->execute(['title'=>$title,'description'=>$description,'link'=>$link]);
				$_SESSION['success'] = 'Link Details added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
				echo $e;
			}
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Links form first';
	}

	header('location: links.php');

?>