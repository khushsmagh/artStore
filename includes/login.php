<?php

session_start();

include("config.database.php");

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];


	// Checking for empty user imput
	// Stop user from submission if there is no entry
	if(empty($email) || empty($password)){
		echo "Please check your fields";
		header("Location:login-form.php?Error=Logging");
		exit();
	}

	// Checking if the user exists in the database
	if ($result = $connection->query("SELECT * FROM customerlogon WHERE UserName = '$email'")->fetchAll(PDO::FETCH_OBJ)){

		foreach ($result as $row) {

			$hashedPassword = password_verify($password, $row->Pass);
			if ($hashedPassword == false){
				header("Location:login-form.php?Error=Logging=no=password");
				exit();
			}
            else{ 
            ($hashedPassword == true){

					// Logging the Customer using superglobal Session
            		// if succesful, it redirects user to the website
					$_SESSION['CustId'] = $row->CustomerID};

					echo "logged in";
					header("Location:../iwppa2-works.php");
				}
			}	
		}
	  }
?>
