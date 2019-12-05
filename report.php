
<div class="w3-row w3-center w3-margin">  
        <span class="w3-row w3-margin w3-xlarge">REPORTS</span>
        <?php
                 $rollingText = '';
                 $conn = $pdo->open();
                 //include("dbconnect.php");
                 
                 $sql = "SELECT * FROM `Report`";
                 try{
                     $stmt = $conn->prepare($sql);
                     $stmt->execute();
                     foreach($stmt as $row){

             ?>
             
        <span class="w3-card w3-light-gray w3-round w3-margin">
                <h3><?php echo $row['Head']; ?></h3>
                <div style="" class="w3-margin" id="<?php echo 'pdf'.$row['id']; ?>"></div>
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
                        PDFObject.embed("<?php echo $reportFolder."/".$row['path']; ?>", "<?php echo '#pdf'.$row['id']; ?>",options);
                </script>
        </span>
        <?php 
        }
        // $_SESSION['success'] = 'Data added Successfully';
     }
     catch(PDOException $e){
         $_SESSION['error'] = $e->getMessage();
     }
 $pdo->close();   
        
        ?>
</div>

