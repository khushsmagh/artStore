<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['CustId'])){
	header("Location: includes/login-form.php");
} else {

require_once('includes/customer.class.php');

if(is_numeric($_SESSION['CustId'])){
	$customer = $_SESSION['CustId'];
	$customer = new Customer($customer);
}

$pageTitle = 'Update User';
include("includes/header.inc.php");
?>

<div class="container">
    <div class="row">
        <div class="formConatiner-update">
            <br>
            <h1>Update Profile</h1>
            <br>
            <form class="form-horizontal" method="POST" action="update-user.php">
                <div class="form-group">
                    <label class="col-md-2">First Name</label>
                    <div class="col-md-6">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="firstName" placeholder="First Name" class="form-control" value="<?php echo $customer->getFirstName(); ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Last Name</label>
                    <div class="col-md-6">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="lastName" placeholder="Last Name" class="form-control" value="<?php echo $customer->getLastName(); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Address</label>
                    <div class="col-md-6">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input type="text" name="address" placeholder="Address" class="form-control"  value="<?php echo $customer->getAddress(); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">City</label>
                    <div class="col-md-6">
                        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <select name="city" class="form-control">
                                <option value=""> Please select your city</option>
								<option<?php if ($customer->getCity() == 'Calgary') echo ' selected'; ?>>Calgary</option>
								<option<?php if ($customer->getCity() == 'Vancouver') echo ' selected'; ?>>Vancouver</option>
								<option<?php if ($customer->getCity() == 'Montreal') echo ' selected'; ?>>Montreal</option>
								<option<?php if ($customer->getCity() == 'Los Angeles') echo ' selected'; ?>>Los Angeles</option>
								<option<?php if ($customer->getCity() == 'Boston') echo ' selected'; ?>>Boston</option>
								<option<?php if ($customer->getCity() == 'New York') echo ' selected'; ?>>New York</option>
								<option<?php if ($customer->getCity() == 'New Jersey') echo ' selected'; ?>>New Jersey</option>
								<option<?php if ($customer->getCity() == 'Kentucky') echo ' selected'; ?>>Kentucky</option>
								<option<?php if ($customer->getCity() == 'Quebec') echo ' selected'; ?>>Quebec</option>
								<option<?php if ($customer->getCity() == 'Edmonton') echo ' selected'; ?>>Edmonton</option>
								<option<?php if ($customer->getCity() == 'Saskatoon') echo ' selected'; ?>>Saskatoon</option>
								<option<?php if ($customer->getCity() == 'Guelph') echo ' selected'; ?>>Guelph</option>
								<option<?php if ($customer->getCity() == 'Surrey') echo ' selected'; ?>>Surrey</option>
								<option<?php if ($customer->getCity() == 'Chicago') echo ' selected'; ?>>Chicago</option>
								<option<?php if ($customer->getCity() == 'Seattle') echo ' selected'; ?>>Seattle</option>
								<option<?php if ($customer->getCity() == 'Denver') echo ' selected'; ?>>Denver</option>
								<option<?php if ($customer->getCity() == 'Detroit') echo ' selected'; ?>>Detroit</option>
								<option<?php if ($customer->getCity() == 'San Francisco') echo ' selected'; ?>>San Francisco</option>
								<option<?php if ($customer->getCity() == 'Houston') echo ' selected'; ?>>Houston</option>
								<option<?php if ($customer->getCity() == 'Atlanta') echo ' selected'; ?>>Atlanta</option>
								<option<?php if ($customer->getCity() == 'Dallas') echo ' selected'; ?>>Dallas</option>
								<option<?php if ($customer->getCity() == 'Seattle') echo ' selected'; ?>>Seattle</option>
								<option<?php if ($customer->getCity() == 'Kansas') echo ' selected'; ?>>Kansas</option>
								<option<?php if ($customer->getCity() == 'San Jose') echo ' selected'; ?>>San Jose</option>
								<option<?php if ($customer->getCity() == 'California') echo ' selected'; ?>>California</option>
								<option<?php if ($customer->getCity() == 'Texas') echo ' selected'; ?>>Texas</option>
								<option<?php if ($customer->getCity() == 'Minneapolis') echo ' selected'; ?>>Minneapolis</option>
								<option<?php if ($customer->getCity() == 'Menphis') echo ' selected'; ?>>Menphis</option>
								<option<?php if ($customer->getCity() == 'Las Vegas') echo ' selected'; ?>>Las Vegas</option>
								<option<?php if ($customer->getCity() == 'Cincinnati') echo ' selected'; ?>>Cincinnati</option>
								<option<?php if ($customer->getCity() == 'Madison') echo ' selected'; ?>>Madison</option>
								<option<?php if ($customer->getCity() == 'Buffalo') echo ' selected'; ?>>Buffalo</option>
								<option<?php if ($customer->getCity() == 'Waterloo') echo ' selected'; ?>>Waterloo</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Region</label>
                    <div class="col-md-6">
                        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <input type="text" name="region" placeholder="Region" class="form-control" value="<?php echo $customer->getRegion(); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Country</label>
                    <div class="col-md-6">
                        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="country" class="form-control">
                                <option value="">Please select your country</option>
                                <option <?php if ($customer->getCountry() == 'Canada') echo 'selected'?>>Canada</option>
                                <option <?php if ($customer->getCountry() == 'USA') echo 'selected'?>>USA</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Postal Code</label>
                    <div class="col-md-6">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input type="text" name="postal" placeholder="Postal Code" class="form-control" value="<?php echo $customer->getPostal(); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Phone</label>
                    <div class="col-md-6">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input type="text" name="phone" placeholder="###-###-####" class="form-control" value="<?php echo $customer->getPhone(); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2"></label>
                    <div class="col-md-6">
                        <button type="submit" name="submit" class="btn btn-primary button2update " >Update Information <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>
            </form>
            <div class="form-group">
                <label class="col-md-2"></label>
                <div class="col-md-6">
                    <a class="btn btn-danger buttonupdate" href="iwppa2-works.php">Cancel <span class="glyphicon glyphicon-remove-sign"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<?php include("includes/footer.inc.php");}?>