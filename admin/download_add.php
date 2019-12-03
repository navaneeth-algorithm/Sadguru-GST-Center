
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$conn = $pdo->open();
		$title = $_POST['name'];
		$description = $_POST['description'];
		//echo "<script>alert(".$_FILES['file']['name'].");</script>";
		$filename =basename( $_FILES['file']['name']);

		$stmt = $conn->prepare("SELECT MAX(id) AS maxid FROM download");
		$stmt->execute();
		$maxId = $stmt->fetch();
		$maxId = $maxId['maxid'];
		$fileName = strval($maxId);
		if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $fileName.'.'.$ext;
				move_uploaded_file($_FILES['file']['tmp_name'], '../'.$downloadFolder.'/'.$new_filename);
				echo $fileName;	
			}
			else{
				$new_filename = '';
			}

		
			try{
				$stmt = $conn->prepare("INSERT INTO `Download` (`Head`,`Content`,`Path`) VALUES (:title,:description,:path)");
				$stmt->execute(['title'=>$title,'description'=>$description,'path'=>$new_filename]);
				$_SESSION['success'] = 'Download Details added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Download form first';
	}

	header('location: download.php');

?>