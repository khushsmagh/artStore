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
<header>
    <div id="topHeaderRow" >
        <div class="container">
            <nav class="navbar navbar-default navbar-inverse">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbar-1">
                        <div id="nav_inversed">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#">Assign 2</a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li class="nav-item dropdown">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li ><a href="#"><span class="dropdowncolor" >Page 1-1</span ></a></li>
                                        <li ><a href="#"><span class="dropdowncolor" >Page 1-2</span></a></li>
                                        <li ><a href="#"><span class="dropdowncolor" >Page 1-3</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a>Your Full Name Here</a></li>
                                <form class="navbar-form navbar-right" action="/action_page.php">

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search Painting">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </ul>

                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div>
                    <br>
                    <h1>Search Results</h1>
                    <hr class="my-6">
                </div>
                <div class="well">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Filter by Title:
                        </label>
                        <input type="text" class="form-control" >
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Filter by Description:
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            No Filter (show all art works):
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>
</body>
<script src="bootstrap-3.2.0-dist/js/jQuery.js"></script>
<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
</html>