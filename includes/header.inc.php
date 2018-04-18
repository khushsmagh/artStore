<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once('includes/config.database.php');
require_once('includes/config.googleAPI.php');
require_once('includes/query.class.php');
require_once('includes/cart.class.php');
$myCart = new Cart();

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
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <div id="topHeaderRow" >
                <div class="container">
                    <nav class="navbar navbar-default navbar-inverse">
                        <div class="container">
                            <div class="collapse navbar-collapse" id="navbar-1">
                                <div id="nav_inversed">
                                    <p class="navbar-brand">Welcome to the Art Store, <?php if(!isset($_SESSION['CustId'])){?><a href="includes/login-form.php"> Login</a> or <a href="includes/register-user.form.php"> Create an account</a><?php } ?></p>
                                    <ul class="nav navbar-nav navbar-right">
                                        <?php if(isset($_SESSION["welcome"])){
                                            $welcome = $_SESSION["welcome"];
                                            echo "<li><h4 style='color: #ccff99; padding-right: 17px; padding-top: 6px;'>$welcome</h4></li>";
                                        }?>
                                        <?php if(isset($_SESSION['CustId'])){
                                            echo '<li><form style="padding-top: 10px;" action="includes/logout.php" method="POST">
                                            <button class="btn btn-success" type="submit" name="submit">Logout</button>
                                        </form></li>';
                                        } ?>
                                        <?php if(isset($_SESSION['CustId'])){
                                            echo '<li><a href="update-user.form.php"><span class="glyphicon glyphicon-user"></span> My Account</a></li>';
                                        } ?>
                                        <?php if(isset($_SESSION['Admin'])){
                                            echo '<li><form style="padding-top: 10px;" action="includes/logout.php" method="POST">
                                            <button class="btn btn-success" type="submit" name="submit">Logout</button>
                                        </form></li>';
                                        } ?>
                                        <?php if(isset($_SESSION['Admin'])){
                                            echo '<li><a href="admin.index.php"><span class="glyphicon glyphicon-user"></span> Users List</a></li>';
                                        } ?>
                                        <li><a href="#"><span class="glyphicon glyphicon-gift"></span> Wish List</a></li>
                                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a></li>
                                        <li><a href="checkout.php"><span class="glyphicon glyphicon-arrow-right"></span> Checkout</a></li>
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
                        <form action="search.php" method="GET" class="col-md-3">
                            <div class="input-group">
                                <input class="form-control" type="text"  placeholder="Search" name="search">
                                    <div class="input-group-btn">
                                         <button class="btn btn-default"  type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                            </div>
                        </form>
                        <?php 
                        unset($_SESSION["welcome"]);
                        ?>
     
                    </div>
                </div>

            </div>  <!-- end logoRow -->
			<?php include('includes/navigation.inc.php'); ?>
        </header>
        <div class="container"> <!-- main content container -->
            <div class="main row">
                <div class="col-md-10"> <!-- left part of main panel -->
