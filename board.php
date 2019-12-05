<div class="w3-container">

<div class="">
    <div class="w3-col s6">

        <!-- Here Goes 2 Profile President and VicePresident -->
        <?php
            $designationArray = array();

                                $conn = $pdo->open();

                                //include("dbconnect.php");
                                
                                $sql = "SELECT * FROM Designation";
                                try{
                                    $stmt = $conn->prepare($sql);
                                    $stmt->execute();
                                    foreach($stmt as $row){

                                        $designationArray[$row['id']] = $row['Name'];
                                    }
                                   // $_SESSION['success'] = 'Data added Successfully';
                                   $sql = "SELECT * FROM BoardOfDirectors WHERE designation IN (1,2)";
                                   $stmt = $conn->prepare($sql);
                                   $stmt->execute();
                                   $row = $stmt->fetch();
                                   $presidentName = $row['Name'];
                                   $presidentDesc = $row['Description'];
                                   $presidentImage = $row['Image'];

                                   $row = $stmt->fetch();
                                   $vicepresidentName = $row['Name'];
                                   $vicepresidentDesc = $row['Description'];
                                   $vicepresidentImage = $row['Image'];
                                }
                                catch(PDOException $e){
                                    $_SESSION['error'] = $e->getMessage();
                                }


                            $pdo->close();     
        ?>
        
        <div class="w3-row">
            <div class="w3-col s6">
              <span class="w3-text-red w3-large" style="margin-left:34px">President</span>

               
                    <div class="w3-card w3-margin">
                        <img src="<?php echo $directorImages."/".$presidentImage;  ?>" width=200px height=200px style="width:100%">
                        <div class="w3-container">
                            <p><?php echo $presidentName; ?></p>
                        </div>
                    </div>
                
            </div>
            
            <div class="w3-col s6">
              <span class="w3-text-red w3-large" style="margin-left:34px">Vice President</span>
              
              <!-- Here Goes DisplayCard of Vice President -->
              <!--  <div class="w3-card w3-light-grey w3-margin">
                    <img src="<?php //echo $imagePath."/".$vicepresidentImage;  ?>" height="50" width="50" style="width:100%;height:100%">
                    <div class="w3-container w3-center">
                        <span><?php //echo $vicepresidentName;  ?></span>
                    </div>
                    <div class="w3-container w3-center">
                        <span><?php //echo $vicepresidentDesc;  ?></span>
                    </div>
                </div>  -->

                
                    <div class="w3-card w3-margin">
                        <img src="<?php echo $directorImages."/".$vicepresidentImage;  ?>" width=200px height=200px style="width:100%">
                        <div class="w3-container">
                            <p><?php echo $vicepresidentName;  ?></p>
                        </div>
                    </div>
                
              
            </div>

        </div>
        

        <span class="w3-row w3-text-red w3-large">Directors</span>

        
           
        <?php 
             //include("dbconnect.php");
            $sql = "SELECT count(*) as totalDirector FROM BoardOfDirectors WHERE designation IN (3)";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch();
            $totalDirector = $row['totalDirector'];

            $sql = "SELECT * FROM BoardOfDirectors WHERE designation IN (3)";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            foreach($stmt as $row){
                $directorName = $row['Name'];
                $directorDescription = $row['Description'];
                      
        ?>
            
            
                <!--  Here Goes Descrption of Directors -->
     

            
                <div class="w3-col s4 w3-margin">
                    <div class="w3-card">
                        <img src="<?php echo $directorImages."/".$row['Image'];  ?>" width=100px height=100px style="width:100%">
                        <div class="w3-container">
                            <p><?php echo $directorName; ?></p>
                        </div>
                    </div>
                </div>
               <!-- <div class="w3-card w3-light-grey">
                <img src="<?php //echo $imagePath."/".$row['Image'];  ?>" height="200px" width="200px" style="width:100%;height:100%">
                <div class="w3-container w3-center">
                        <?php //echo $directorName; ?>
                </div>
                <div class="w3-container">
                        <?php //echo $directorDescription; ?>
                </div>
                </div> -->
             <?php  
                
            }?>
            
       
    </div>

    <div class="w3-col s6">

            <div class="w3-card" style="width:50%;margin-left:150px">
                <span class="w3-margin w3-large w3-text-red"> President Message</span>
                <img src="<?php echo $directorImages."/".$presidentImage;  ?>" alt="Person" style="width:100%">
                <div class="w3-container">
                    
                    <p><?php echo $presidentName;?></p>
                </div>
            </div>
    </div>

</div>

</div>
