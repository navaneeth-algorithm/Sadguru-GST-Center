<!-- Here Goes Buisness Statastics Table -->
<div class="w3-row w3-margin">
<?php
		//include("dbConnect.php");
		try{
		$buisnessStatasticQuery="SELECT * FROM `BusinessStatistics`";
		$buisnessStatasticQueryResult= $conn->prepare($buisnessStatasticQuery); 
		$buisnessStatasticQueryResult->execute();
		// $row=mysqli_fetch_assoc($suc);
		$dataPoints = array();
		$dataPointsWithName = array();
		$noData = 0;
		foreach($buisnessStatasticQueryResult as $buisnessStatasticRow){



				$buisnessStatasticName = $buisnessStatasticRow['Name'];
				
				$buisnessStatasticId= $buisnessStatasticRow['Id'];
				$temp = array();

				$buisnessStatasticYearQuery="SELECT * FROM `BusinessStatisticsYear`";
				$buisnessStatasticYearQueryResult= $conn->prepare($buisnessStatasticYearQuery); 
				$buisnessStatasticYearQueryResult->execute();


				foreach($buisnessStatasticYearQueryResult as $buisnessStatasticYearRow){

						$buisnessStataticYearId = $buisnessStatasticYearRow['Id'];
						$buisnessStataticYearName = $buisnessStatasticYearRow['Year'];


						$buisnessStatasticDataQuery="SELECT * FROM `BusinessStatisticsData` WHERE NameId=$buisnessStatasticId AND YearId=$buisnessStataticYearId";
						$buisnessStatasticDataQueryResult= $conn->prepare($buisnessStatasticDataQuery);
						$buisnessStatasticDataQueryResult->execute();

							foreach($buisnessStatasticDataQueryResult as $buisnessStatasticDataRow){

								$buisnessStatasticData = $buisnessStatasticDataRow['Data'];
								$tempArray["label"] = " ".$buisnessStataticYearId;
								$tempArray["y"] = $buisnessStatasticData;
							 
							}
						
						array_push($temp,$tempArray);
						
					}
					
					
				
				
				$dataPoints[$noData] = $temp;
				$dataPointsWithName[$noData] = $buisnessStatasticName;
				$noData++;
			
		}
	}    catch(PDOException $e){
		$_SESSION['error'] = $e->getMessage();
		echo $_SESSION['error'];
	}
			//print_r($dataPointsWithName);?>
    <?php include("include/BuisnessStatasticsTable.php");   ?>  
</div> 
 <!-- Here Goes BuisnessStatastics  Graph -->
 <div class="w3-row">
      <?php include("include/BuisnessStatasticsGraph.php");   ?>
</div>