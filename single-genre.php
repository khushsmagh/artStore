<?php
include 'includes/view-single-genre.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="bootstrap-3.2.0-dist/css/Common.css" type="text/css" rel="stylesheet">
    <title>Genre</title>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Palanquin" rel="stylesheet">
    <link href="iwppa1.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div id="topHeaderRow">
        <nav class="navbar navbar-default navbar-inverse">
            <div class="collapse navbar-collapse" id="navbar-1">
                <div id="nav_inversed">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Assign 2</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="iwppa2-about.php">About Us</a></li>
                        <li><a href="search.php">Advanced Search</a></li>
                        <li class="nav-item dropdown">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Browse
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li ><a href="#"><span class="dropdowncolor" >Art Works</span ></a></li>
                                <li ><a href="iwppa2-artists.php"><span class="dropdowncolor" >Artists</span></a></li>
                                <li ><a href="genres.php"><span class="dropdowncolor" >Genres</span></a></li>
                                <li ><a href="#"><span class="dropdowncolor" >Subjects</span></a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a>Your Full Name</a></li>
                        <form class="navbar-form navbar-right" action="/action_page.php">

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search Painting">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    </header>
    <br><br>
<div class = "container">
    <div class = "row">
        <?php
        ViewSingleGenre();
        ?>
    </div>
</div>
</div>
    <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4><span class="glyphicon glyphicon-info-sign"></span> About Us</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <div id="footer_adjustment">
                        <div class="col-md-3">
                            <h4><span class="glyphicon glyphicon-earphone"></span> Customer Service</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                            </ul>  
                        </div>         
                        <div class="col-md-3">
                            <h4><span class="glyphicon glyphicon-shopping-cart"></span> Just Ordered</h4>
                            <div class="media">
                                <a class="pull-left"  href="#">
                                <img class="media-object" src="images/tiny/13030.jpg" alt="cart">
                                </a>
                                <p class="media-body"> <a href="#">Arrangement in Grey and Black</a></p>
                                <em>5 minutes ago</em>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object"  src="images/tiny/116010.jpg" alt="cart2">
                                </a>
                                <p class="media-body"><a href="#">Artist Holding a Thistle</a></p>
                                <em>11 minutes ago</em>
                            </div>   
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/tiny/113010.jpg" alt="cart3">
                                </a>
                                <p class="media-body"><a href="#">Self-portrait in a Straw Hat</a></p>
                                <em>23 minutes ago</em>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4><span class="glyphicon glyphicon-envelope"></span> Contact us</h4>
                        <div class="tight-form-group">
                            <form action="http://www.randyconnolly.com/tests/process.php" method="post">
                                <input class="form-control" type="text" name="email" placeholder="Enter name ...">
                                <input class="form-control" type="email"  name="email" placeholder="Enter email ...">
                                <textarea class="form-control"  rows="3" placeholder="Enter message ..."></textarea>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
            <div id="copyrightRow">
                <p>All images are copyright to their owners. This is just a hypothetical site
                <span class="pull-right" >&copy; 2014 Copyright Art Store</span></p>
            </div>
        </footer>
        <script src="bootstrap-3.2.0-dist/js/jQuery.js"></script>
        <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
    </body>
</html>
