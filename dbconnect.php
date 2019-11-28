<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="0RPCYNBK2KxCfTvZ";
$dbname="Society";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn){
	echo "Not connected to Database";
}

?>

