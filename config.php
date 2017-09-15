<?
//file config.php
	//$host = "203.151.24.2";
	$host = "localhost";
	$user = "ozaman";
	$pass = "ozaman";
	// $user = "root";
	// $pass = "root";
	$dbname = "db_danatours";

	$conndb = mysql_connect($host,$user,$pass) or die ("Error");
	mysql_select_db($dbname,$conndb);

	mysql_query("SET NAME UTF8");


	

?>