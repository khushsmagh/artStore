<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="bootstrap-3.2.0-dist/css/Common.css" type="text/css" rel="stylesheet">
        <title>Login Art Store</title>
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Palanquin" rel="stylesheet">
        <link href="iwppa1.css" rel="stylesheet">
    </head>
    <body style="background-color: #8a6d3b">
    <div class="container">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="jumbotron" style="margin-top: 200px">
                <h2>Please Login</h2><br>
                <form method="POST" action="login.php">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" class="form-control" name="password" id="pass" aria-describedby="passwordHelp" placeholder="Enter Password">
                    </div><br>
                    <button name="submit" type="submit" class="btn btn-primary form-control" >Login  <span class="glyphicon glyphicon-check"></span></button><p></p>
                    <a href="../iwppa2-works.php"><button class="btn btn-danger form-control" >Cancel <span class="glyphicon glyphicon-remove-sign"></span></button></a>
                </form>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>


    <script src="bootstrap-3.2.0-dist/js/jQuery.js"></script>
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
    </body>
</html>