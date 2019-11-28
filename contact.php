<?php
    include("dbConnect.php");
    $query="SELECT * FROM `Parameter`";
    $suc= mysqli_query($conn, $query) or die(mysqli_error($conn));  
    if(mysqli_num_rows($suc))
    {
        // $row=mysqli_fetch_assoc($suc);
        $row = mysqli_fetch_assoc($suc);
    ?>

<div class="w3-margin">
        <div class="w3-row w3-margin w3-text-red ">
            <!-- Contact -->
            HEAD OFFICE
        </div>
        <div class="w3-row w3-margin ">
            <?php echo $row['CompanyName'];    ?>
        </div>

        <div class="w3-row w3-margin ">
            <div class="w3-row w3-large w3-text-red">Address</div>
            <div class="w3-row"><?php echo $row['Address'];?></div>
        </div>
        <div class="w3-row w3-margin">
            <div class="w3-row w3-large w3-text-red">Phone Number</div>
            <div class="w3-row8"><?php echo $row['PhoneNumber'];?></div>
        </div>
        <div class="w3-row w3-margin">
            <div class="w3-row w3-large w3-text-red">Email</div>
            <div class="w3-row"><?php echo $row['Email'];?></div>
        </div>
        <div class="w3-row w3-margin">
            <div class="w3-row w3-large w3-text-red">Site</div>
            <div class="w3-row"><?php echo $row['DomainName'];?></div>
        </div>
</div>
        <div class="w3-row w3-margin">
            <!-- HereGoes Contact Card -->
            <form action="/action_page.php" class="w3-container  w3-light-grey w3-text-dark-gray ">
                <h2 class="w3-center">CONTACT US</h2>
                
                <div class="w3-row w3-section">
                <div class="w3-col" style="width:30px"><i class="w3-xlarge fa fa-user"></i></div>
                    <div class="w3-rest">
                    <input class="w3-input w3-border" name="Name" type="text" placeholder="Name">
                    </div>
                </div>
                <div class="w3-row w3-section">
                <div class="w3-col" style="width:30px"><i class="w3-xlarge fa fa-envelope-o"></i></div>
                    <div class="w3-rest">
                    <input class="w3-input w3-border" name="email" type="text" placeholder="Email">
                    </div>
                </div>

                <div class="w3-row w3-section">
                <div class="w3-col" style="width:30px"><i class="w3-xlarge fa fa-phone"></i></div>
                    <div class="w3-rest">
                    <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone">
                    </div>
                </div>

                <div class="w3-row w3-section">
                <div class="w3-col" style="width:30px"><i class="w3-xlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                    <input class="w3-input w3-border" name="message" type="text" placeholder="Message">
                    </div>
                </div>

                <button class="w3-button w3-block w3-section w3-dark-gray w3-ripple w3-padding">Send</button>

            </form>

        </div>

    <?php   }   ?>