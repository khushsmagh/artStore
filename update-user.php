<?php

session_start();

include("includes/config.database.php");

if(isset($_POST['submit'])){
	$id = $_SESSION['CustId'];
	$firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $country = $_POST['country'];
    $postal = $_POST['postal'];
    $phone = $_POST['phone'];

    // Validation for empty fields
	if(empty($firstName) || empty($lastName) || empty($address) || empty($city) || empty($region) || empty($country) || empty($postal) || empty($phone)){
		echo "missing fields";
		exit();
	}

	// Validate phone number
	// Checking that this does not have letters or special characteres
	if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) {
  		echo "Phone number is not valid";
  		exit();
	}

	// Validate lenght of the phone (American)
	// If phone is greater than 10, is not valid
	if (strlen($phone) > 10){
		echo "Please enter a valid number phone";
		exit();
	}

	// Checking for valid postal code
	if(!preg_match("/^([a-zA-Z]\d[a-zA-Z])\ {0,1}(\d[a-zA-Z]\d)$/", $postal)){
		echo "Invalid postal code";
		exit();
	}

	// Checking if postalCode lenght is valid
	// if greater than 6, is not valid
	if(strlen($postalCode) > 6){
		echo "Invalid postal code";
		exit();
	}

   
    $query = "UPDATE customers 
    		  SET firstName = :firstName, lastName = :lastName, address = :address, city = :city, region = :region, country = :country, postal = :postal, phone = :phone
    		  WHERE CustomerID = :id;";

    $results = $connection->prepare($query);

    $results->execute(array(
    	":firstName" => $firstName,
    	":lastName" => $lastName,
    	":address" => $address,
    	":city" => $city,
    	":region" => $region,
    	":country" => $country,
    	":postal" => $postal,
    	":phone" => $phone,
    	":id" => $id
    ));

    // If the query executes succesfully
    // returns the user to the update form.
    if($results){
    	header("Location:update-user.form.php");
    }else{
    	echo "ERROR";
    }
}

?>

