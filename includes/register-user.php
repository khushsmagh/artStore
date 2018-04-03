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
		//header("Location:register-user.form.php?Incorrect=Password");
		echo "Please check if your password is the same";
	}

	if(empty($firstName) || empty($lastName) || empty($address) || empty($city) || empty($region) || empty($country) || empty($postalCode) || empty($phone) || empty($email) || empty($password) || empty($cpassword)){

		header("Location:register-user.form.php?Missing=Fields");
		echo "missing fields";
		exit();
	}

	/*// Checking if the user input is valid for our Database
	if(preg_match(!"/^[a-zA-Z]*$/", $firstName) || preg_match(!"/^[a-zA-Z]*$/", $lastName)){
		//header("Location:register-user.form.php?Invalid=Name");
		echo "Check your name";
		exit();
	}  */

	
	//Checking if e-mailis valid
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		//header("Location:register-user.form.php?Invalid=Email");
		echo "Check valid email";
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

		// Getting the last ID inserted from the previous query
		$CustID = $connection->lastInsertId();

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
