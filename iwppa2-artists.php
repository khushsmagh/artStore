<?php
include 'view-artists.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>WIP - Assignment 1</title>
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
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-gift"></span> Wish List</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a></li>
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
    <div id="mainNavigationRow" >
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbar-2">
                        <ul class="nav navbar-nav">
                            <li ><a href="iwppa2-index.php">Home</a></li>
                            <li class="active"><a href="#">About Us</a></li>
                            <li> <a href="search.php">Advanced Search</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Browse <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li> <a href="iwppa2-works.php">Art Works</a></li>
                                    <li><a href="iwppa2-artists.php">Artists</a></li>
                                    <li><a href = "genres.php">Genres</a></li>
                                    <li><a href ="iwppa2-works.php">Subjects</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>  <!-- end mainNavigationRow -->
</header>
<div class="container">
    <h3>This Week's best selling artists</h3>
    <div class="alert alert-warning">
        <p>Each week we show you who are our best-selling artists ...</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php
        artistsinfo();
        ?>
</div>     
<div class="container">
    <h4> Artists by Genre </h4>
    <div class="row">
        <div class="col-md-12">
            <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" style="width: 7%">
                    <p>Gothic</p>
                </div>
                <div class="progress-bar progress-bar-success" role="progressbar" style="width: 27%">
                    <p>Renaissance</p>
                </div>
                <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 15%">
                    <p>Baroque</p>
                </div>
                <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 21%">
                    <p>Pre-Modern</p>
                </div>
                <div class="progress-bar progress-bar-primary" role="progressbar" style="width: 30%">
                    <p>Modern</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<script src="bootstrap-3.2.0-dist/js/jQuery.js"></script>
<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
</body>
</html>