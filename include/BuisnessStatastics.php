<!-- Here Goes Buisness Statastics Table -->
<div class="w3-row w3-margin">
<?php
		include("dbConnect.php");
		$buisnessStatasticQuery="SELECT * FROM `BusinessStatistics`";
		$buisnessStatasticQueryResult= mysqli_query($conn, $buisnessStatasticQuery) or die(mysqli_error($conn));  
		if(mysqli_num_rows($buisnessStatasticQueryResult))
		{
		// $row=mysqli_fetch_assoc($suc);
		$dataPoints = array();
		$dataPointsWithName = array();
		$noData = 0;
			while($buisnessStatasticRow = mysqli_fetch_assoc($buisnessStatasticQueryResult))
			{
				$buisnessStatasticName = $buisnessStatasticRow['Name'];
				$buisnessStatasticId= $buisnessStatasticRow['Id'];
				$temp = array();
				$buisnessStatasticYearQuery="SELECT * FROM `BusinessStatisticsYear`";
				$buisnessStatasticYearQueryResult= mysqli_query($conn, $buisnessStatasticYearQuery) or die(mysqli_error($conn));
				if(mysqli_num_rows($buisnessStatasticYearQueryResult))
				{
					while($buisnessStatasticYearRow = mysqli_fetch_assoc($buisnessStatasticYearQueryResult))
					{
						$buisnessStataticYearId = $buisnessStatasticYearRow['Id'];
						$buisnessStataticYearName = $buisnessStatasticYearRow['Year'];
						$buisnessStatasticDataQuery="SELECT * FROM `BusinessStatisticsData` WHERE NameId=$buisnessStatasticId AND YearId=$buisnessStataticYearId";
						$buisnessStatasticDataQueryResult= mysqli_query($conn, $buisnessStatasticDataQuery) or die(mysqli_error($conn));
						if(mysqli_num_rows($buisnessStatasticDataQueryResult))
						{
							while($buisnessStatasticDataRow = mysqli_fetch_assoc($buisnessStatasticDataQueryResult))
							{
								$buisnessStatasticData = $buisnessStatasticDataRow['Data'];
								$tempArray["label"] = " ".$buisnessStataticYearId;
								$tempArray["y"] = $buisnessStatasticData;
							 
							}
						}
						array_push($temp,$tempArray);
						
					}
					
					
				}
				
				$dataPoints[$noData] = $temp;
				$dataPointsWithName[$noData] = $buisnessStatasticName;
				$noData++;
			}
		}
			?>
    <?php include("include/BuisnessStatasticsTable.php");   ?>  
</div> 
 <!-- Here Goes BuisnessStatastics  Graph -->
 <div class="w3-row">
      <?php include("include/BuisnessStatasticsGraph.php");   ?>
</div>