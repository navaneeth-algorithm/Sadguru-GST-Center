
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$conn = $pdo->open();
		$title = $_POST['name'];
		//echo "<script>alert(".$_FILES['file']['name'].");</script>";
		$filename =basename( $_FILES['file']['name']);

		$stmt = $conn->prepare("SELECT MAX(id) AS maxid FROM Gallery");
		$stmt->execute();
		$maxId = $stmt->fetch();
		$maxId = $maxId['maxid'];
		$fileName = strval($maxId+1);
		
		if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $fileName.'.'.$ext;
				move_uploaded_file($_FILES['file']['tmp_name'], '../'.$galleryImages.'/'.$new_filename);
				//echo $fileName;	
			}
			else{
				$new_filename = '';
			}

		
			try{
				$stmt = $conn->prepare("INSERT INTO `Gallery` (`title`,`Path`) VALUES (:title,:path)");
				$stmt->execute(['title'=>$title,'path'=>$new_filename]);
				$_SESSION['success'] = 'Gallery Details Added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Gallery form first';
	}

	header('location: gallery.php');

?>