<div class="w3-row">
    <?php
                  $conn = $pdo->open();
                  //include("dbconnect.php");
                                                  
                  $sql = "SELECT * FROM `Branch`";
                  try{
                  $stmt = $conn->prepare($sql);
                  $stmt->execute();
                  foreach($stmt as $row){
                  
        ?>
      <div class="w3-card w3-padding w3-margin">
      <p><?php echo $row['Name']; ?></p>
      <p><?php echo $row['Address']; ?></p>
      <p><?php echo $row['PhoneNumber']; ?></p>
      <p><?php echo $row['EmailId']; ?></p>
      </div>
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