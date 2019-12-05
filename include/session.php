<?php
	session_start();
	include 'dbConnect/dbConnect.php';
	if(isset($_SESSION['admin'])){
		header('location: admin/loan.php');
	}
	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM Parameter");
	$stmt->execute();
	$row = $stmt->fetch();


  	$companyName = $row['CompanyName'];
	$contactDetails = $row['PhoneNumber'];
	$address1 = $row['Address1'];  
	$address2 = $row['Address2'];  
	$address3 = $row['Address3'];  
	$city = $row['City'];
	$pincode = $row['Pincode'];
	$state = $row['State'];
	$adminName = $row['Name'];
	$adminEmail = $row['Email'];
	$registrationnumber = $row['RegisteredNumber'];
	$workinghour = $row['WorkingHours'];
	$weeklyholiday = $row['WeeklyHoliday'];
	$establishedin = $row['EstablishedIn'];
	$societytype = $row['Type'];
	$dateofregistration = $row['DateOfRegistration'];
	$domainname = $row['DomainName'];


	$adminPassword = $row['Password'];
	$adminId =1;
	$presidentMessage = $row['Message'];
	$imagePath = $row['Images'];
	$galleryImages = $row['GalleryImages'];  
	$adminPhoto = '';
	$downloadFolder = $row['Download'];
	$directorImages = $row['DirectorImages'];  
  	$reportFolder = $row['Report'];


	$pdo->close();
?>