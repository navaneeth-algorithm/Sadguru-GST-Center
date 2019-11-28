<div class="w3-row">
    <?php
                  include("dbConnect.php");
                  $query="SELECT * FROM `Branch`";
                	$suc= mysqli_query($conn, $query) or die(mysqli_error($conn));  
                  if(mysqli_num_rows($suc))
                  {
                    // $row=mysqli_fetch_assoc($suc);
                    while($row = mysqli_fetch_assoc($suc)) {
        ?>
      <div class="w3-card w3-padding w3-margin">
      <p><?php echo $row['Name']; ?></p>
      <p><?php echo $row['Address']; ?></p>
      <p><?php echo $row['PhoneNumber']; ?></p>
      <p><?php echo $row['EmailId']; ?></p>
      </div>
    <?php
                    }}  
    ?>

</div>