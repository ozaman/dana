<?
//file config.php
	//$host = "203.151.24.2";
	$host = "localhost";
	$user = "root";
	$pass = "root";
	// $user = "root";
	// $pass = "root";
	$dbname = "dn-front";

	$conndb = mysql_connect($host,$user,$pass) or die ("Error");
	mysql_select_db($dbname,$conndb);

	mysql_query("SET NAME UTF8");


	

?>