
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Products</h3>
	<a href='/ecommerce/cart'>Your Cart(<?= $this->session->userdata('cart')['total_items']; ?>)<a>
	<table>
		<thead>
			<tr>
				<td>Description</td>
				<td>Price</td>
				<td>Qty</td>
				<td>Buy</td>
			</tr>
		</thead>
		<tbody>
			
<?php  
	foreach ($items as $item) 
	{ ?>
		<tr>
			<td><?= $item['description'] ?></td>
			<td>$<?= $item['price'] ?></td>
			<td>
			<form action='ecommerce/addToCart' method='post'>
				<select name='quantity'>
					<option value='1'>1</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='4'>4</option>
					<option value='5'>5</option>
					<option value='6'>6</option>
					<option value='7'>7</option>
					<option value='8'>8</option>
					<option value='9'>9</option>
					<option value='10'>10</option>
					</select>
				</td>
				<td>
					<input type='submit' value='Buy'>
					<input type='hidden' name='add' value='<?= $item['id'] ?>'>
				</td>
			</form>
			</tr>
		
<?php	} ?>
		

		</tbody>

	</table>

</body>
</html>