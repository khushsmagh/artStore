<?php

// Check if the submit button is clicked
// and then unset and destroy the session
if(isset($_POST['submit'])){
	session_start();
	session_unset();
	session_destroy();
	header("Location:login-form.php");
}

?>