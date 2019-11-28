<div class="w3-row">
<table class="w3-table-all w3-hoverable">
    <?php
                  include("dbConnect.php");
                  $query="SELECT * FROM `Links`";
                	$suc= mysqli_query($conn, $query) or die(mysqli_error($conn));  
                  if(mysqli_num_rows($suc))
                  {
                    // $row=mysqli_fetch_assoc($suc);
                    while($row = mysqli_fetch_assoc($suc)) {
        ?>
      <div>
      <h3><a href="<?php echo $row['Link']; ?>"><?php echo $row['Head']; ?></a></h3>
      <?php echo $row['Content']; ?>
      </div>
    <?php
                    }}  
    ?>
  </table>
    

</div>