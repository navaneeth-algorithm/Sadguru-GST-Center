<?php
                  include("dbConnect.php");
                  $query="SELECT * FROM `map`";
                    $suc= mysqli_query($conn, $query) or die(mysqli_error($conn));  
                    
                  if(mysqli_num_rows($suc))
                  {
                    // $row=mysqli_fetch_assoc($suc);
                    $row = mysqli_fetch_assoc($suc);
                    $latitude = $row['latitude'];
                    $longitude = $row['longitude'];
                  }
                  $query="SELECT * FROM `parameter`";
                  $suc= mysqli_query($conn, $query) or die(mysqli_error($conn));  
                if(mysqli_num_rows($suc))
                {
                  // $row=mysqli_fetch_assoc($suc);
                  $row = mysqli_fetch_assoc($suc);
                  $Address = $row['Address'];
                  $Email = $row['Email'];
                  $Phone = $row['PhoneNumber'];
                }
        ?>




<div class="w3-row w3-padding w3-light-gray " style="width:100%;">
            <!-- Here Goes Line Breaking between WebContent and Footer  -->
</div>

<footer style="text-align:center">
                    <!-- FooterPage -->
                    <div class="w3-row w3-margin w3-hover-shadow w3-round">
                        <div class="w3-col s4">
                            <!--Here Goes Map Information -->
                            <h4>
                                Google Map 
                            </h4>
                            <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d970.5928897701017!2d
                                <?php //longitude 
                                echo $latitude;//"74.7416275291908"?>!3d<?php //latitude
                                echo $longitude;//"13.327147999413995" ?>!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbcbb0cfec504f5%3A0xd853c0e4e70612d5!2sSadhguru!5e0!3m2!1sen!2sus!4v1565676288944!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                                <!--iframe src="http://maps.google.com/maps?q=<!-?php echo "13.3267015"?>,<!-?php echo "74.7421266" ?>&z=15&output=embed" width="360" height="270" frameborder="0" style="border:0"></iframe-->
                            </div>
                        </div>
                        <div class="w3-col s8 w3-padding" >

                                    <div align="left" style="margin-left:250px" >
                                        <h3>
                                            Contacts
                                        </h3>
                                        <p>
                                            <?php echo $Address;  ?>
                                        </p>
                                        <p>
                                            Email: <?php echo $Email;  ?> 
                                        </p>
                                        <p>
                                            Phone: <?php echo $Phone;   ?>
                                        </p>
                                        <h3>
                                            Follow Us On
                                        </h3>
                                        <span class="w3-xlarge"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                                        <span class="w3-xlarge"><i class="fa fa-twitter"  aria-hidden="true"></i></span>
                                        <span class="w3-xlarge"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                                        <span class="w3-xlarge"><i class="fa fa-dribbble" aria-hidden="true"></i></span>
                                    </div>

                        </div>

                    </div>

                    <div class="w3-row">
                        © 2019 All Rights Reserved. Developed by Sadhguru Souharda Sahakari Limited.                
                    </div>
</footer>