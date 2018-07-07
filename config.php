<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "userdata";
$connect = mysqli_connect($host,$username,$password,$database);
	if(!$connect){
		echo "database not connected";
		die;
	}
	else{
		#echo "database connected!";
	}
?>