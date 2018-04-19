<?php
session_start();
require_once('includes/wishlist.class.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(isset($_POST['paintingID'])) {
		if(is_numeric($_POST['paintingID'])) {
			$paintingID = (int) $_POST['paintingID']; 
			$myWishlist = new Wishlist($paintingID);
		}
	}
}

header("Location: ".$_SERVER['HTTP_REFERER']);
?>