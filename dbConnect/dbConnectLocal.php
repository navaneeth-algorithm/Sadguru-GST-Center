<?php
$dbhost="148.72.232.182";
$dbuser="MahathiAdmin";
$dbpass="msol@123";
$dbname="prathvi";

$dbcon=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$dbcon){
	echo "Not connected to Database";
}

?>