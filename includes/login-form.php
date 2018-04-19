<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="../css/Common.css" type="text/css" rel="stylesheet">
        <title>Login Art Store</title>
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Palanquin" rel="stylesheet">
        <link href="../iwppa1.css" rel="stylesheet">
    </head>
    <body class="loginbg">
    <div class="container ">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="formConatiner">
                    <?php
                        if (isset($_SESSION["newUser"])) {
                            $newUser = $_SESSION["newUser"];
                            echo "<h4 style='color: blue;'>$newUser</h4>";
                        }
                       ?>
                    <form method="POST" action="login.php">
                        <h2>Please Login</h2><br>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="Password" class="form-control" name="password" id="pass" placeholder="Enter Password">
                        </div>
                        <?php
                            if (isset($_SESSION["error"])) {
                                $error = $_SESSION["error"];
                                echo "<span style='color: red;'>$error</span>";
                            }
                            ?>
                        <?php
                            if (isset($_SESSION["errorP"])) {
                                $errorP = $_SESSION["errorP"];
                                echo "<span style='color: red;'>$errorP</span>";
                            }
                            ?>
                        <br>
                        <button name="submit" type="submit" class="btn btn-primary form-control" >Login  <span class="glyphicon glyphicon-check"></span></button><p></p>
                    </form>
                    <a class="btn btn-danger form-control" href="../iwppa2-index.php"> Cancel <span class="glyphicon glyphicon-remove-sign"></span></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>
    <script src="../bootstrap-3.2.0-dist/js/jQuery.js"></script>
    <script src="../bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
    </body>
    <?php
    unset($_SESSION["error"]);
    unset($_SESSION["errorP"]);
    unset($_SESSION["newUser"]);
    ?>
</html>