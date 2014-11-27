<?php  
	// $checkout = $this->session->userdata('checkoutInfo');
	// $this->load->library('cart');
	// $this->cart->total();
?>

<html>
<head>
	<title></title>
</head>
<body>
	<h3>Check Out</h3>
	<table>
		<thead>
			<tr>
				<td>Qty</td>
				<td>Description</td>
				<td>Price</td>
			</tr>
		</thead>
		<tbody>
<?php  
			
			foreach ($cart as $key => $value) 
			{ 
				if($key !== 'total_price')
				{	?>
					<tr>
						<td><?= $value['quantity'] ?></td>
						<td><?= $value['description'] ?></td>
						<td><?= $value['price'] ?></td>
						<td><a href="/ecommerce/delete/<?= $value['id'] ?>">Delete</a></td>
					</tr>
<?php		}
			} ?>
				 	<tr>
            <td></td>
            <td>Total:</td>
            <td>$ <?= $cart['total_price'] ?></td>
            <td></td>
          </tr> 

		</tbody>
	</table>
</body>

</html>