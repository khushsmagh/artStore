<?php
$pageTitle = 'Your cart';

include('includes/header.inc.php');

?>
			<h2>Your cart</h2>
			
<a href="clear-cart.php" onclick="return confirm('This will empty your cart \n Are you sure?')"> empty cart </a>
				
<?php
			if(is_array($myCart->cartContent())){
?>
			<div class="container-fluid cart">
				<div class="row">
					<div class="col-md-1">
					item
					</div>
					<div class="col-md-2">
					painting ID
					</div>
					<div class="col-md-3">
					col 3
					</div>
					<div class="col-md-5">
					col 3
					</div>
				</div>
<?php
				$rowCount = 0;
				foreach($myCart->cartContent() as $cartItem) {
					$rowCount++;
					echo '<div class="row accordion">
							<div class="col-md-1">
							'.$rowCount.'
							</div>
							<div class="col-md-2">
							'.$cartItem->paintingID().'
							</div>
							<div class="col-md-3">
							col 3
							</div>
							<div class="col-md-5">
							col 3
							</div>
						</div>
						<div class="row panel">
							<div class="col-md-1">
							col 3
							</div>
							<div class="col-md-2">
							col 3
							</div>
							<div class="col-md-3">
							col 3
							</div>
							<div class="col-md-5">
							col 3
							</div>
						</div>';
					}	
?>
				</div>
				<script src="js/accordion.js"></script>
  <?php
			}
				?>

			<form action="add-to-cart.php" method="POST">
			  Painting ID:<br>
			  <input type="text" name="paintingID">
			  <br><br>
			  <input type="submit" value="Add to cart">
			</form>

			
<?php include('includes/footer.inc.php'); ?>
