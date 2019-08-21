<div class="">

        <?php
                  include("dbConnect.php");
                  $query="SELECT * FROM `about`";
                	$suc= mysqli_query($conn, $query) or die(mysqli_error($conn));  
                  if(mysqli_num_rows($suc))
                  {
                    // $row=mysqli_fetch_assoc($suc);
                    while($row = mysqli_fetch_assoc($suc)) {
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
        <?php }} ?>
      <div class="w3-row">
      <?php include("include/Graph.php");   ?>
      </div>
</div>