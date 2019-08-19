<div class="">
            
        <div class="w3-content w3-display-container w3-padding w3-light-gray w3-card" style="padding:10px">
        <?php
                  include("dbConnect.php");
                  $query="SELECT * FROM `loan`";
                	$suc= mysqli_query($conn, $query) or die(mysqli_error($conn));  
                  if(mysqli_num_rows($suc))
                  {
                    // $row=mysqli_fetch_assoc($suc);
                    while($row = mysqli_fetch_assoc($suc)) {

             ?>
            <div class="infoSlides ">
                <h3>GooglePlus <i class="fa fa-google" aria-hidden="true"></i></h3>
                <p>Here Goes About Google</p>
            </div>

            <?php }} ?>

            <div class="" style="">
                <button style="" class="w3-button w3-tiny w3-round  w3-gray" onclick="plusDivs(-1)">&#10094;</button>
                <button style="margin-left:50%;" class="w3-button w3-tiny  w3-gray w3-round" onclick="plusDivs(1)">&#10095;</button>
            </div>
        </div>

        <div class="w3-row w3-margin">
            <span style="background-color:#fafad2;" class="w3-button w3-small"><i class="fa fa-money" aria-hidden="true"></i><a href="headfootTemp.php?page=monthlyInstallment" style="text-decoration:none"><span class="w3-text-red"> Monthly</span><span class="w3-text-blue"> Installment</span></span></a>
        </div>
        <div class="w3-row w3-margin">
            <span style="background-color:#fafad2;" class="w3-button w3-small"><i class="fa fa-picture-o" aria-hidden="true"></i><a href="headfootTemp.php?page=gallery" style="text-decoration:none"><span class="w3-text-red"> Photo</span><span class="w3-text-blue"> Gallery</span></span></a>
        </div>
        <div class="w3-row w3-margin">
            <span style="background-color:#fafad2;" class="w3-button w3-small"><i class="fa fa-user" aria-hidden="true"></i><a href="headfootTemp.php?page=gallery" style="text-decoration:none"><span class="w3-text-red"> Customer</span><span class="w3-text-blue"> FeedBack</span></span></a>
        </div>

        <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
        showDivs(slideIndex += n);
        }

        function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("infoSlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
        }
        </script>
</div>