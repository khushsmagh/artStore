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
require_once('includes/types.shippers.class.php');
require_once('includes/customer.class.php');

?>
			<script src="js/changeBackground.js"></script>

			<h2>Your cart</h2>				

<?php include('includes/cart.contents.inc.php'); ?>

<?php
		if(is_numeric($_SESSION['CustId'])){
			$customer = $_SESSION['CustId'];
			$customer = new Customer($customer);
			echo'<br>Your order will be shipped to:<br><br><div class="well">';
			$customer->outputAddress();
			echo'</div>';
			$shippers = new TypesShippers($customer->getCountry());
			$shippers = $shippers->getShippers();
?>
			<form>
<?php			foreach($shippers as $shipper) {
					echo '<input type="radio" name="shipID" value="'.$shipper['shipperID'].'"> '.$shipper['shipperName'].'<br>';

				//print_r($shipper);
			}
?>

			</form>
<?php		}
		
?>			
<?php include('includes/footer.inc.php'); }?>
