<div class="w3-row">
<table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-light-grey">
        <th>File Name</th>
        <th>Description</th>
        <th>Download</th>
      </tr>
    </thead>
    <?php
                
                $conn = $pdo->open();
                //include("dbconnect.php");
                                                  
                 $sql = "SELECT * FROM `Download`";
                 try{
                 $stmt = $conn->prepare($sql);
                 $stmt->execute();
                 foreach($stmt as $row){
        ?>
    <tr>
      <td><?php echo $row['Head']; ?></td>
      <td><?php echo $row['Content']; ?></td>
      <td><a href="<?php echo $downloadFolder."/".$row['path'] ?>"><i class='fa fa-fw fa-download'></i></a></td>
    </tr>
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