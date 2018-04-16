<?php
require_once('includes/painting.class.php');

	if(is_array($myCart->cartContent())){
		$myCart = $myCart->cartContent();
		$cartCount = count($myCart);
		if($cartCount > 0){
?>
                    <div id="panel_adjustment1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 >Cart </h3>
                            </div>
                            <div class="panel-body">
<?php
			$count = 0;
			foreach($myCart as $cartItem) {
				$cartCount--;
				$count++;
				$painting = new Painting($cartItem->paintingID());
				echo $painting->outputMiniature();
				if($count >= 3) break;
			}
			if($cartCount == 1) echo 'Plus '.$cartCount.' more item';
			if($cartCount > 1)  echo 'Plus '.$cartCount.' more items';
			
?>

                                <strong class="cartText">Subtotal:</strong> <span > $1200 </span>
                                <div class="btn-group-xs">
									<a href="cart.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-info-sign"></span> Edit</a>
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-arrow-right"></span> Checkout</button>  
                                </div>

                            </div>
                        </div>
                    </div>


<?php
		}
	}

?>

