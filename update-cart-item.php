<?php
session_start();

require_once('includes/cart.class.php');
$myCart = new Cart();

if(is_array($myCart->cartContent())){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(isset($_POST['cartItem']) && isset($_POST['paintingID']) && isset($_POST['frame']) && isset($_POST['glass']) && isset($_POST['matt'])) {
			if(is_numeric($_POST['cartItem']) && is_numeric($_POST['frame']) && is_numeric($_POST['glass']) && is_numeric($_POST['matt'])) {
				$cartItem 	= (int) $_POST['cartItem'];
				$paintingID = (int) $_POST['paintingID'];
				$frame 		= (int) $_POST['frame'];
				$glass 		= (int) $_POST['glass'];
				$matt 		= (int) $_POST['matt'];
				$myCart->updateItem($cartItem, $paintingID, $frame, $glass, $matt);
			}
		}
	}
}

header("Location: ".$_SERVER['HTTP_REFERER']);

?>
