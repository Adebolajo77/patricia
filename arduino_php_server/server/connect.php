<?php

	function Connection(){
		//server and database parameters
		$server="server";
		$user="user";
		$pass="pass";
		$db="database";
	   	
		//initialize connection to mySql database using database parameters
		$connection = mysql_connect($server, $user, $pass);

		if (!$connection) {
	    	die('MySQL ERROR: ' . mysql_error());
		}
		
		mysql_select_db($db) or die( 'MySQL ERROR: '. mysql_error() );

		return $connection;
	}
?>
