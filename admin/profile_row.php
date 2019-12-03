<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		
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
  
        $row = $stmt->fetch();
        $imagePath = $row['Name'];
        $adminPhoto = '';
  
        $row = $stmt->fetch();
        $downloadFolder = $row['Name'];
  
        $row = $stmt->fetch();
        $reportFolder = $row['Name'];

        $row = $stmt->fetch();
        $DirectorImages = $row['Name'];

        
        $data['CompanyName'] = $companyName;
        $data['PhoneNumber'] = $contactDetails;
        $data['AdminName'] = $adminName;
        $data['AdminEmail'] = $adminEmail;
        $data['AdminPassword'] = $adminPassword;
        $data['GalleryImage'] = $imagePath;
        $data['DirectorImage'] = $DirectorImages;
        $data['ReportFolder'] = $reportFolder;
        $data['DownloadFolder'] = $downloadFolder;

		$pdo->close();

		echo json_encode($data);
	}
?>