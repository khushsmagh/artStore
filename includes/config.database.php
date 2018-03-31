<?php

$servername = "localhost";
$username = "root";
$password = "BowValley";

	try {
    	$connection = new PDO("mysql:host=$servername;dbname=art", $username, $password);
    	// set the PDO error mode to exception
    	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	echo "Connected successfully"; 
    	}

	catch(PDOException $e)
    	{
    	echo "Connection failed: " . $e->getMessage();
    	}	

?>