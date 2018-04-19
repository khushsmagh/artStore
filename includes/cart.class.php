<?php
require_once('includes/CartItem.class.php');

class Cart {
	
	protected $cartContent;
	
	function __construct() {
		
		if(isset($_COOKIE['YourCart'])) {
			$this->cartContent = unserialize($_COOKIE['YourCart']);
		}else{
			$cookie_name = "YourCart";
			$cookie_value = "";
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
		}
		// as a workaround to the missing ability to overload functions
		// in PHP, we can check how many arguments have been passed to 
		// our function and react on that
		if(func_num_args() > 0){
			$parameters = func_get_args();
			$this->cartContent[] = new CartItem($parameters[0],18,5,35); 
		}

		$cookie_name = "YourCart";
		$cookie_value = serialize($this->cartContent);
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");		
	}

	public function cartContent() {

		return $this->cartContent;
	}

	public function deleteItem($cartItem) {
		
		if(count($this->cartContent) >= $cartItem){
			unset($this->cartContent[$cartItem -1]);
			// re-index the array after removing one item
			$this->cartContent = array_values($this->cartContent);
			$cookie_name = "YourCart";
			$cookie_value = serialize($this->cartContent);
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");		
		}
	}

	public function updateItem($cartItem, $paintingID, $frame, $glass, $matt) {

		if(count($this->cartContent) >= $cartItem){
			$this->cartContent[$cartItem -1] = new CartItem($paintingID, $frame, $glass, $matt); 
			$cookie_name = "YourCart";
			$cookie_value = serialize($this->cartContent);
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");		
		}
	}

	public function cartTotal() {
		
		$totalPrice = 0;
		foreach($this->cartContent as $cartItem) {
			$totalPrice = $totalPrice + $cartItem->getPrice();
		}
		
		return $totalPrice;
	}

	public function cartItemCount() {
		$totalCount = 0;
		foreach($this->cartContent as $cartItem) {
			$totalCount++;
		}
		
		return $totalCount;
	}
}