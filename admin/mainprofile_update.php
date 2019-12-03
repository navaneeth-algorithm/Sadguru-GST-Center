
<?php
	include 'includes/session.php';

	if(isset($_POST['update'])){
		$id = 1;
		$companyname = $_POST['companyname'];
		$adminname = $_POST['adminname'];
		$adminemail = $_POST['companyemail'];
		$phonenumber = $_POST['companyphone'];

		$address1 = $_POST['address1'];
		$address2 = $_POST['address2'];
		$address3 = $_POST['address3'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$pincode = $_POST['pincode'];

		$registerednumber = $_POST['registrationnumber'];
		$workinghours = $_POST['workinghour'];
		$weeklyholiday = $_POST['weeklyholiday'];
		$establishedin = $_POST['establishedin'];
		$societytype = $_POST['societytype'];
		$dateofregistration = $_POST['dateofregistration'];
		$domainname = $_POST['domainname'];

		$conn = $pdo->open();
			try{
				$stmt = $conn->prepare("UPDATE Parameter SET 
				CompanyName=:companyname,
				Name=:adminname,
				Email=:adminemail,
				PhoneNumber=:phonenumber,
				Address1=:address1,
				Address2=:address2,
				Address3=:address3,
				City=:city,
				Pincode=:pincode,
				State=:state,
				RegisteredNumber=:registerednumber,
				WorkingHours=:workinghours,
				WeeklyHoliday=:weeklyholiday,
				EstablishedIn=:establishedin,
				Type=:societytype,
				DateOfRegistration=:dateofregistration,
				DomainName=:domainname
				WHERE id=:id");
				$stmt->execute([
				'companyname'=>$companyname,
				'adminname'=>$adminname,
				'adminemail'=>$adminemail,
				'phonenumber'=>$phonenumber,
				'address1'=>$address1,
				'address2'=>$address2,
				'address3'=>$address3,
				'city'=>$city,
				'pincode'=>$pincode,
				'state'=>$state,
				'registerednumber'=>$registerednumber,
				'workinghours'=>$workinghours,
				'weeklyholiday'=>$weeklyholiday,
				'establishedin'=>$establishedin,
				'societytype'=>$societytype,
				'dateofregistration'=>$dateofregistration,
				'domainname'=>$domainname,
				'id'=>$id]);
				$_SESSION['success'] = 'Company Profile Updated successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Company Profile form first';
	}

	header('location: mainprofile.php');

?>