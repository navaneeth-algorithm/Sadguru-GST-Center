
<div class="w3-row w3-center w3-margin">  
        <span class="w3-row w3-margin w3-xlarge">Report Here</span>
        <?php
                  include("dbConnect.php");
                  $query="SELECT * FROM `report`";
                	$suc= mysqli_query($conn, $query) or die(mysqli_error($conn));  
                  if(mysqli_num_rows($suc))
                  {
                    // $row=mysqli_fetch_assoc($suc);
                    while($row = mysqli_fetch_assoc($suc)) {

             ?>
             
        <span class="w3-button w3-light-gray w3-round">
                <p><?php echo $row['Name']; ?></p>
                <div id="pdf1"></div>
                <script type="text/javascript" src="include/Pdf/jsPdf/pdfobject.js"></script>
                <script type='text/javascript'>
                
                var options = {
                        height: "400px",
                        width:"700px",
                        pdfOpenParams: { view: 'FitC', 
                        scrollbars: '0', 
                        zoom:100,
                        toolbar: '0', 
                        statusbar: '0', 
                        fallbackLink:false,
                        navpanes: '0' }
                        };
                        PDFObject.embed("<?php echo $reportFolder."/".$row['Path']; ?>", "#pdf1",options);
                </script>
        </span>
        <?php }}?>
</div>

