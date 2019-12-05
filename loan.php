<div>
            <?php

                  $rollingText = '';
                  $conn = $pdo->open();
                  //include("dbconnect.php");

                  $sql = "SELECT * FROM `Loan`";
                  try{
                      $stmt = $conn->prepare($sql);
                      $stmt->execute();
                      foreach($stmt as $row){

             ?>
             <div class="w3-row">
                        <!-- Title -->
                        <a href="#" style="text-decoration:none" class="w3-text-red w3-large"><?php echo $row['Title'];  ?></a>
             </div>
             <div class="w3-row" style="text-align:justify">
                        <!-- Description -->
                        <span><?php echo $row['Description'];  ?></span>
             </div>
             <span class="w3-margin"></span>
                    <?php 
                    
                    
                  }
                // $_SESSION['success'] = 'Data added Successfully';
              }
              catch(PDOException $e){
                  $_SESSION['error'] = $e->getMessage();
              }
              $pdo->close();     
                    
                    
                    ?>
</div>