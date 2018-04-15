<?php
$cookie_name = "YourCart";
$cookie_value = "";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
header("Location: ".$_SERVER['HTTP_REFERER']);
?>