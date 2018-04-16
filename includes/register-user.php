<?php

session_start();
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

	$errorPassword = "Please check your password";
	$errorName = "Please enter a valid name";
	$errorPhone = "Please enter a valid number phone";
	$errorEmail = "Please enter a valid email";
	$errorPostal = "Please enter a valid Postal Code";
	$newUser = "Welcome Please Login";

	// Validate if the password is the same before registration
	if($password != $cpassword){
		$_SESSION["errorPassword"] = $errorPassword;
		header("Location:register-user.form.php");
		exit();
	}

	// Validation for empty fields
	if(empty($firstName) || empty($lastName) || empty($address) || empty($city) || empty($region) || empty($country) || empty($postalCode) || empty($phone) || empty($email) || empty($password) || empty($cpassword)){
		
		$_SESSION["errorName"] = $errorName;
		header("Location:register-user.form.php");
		exit();
	}

	// Validate phone number
	// Checking that this does not have letters or special characteres
	if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) {
  		$_SESSION["errorPhone"] = $errorPhone;
		header("Location:register-user.form.php");
		exit();
	}

	// Validate lenght of the phone (American)
	// If phone is greater than 10, is not valid
	if (strlen($phone) > 10 || strlen($phone) < 8 ){
		$_SESSION["errorPhone"] = $errorPhone;
		header("Location:register-user.form.php");
		exit();
	}

	// Checking if the user name input is valid
	if(!preg_match("/^[a-zA-Z ]*$/", $firstName)){
		$_SESSION["errorName"] = $errorName;
		header("Location:register-user.form.php");
		exit();
	} 

	// Checking if the user lastName input is valid
	if(!preg_match("/^[a-zA-Z ]*$/", $LastName)){
		$_SESSION["errorName"] = $errorName;
		header("Location:register-user.form.php");
		exit();
	}

	//Checking if e-mail is valid
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		//header("Location:register-user.form.php?Invalid=Email");
		$_SESSION["errorEmail"] = $errorEmail;
		header("Location:register-user.form.php");
		exit();
	}

	// Checking for valid postal code
	if(!preg_match("/^([a-zA-Z]\d[a-zA-Z])\ {0,1}(\d[a-zA-Z]\d)$/", $postalCode)){
		$_SESSION["errorPostal"] = $errorPostal;
		header("Location:register-user.form.php");
		exit();
	}

	// Checking if postalCode lenght is valid
	// if greater than 6, is not valid
	if(strlen($postalCode) > 6){
		$_SESSION["errorPostal"] = $errorPostal;
		header("Location:register-user.form.php");
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

		$_SESSION["newUser"] = $newUser;
		header("Location:login-form.php");
		exit();
	}

}
	
?>
