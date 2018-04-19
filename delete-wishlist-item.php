<?php
session_start();

require_once('includes/wishlist.class.php');
$myWishlist = new Wishlist();

if(is_array($myWishlist->wishlistContent())){
	if ($_SERVER['REQUEST_METHOD'] == 'GET') {
		if(isset($_GET['wishlistItem'])) {
			if(is_numeric($_GET['wishlistItem'])) {
				$wishlistItem = (int) $_GET['wishlistItem'];
				$myWishlist->deleteItem($wishlistItem);
			}
		}
	}
}

header("Location: ".$_SERVER['HTTP_REFERER']);
?>
