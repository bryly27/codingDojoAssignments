<html>
<head>
	<title></title>
	<style type="text/css">

		.header {
			border-bottom: 1px solid black;
		}

		.header h1 {
			display: inline-block;
		}

		.header a {
			margin-left: 500px;
		}

		.quotes p {
			font-size: 12px;
		}

		.quotes h2 {
			border-bottom: 1px solid black;
		}

		.quote {
			border-bottom: 1px solid black;
		}

		.favorite {
			border-bottom: 1px solid black;
			margin-left: 40px;
		}

		.favorites h2{
			border-bottom: 1px solid black;
		}

	</style>
</head>
<body>
	<div class='header'>
		<h1>Welcome <?= $user['first_name'] ?></h1>
		<a href="/wall/logoff">Log Off</a>
	</div>

	<div class='quotes'>
		<h2>Quotable Quotes</h2>
<?php  

				foreach ($quotes as $quote) 
				{ ?>
				<div class='quote'>
					<form action="addFavorite" method='post'>
						<p>Posted by: <?= $quote['first_name']. ' ' .$quote['last_name'] ?></p>
						<h4><?= $quote['message'] ?></h4>
						<h5>- <?= $quote['author'] ?></h5>
						<input type='submit' value='add to favorites'>
						<input type='hidden' name='userid' value='<?= $user['id'] ?>'>
						<input type='hidden' name='quoteid' value='<?= $quote['id'] ?>'>
					</form>
				</div>
<?php		} ?>
	</div>

	<div class='favorites'>
		<h2>Your Favorites</h2>
<?php  

		foreach ($favorites as $favorite) 
		// {
			// if($favorite['quotes_id']==$quote['id'])
			{ ?>
			  <div class='favorite'>
					<form action='/wall/deleteFavorite' method='post'>
						<h4><?= $favorite['message'] ?></h4>
						<h5>- <?= $favorite['author'] ?></h5>
						<p>Posted by: <?= $favorite['first_name']. ' ' .$favorite['last_name'] ?></p>
						<input type='submit' value='remove from list'>
						<input type='hidden' name='remove' value='<?= $favorite['id'] ?>'>
					</form>
				</div>
<?php	}
		// }

?>

	</div>
	
	<div class='addQuote'>
		<form action='/wall/addQuote' method='post'>
			<p>Quoted by: <input type='text' name='author'></p>
			<p>Message: <textarea name='message'></textarea></p>
			<input type='submit' value='submit'>
			<input type='hidden' name='addQuote' value='<?= $user['id'] ?>'>
		</form>
	</div>






</body>
</html>