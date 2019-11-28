<?php
include("dbConnect.php");
session_start();
$query="SELECT * FROM `Parameter`";
$suc= mysqli_query($conn, $query) or die(mysqli_error($conn));  
if(mysqli_num_rows($suc))
{
  // $row=mysqli_fetch_assoc($suc);
  $row = mysqli_fetch_assoc($suc);
  $companyName = $row['CompanyName'];
  $contactDetails = $row['PhoneNumber'];
  $companyName = $row['CompanyName'];
  $contactDetails = $row['PhoneNumber'];
  $adminName = $row['Name'];
  $adminEmail = $row['Email'];
  $adminPassword = $row['Password'];
  $adminId =1;
  $row = mysqli_fetch_assoc($suc);
  $imagePath = $row['Name'];
  $row = mysqli_fetch_assoc($suc);
  $downloadFolder = $row['Name'];
  $row = mysqli_fetch_assoc($suc);
  $reportFolder = $row['Name'];
  
}

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
		echo '<h2>UnAuthorized</h2>';
		}
	}
	else{
	echo '<h2>UnAuthorized</h2>';
	}

}
else{

//header('location: index.php');
	
}


?>