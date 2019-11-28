<div>
            <?php
                  include("dbConnect.php");
                  $query="SELECT * FROM `Services`";
                	$suc= mysqli_query($conn, $query) or die(mysqli_error($conn));  
                  if(mysqli_num_rows($suc))
                  {
                    // $row=mysqli_fetch_assoc($suc);
                    while($row = mysqli_fetch_assoc($suc)) {

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
                    <?php }}?>
</div>