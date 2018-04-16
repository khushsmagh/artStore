<?php
$pageTitle = 'Your cart';

include('includes/header.inc.php');
require_once('includes/painting.class.php');
require_once('includes/types.frames.class.php');
require_once('includes/types.glass.class.php');
require_once('includes/types.matt.class.php');

?>
				<script src="js/changeBackground.js"></script>

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
					$painting = new Painting($cartItem->paintingID());
					$rowCount++;
					?>
						<div class="row accordion">
							<div class="col-md-1">
							<?php echo $rowCount; ?>
							</div>
							<div class="col-md-2">
							<?php echo $cartItem->paintingID(); ?>
							</div>
							<div class="col-md-3">
							<?php $painting->outputMiniature(); ?>
							</div>
							<div class="col-md-6">
							abc
							</div>
						</div>
						<div class="row panel">
							<div class="col-md-1">
							</div>
							<div class="col-md-1">
							col 3
							</div>
							<div class="col-md-4">
							<form>
								<div class="form-group">
									<label>Frame</label>
									<select class="form-control frame">
									<?php
									$frames = new TypesFrames;
									$frames->optionList(7);
									?>
									</select>
								</div>
								<div class="form-group">
									<label>Glass</label>
									<select class="form-control glass">
									<?php
									$glass = new TypesGlass;
									$glass->optionList(7);
									?>
									</select>
								</div>

								<div class="form-group">
									<label>Matt</label>
									<select class="form-control matt" onclick="changeBackground()">
									<?php
									$matt = new TypesMatt;
									$matt->optionList(7);
									?>
									</select>
								</div>

								</form>
							</div>
							<div class="col-md-6">
							<a href="delete-cart-item.php?cartItem=<?php echo $rowCount; ?>" onclick="return confirm('Are you sure?')"> delete</a>

							</div>
						</div>
<?php					}	
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
