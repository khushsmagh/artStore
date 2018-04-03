<?php
include 'includes/view-single-artist.php';

$artistID = $_GET['ArtistID'];
$row = ViewSingleArtist();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="bootstrap-3.2.0-dist/css/Common.css" type="text/css" rel="stylesheet">
    <title>WIP - Assignment 1</title>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Palanquin" rel="stylesheet">
    <link href="iwppa1.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <header>
        <div id="topHeaderRow">
            <nav class="navbar navbar-default navbar-inverse">
                <div class="collapse navbar-collapse" id="navbar-1">
                    <div id="nav_inversed">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">Assign 2</a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Advanced Search</a></li>
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
    <div class="row">
        <div class="col-sm-10">
            <h1><?php echo $row['Name']?></h1>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="images/113010.jpg" class="img-thumbnail img-responsive" alt="Self-portrait in a Straw Hat"/>
            </div>
            <div class="col-md-5">
                <p>
                   <?php echo $row['Details'] ?></p>
                <div class="btn-group">
                    <button class="btn btn-default" type="button" >
                        <span style="color:rgb(0, 143, 190)"><span class="glyphicon glyphicon-gift"></span> Add to Favorites List</span>
                    </button>
                </div>
                <p>&nbsp;</p>
                <div class="panel panel-default">
                    <div class="panel-heading">Artist Details</div>
                    <table class="table">
                        <tr>
                            <th>Date:</th>
                            <td><?php echo $row['YearOfBirth'] ?>-<?php echo $row['YearOfDeath']?></td>
                        </tr>
                        <tr>
                            <th>Nationalitly:</th>
                            <td><?php echo $row['Nationality'] ?></td>
                        </tr>
                        <tr>
                            <th>More info:</th>
                            <td><?php echo $row['ArtistLink'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <h2 style="font-family: Stoke">Art By <?php echo $row['Name'] ?></h2>
                </div>
                <?php
                $sql = "select * from paintings Where ArtistID = $artistID";
                $query = $connection->query($sql);
                while($result = $query->fetch()) {
                ?>

                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="similar-products">


                                <img class="img-thumbnail" src="images/thumbs/116010.jpg" alt="...">
                                <div>
                                    <p class="similarTitle"><a href="#"><b><?php echo $result['Title']?></b></a></p>
                                    <button class="btn btn-primary btn-sm" type="button"><span
                                                class="glyphicon glyphicon-info-sign"></span> View
                                    </button>
                                    <button class="btn btn-success btn-sm" type="button"><span
                                                class="glyphicon glyphicon-gift"></span> Wish
                                    </button>
                                    <button class="btn btn-info btn-sm" type="button"><span
                                                class="glyphicon glyphicon-shopping-cart"></span>Cart
                                    </button>
                                </div>
                        </div>
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>
                <!--<div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="similar-products">
                            <img class="img-thumbnail" src="images/thumbs/116010.jpg" alt="..." >
                            <div >
                                <p class="similarTitle"><a href="#"><b>Artist Holding a Thistle</b></a></p>
                                <button class="btn btn-primary btn-sm" type="button"><span class="glyphicon glyphicon-info-sign"></span> View</button>
                                <button class="btn btn-success btn-sm" type="button"><span class="glyphicon glyphicon-gift"></span> Wish</button>
                                <button class="btn btn-info btn-sm" type="button"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="similar-products">
                            <img class="img-thumbnail" src="images/thumbs/116010.jpg" alt="..." >
                            <div >
                                <p class="similarTitle"><a href="#"><b>Artist Holding a Thistle</b></a></p>
                                <button class="btn btn-primary btn-sm" type="button"><span class="glyphicon glyphicon-info-sign"></span> View</button>
                                <button class="btn btn-success btn-sm" type="button"><span class="glyphicon glyphicon-gift"></span> Wish</button>
                                <button class="btn btn-info btn-sm" type="button"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="similar-products">
                            <img class="img-thumbnail" src="images/thumbs/116010.jpg" alt="..." >
                            <div >
                                <p class="similarTitle"><a href="#"><b>Artist Holding a Thistle</b></a></p>
                                <button class="btn btn-primary btn-sm" type="button"><span class="glyphicon glyphicon-info-sign"></span> View</button>
                                <button class="btn btn-success btn-sm" type="button"><span class="glyphicon glyphicon-gift"></span> Wish</button>
                                <button class="btn btn-info btn-sm" type="button"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="similar-products">
                            <img class="img-thumbnail" src="images/thumbs/116010.jpg" alt="..." >
                            <div >
                                <p class="similarTitle"><a href="#"><b>Artist Holding a Thistle</b></a></p>
                                <button class="btn btn-primary btn-sm" type="button"><span class="glyphicon glyphicon-info-sign"></span> View</button>
                                <button class="btn btn-success btn-sm" type="button"><span class="glyphicon glyphicon-gift"></span> Wish</button>
                                <button class="btn btn-info btn-sm" type="button"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="similar-products">
                            <img class="img-thumbnail" src="images/thumbs/116010.jpg" alt="..." >
                            <div >
                                <p class="similarTitle"><a href="#"><b>Artist Holding a Thistle</b></a></p>
                                <button class="btn btn-primary btn-sm" type="button"><span class="glyphicon glyphicon-info-sign"></span> View</button>
                                <button class="btn btn-success btn-sm" type="button"><span class="glyphicon glyphicon-gift"></span> Wish</button>
                                <button class="btn btn-info btn-sm" type="button"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="similar-products">
                            <img class="img-thumbnail" src="images/thumbs/116010.jpg" alt="..." >
                            <div >
                                <p class="similarTitle"><a href="#"><b>Artist Holding a Thistle</b></a></p>
                                <button class="btn btn-primary btn-sm" type="button"><span class="glyphicon glyphicon-info-sign"></span> View</button>
                                <button class="btn btn-success btn-sm" type="button"><span class="glyphicon glyphicon-gift"></span> Wish</button>
                                <button class="btn btn-info btn-sm" type="button"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="similar-products">
                            <img class="img-thumbnail" src="images/thumbs/116010.jpg" alt="..." >
                            <div >
                                <p class="similarTitle"><a href="#"><b>Artist Holding a Thistle</b></a></p>
                                <button class="btn btn-primary btn-sm" type="button"><span class="glyphicon glyphicon-info-sign"></span> View</button>
                                <button class="btn btn-success btn-sm" type="button"><span class="glyphicon glyphicon-gift"></span> Wish</button>
                                <button class="btn btn-info btn-sm" type="button"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</button>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
<script src="bootstrap-3.2.0-dist/js/jQuery.js"></script>
<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
</body>
</html>
