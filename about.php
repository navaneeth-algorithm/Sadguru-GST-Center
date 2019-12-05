<div class="">

        <?php
                  
                  $query="SELECT * FROM `About`";
                	try{
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    foreach($stmt as $row){
        ?>
        <div class="w3-row">
            <!-- Title of Content -->
            <span class="w3-text-red w3-large"><?php echo $row['Title'];  ?></span>
        </div>
        <div class="w3-row" style="text-align:justify">
            <!-- Decription -->
            <?php echo $row['Content'];  ?>
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
      <!--Buisness Statastics  -->
     <?php include('include/BuisnessStatastics.php'); ?>
</div>