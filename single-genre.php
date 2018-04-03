<?php
include 'includes/view-single-genre.php';
$result = ViewSingleGenre();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Genre</title>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Palanquin" rel="stylesheet">
    <link href="iwppa1.css" rel="stylesheet">
</head>
<body>
<div class="container">
<header>
        <div id = "topHeaderRow">
            <h2><?php echo $result['GenreName']?></h2>
        </div>
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
</div>
</header>
<div class = "container">
    <div class = "row">
        <?php
        echo $result['Description'];
        ?>
    </div>
</div>
</div>
</body>
</html>
