
<div class="">
            
        <div class=" w3-margin w3-content w3-display-container w3-padding w3-light-gray w3-card" style="padding:10px">
        <?php
                  include("dbConnect.php");
                  $query="SELECT * FROM `news`";
                	$suc= mysqli_query($conn, $query) or die(mysqli_error($conn));  
                  if(mysqli_num_rows($suc))
                  {
                    // $row=mysqli_fetch_assoc($suc);
                    while($row = mysqli_fetch_assoc($suc)) {

             ?>
            <div class="infoSlides ">
                <h4><?php echo $row['Head'];  ?> <i class="<?php echo 'fa '.$row['SliderClass']; ?>" aria-hidden="true"></i></h4>
                <p><?php echo $row['Content'];  ?></p>
            </div>

            <?php }} ?>

            <div class="" style="">
                <button style="" class="w3-button w3-tiny w3-round  w3-gray" onclick="plusDivs(-1)">&#10094;</button>
                <button style="margin-left:50%;" class="w3-button w3-tiny  w3-gray w3-round" onclick="plusDivs(1)">&#10095;</button>
            </div>
        </div>
        <div class="w3-margin">  
            <div class="w3-row w3-button w3-light-gray" style="margin-top:10px;">
                <i class="fa fa-money w3-xlarge" aria-hidden="true"></i><a href="headfootTemp.php?page=monthlyInstallment" style="text-decoration:none"> Monthly Installment</a>
            </div>
            <div class="w3-row w3-button w3-light-gray" style="margin-top:10px;padding-right:60px">
                <i class="fa fa-picture-o w3-xlarge" aria-hidden="true"></i><a href="headfootTemp.php?page=gallery" style="text-decoration:none"> Photo Gallery</a>
            </div>
            <div class="w3-row  w3-button w3-light-gray" style="margin-top:10px;padding-right:30px">
                <i class="fa fa-user w3-xlarge" aria-hidden="true"></i><a href="headfootTemp.php?page=gallery" style="text-decoration:none"> Customer FeedBack </a>
            </div>
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