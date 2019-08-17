<div class="w3-row">
    <!-- Here Goes Banner  -->
        <div class="w3-content w3-section">
            <img class="mySlides" src="images/banner.jpg" style="width:100%"  height="500px">
            <img class="mySlides" src="images/banner1.jpg" style="width:100%" height="500px">
            <img class="mySlides" src="images/banner2.jpg" style="width:100%" height="500px">
            <img class="mySlides" src="images/banner3.jpg" style="width:100%" height="500px">
            <img class="mySlides" src="images/banner4.jpg" style="width:100%" height="500px">
        </div>
        <script>
        //Script for Banner
            var myIndex = 0;
            carousel();

            function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 2000); // Change image every 2 seconds
            }
        </script>
</div>