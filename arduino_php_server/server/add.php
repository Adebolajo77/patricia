<?php
   	//includes connect.php to handle connections
	include("connect.php");
   	
   	$link=Connection();

	$temp1=$_POST["temp1"];
	$hum1=$_POST["hum1"];
	//inserts values for temperature and humidity into tempLog Table
	$query = "INSERT INTO `tempLog` (`temperature`, `humidity`) 
		VALUES ('".$temp1."','".$hum1."')"; 
   	
   	mysql_query($query,$link);
	mysql_close($link);
	
	//header function from connect.php
   	header("Location: index.php");
?>
