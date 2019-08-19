<div class="">
 <?php
                  include("dbConnect.php");
                  $query="SELECT Name FROM `parameter` WHERE id=2";
                  $suc= mysqli_query($conn, $query) or die(mysqli_error($conn));
                  $row = mysqli_fetch_assoc($suc);
                  $path = $row['Name'];
                  //echo $path;
                  //echo $path;
                  $query="SELECT * FROM `gallery`";
                	$suc= mysqli_query($conn, $query) or die(mysqli_error($conn));  
                  if(mysqli_num_rows($suc))
                  {
                    $count=1;
                    // $row=mysqli_fetch_assoc($suc);
                    while($row = mysqli_fetch_assoc($suc)) {
                      ?>
                        <div class="w3-third w3-col s4 w3-margin" >
                            <div class="w3-card">
                            <img src=<?php echo $path.'/'.$row['path']; ?> style="width:100%">
                            <div class="w3-container">
                                <h5><?php echo $row['title'];?></h5>
                            </div>
                            </div>
                        </div>
                <?php $count = $count +1; }} ?>
                
</div>
