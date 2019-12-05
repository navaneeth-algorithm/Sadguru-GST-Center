<div class="">
 <?php
                  $conn = $pdo->open();
                  //include("dbconnect.php");
                                                  
                  $sql = "SELECT * FROM `gallery`";
                  try{
                  $stmt = $conn->prepare($sql);
                  $stmt->execute();
                  $count = 0;
                  foreach($stmt as $row){
 
                      ?>
                        <div class="w3-col s4 w3-margin">
                          <div class="w3-card">
                          <img src="<?php echo $galleryImages.'/'.$row['path']; ?>" width=200px height=200px style="width:100%">
                          <div class="w3-container">
                            <p><?php echo $row['title']; ?></p>
                          </div>
                        </div>
                      </div>
                      <!--  <div class="w3-third w3-col s4 w3-margin" >
                            <div class="w3-card">
                            <img src=<?php //echo $path.'/'.$row['path']; ?> style="width:100%">
                            <div class="w3-container">
                                <h5><?php //echo $row['title'];?></h5>
                            </div>
                            </div>
                        </div>
                    -->
                <?php $count = $count +1;                                     }
                                   // $_SESSION['success'] = 'Data added Successfully';
                                }
                                catch(PDOException $e){
                                    $_SESSION['error'] = $e->getMessage();
                                }
                            $pdo->close();  ?>
                
</div>
