<?php

	if(is_array($myCart->cartContent())){
		$myCart = $myCart->cartContent();
		if(count($myCart) > 0){
?>
                    <div id="panel_adjustment1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 >Cart </h3>
                            </div>
                            <div class="panel-body">
<?php 		foreach($myCart as $cartItem) {
			echo $cartItem->paintingID();
			echo '<br>';
			}	
		
		?>
							<div class="media">
                                    <a href="#" class="pull-left">
                                    <img class="media-object"  src="images/tiny/116010.jpg" alt="media" width="32">
                                    </a>
                                    <div class="media-body">
                                        <p ><a href="#">Artist Holding a Thistle</a></p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                    <img class="media-object" src="images/tiny/113010.jpg" alt="media object" width="32">
                                    </a>
                                    <div class="media-body">
                                        <p ><a href="#">Self-portrait in a Straw Hat</a></p>
                                    </div>
                                </div>
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

