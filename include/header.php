
<?php
include("dbConnect.php");
$query="SELECT * FROM `parameter`";
$suc= mysqli_query($conn, $query) or die(mysqli_error($conn));  
if(mysqli_num_rows($suc))
{
  // $row=mysqli_fetch_assoc($suc);
  $row = mysqli_fetch_assoc($suc);
  $companyName = $row['CompanyName'];
  $contactDetails = $row['PhoneNumber'];
  $row = mysqli_fetch_assoc($suc);
  $imagePath = $row['Name'];
  $row = mysqli_fetch_assoc($suc);
  $downloadFolder = $row['Name'];
  
}
?>

<header class="">    
                    <div class="w3-container w3-hover-shadow w3-white w3-row w3-margin">
                        <!-- Navigation Bar Container -->

                        <div class="w3-row w3-margin">
                            <!-- Row containing Logo  -->
                            <div class="w3-col s6"><img src=<?php echo $imagePath."/Logo.jpg"  ?> heigth="100px" width="100px"></div>
                        </div>

                        <div class="w3-row w3-margin" >
                            <!-- Row containing contact Details  -->
                            <div class="w3-col s6" >
                                <!-- Name of company -->
                                <span class="w3-xlarge w3-text-red" ><?php echo $companyName;  ?></span>
                            </div>

                            <div class="w3-col s6" align="right">
                                <!-- Contact Details -->
                                <i class="fa fa-phone w3-xlarge w3-text-red" aria-hidden="true"></i> <span class="w3-xlarge w3-text-red" ><?php echo $contactDetails;  ?></span>
                            </div>

                        </div>

                        <div class="w3-bar w3-row ">
                            <!-- Row containing Navigation Details  -->
                            <a href="index.php?page=home" class="w3-bar-item w3-button ">Home</a>
                            <a href="headfootTemp.php?page=about" class="w3-bar-item w3-button ">About</a>
                            <a href="headfootTemp.php?page=board" class="w3-bar-item w3-button ">Board</a>
                            <a href="headfootTemp.php?page=deposit" class="w3-bar-item w3-button ">Deposits</a>
                            <a href="headfootTemp.php?page=loan" class="w3-bar-item w3-button ">Loan</a>
                            <a href="headfootTemp.php?page=service" class="w3-bar-item w3-button ">Other Services</a>
                            <a href="headfootTemp.php?page=branch" class="w3-bar-item w3-button ">Branch</a>
                            <a href="headfootTemp.php?page=report" class="w3-bar-item w3-button ">Report</a>
                            <a href="headfootTemp.php?page=notice" class="w3-bar-item w3-button ">Notice Boards</a>
                            <a href="headfootTemp.php?page=news" class="w3-bar-item w3-button ">Latest News</a>
                            <a href="headfootTemp.php?page=links" class="w3-bar-item w3-button ">Links</a>
                            <a href="headfootTemp.php?page=contact" class="w3-bar-item w3-button ">Contacts</a>
                            <a href="headfootTemp.php?page=download" class="w3-bar-item w3-button ">Downloads</a>
                            
                        </div>

                    </div>
</header>
<div class="w3-row w3-padding w3-light-gray" style="width:100%">
            <!-- Here Goes Line Breaking between Navigation and WebContent  -->
</div>