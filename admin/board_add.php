
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$conn = $pdo->open();
		$title = $_POST['name'];
		$description = $_POST['description'];

		$designation = $_POST['designation'];
		//echo "<script>alert(".$_FILES['file']['name'].");</script>";
		$filename =basename( $_FILES['file']['name']);

		$stmt = $conn->prepare("SELECT MAX(id) AS maxid FROM BoardOfDirectors");
		$stmt->execute();
		$maxId = $stmt->fetch();
		$maxId = $maxId['maxid'];
		$desId = $designation;

		$fileName = strval($maxId+1);
		if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $fileName.'.'.$ext;
				move_uploaded_file($_FILES['file']['tmp_name'], '../'.$directorImages.'/'.$new_filename);
				echo $fileName;	
			}
			else{
				$new_filename = '';
			}

		
			try{
				$stmt = $conn->prepare("INSERT INTO `BoardOfDirectors` (`Name`,`Designation`,`Description`,`Image`) VALUES (:name,:designation,:description,:path)");
				$stmt->execute(['name'=>$title,'designation'=>$desId,'description'=>$description,'path'=>$new_filename]);
				$_SESSION['success'] = 'designation Details added successfully';
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