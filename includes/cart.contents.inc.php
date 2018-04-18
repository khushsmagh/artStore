<?php
			if(is_array($myCart->cartContent())){
				if(count($myCart->cartContent()) > 0){
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
					foreach($myCart->cartContent() as $cartItem) {
						$painting = new Painting($cartItem->paintingID());
						$rowCount++;
?>
							<div class="row accordion well well-sm">
								<div class="col-md-1">
								<?php echo $rowCount; ?>
								</div>
								<div class="col-md-1">
								<?php echo $cartItem->paintingID(); ?>
								</div>
								<div class="col-md-5">
								<?php $painting->outputMiniature(); ?>
								</div>
								<div class="col-md-3">
								<?php echo $painting->artist(); ?>
								</div>
								<div class="col-md-2 text-right">
								<?php echo '$ '.number_format($cartItem->getPrice(),2); ?>
								</div>
							</div>
							<div class="row panel">
							<div class="col-md-8">
								The base price for this art work is <?php echo '$ '.number_format($painting->price(),2); ?>. Select your additions below:<br><br>
								<form action="update-cart-item.php" method="POST" >
									<input type="hidden" name="cartItem" value="<?php echo $rowCount; ?>">
									<input type="hidden" name="paintingID" value="<?php echo $cartItem->paintingID(); ?>">
									<div class="form-group">
										<label>Frame</label>
										<select name="frame" class="form-control frame">
										<?php
										$frames = new TypesFrames;
										$frames->optionList($cartItem->frameID());
										?>
										</select>
									</div>
									<div class="form-group">
										<label>Glass</label>
										<select name="glass" class="form-control glass">
										<?php
										$glass = new TypesGlass;
										$glass->optionList($cartItem->glassID());
										?>
										</select>
									</div>

									<div class="form-group">
										<label>Matt</label>
										<select name="matt" class="form-control matt" onclick="changeBackground()">
										<?php
										$matt = new TypesMatt;
										$matt->optionList($cartItem->mattID());
										?>
										</select>
									</div>
									<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Update</button>
								<a href="delete-cart-item.php?cartItem=<?php echo $rowCount; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span> delete</a>

									</form>
								</div>
								<div class="col-md-4">

								</div>
							</div>
<?php					}	
?>
					</div>
					<br>
					<a href="clear-cart.php" class="btn btn-danger" onclick="return confirm('This will empty your cart \n Are you sure?')"><span class="glyphicon glyphicon-trash"></span> empty cart </a>
					<a href="checkout.php" class="btn btn-primary" ><span class="glyphicon glyphicon-arrow-right"></span> Checkout </a>

					<br>
					<script src="js/accordion.js"></script>
					<script> window.onload = changeBackground() </script>
<?php
				}else{
					echo '<div class="alert alert-warning">
							<p>Your shopping cart is empty ...</p>
						</div>';	
				}
			}else{
				echo '<div class="alert alert-warning">
						<p>Your shopping cart is empty ...</p>
					</div>';	
			}				
				?>