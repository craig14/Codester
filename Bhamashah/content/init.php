<!--  creating connection in php -->
<?php 
	$hostname="localhost";
	$username="root";
	$password="";
	$database="bhamashah";

	$dbconnect=mysqli_connect($hostname,$username,$password,$database);

	date_default_timezone_set('Asia/Kolkata');
	$datenow=date('Y-m-d');
	$timenow=date('H:i:s');
	if(!$dbconnect){
		echo "Server Down";
		die();
	}



 ?>