<?php
include ('includes/view-index.php');
$pageTitle = 'Page Title';
include ('includes/header.inc.php');
?><!--
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>WIP - Assignment 1</title>
        <!-- Custom styles for this template -->
<!--
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Palanquin" rel="stylesheet">
        <link href="iwppa1.css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar-wrapper">
            <div class="container">
                <nav class="navbar">
                    <div class="container">
                        <div id="navbar" class="navbar-collapse collapse">
                            <div id="navbar_white">
                                <h1><a class="navbar-brand" href="#"> Assign 2 </a></h1>
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
                        </div>
                    </div>
                </nav>
            </div>
        </div>-->
</div>
        <div id="carousel-1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php OutputIndex(); ?>
                <!--<div class="item active">
                    <img class="first-slide" src="images/boucher-carousel.jpg" alt="first slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Francois Boucher</h1>
                            <p>The painting entitled <em>Madame de Pompadour</em> dates from 1758 and now resides in the National Gallery of Scotland</p>
                            <button class="btn btn-primary"> Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="images/david-carousel.jpg" alt="second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Jacques-Louis David</h1>
                            <p><em>The intervention of the Sabine Women </em> was painted in 1799 and resides in the Musée du Louvre, Paris.</p>
                            <button class="btn btn-primary"> Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide" src="images/vermeer-carousel.jpg" alt="third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Jan Vermeer</h1>
                            <p><em>The Art of Painting </em> is considered by many to be Vermeer's masterpice.</p>
                            <button class="btn btn-primary"> Learn More</button>
                        </div>
                    </div>
                </div> -->
            </div>
            <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">previous</span>
            </a>
            <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">next</span>
            </a>
        </div>
        <div class="container marketing">
            <div class="row">
                <div id="marketing-button">
                    <div class="row fix">
                    <?php Thumbnail();?>
                    </div>
                    <!--<div class="col-lg-4">
                        <img class="img-circle" src="images/tiny/120010.jpg" alt="portrait 1" width="100" height="100">
                        <h3>Portrait of Eleanor of Toledo</h3>
                        <p class="text-justify"><em> The Portrait of Eleanor of Toledo and Her son</em> is a painting by the italian artis Agnolo di Cosimo. Known as Brozino, finished ca. 1545. One of his most famous works, it is housed in the Uffizi Gallery of Florence, Italy and is considered one of the preeminent examples of Mannerist portraiture.</p>
                        <a class="btn btn-default" href="#" role="button">View details &raquo;</a>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-circle" src="images/tiny/116010.jpg" alt="portrait 2" width="100" height="100">
                        <h3>Portrait of the Artist</h3>
                        <p class="text-justify"><em> Portrait of the Artist Holding a Thistle</em> is an oil painting on parchment pasted on canvas by German artist Albert Dürer, painted in 1493. It is the earliest of Dürer's painted self-portraits and has been identified as one of the first self-portraits painted by a Northern artist.</p>
                        <a class="btn btn-default" href="#" role="button">View details &raquo;</a>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-circle" src="images/tiny/106020.jpg" alt="portrait 3" width="100" height="100">
                        <h3> Girl with a Pearl Earrings</h3>
                        <p class="text-justify"><em> Girl With a Pearl Earring</em> is one of Johannes Vermeer's masterworks and, as the name implies, uses a pearl earring for a focal point. Today the painting is kept in the Mauritshuis gallery in The Hague. It is sometimes referred to as "the Mona Lisa of the North" or "the Dutch Mona Lisa".</p>
                        <a class="btn btn-default" href="#" role="button">View details &raquo;</a>
                    </div>-->
                </div>
            </div>
        </div>

        <script src="bootstrap-3.2.0-dist/js/jQuery.js"></script>
        <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
    </body>
</html>