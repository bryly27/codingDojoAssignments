

<html>
<head>
	<title>Ninja Gold Game</title>
</head>
<style type="text/css">
	.farmbox {
		display: inline-block;
		border: 1px solid black;
		width: 250px;
		height: 250px;
		vertical-align: top;
		text-align: center;
	}

	.cavebox {
		display: inline-block;
		border: 1px solid black;
		width: 250px;
		height: 250px;
		vertical-align: top;
		text-align: center;
	}

	.housebox {
		display: inline-block;
		border: 1px solid black;
		width: 250px;
		height: 250px;
		vertical-align: top;
		text-align: center;
	}

	.casinobox {
		display: inline-block;
		border: 1px solid black;
		width: 250px;
		height: 250px;
		vertical-align: top;
		text-align: center;
	}

	.activities {
		width: 1000px;
		height: 100px;
		overflow: scroll;
		border: 1px solid black;
	}

	.green {
		color: green;
	}

	.red {
		color: red;
	}

	p {
		margin: 0;
		padding: 0;
	}

</style>
<body>
	<p>Your Gold: <?= $this->session->userdata('goldNumber') ?></p>

	<div class='farmbox'>
		<h1>Farm</h1>
		<p>(earns 10-20 golds)</p>
		<form action='ninja/addGold' method='post'>
			<input type='submit' value='Find Gold!' name='farmButton'>
			<input type='hidden' name='action' value='farm'>
		</form>
	</div>
	<div class='cavebox'>
		<h1>Cave</h1>
		<p>(earns 5-10 golds)</p>
		<form action='ninja/addGold' method='post'>
			<input type='submit' value='Find Gold!' name='caveButton'>
			<input type='hidden' name='action' value='cave'>
		</form>
	</div>
	<div class='housebox'>
		<h1>House</h1>
		<p>(earns 2-5 golds)</p>
		<form action='ninja/addGold' method='post'>
			<input type='submit' value='Find Gold!' name='houseButton'>
			<input type='hidden' name='action' value='house'>
		</form>
	</div>
	<div class='casinobox'>
		<h1>Casino</h1>
		<p>(earns/takes 0-50 golds)</p>
		<form action='ninja/addGold' method='post'>
			<input type='submit' value='Find Gold!' name='casinoButton'>
			<input type='hidden' name='action' value='casino'>
		</form>
	</div>
	<div class='reset'>
		<form action='/ninja/addgold' method='post'>
			<input type='submit' value='Reset the Game' name='resetButton'>
			<input type='hidden' name='action' value='reset'>
		</form>
	</div>
	<div class="activities">
		<?php  
		$activity = $this->session->userdata('log');
		for ($i=count($activity)-1; $i >=0; $i--) 
		{ 
			echo $activity[$i];
		}

		?>

	</div>



</body>
</html>