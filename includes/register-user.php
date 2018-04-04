<?php

include("config.database.php");


if(isset($_POST['submit'])){
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$region = $_POST['region'];
	$country = $_POST['country'];
	$postalCode = $_POST['postal'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	
	// Validate if the password is the same before registration
	if($password != $cpassword){
		echo "Please check if your password is the same";
		exit();
	}

	// Validation for empty fields
	if(empty($firstName) || empty($lastName) || empty($address) || empty($city) || empty($region) || empty($country) || empty($postalCode) || empty($phone) || empty($email) || empty($password) || empty($cpassword)){
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

	// Checking if the user name input is valid
	if(!preg_match("/^[a-zA-Z ]*$/", $firstName)){
		echo "Invalid name";
		exit();
	} 

	// Checking if the user lastName input is valid
	if(!preg_match("/^[a-zA-Z ]*$/", $firstName)){
		echo "Invalid last name";
		exit();
	}

	//Checking if e-mail is valid
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		//header("Location:register-user.form.php?Invalid=Email");
		echo "Check valid email";
		exit();
	}

	// Checking for valid postal code
	if(!preg_match("/^([a-zA-Z]\d[a-zA-Z])\ {0,1}(\d[a-zA-Z]\d)$/", $postalCode)){
		echo "Invalid postal code";
		exit();
	}

	// Checking if postalCode lenght is valid
	// if greater than 6, is not valid
	if(strlen($postalCode) > 6){
		echo "Invalid postal code";
		exit();
	}
		
	else {
		// Hashing the password
		$hashpwd = password_hash($password, PASSWORD_DEFAULT);
		// Insert the user into the database
		$query = "INSERT INTO customerlogon (CustomerID, UserName, Pass) VALUES (DEFAULT, :user, :pass);";

		$sql = $connection->prepare($query);
		$result = $sql->execute(array(
			":user" => $email,
			":pass" => $hashpwd
		));

		
		$CustID = $connection->lastInsertId();

		//$max = "SELECT MAX(CustomerID) FROM customers;";
		$queryCust = "INSERT INTO customers (CustomerID, FirstName, LastName, Address, City, Region, Country, Postal, Phone, Email) Values ('$CustID', :first, :last, :address, :city, :region, :country, :postal, :phone, :email);";

		$sql2 = $connection->prepare($queryCust);
		$results = $sql2->execute(array(
			":first" => $firstName,
			":last" => $lastName,
			":address" => $address,
			":city" => $city,
			":region" => $region,
			":country" => $country,
			":postal" => $postalCode,
			":phone" => $phone,
			":email" => $email
		));

		header("Location:register-user.form.php?Signup=success");
		echo "Connection succesfully";
		exit();
	}

}
	
?>
