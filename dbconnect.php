<?php
$dbhost="148.72.232.182";
$dbuser="MahathiAdmin";
$dbpass="msol@123";
$dbname="Society";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn){
	echo "Not connected to Database";
}
?>