<div class="">
        <div class="w3-content w3-display-container w3-padding" style="padding:10px">

            <div class="infoSlides ">
                <h3>GooglePlus <i class="fa fa-google" aria-hidden="true"></i></h3>
                <p>Here Goes About Google</p>
            </div>

            <div class="infoSlides">
                <h3>FaceBook <i class="fa fa-facebook" aria-hidden="true"></i></h3>
                <p>Here Goes About FaceBook</p>
            </div>

            <div class="infoSlides">
                <h3>Apple <i class="fa fa-apple" aria-hidden="true"></i></h3>
                <p>Here Goes About Apple</p>
            </div>

            <div class="infoSlides">
                <h3>Amazon<i class="fa fa-amazon" aria-hidden="true"></i></h3>
                <p>Here Goes About Amazon</p>
            </div>

            <div class="infoSlides">
                <h3>Linkindn <i class="fa fa-linkedin" aria-hidden="true"></i></h3>
                <p>Here Goes About Linkindn</p>
            </div> 

            <div class="" style="">
                <button style="" class="w3-button w3-tiny w3-round  w3-light-gray" onclick="plusDivs(-1)">&#10094;</button>
                <button style="margin-left:19px;" class="w3-button w3-tiny  w3-light-gray w3-round" onclick="plusDivs(1)">&#10095;</button>
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