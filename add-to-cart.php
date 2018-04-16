<?php
session_start();
require_once('includes/cart.class.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(isset($_POST['paintingID'])) {
		if(is_numeric($_POST['paintingID'])) {
			$paintingID = (int) $_POST['paintingID']; 
			$myCart = new Cart($paintingID);
		}
	}
}

header("Location: ".$_SERVER['HTTP_REFERER']);
?>