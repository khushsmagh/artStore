<?php
include('includes/header.inc.php');

$sql = "SELECT * 
		  FROM paintings
		 ORDER BY Title";

$query 	= new Query($sql);
$set 	= $query->resultSet();
$count 	= $query->resultCount();
?>
        <div class="container"> <!-- main content container -->
<?php
		echo 'Count:'.$count.'<br><br>';

		foreach($set as $row){
		echo $row['Title'].'<br>';	
		}
?>		
        </div> <!-- end main content container -->
		
<?php include('includes/footer.inc.php'); ?>
