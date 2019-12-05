<div class="w3-row">
<table class="w3-table-all w3-hoverable">
    <?php
                  
                  $conn = $pdo->open();
                  //include("dbconnect.php");
                                                  
                  $sql = "SELECT * FROM `Links`";
                  try{
                  $stmt = $conn->prepare($sql);
                  $stmt->execute();
                  foreach($stmt as $row){
                  
        ?>
      <div>
      <h3><a href="<?php echo $row['Link']; ?>"><?php echo $row['Head']; ?></a></h3>
      <?php echo $row['Content']; ?>
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
  </table>
    

</div>