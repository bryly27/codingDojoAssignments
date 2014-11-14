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

	
	<div>
		<form action="process.php" method="post">
			<input type='text' name='guess' placeholder='Guess a number'>
			<div>
				<input name="number" type='submit' value='Submit'>
				<input type='hidden' name='action' value='register'>
			</div>
		</form>
	</div>


<?php
	
	if(isset($_SESSION['answer']))
	{
		echo $_SESSION['answer'];
	}
?>

</body>
</html>

