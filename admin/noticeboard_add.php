
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$title = $_POST['name'];
		$description = $_POST['description'];

		$conn = $pdo->open();
			try{
				$stmt = $conn->prepare("INSERT INTO `NoticeBoard` (`Head`,`Content`) VALUES (:title,:description)");
				$stmt->execute(['title'=>$title,'description'=>$description]);
				$_SESSION['success'] = 'Notice Board Details added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Notice Board form first';
	}

	header('location: noticeboard.php');

?>