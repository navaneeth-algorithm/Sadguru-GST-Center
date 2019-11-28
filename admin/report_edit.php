<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$description = $_POST['description'];
		$filename = $_FILES['file']['name'];
		$fileName = strval($id);
		if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $fileName.'.'.$ext;
				move_uploaded_file($_FILES['file']['tmp_name'], '../report/'.$new_filename);
						try{
			$stmt = $conn->prepare("UPDATE Report SET Head=:title, Content=:description, path=:path WHERE id=:id");
			$stmt->execute(['title'=>$name,'description'=>$description, 'id'=>$id,'path'=>$new_filename]);
			$_SESSION['success'] = 'Download updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}	
			}
			else{
				$new_filename = '';
						try{
			$stmt = $conn->prepare("UPDATE Report SET Head=:title, Content=:description WHERE id=:id");
			$stmt->execute(['title'=>$name,'description'=>$description, 'id'=>$id]);
			$_SESSION['success'] = 'Report updated successfully';
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

	//header('location: report.php');

?>