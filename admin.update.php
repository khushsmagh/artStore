<?php

$pageTitle = 'Admin Panel';
include("includes/header.inc.php");

	
	$id = $_GET['id'];
	$sql = "SELECT * 
		  FROM customers
		  WHERE CustomerID = '$id' ";

	$cust 	= new Query($sql);
	$set 	= $cust->resultSet();
	$count 	= $cust->resultCount();

?>

<div class="container">
	<div class="col-md-7">
		<form action="admin.update-user.php" method="POST">
			<table class="table table-bordered table-striped table-hover">
				<caption><h2> Admin Panel </h2></caption>
				 <tr>
				    <th>Fields</th>
				    <th>Information</th>
				 </tr>
				 <?php
				foreach ($set as $customer):?>
				 <tr>
				    <td>CustomerID</td>
				    <td><input readonly name="id" value="<?php echo $customer['CustomerID'] ?>">
					</td>				 
				 </tr>
				 <tr>
				    <td>First Name</td>
				    <td><input type="text" name="firstname" required value="<?php echo $customer['FirstName'] ?>"></td>				 
				 </tr>
				 <tr>
				    <td>Last Name</td>
				    <td><input type="text" name="lastname" required value="<?php echo $customer['LastName'] ?>"></td>				 
				 </tr>
				 <tr>
				    <td>Address</td>
				    <td><input type="text" name="address" required value="<?php echo $customer['Address'] ?>"></td>				 
				 </tr>
				 <tr>
				    <td>city</td>
				    <td>
				    	<select name="city" required>
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
				    </td>				 
				 </tr>
				 <tr>
				    <td>Region</td>
				    <td><input type="text" name="region" required value="<?php echo $customer['Region'] ?>"></td>				 
				 </tr>
				 <tr>
				    <td>Country</td>
				    <td>
				    	<select name="country" required>
                            <option value="">Please select your country</option>
                            <option>Canada</option>
                            <option>USA</option>
                        </select>
				    </td>				 
				 </tr>
				 <tr>
				    <td>Postal Code</td>
				    <td><input type="text" name="postal" required value="<?php echo $customer['Postal'] ?>"></td>				 
				 </tr>
				 <tr>
				    <td>Phone</td>
				    <td><input type="number" name="phone" required value="<?php echo $customer['Phone'] ?>"></td>				 
				 </tr>
				 <tr>
				    <td>Email</td>
				    <td><input type="text" name="email" required value="<?php echo $customer['Email'] ?>"></td>			 
				 </tr>
				 <?php
				endforeach;
				?>
			</table>
			<button class="btn btn-success btn-md" type="submit" name="update-user"> Update </button>
		</form>
		<br>
	</div>
</div>
<?php include("includes/footer.inc.php");  ?>
