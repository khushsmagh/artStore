<?php

include("includes/header.inc.php");
?>

<div class="container">
	<br>
	<h1>Update Profile</h1>
	<br>
	<form class="form-horizontal" method="POST" action="update-user.php">
                    <h4>Personal Information</h4>
                    <br>
                    <div class="form-group">
                        <label class="col-md-2">First Name</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" name="firstName" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2">Last Name</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="lastName" placeholder="Last Name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2">Address</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="address" placeholder="Address" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2">City</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <select name="city" class="form-control">
                                    <option value=""> Please select your city</option>
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
                            <div class="input-group">
                                <input type="text" name="region" placeholder="Region" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2">Country</label>
                        <div class="col-md-6">
                            <div class="input-group">
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
                            <div class="input-group">
                                <input type="text" name="postal" placeholder="Postal Code" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2">Phone</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="phone" placeholder="###-###-####" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2"></label>
                        <div class="col-md-6">
                            <button type="submit" name="submit" class="btn btn-primary" >Update Information <span class="glyphicon glyphicon-send"></span></button>  
                        </div>
                    </div>
                </form>

                <div class="form-group">
                        <label class="col-md-2"></label>
                        <div class="col-md-6">
                            <a class="btn btn-danger" href="iwppa2-works.php">Cancel <span class="glyphicon glyphicon-remove-sign"></span></a> 
                        </div>
                </div>
		</div>
	<?php include("includes/footer.inc.php");?>