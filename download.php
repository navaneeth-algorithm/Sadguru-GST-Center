<div class="w3-row">
<table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-light-grey">
        <th>File Name</th>
        <th>Description</th>
        <th>Download</th>
      </tr>
    </thead>
    <?php
                  include("dbConnect.php");
                  $query="SELECT * FROM `Download`";
                	$suc= mysqli_query($conn, $query) or die(mysqli_error($conn));  
                  if(mysqli_num_rows($suc))
                  {
                    // $row=mysqli_fetch_assoc($suc);
                    while($row = mysqli_fetch_assoc($suc)) {
        ?>
    <tr>
      <td><?php echo $row['Head']; ?></td>
      <td><?php echo $row['Content']; ?></td>
      <td><a href="<?php echo $downloadFolder."/".$row['path'] ?>"><i class='fa fa-fw fa-download'></i></a></td>
    </tr>
    <?php
                    }}  
    ?>
  </table>
    

</div>