<?php
	include 'includes/session.php';

	if(isset($_POST['update'])){
		$id = 1;
		$oldpassword = $_POST['oldpassword'];
		$encoldpassword = sha1($oldpassword);

		$newpassword = $_POST['newpassword'];
		$confirmpassword =  $_POST['repassword'];

		if($encoldpassword==$adminPassword){

			if($newpassword!=$confirmpassword){
				$_SESSION['error'] ="Password Mismatch";
			}
			else{

				$encnewpassword = sha1($newpassword);
			try{
				$stmt = $conn->prepare("UPDATE Parameter SET Password=:password WHERE id=:id");
				$stmt->execute(['password'=>$encnewpassword,'id'=>$id]);
				$_SESSION['success'] = 'Password updated successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		
		}

		}
		else{
			$_SESSION['error'] = 'Unauthorized Person.Password did not Update';
		}

		
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Enter Password First';
	}

	header('location: password.php');

?>