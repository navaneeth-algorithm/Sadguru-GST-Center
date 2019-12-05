<!-- Add -->
<div class="modal fade" id="viewtable">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Data Table</b></h4>
            </div>
            <div class="modal-body">
              
             
              
              
              <table class="table table-bordered table-striped">

              <tr>
                      <th>Name</th>
                    <?php
                          $conn = $pdo->open();

                          try{
                            $stmt = $conn->prepare("SELECT * FROM `BusinessStatisticsYear`");
                            $stmt->execute();
                            foreach($stmt as $row){
                              echo "<th>Year ".$row['Year']."</th>";
                            }
                          }
                          catch(PDOException $e){
                            echo $e->getMessage();
                          }

                          $pdo->close();
                  ?>
              </tr>
              <?php
                          $conn = $pdo->open();

                          try{
                            $stmt = $conn->prepare("SELECT * FROM `BusinessStatistics`");
                            $stmt->execute();
                            
                            foreach($stmt as $row){
                              echo "<tr><td>".$row['Name']."</td>";
                              $stmtData = $conn->prepare("SELECT * FROM `BusinessStatisticsData` WHERE NameId=".$row['Id']);
                              $stmtData->execute();
                              foreach($stmtData as $rowData){
                              echo "<td>".$rowData['Data']."</td>";

                              }

                              echo "</tr>";
                            }
                          }
                          catch(PDOException $e){
                            echo $e->getMessage();
                          }

                          $pdo->close();
                  ?>        



              </table>
              
              
              

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

