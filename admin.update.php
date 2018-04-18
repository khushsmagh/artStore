<?php

include("includes/header.inc.php");

?>

<div class="container">
	<div class="col-md-7">
		<form action="#" method="POST">
			<table class="table table-bordered table-striped table-hover">
				<caption><h2> Admin Panel </h2></caption>
				 <tr>
				    <th>Fields</th>
				    <th>Information</th>
				 </tr>
				 <tr>
				    <td>CustomerID</td>
				    <td><input hidden name="id"></td>				 
				 </tr>
				 <tr>
				    <td>First Name</td>
				    <td><input type="text" name="first"></td>				 
				 </tr>
				 <tr>
				    <td>Last Name</td>
				    <td><input type="text" name="last"></td>				 
				 </tr>
				 <tr>
				    <td>Address</td>
				    <td><input type="text" name="name"></td>				 
				 </tr>
				 <tr>
				    <td>city</td>
				    <td><input type="text" name="name"></td>				 
				 </tr>
				 <tr>
				    <td>Region</td>
				    <td><input type="text" name="name"></td>				 
				 </tr>
				 <tr>
				    <td>Country</td>
				    <td><input type="text" name="name"></td>				 
				 </tr>
				 <tr>
				    <td>Postal Code</td>
				    <td><input type="text" name="name"></td>				 
				 </tr>
				 <tr>
				    <td>Phone</td>
				    <td><input type="text" name="name"></td>				 
				 </tr>
				 <tr>
				    <td>Email</td>
				    <td><input type="text" name="name"></td>				 
				 </tr>			 
			</table>
			<button class="btn btn-success btn-md" type="submit" name="update-user"> Update </button>
		</form>
		<br>
	</div>
</div>
<?php include("includes/footer.inc.php");  ?>
