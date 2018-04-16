<?php
session_start();

require_once('includes/cart.class.php');
$myCart = new Cart();

if(is_array($myCart->cartContent())){
	if ($_SERVER['REQUEST_METHOD'] == 'GET') {
		if(isset($_GET['cartItem'])) {
			if(is_numeric($_GET['cartItem'])) {
				$cartItem = (int) $_GET['cartItem'];
				$myCart->deleteItem($cartItem);
			}
		}
	}
}

header("Location: ".$_SERVER['HTTP_REFERER']);
?>
