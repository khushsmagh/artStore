<?php
require_once('includes/WishlistItem.class.php');

class Wishlist {
	
	protected $wishlistContent;
	
	function __construct() {
		
		if(isset($_COOKIE['YourWishlist'])) {
			$this->wishlistContent = unserialize($_COOKIE['YourWishlist']);
		}else{
			$cookie_name = "YourWishlist";
			$cookie_value = "";
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
		}
		// as a workaround to the missing ability to overload functions
		// in PHP, we can check how many arguments have been passed to 
		// our function and react on that
		if(func_num_args() > 0){
			$parameters = func_get_args();
			$this->wishlistContent[] = new WishlistItem($parameters[0]); 
		}

		$cookie_name = "YourWishlist";
		$cookie_value = serialize($this->wishlistContent);
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");		
	}

	public function wishlistContent() {

		return $this->wishlistContent;
	}

	public function deleteItem($wishlistItem) {
		
		if(count($this->wishlistContent) >= $wishlistItem){
			unset($this->wishlistContent[$wishlistItem -1]);
			// re-index the array after removing one item
			$this->wishlistContent = array_values($this->wishlistContent);
			$cookie_name = "YourWishlist";
			$cookie_value = serialize($this->wishlistContent);
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");		
		}
	}

}