<div class="w3-margin" >
<?php
include("dbConnect.php");
$query="SELECT * FROM `designation`";
$suc= mysqli_query($conn, $query) or die(mysqli_error($conn));  
if(mysqli_num_rows($suc))
{
  // $row=mysqli_fetch_assoc($suc);
  while($row = mysqli_fetch_assoc($suc)) {

?> 
    <span class="w3-margin"></span>
    <div  class="w3-row w3-large w3-text-red"><?php echo $row['Name']; ?><!--Designation of Board of#bbf2e8;  directors--></div>
        
  
    <?php
              $id=$row['id'];
              $innerquery="SELECT * FROM `boarddirector` WHERE Designation=$id";
              $suc1= mysqli_query($conn, $innerquery) or die(mysqli_error($dbcon)); 
              while($row1 = mysqli_fetch_assoc($suc1)) {
                

            ?> 
    <div class="w3-row"><?php echo $row1['Name']; ?><!--Name of Board of directors--></div>
    <?php
              }}} ?>
</div>