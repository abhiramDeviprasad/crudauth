<?php
	error_reporting(~E_DEPRECATED & ~E_NOTICE);
	define('host', 'localhost');
	define('username', 'root');
	define('password', '');
	define('dbName', 'authentication');
	$connect = mysql_connect(host,username,password);
	$dbconnect = mysql_select_db(authentication);
	if(!$connect){
		die("Connection failed : " . mysql_error());
	}
	if(!$dbconnect){
		die("Database connection failed : " . mysql_error());
	}
?>