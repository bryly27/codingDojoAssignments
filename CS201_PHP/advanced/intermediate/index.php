<?php
	session_start();

	if(!isset($_SESSION['goldNumber']))
	{
		$_SESSION['goldNumber']=0;
	}
?>

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

</style>
<body>
	<p>Your Gold: <?= $_SESSION['goldNumber'] ?></p>

	<div class='farmbox'>
		<h1>Farm</h1>
		<p>(earns 10-20 golds)</p>
		<form action='process.php' method='post'>
			<input type='submit' value='Find Gold!' name='farmButton'>
		</form>
	</div>
	<div class='cavebox'>
		<h1>Cave</h1>
		<p>(earns 5-10 golds)</p>
		<form action='process.php' method='post'>
			<input type='submit' value='Find Gold!' name='caveButton'>
		</form>
	</div>
	<div class='housebox'>
		<h1>House</h1>
		<p>(earns 2-5 golds)</p>
		<form action='process.php' method='post'>
			<input type='submit' value='Find Gold!' name='houseButton'>
		</form>
	</div>
	<div class='casinobox'>
		<h1>Casino</h1>
		<p>(earns/takes 0-50 golds)</p>
		<form action='process.php' method='post'>
			<input type='submit' value='Find Gold!' name='casinoButton'>
		</form>
	</div>
	<div class='reset'>
		<form action='process.php' method='post'>
			<input type='submit' value='Reset the Game' name='resetButton'>
		</form>
	</div>
	<div class="activities">
<?php

		if (isset($_SESSION['activityLog'])) 
		{
			foreach ($_SESSION['activityLog'] as $log) 
			{
				echo $log;
			}
			
		} ?>
	</div>




</body>
</html>