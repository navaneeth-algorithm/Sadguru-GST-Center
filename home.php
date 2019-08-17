<?php
    
  include("dbconnect.php");
  
  $sql = "SELECT * FROM parameter";
  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
     $row = mysqli_fetch_assoc($result);
          
?>

<div class="w3-row">
    <!-- Profile Part -->
    <div class="w3-row">
        <h3>Profile</h3>
    </div>

    <div class="w3-row">
        <div class="w3-col s4">
            Name:
        </div>
        <div class="w3-col s8">
            <?php echo $row['Name'];  ?>
        </div>        
    </div>

    <div class="w3-row">
        <div class="w3-col s4">
        Date of Registration:
        </div>
        <div class="w3-col s8">
            <?php echo $row['Name'];  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4">
        Address:
        </div>
        <div class="w3-col s8">
            <?php echo $row['Address'];  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4">
        Phone:
        </div>
        <div class="w3-col s8">
            <?php echo $row['PhoneNumber'];  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4">
        E_mail:
        </div>
        <div class="w3-col s8">
            <?php echo $row['Email'];  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4">
        Website:
        </div>
        <div class="w3-col s8">
            <?php echo $row['Name'];  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4">
        Established In:
        </div>
        <div class="w3-col s8">
            <?php echo $row['EstablishedIn'];  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4">
        Weekly Holiday:
        </div>
        <div class="w3-col s8">
            <?php echo $row['WeeklyHoliday'];  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4">
        WORKING Hours:
        </div>
        <div class="w3-col s8">
            <?php echo $row['Name'];  ?>
        </div>        
    </div>


</div>

  <?php  } ?>