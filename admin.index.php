<?php

include("includes/header.inc.php");

	$sql = "SELECT * 
		  FROM Customers";
	$customers 	= new Query($sql);
	$set 	= $customers->resultSet();
	$count 	= $customers->resultCount();
?>

<div class="container">
	<div class="col-md-9">
		<form id="admin" action="admin.update.php" method="POST">
			<table class="table table-bordered table-striped table-hover">
				<caption><h2 class="text-centre">Admin Panel</h2></caption>
				 <tr>
				    <th>ID</th>
				    <th>Name</th>
				    <th>Update</th>
				 </tr>
				<?php 
				foreach ($set as $customer):?>
				 <tr>
				    <td><?php echo $customer['CustomerID'] ?></td>
				    <td><?php echo $customer['FirstName'] . ", " . $customer['LastName'] ?></td>
				    <td><button class="btn btn-success" type="submit" name="update"> Update </button></td>
				 </tr>
				<?php
				endforeach;
				?>
			</table>
		</form>
		<?php echo '<h4>You have : '.$count.' users</h4>';?>
	</div>
</div>
<?php include("includes/footer.inc.php");  ?>