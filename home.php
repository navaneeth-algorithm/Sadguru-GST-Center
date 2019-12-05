<div class="w3-margin">

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
            <?php echo $adminName;  ?>
        </div>        
    </div>

    <div class="w3-row">
        <div class="w3-col s4 w3-text-darkblue">
        Date of Registration:
        </div>
        <div class="w3-col s8">
            <?php echo $dateofregistration;  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4 w3-text-darkblue">
        Address:
        </div>
        <div class="w3-col s8">
            <?php echo $address1.' '.$address2.' '.$address3  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4 w3-text-darkblue">
        Phone:
        </div>
        <div class="w3-col s8">
            <?php echo $contactDetails;  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4 w3-text-darkblue">
        E_mail:
        </div>
        <div class="w3-col s8">
            <?php echo $adminEmail;  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4 w3-text-darkblue">
        Website:
        </div>
        <div class="w3-col s8">
            <?php echo $domainname;  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4 w3-text-darkblue">
        Established In:
        </div>
        <div class="w3-col s8">
            <?php echo $establishedin;  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4 w3-text-darkblue">
        Weekly Holiday:
        </div>
        <div class="w3-col s8">
            <?php echo $weeklyholiday;  ?>
        </div>        
    </div>
    <div class="w3-row">
        <div class="w3-col s4 w3-text-darkblue">
        Working Hours:
        </div>
        <div class="w3-col s8">
            <?php echo $workinghour;
              ?>
        </div>        
    </div>


</div>
        <div class="" style="margin-top:15px;">

                <?php
                        //include("dbConnect.php");
                        $query="SELECT * FROM `Home`";
                        try{
                            $stmt = $conn->prepare($query);
                            $stmt->execute();
                            foreach($stmt as $row){

                               echo '<div class="w3-row">
                                <!-- Title of Content -->
                                <span class="w3-text-red w3-large">'.$row['Head'].'</span>
                                </div>
                                <div class="w3-row" style="text-align:justify">
                                <!-- Decription -->';
                                 echo $row['Content'];
                                 echo '</div><span class="w3-margin"></span>';
                            }
                           // $_SESSION['success'] = 'Data added Successfully';
                        }
                        catch(PDOException $e){
                            $_SESSION['error'] = $e->getMessage();
                        }
                    $pdo->close();     
                ?>
                
                
        </div>
</div>