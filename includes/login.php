<?php

session_start();

include("config.database.php");


		if(isset($_POST['submit'])){

		$email = $_POST['email'];
		$password = $_POST['password'];

		$error = "Wrong username or password!";
		$errorP = "Your password does not match!";
		$welcome = "Login succesfully, Welcome back!";
		$welcomeAdmin = "Welcome Admin";

		// Checking for empty user imput
		// Stop user from submission if there is no entry
		if(empty($email) || empty($password)){
			$_SESSION["error"] = $error;
			header("Location:login-form.php");
			exit();
		}

		// Checking if the user exists in the database
		if ($result = $connection->query("SELECT * FROM customerlogon WHERE UserName = '$email'")->fetchAll(PDO::FETCH_OBJ)){

			foreach ($result as $row) {

				$hashedPassword = password_verify($password, $row->Pass);
				if ($hashedPassword == false){
				
					$_SESSION["errorP"] = $errorP;
					header("Location:login-form.php");
					exit();
				}
	             
	            if($hashedPassword == true && $email == $row->UserName && $row->Admin == true){

					// Logging the Admin using superglobal Session
            		// if succesful, it redirects user to the website
					$_SESSION['Admin'] = $row->UserName;
					$_SESSION['welcome'] = $welcomeAdmin;
					$_SESSION['CustId'] = $row->CustomerID;

					header("Location:../admin.index.php");
					exit();
				}
				else($hashedPassword == true){

					// Logging the Customer using superglobal Session
            		// if succesful, it redirects user to the website
					$_SESSION['CustId'] = $row->CustomerID};
					$_SESSION['welcome'] = $welcome;

					header("Location:../index.php");
			}	
		}
	 }

?>
