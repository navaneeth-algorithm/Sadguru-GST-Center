<table class="w3-table-all w3-hoverable">

<tr>
        <th>Name</th>
        <?php
         $rollingText = '';
       $conn = $pdo->open();
                                //include("dbconnect.php");
                                
       $sql = "SELECT * FROM `BusinessStatisticsYear`";
                                try{
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      foreach($stmt as $row){

        ?>
        <th>Year <?php echo $row['Year']; ?></th>
        <?php 
         }
         // $_SESSION['success'] = 'Data added Successfully';
      }
      catch(PDOException $e){
          $_SESSION['error'] = $e->getMessage();
      }
  $pdo->close();     
        ?>

 </tr>
    <?php 

    //print_r($dataPointsWithName);
    $countData = 0;
    foreach($dataPoints as $data)
    {
    ?>
    <tr>
        <td><?php echo $dataPointsWithName[$countData++] ?></td>
        <?php foreach($data as $points)
        {
            

        ?>

        <td><?php echo $points["y"]; ?></td>
        <?php }?>
        </tr>
    <?php }
    ?>
</table>