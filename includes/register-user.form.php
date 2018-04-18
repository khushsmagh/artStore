<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="../bootstrap-3.2.0-dist/css/Common.css" type="text/css" rel="stylesheet">
        <title>Registration Form Art Store</title>
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Palanquin" rel="stylesheet">
        <link href="../iwppa1.css" rel="stylesheet">
    </head>
    <body>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="formConatiner-register">
                    <form class="form-horizontal" method="POST" action="register-user.php" id="registration">
                        <h2>Personal Information</h2>
                            <hr>
                        <div class="form-group">

                            <label class="col-md-2">First Name</label>
                            <div class="col-md-6">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" name="firstName" placeholder="First Name" class="form-control">
                                </div>
                                <?php
                                if (isset($_SESSION["errorName"])) {
                                    $errorName = $_SESSION["errorName"];
                                    echo "<span style='color: red;'>$errorName</span>";
                                }
                               ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2">Last Name</label>
                            <div class="col-md-6">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" name="lastName" placeholder="Last Name" class="form-control">
                                </div>
                                <?php
                                if (isset($_SESSION["errorName"])) {
                                    $errorName = $_SESSION["errorName"];
                                    echo "<span style='color: red;'>$errorName</span>";
                                }
                               ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2">Address</label>
                            <div class="col-md-6">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input type="text" name="address" placeholder="Address" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2">City</label>
                            <div class="col-md-6">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <select name="city" class="form-control">
                                        <option value="">Please select your city</option>
                                        <option>Calgary</option>
                                        <option>Vancouver</option>
                                        <option>Montreal</option>
                                        <option>Los Angeles</option>
                                        <option>Boston</option>
                                        <option>New York</option>
                                        <option>New Jersey</option>
                                        <option>Kentucky</option>
                                        <option>Quebec</option>
                                        <option>Edmonton</option>
                                        <option>Saskatoon</option>
                                        <option>Guelph</option>
                                        <option>Surrey</option>
                                        <option>Chicago</option>
                                        <option>Seattle</option>
                                        <option>Denver</option>
                                        <option>Detroit</option>
                                        <option>San Francisco</option>
                                        <option>Houston</option>
                                        <option>Atlanta</option>
                                        <option>Dallas</option>
                                        <option>Seattle</option>
                                        <option>Kansas</option>
                                        <option>San Jose</option>
                                        <option>California</option>
                                        <option>Texas</option>
                                        <option>Minneapolis</option>
                                        <option>Menphis</option>
                                        <option>Las Vegas</option>
                                        <option>Cincinnati</option>
                                        <option>Madison</option>
                                        <option>Buffalo</option>
                                        <option>Waterloo</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2">Region</label>
                            <div class="col-md-6">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                    <input type="text" name="region" placeholder="Region" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2">Country</label>
                            <div class="col-md-6">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                    <select name="country" class="form-control">
                                        <option value="">Please select your country</option>
                                        <option>Canada</option>
                                        <option>USA</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2">Postal Code</label>
                            <div class="col-md-6">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input type="text" name="postal" placeholder="Postal Code" class="form-control">
                                </div>
                                <?php
                                if (isset($_SESSION["errorPostal"])) {
                                    $errorPostal = $_SESSION["errorPostal"];
                                    echo "<span style='color: red;'>$errorPostal</span>";
                                }
                               ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2">Phone</label>
                            <div class="col-md-6">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input type="text" name="phone" placeholder="Phone" class="form-control">
                                </div>
                                <?php
                                if (isset($_SESSION["errorPhone"])) {
                                    $errorPhone = $_SESSION["errorPhone"];
                                    echo "<span style='color: red;'>$errorPhone</span>";
                                }
                               ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2">Email</label>
                            <div class="col-md-6">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input type="text" name="email" placeholder="E-mail" data-minLenght="8" data-error="error" required class="form-control">
                                </div>
                                <?php
                                if (isset($_SESSION["errorEmail"])) {
                                    $errorEmail = $_SESSION["errorEmail"];
                                    echo "<span style='color: red;'>$errorEmail</span>";
                                }
                               ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2">Password</label>
                            <div class="col-md-6">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input type="password" name="password" placeholder="***********" class="form-control">
                                </div>
                                <?php
                                if (isset($_SESSION["errorPassword"])) {
                                    $errorPassword = $_SESSION["errorPassword"];
                                    echo "<span style='color: red;'>$errorPassword</span>";
                                }
                               ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2">Confirm Password</label>
                            <div class="col-md-6">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input type="password" name="cpassword" placeholder="***********" class="form-control">
                                </div>
                                <?php
                                if (isset($_SESSION["errorPassword"])) {
                                    $errorPassword = $_SESSION["errorPassword"];
                                    echo "<span style='color: red;'>$errorPassword</span>";
                                }
                               ?>
                            </div>
                        </div>
                        <div>
                            <label class="col-md-1"></label>
                            <div class="col-md-4">
                                <button type="submit" name="submit" class="btn btn-success buttonregister" >Register <span class="glyphicon glyphicon-send"></span></button>
                            </div>
                        </div>
                    </form>
                        <div class="form-group">
                            <div class="col-lg-3">
                                <a href="../iwppa2-index.php"><button class="btn btn-primary buttonregister" >Cancel <span class="glyphicon glyphicon-remove-sign"></span></button></a>
                            </div>
                        </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </body>
    <script src="../bootstrap-3.2.0-dist/js/jQuery.js"></script>
    <script src="../bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
    <?php
    unset($_SESSION["errorPassword"]);
    unset($_SESSION["errorName"]);
    unset($_SESSION["errorPhone"]);
    unset($_SESSION["errorPostal"]);
    unset($_SESSION["errorEmail"]);
    ?>
</html>