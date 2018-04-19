<?php
session_start();
include("includes/config.database.php");

require_once('includes/cart.class.php');
require_once('includes/query.class.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(isset($_POST['shipID'])) {
		if(is_numeric($_POST['shipID'])) {
			$shipID = (int) $_POST['shipID'];
			$custID = (int) $_SESSION['CustId']; 
			$myCart = new Cart();
			$qty = $myCart->cartItemCount();
			// get next orderID
			$sql = "SELECT (OrderID + 1) AS NextID
					  FROM orders
					 ORDER BY OrderID DESC LIMIT 1 ";

			$orderID = new Query($sql);
			$orderID = $orderID->resultSet()[0][0];

			$query = "INSERT INTO `orders` (`OrderID`, `ShipperID`, `CustomerID`, `DateStarted`, `Quantity`) 
					VALUES ($orderID, $shipID, $custID, NOW(), $qty);";
			$sql = $connection->prepare($query);
			$result = $sql->execute();

			foreach($myCart->cartContent() as $cartItem){
				// get next orderDetailID
				$sql = "SELECT (OrderDetailID + 1) AS NextDetailID
						  FROM orderdetails
						 ORDER BY OrderDetailID DESC LIMIT 1 ";

				$orderDetailID = new Query($sql);
				$orderDetailID = $orderDetailID->resultSet()[0][0];
				$paintingID = $cartItem->paintingID();
				$frameID = $cartItem->frameID();
				$glassID = $cartItem->glassID();
				$mattID = $cartItem->mattID();

				$query = "INSERT INTO `orderdetails` (`OrderDetailID`, `OrderID`, `PaintingID`, `FrameID`, `GlassID`, `MattID`) 
						VALUES ($orderDetailID, $orderID, $paintingID, $frameID, $glassID, $mattID);";
				$sql = $connection->prepare($query);
				$result = $sql->execute();
				
				$myCart->deleteItem(1);
			}
			header("Location: cart.php");
			exit();
		}
	}
}

header("Location: ".$_SERVER['HTTP_REFERER']);
?>