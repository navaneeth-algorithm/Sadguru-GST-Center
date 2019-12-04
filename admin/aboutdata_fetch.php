<?php
            include 'includes/session.php';
                    $conn = $pdo->open();
                    $nameid = $_GET['nameid'];
                    if(isset($_GET['yearid'])){

                    $yearid = $_GET['yearid'];
                  
                  }
                    
                  $query='';
                    if(isset($_GET['cid'])){

                      if($nameid!=0){
                      $query="SELECT `Id`,`Year` FROM BusinessStatisticsYear WHERE Id NOT IN(SELECT YearId FROM BusinessStatisticsData WHERE NameId=".$nameid.")";
                      }

                    }
                    
                    else{

                            if($yearid==0 && $nameid==0)
                            {
                              $query ="SELECT BusinessStatisticsData.Id as `Id`,`Name`,`Year` ,`Data`
                              FROM `BusinessStatisticsData`
                              LEFT JOIN BusinessStatistics ON BusinessStatistics.Id=BusinessStatisticsData.NameId
                              LEFT JOIN BusinessStatisticsYear ON BusinessStatisticsYear.Id=BusinessStatisticsData.YearId";
                            }
                            else if($nameid==0)
                            {
                              $query ="SELECT BusinessStatisticsData.Id as `Id`,`Name`,`Year` ,`Data`
                              FROM `BusinessStatisticsData`
                              LEFT JOIN BusinessStatistics ON BusinessStatistics.Id=BusinessStatisticsData.NameId
                              LEFT JOIN BusinessStatisticsYear ON BusinessStatisticsYear.Id=BusinessStatisticsData.YearId
                              WHERE BusinessStatisticsData.YearId=".$yearid;
                            }
                            else if($yearid==0)
                            {
                              $query ="SELECT BusinessStatisticsData.Id as `Id`,`Name`,`Year` ,`Data`
                              FROM `BusinessStatisticsData`
                              LEFT JOIN BusinessStatistics ON BusinessStatistics.Id=BusinessStatisticsData.NameId
                              LEFT JOIN BusinessStatisticsYear ON BusinessStatisticsYear.Id=BusinessStatisticsData.YearId
                              WHERE BusinessStatisticsData.NameId=".$nameid;
                            }
                            else{
                              $query ="SELECT BusinessStatisticsData.Id as `Id`,`Name`,`Year` ,`Data`
                              FROM `BusinessStatisticsData`
                              LEFT JOIN BusinessStatistics ON BusinessStatistics.Id=BusinessStatisticsData.NameId
                              LEFT JOIN BusinessStatisticsYear ON BusinessStatisticsYear.Id=BusinessStatisticsData.YearId
                              WHERE BusinessStatisticsData.YearId=".$yearid." AND BusinessStatisticsData.NameId=".$nameid;
                            }
                  
                  
                  }

                    try{
                      //echo $query;
                      $stmt = $conn->prepare($query);
                      $stmt->execute();
                      foreach($stmt as $row){
                        $data[]=$row;
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }
                    $pdo->close();
                    echo json_encode($data);
                  ?>