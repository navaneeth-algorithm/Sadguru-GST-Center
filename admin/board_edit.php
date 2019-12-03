<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){

		$id = $_POST['id'];
		$name = $_POST['name'];

		$description = $_POST['description'];
		$designation = $_POST['designation'];

		$filename = $_FILES['file']['name'];
		$fileName = strval($id);

		if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $fileName.'.'.$ext;
				move_uploaded_file($_FILES['file']['tmp_name'], '../'.$directorImages.'/'.$new_filename);
						try{
			$stmt = $conn->prepare("UPDATE BoardOfDirectors SET Name=:title,Designation=:designation ,Description=:description, Image=:path WHERE id=:id");
			$stmt->execute(['title'=>$name,'designation'=>$designation,'description'=>$description, 'id'=>$id,'path'=>$new_filename]);
			$_SESSION['success'] = 'Download updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}	
			}
			else{
				$new_filename = '';
						try{
			$stmt = $conn->prepare("UPDATE BoardOfDirectors SET Name=:title,Designation=:designation ,Description=:description WHERE id=:id");
			$stmt->execute(['title'=>$name,'designation'=>$designation,'description'=>$description, 'id'=>$id]);
			$_SESSION['success'] = 'Board Of Directors updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
			}
		


		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Board of Directors form form first';
	}

	header('location: board.php');

?>