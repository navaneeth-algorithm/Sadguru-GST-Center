<div class="w3-row w3-margin" id="depositsList">
    

  <table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-light-grey">
        <th>Deposits</th>
        <th>Go To</th>
      </tr>
    </thead>
    

    <?php
                  $conn = $pdo->open();
                  $sql = "SELECT * FROM `Deposits`";
                  try{
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    foreach($stmt as $row){

  

             ?>
             
                <tr>
                  <td><?php echo $row['Title'];  ?></td>
                  <td><a href="#<?php echo $row["shortName"]; ?>">Click Here</a></td>
                </tr>
                
                <?php
                    }
                   // $_SESSION['success'] = 'Data added Successfully';
                }
                catch(PDOException $e){
                    $_SESSION['error'] = $e->getMessage();
                }
            $pdo->close();   ?>
                  </table>
</div>
           
<div class="w3-center">
            <?php
                  $conn = $pdo->open();
                  $sql = "SELECT * FROM `Deposits`";
                  try{
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    foreach($stmt as $row){

             ?>
             <div class="w3-row" id="<?php echo $row["shortName"]; ?>">
                        <!-- Title -->
                        <span class="w3-text-red w3-large"><?php echo $row['Title'];  ?></span>
                        
             </div>
             <div class="w3-row" style="text-align:justify">
                        <!-- Description -->
                        <span><?php echo $row['Description'];  ?></span><br>
                        
              <div class="w3-row  w3-light-gray" style="margin-top:10px;">
                <?php 
                        //include($row["shortNameContent"].".php");
                        //include("sadhguruCashCertificateContent.php");
                  ?>
            </div>
              <div class="w3-row  w3-light-gray" style="margin-top:10px;">
                <?php 
                       include($row["shortName"].".php");
                        //include("sadhguruCashCertificate.php");
                  ?>
            </div>
             </div>
             <span class="w3-margin"></span>
                    <?php }
                   // $_SESSION['success'] = 'Data added Successfully';
                }
                catch(PDOException $e){
                    $_SESSION['error'] = $e->getMessage();
                }
            $pdo->close(); ?>
            <span class='w3-button w3-dark-gray w3-margin'><a href='#depositsList' style='text-decoration:none'>Move Up</a></span>
</div>