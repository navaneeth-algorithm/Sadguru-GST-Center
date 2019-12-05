<div>
            <?php
                  
                  $conn = $pdo->open();
                  //include("dbconnect.php");
                  
                  $sql = "SELECT * FROM `Services`";
                  try{
                      $stmt = $conn->prepare($sql);
                      $stmt->execute();
                      foreach($stmt as $row){

             ?>
             <div class="w3-row">
                        <!-- Title -->
                        <a href="#" style="text-decoration:none" class="w3-text-red w3-large"><?php echo $row['Head'];  ?></a>
             </div>
             <div class="w3-row" style="text-align:justify">
                        <!-- Description -->
                        <span><?php echo $row['Content'];  ?></span>
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