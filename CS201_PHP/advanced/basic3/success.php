<?php
	session_start();
	if(!isset($_SESSION['randomNumber']))
	{
		$_SESSION['randomNumber']=rand(1,100);
	}
?>

<html>
<head>
	<title>Great Number Game</title>
</head>
<style type="text/css">

	h1, p, form{
		text-align: center;
	}

	.left {
		
		background-color: #CF2A27;
		margin-left: 50px;
		padding: 10px;
		width: 100px;
		height: 75px;
	}

	.right {
		
		background-color: #CF2A27;
		margin-left: 800px;
		padding: 10px;
		width: 100px;
		height: 75px;
	}

	.center {
		background-color: green;
		margin-left: 450px;
		padding: 10px;
		width: 100px;
		height: 75px;
	}

</style>
<body>
	<h1>Welcome to the Great Number Game!</h1>
	<p>I am thinking of a number between 1 and 100</p>
	<p>Take a guess!</p>


<?php

	echo $_SESSION['answer'];
	
?>

	
	<div>
		<form action="process.php" method="post">
			<div>
				<input name="playagain" type='submit' value='Play Again'>
				<input type='hidden' name='action2' value='register'>
			</div>
		</form>
	</div>





</body>
</html>