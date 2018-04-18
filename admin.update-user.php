<?php

session_start();
include("includes/config.database.php");

if(isset($_POST['update-user'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$region = $_POST['region'];
		$country = $_POST['country'];
		$postalCode = $_POST['postal'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];


		$customerFullName = $firstname . " " . $lastname;
		$messageUpdate = "Customer $customerFullName has been updated";

		$query = "UPDATE customers 
    		  SET firstName = :firstName, lastName = :lastName, address = :address, city = :city, region = :region, country = :country, postal = :postal, phone = :phone, email = :email
    		  WHERE CustomerID = :id;";

    	$results = $connection->prepare($query);
    	$results->execute(array(
    	":firstName" => $firstname,
    	":lastName" => $lastname,
    	":address" => $address,
    	":city" => $city,
    	":region" => $region,
    	":country" => $country,
    	":postal" => $postalCode,
    	":phone" => $phone,
    	":email" => $email,
    	":id" => $id
    ));

    	$_SESSION["message"] = $messageUpdate;
    	header("Location:admin.index.php");
 	} 
?>