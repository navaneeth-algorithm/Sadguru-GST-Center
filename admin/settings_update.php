
<?php
	include 'includes/session.php';

	if(isset($_POST['update'])){
        $imageFolder = $_POST['Imagesname'];
        $galleryFolder = $_POST['Galleryname'];
        $directorFolder = $_POST['Directorname'];
        $reportFolder = $_POST['Reportname'];
        $downloadFolder = $_POST['Downloadname'];


		$conn = $pdo->open();
			try{
                $stmt = $conn->prepare("UPDATE Parameter SET Images=:image, GalleryImages=:gallery, DirectorImages=:director, Report=:report, Download=:download WHERE id=1");
                $stmt->execute(['image'=>$imageFolder,'gallery'=>$galleryFolder, 'director'=>$directorFolder, 'report'=>$reportFolder,'download'=>$downloadFolder]);
				$_SESSION['success'] = 'Settings Updates successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Notice Settings form first';
	}

	header('location: settings.php');

?>