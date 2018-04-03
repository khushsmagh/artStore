<?php

/*$servername = "localhost";
$username = "root";
$password = "BowValley";*/

define('DBHOST', 'localhost');
define('DBNAME', 'art');
define('DBUSER', 'root');
define('DBPASS', 'BowValley');
define('DBCONNSTRING','mysql:dbname=art;charset=utf8mb4;');

//$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    $connection = new PDO(DBCONNSTRING,DBUSER,DBPASS);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
}

catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

?>