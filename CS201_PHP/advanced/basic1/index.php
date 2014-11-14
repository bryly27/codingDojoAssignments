<?php 
session_start();
?>

<html>
<head>
	<title>Counter</title>
</head>
<body>
	<h1>You visted the site</h1>

	<?php


	if(!isset($_SESSION['counter']))
	{
		$_SESSION['counter']=1;
	}
	else 
	{
		$_SESSION['counter']++;
	}
	
	echo $_SESSION['counter'];

	?>

	<h3>Times</h3>

	<form action='process.php' method='post'>
		<button type="submit" name="reset" value="restart">Reset</button>
	</form>

	<?php


	?>


</body>
</html>