<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['CustId'])){
	header("Location: includes/login-form.php");
} else {

$pageTitle = 'Checkout';

include('includes/header.inc.php');
require_once('includes/painting.class.php');
require_once('includes/types.frames.class.php');
require_once('includes/types.glass.class.php');
require_once('includes/types.matt.class.php');

?>
			<script src="js/changeBackground.js"></script>

			<h2>Your cart</h2>				

<?php include('includes/cart.contents.inc.php'); ?>

			
			
<?php include('includes/footer.inc.php'); }?>
