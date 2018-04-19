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
			echo'<br><h4>Your order will be shipped to:</h4><div class="well">';
			$customer->outputAddress();
			echo'</div>';
			$shippers = new TypesShippers($customer->getCountry());
			$shippers = $shippers->getShippers();
?>
			<h4>select your shipping method:</h4>
			<form action="place-order.php" method="post">
<?php			$count = 0;
				foreach($shippers as $shipper) {
					echo '<input type="radio" ';
					if($count == 0) echo 'checked ';
					echo 'name="shipID" value="'.$shipper['shipperID'].'"> $'.number_format($shipper['shipperBaseFee'],2).' '.$shipper['shipperName'].' - '.$shipper['shipperDescription'].' ('.$shipper['shipperAvgTime'].')<br>';
					$count++;
				}
?>
				<button type="submit" name="submit" class="btn btn-primary button2update " > Place Order <span class="glyphicon glyphicon-send"></span></button>

			</form>

<?php		}
		
?>			
<?php include('includes/footer.inc.php'); }?>
