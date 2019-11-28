<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$description = $_POST['description'];
		$link = $_POST['link'];

		try{
			$stmt = $conn->prepare("UPDATE Links SET Head=:title, Content=:description, Link=:link WHERE id=:id");
			$stmt->execute(['title'=>$name,'description'=>$description,'link'=>$link, 'id'=>$id]);
			$_SESSION['success'] = 'Links updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit Links form first';
	}

	header('location: links.php');

?>