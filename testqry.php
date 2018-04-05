<?php 
$pageTitle = 'Query Test';
include('includes/header.inc.php'); 

$sql = "SELECT * 
		  FROM paintings
		 ORDER BY Title";

$query 	= new Query($sql);
$set 	= $query->resultSet();
$count 	= $query->resultCount();

		echo 'Count:'.$count.'<br><br>';

		foreach($set as $row){
		echo $row['Title'].'<br>';	
		}
		
include('includes/footer.inc.php'); 
?>
