<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    
  include("dbconnect.php");
  
  $sql = "SELECT * FROM parameter";
  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          echo $row['Name'];
      }
  }
  

?>
</body>
</html>
