<?php
$pageTitle = 'Your cart';

include('includes/header.inc.php');

?>
			<h2>Your cart</h2>
			<div class="row fix">
<?php
			if(is_array($myCart->cartContent())){
				foreach($myCart->cartContent() as $cartItem) {
					echo $cartItem->paintingID();
					echo '<br>';
				}	
			}
				?>

			<form action="add-to-cart.php" method="POST">
			  Painting ID:<br>
			  <input type="text" name="paintingID">
			  <br><br>
			  <input type="submit" value="Add to cart">
			</form>

			</div>
			
<?php include('includes/footer.inc.php'); ?>
