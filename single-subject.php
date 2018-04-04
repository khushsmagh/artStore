<?php
include 'includes/view-single-subject.php';
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
            ViewSingleSubject();
            ?>
        </div>
    </div>
</div>
<script src="bootstrap-3.2.0-dist/js/jQuery.js"></script>
<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
</body>
</html>