<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM Parameter");
		$stmt->execute();
        $row = $stmt->fetch();
        
        $data['CompanyName'] = $row['CompanyName'];
        $data['PhoneNumber'] = $row['PhoneNumber'];
        $data['Name'] = $row['Name'];
        $data['Email'] = $row['Email'];
        $data['Password'] = $row['Password'];
        $adminId =1;
        $data['Message'] = $row['Message'];
        $data['Images'] = $row['Images'];
        $data['GalleryImages'] = $row['GalleryImages'];  
        $adminPhoto = '';
        $data['Download'] = $row['Download'];
        $data['DirectorImages'] = $row['DirectorImages'];  
        $data['Report'] = $row['Report'];

		$pdo->close();

		echo json_encode($data);
	}
?>