<?php
	include 'includes/session.php';

	if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'home.php';
	}

	if(isset($_POST['save'])){
		$curr_password = $_POST['curr_password'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		if(sha1($curr_password)== $adminPassword){
			if(sha1($password) == $adminPassword){
				$password = $adminPassword;
			}
			else{
				$password = sha1($password);
			}

			$conn = $pdo->open();

			try{
				$stmt = $conn->prepare("UPDATE Parameter SET Email=:email, Password=:password, Name=:firstname WHERE id=:id");
				$stmt->execute(['email'=>$email, 'password'=>$password, 'firstname'=>$firstname,'id'=>$adminId]);

				$_SESSION['success'] = 'Account updated successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

			$pdo->close();
			
		}
		else{
			$_SESSION['error'] = 'Incorrect password';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up required details first';
	}

	//header('location:'.$return);

?>