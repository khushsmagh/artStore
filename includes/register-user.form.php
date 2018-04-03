<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Registration Form Art Store</title>
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Palanquin" rel="stylesheet">
        <link href="iwppa1.css" rel="stylesheet">
    </head>
    <body>
        <br>
        <br>
        <div class="container">
            <div class="col-lg-9">
                <form class="form-horizontal" method="POST" action="register-user.php" id="registration">
                    <legend>Personal Information</legend>
                    <div class="form-group">
                        <label class="col-md-2">First Name</label>
                        <div class="col-md-6">
                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="firstName" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2">Last Name</label>
                        <div class="col-md-6">
                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="lastName" placeholder="Last Name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2">Address</label>
                        <div class="col-md-6">
                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input type="text" name="address" placeholder="Address" class="form-control">
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
                                <input type="text" name="region" placeholder="Region" class="form-control">
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
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2">Phone</label>
                        <div class="col-md-6">
                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input type="text" name="phone" placeholder="Phone" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">Email</label>
                        <div class="col-md-6">
                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="pass" type="text" name="email" placeholder="E-mail" data-minLenght="8" data-error="error" required class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Password" class="col-md-2">Password</label>
                        <div class="col-md-6">
                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2"></label>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success" >Register <span class="glyphicon glyphicon-send"></span></button>  
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2"></label>
                        <div class="col-md-6">
                            <button class="btn btn-primary" >Cancel <span class="glyphicon glyphicon-remove-sign"></span></button>  
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <script src="bootstrap-3.2.0-dist/js/jQuery.js"></script>
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
</html>