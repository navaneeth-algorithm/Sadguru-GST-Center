<div class="w3-container">

<div>
    <div class="w3-col s6">

        <!-- Here Goes 2 Profile President and VicePresident -->
        <?php
            $designationArray = array();
            include("dbconnect.php");
            $sql = "SELECT * FROM designation";
            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)){
                    $designationArray[$row['id']] = $row['Name'];
                }
            }
            print_r($designationArray);
            $sql = "SELECT * FROM boarddirector WHERE designation IN (1,2)";
            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            if (mysqli_num_rows($result) > 0) {
             // output data of each row
            //Fetch President Row
            $row = mysqli_fetch_assoc($result);
            $presidentName = $row['Name'];
            $presidentDesc = $row['Description'];
            $presidentImage = $row['Image'];
            
            //Fetch Vice President Row
            $row = mysqli_fetch_assoc($result);
            $vicepresidentName = $row['Name'];
            $vicepresidentDesc = $row['Description'];
            $vicepresidentImage = $row['Image'];
            }
        ?>
        <div class="w3-row">
            <div class="w3-col s6">
              <span class="" style="margin-left:34px">This is president</span>

              <!-- Here Goes DisplayCard of President -->
                <div class="w3-card w3-light-grey w3-margin">
                    <img src="images/President.png" height="50" width="50" style="width:100%;height:100%">
                    <div class="w3-container w3-center">
                        <span><?php echo $presidentName;  ?></span>
                    </div>
                    <div class="w3-container w3-center">
                        <span><?php echo $presidentDesc;  ?></span>
                    </div>
                </div>
              
            </div>

            <div class="w3-col s6">
              <span class="" style="margin-left:34px">This is president</span>
              
              <!-- Here Goes DisplayCard of Vice President -->
                <div class="w3-card w3-light-grey w3-margin">
                    <img src="images/President.png" height="50" width="50" style="width:100%;height:100%">
                    <div class="w3-container w3-center">
                        <span><?php echo $vicepresidentName;  ?></span>
                    </div>
                    <div class="w3-container w3-center">
                        <span><?php echo $vicepresidentDesc;  ?></span>
                    </div>
                </div>
              
            </div>

        </div>


        <span class="w3-row">This is Directors Place</span>
        <?php 
            
            $countRow = 1;
            $countCol = 1;
            while($countRow++<=3){
        ?>
            <div class="w3-row">
        <?php
                while($countCol++<=3){
         ?>
        
            <div class="w3-col s4">
                
                <?php include('include/cardDisplay.php'); ?>
            </div>
                <?php } $countCol = 1;?>
           
        </div>
                <?php } ?>
        


    </div>

    <div class="w3-col s6">

            <div class="w3-card" style="width:50%;margin-left:150px">
                <span class="w3-margin">Message from President</span>
                <img src="images/President.png" alt="Person" style="width:100%">
                <div class="w3-container">
                    <h4><b>Simon</b></h4>
                    <p>The boss of all bosses</p>
                </div>
            </div>
    </div>

</div>

</div>