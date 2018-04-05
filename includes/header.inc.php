<?php
session_start();

require_once('includes/config.database.php');
require_once('includes/config.googleAPI.php');
require_once('includes/query.class.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title><?php echo $pageTitle; ?> - GP1</title>
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Palanquin" rel="stylesheet">
        <link href="iwppa1.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="topHeaderRow" >
                <div class="container">
                    <nav class="navbar navbar-default navbar-inverse">
                        <div class="container">
                            <div class="collapse navbar-collapse" id="navbar-1">
                                <div id="nav_inversed">
                                    <p class="navbar-brand">Welcome to the Art Store,<a href="includes/login-form.php"> Login</a> or <a href="includes/register-user.form.php"> Create an account</a></p>
                                    <?php if(isset($_SESSION['CustId'])){
                                            echo '<form action="includes/logout.php" method="POST">
                                            <button class="btn btn-success" type="submit" name="submit">Logout</button>
                                        </form>';
                                        } ?>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="my-account.php"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
                                        <li><a href="view-favorites-list.php"><span class="glyphicon glyphicon-gift"></span> Wish List</a></li>
                                        <li><a href="view-cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-arrow-right"></span> Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>   <!-- end topHeaderRow -->
            <div class="container">
                <div id="logoRow" >
                    <div class="main row">
                        <h1 class="col-md-8">Art Store</h1>
                        <form action="http://www.randyconnolly.com/tests/process.php" method="post" class="col-md-3">
                            <div class="input-group">
                                <input class="form-control" type="text"  placeholder="Search" name="search">
                                    <div class="input-group-btn">
                                         <button class="btn btn-default"  type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                            </div>
                        </form>
     
                    </div>
                </div>

            </div>  <!-- end logoRow -->
			<?php include('includes/navigation.inc.php'); ?>
        </header>
        <div class="container"> <!-- main content container -->
            <div class="main row">
                <div class="col-md-10"> <!-- left part of main panel -->
