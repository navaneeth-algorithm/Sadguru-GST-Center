 <?php
	include '../dbConnect/dbConnect.php';
	session_start();

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: ../index.php');
		exit();
	}
    


	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM Parameter");
	$stmt->execute();
	$row = $stmt->fetch();


  	$companyName = $row['CompanyName'];
  	$contactDetails = $row['PhoneNumber'];
	$adminName = $row['Name'];
	$adminEmail = $row['Email'];
	$adminPassword = $row['Password'];
	$adminId =1;
	$imagePath = $row['Images'];
	$galleryImages = $row['GalleryImages'];  
	$adminPhoto = '';
	$downloadFolder = $row['Download'];
	$directorImages = $row['DirectorImages'];  
  	$reportFolder = $row['Report'];


	$pdo->close();

?>