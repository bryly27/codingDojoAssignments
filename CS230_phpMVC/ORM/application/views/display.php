<html>
<head>
	<title></title>
</head>
<body>
	<h3>Add a Product:</h3>
	<form action='product/add' method='post'>
		<p>Product Name: <input type='text' name='name'></p>
		<p>Price ($): <input type='text' name='price'></p>
		<p>Description: <input type='text' name='description'></p>
		<input type='submit' value='Add'>
		<input type='hidden' name='action' value='add'>
	</form>
	<h4>Product Listing:</h4>
	<table>
		<thead>
			<tr>
				<td>Product Name</td>
				<td>Price ($)</td>
				<td>Date Added</td>
				<td>Action</td>
			</tr>
		</thead>	
		<tbody>
<?php  

foreach ($name as $key => $value) 
			{ ?>
				<tr>
						<td><?= $value['name'] ?></td>
						<td><?= $value['price'] ?></td>
						<td><?= $value['created_at'] ?></td>
						<td><a href='product/delete/<?= $value['id'] ?>'>Delete</a></td>
					</tr>
<?php } ?>
		</tbody>
	</table>


</body>
</html>