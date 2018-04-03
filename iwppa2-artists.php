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
                            <li> <a href="iwppa2-works.php">Advanced Search</a></li>
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
        ?><!--
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="images/artists/1.jpg" alt="1">
                <div class="caption">
                    <h4> Picasso</h4>
                    <button class="btn btn-info"><span class="glyphicon glyphicon-fire"></span> Sales <span class="badge"> 66</span></button>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="images/artists/99.jpg" alt="2">
                <div class="caption">
                    <h4> Rapahael</h4>
                    <button class="btn btn-info"><span class="glyphicon glyphicon-fire"></span> Sales <span class="badge"> 56 </span></button>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="images/artists/19.jpg" alt="3">
                <div class="caption">
                    <h4> Van Gogh</h4>
                    <button class="btn btn-info"><span class="glyphicon glyphicon-fire"></span> Sales <span class="badge"> 40 </span></button>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="images/artists/95.jpg" alt="4">
                <div class="caption">
                    <h4> Boticelli</h4>
                    <button class="btn btn-info"><span class="glyphicon glyphicon-fire"></span> Sales <span class="badge"> 37 </span></button>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="images/artists/29.jpg" alt="5">
                <div class="caption">
                    <h4> Klimt</h4>
                    <button class="btn btn-info"><span class="glyphicon glyphicon-fire"></span> Sales <span class="badge"> 36 </span></button>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="images/artists/2.jpg" alt="6">
                <div class="caption">
                    <h4> Matisse</h4>
                    <button class="btn btn-info"><span class="glyphicon glyphicon-fire"></span> Sales <span class="badge"> 34 </span></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="images/artists/98.jpg" alt="7">
                <div class="caption">
                    <h4> Michelangelo</h4>
                    <button class="btn btn-info"><span class="glyphicon glyphicon-fire"></span> Sales <span class="badge"> 32 </span></button>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="images/artists/106.jpg" alt="8">
                <div class="caption">
                    <h4> Vermeer</h4>
                    <button class="btn btn-info"><span class="glyphicon glyphicon-fire"></span> Sales <span class="badge"> 31 </span></button>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="images/artists/97.jpg" alt="9">
                <div class="caption">
                    <h4> da Vinci</h4>
                    <button class="btn btn-info"><span class="glyphicon glyphicon-fire"></span> Sales <span class="badge"> 26 </span></button>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="images/artists/21.jpg" alt="10">
                <div class="caption">
                    <h4> Cezanee</h4>
                    <button class="btn btn-info"><span class="glyphicon glyphicon-fire"></span> Sales <span class="badge"> 25 </span></button>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="images/artists/17.jpg" alt="11">
                <div class="caption">
                    <h4> Monet</h4>
                    <button class="btn btn-info"><span class="glyphicon glyphicon-fire"></span> Sales <span class="badge"> 25 </span></button>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="images/artists/101.jpg" alt="12">
                <div class="caption">
                    <h4> Caravaggio</h4>
                    <button class="btn btn-info"><span class="glyphicon glyphicon-fire"></span> Sales <span class="badge"> 18 </span></button>
                </div>
            </div>
        </div>
    </div>
</div> -->
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
<script src="bootstrap-3.2.0-dist/js/jQuery.js"></script>
<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
</body>
</html>