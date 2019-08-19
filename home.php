<div class="w3-margin">
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
    <div class="w3-row w3-xlarge w3-text-red">
        <h3>Profile</h3>
    </div>

    <div class="w3-row">
        <div class="w3-col s4 w3-text-darkblue">
            Name:
        </div>
        <div class="w3-col s8">
            <?php echo $row['Name'];  ?>
        </div>        
    </div>

    <div class="w3-row">
        <div class="w3-col s4 w3-text-darkblue">
        Date of Registration:
        </div>
        <div class="w3-col s8">
            <?php echo $row['Name'];  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4 w3-text-darkblue">
        Address:
        </div>
        <div class="w3-col s8">
            <?php echo $row['Address'];  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4 w3-text-darkblue">
        Phone:
        </div>
        <div class="w3-col s8">
            <?php echo $row['PhoneNumber'];  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4 w3-text-darkblue">
        E_mail:
        </div>
        <div class="w3-col s8">
            <?php echo $row['Email'];  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4 w3-text-darkblue">
        Website:
        </div>
        <div class="w3-col s8">
            <?php echo $row['Name'];  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4 w3-text-darkblue">
        Established In:
        </div>
        <div class="w3-col s8">
            <?php echo $row['EstablishedIn'];  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4 w3-text-darkblue">
        Weekly Holiday:
        </div>
        <div class="w3-col s8">
            <?php echo $row['WeeklyHoliday'];  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4 w3-text-darkblue">
        Working Hours:
        </div>
        <div class="w3-col s8">
            <?php echo $row['Name'];  ?>
        </div>        
    </div>


</div>

  <?php  } ?>
</div>