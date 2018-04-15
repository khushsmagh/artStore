<?php
require_once('includes/CartItem.class.php');

require_once('includes/query.class.php');


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

		if(func_num_args() > 0){
			$parameters = func_get_args();
			$this->cartContent[] = new CartItem($parameters[0],0,0,0); 
		}

		$cookie_name = "YourCart";
		$cookie_value = serialize($this->cartContent);
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");		
	}

	public function cartContent() {
		return $this->cartContent;
	}
	
}