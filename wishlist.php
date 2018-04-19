<?php
$pageTitle = 'Your wishlist';

include('includes/header.inc.php');
require_once('includes/painting.class.php');

?>
			<h2>Your wishlist</h2>				

<?php include('includes/wishlist.contents.inc.php'); ?>
			
			
			
			<br><br><br><br>Just for testing purposes:
			<form action="add-to-wishlist.php" method="POST">
			  Painting ID:<br>
			  <input type="text" name="paintingID">
			  <br><br>
			  <input type="submit" value="Add to cart">
			</form>

			
<?php include('includes/footer.inc.php'); ?>
