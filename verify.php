<?php
include("include/session.php");


if(isset($_POST['email']))
{
	$pass = $_POST['password'];
	$email = $_POST['email'];
	if($email==$adminEmail)
	{
		if(sha1($pass)==$adminPassword){
			$_SESSION['admin'] = 1;
			header('location: admin/loan.php');
		}
		else
		{
		$_SESSION['error'] = 'UnAuthorized';
		}
	}
	else{
	$_SESSION['error'] = 'UnAuthorized';
	}

}
else{

header('location: login.php');
	
}

header('location: login.php');
?>