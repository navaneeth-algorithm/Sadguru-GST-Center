<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$filename = $_FILES['gallery']['name'];
		$fileName = strval($id);
		if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $fileName.'.'.$ext;
				move_uploaded_file($_FILES['gallery']['tmp_name'], '../'.$galleryImages.'/'.$new_filename);
						try{
			$stmt = $conn->prepare("UPDATE Gallery SET title=:title, path=:path WHERE id=:id");
			$stmt->execute(['title'=>$name,'id'=>$id,'path'=>$new_filename]);
			$_SESSION['success'] = 'Gallery updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}	
			}
			else{
				$new_filename = '';
						try{
			$stmt = $conn->prepare("UPDATE Gallery SET title=:title WHERE id=:id");
			$stmt->execute(['title'=>$name,'id'=>$id]);
			$_SESSION['success'] = 'Gallery updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
			}
		


		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit Report form first';
	}

	header('location: gallery.php');

?>