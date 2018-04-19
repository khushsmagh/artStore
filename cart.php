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

<?php include('includes/cart.contents.inc.php'); ?>
						
<?php include('includes/footer.inc.php'); ?>
