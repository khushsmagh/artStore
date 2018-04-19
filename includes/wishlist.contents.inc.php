<?php
			if(is_array($myWishlist->wishlistContent())){
				if(count($myWishlist->wishlistContent()) > 0){
?>
				<div class="container-fluid cart">
					<div class="row">
						<div class="col-md-1">
						item
						</div>
						<div class="col-md-1">
						ID
						</div>
						<div class="col-md-5">
						title
						</div>
						<div class="col-md-3">
						artist
						</div>
						<div class="col-md-2">
						price
						</div>
					</div>
<?php
					$rowCount = 0;
					foreach($myWishlist->wishlistContent() as $listItem) {
						$painting = new Painting($listItem->paintingID());
						$rowCount++;
?>
							<div class="row accordion well well-sm">
								<div class="col-md-1">
								<?php echo $rowCount; ?>
								</div>
								<div class="col-md-1">
								<?php echo $listItem->paintingID(); ?>
								</div>
								<div class="col-md-5">
								<?php $painting->outputMiniature(); ?>
								</div>
								<div class="col-md-3">
								<?php echo $painting->artist(); ?>
								</div>
								<div class="col-md-2 text-right">
								<?php echo '$ '.number_format($painting->price(),2); ?>
								</div>

							</div>
							<div class="row panel">
								<div class="col-md-2">
								<form action="add-to-cart.php" method="POST" class="add-button">
									<button class="btn btn-primary" type="submit">
									<input type="hidden" name="paintingID" value="<?php echo $listItem->paintingID(); ?>" >
									<span class="glyphicon glyphicon-shopping-cart"></span>  Add to Cart
									</button>
								</form>


								</div>
								<div class="col-md-4">
								<a href="delete-wishlist-item.php?wishlistItem=<?php echo $rowCount; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span> delete</a>

								</div>
							</div>

<?php					}	
?>
					</div>
					<br>
					<a href="clear-wishlist.php" class="btn btn-danger" onclick="return confirm('This will empty your wish list \n Are you sure?')"><span class="glyphicon glyphicon-trash"></span> empty wish list </a>
					<a href="checkout.php" class="btn btn-primary" ><span class="glyphicon glyphicon-arrow-right"></span> Checkout </a>

					<br>
					<script src="js/accordion.js"></script>
<?php
				}else{
					echo '<div class="alert alert-warning">
							<p>Your wish list is empty ...</p>
						</div>';	
				}
			}else{
				echo '<div class="alert alert-warning">
						<p>Your wish list is empty ...</p>
					</div>';	
			}				
				?>