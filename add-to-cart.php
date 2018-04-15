<?php
session_start();
require_once('includes/cart.class.php');
echo 'test';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	echo ' is post';
	if(isset($_POST['paintingID'])) {
		echo ' variable set';
		if(is_numeric($_POST['paintingID'])) {
			
		$paintingID = (int) $_POST['paintingID']; 
echo 'id = ' .$paintingID;
		$myCart = new Cart($paintingID);
		}
//$myCart = new Cart();
	}
}
header("Location: ".$_SERVER['HTTP_REFERER']);
?>