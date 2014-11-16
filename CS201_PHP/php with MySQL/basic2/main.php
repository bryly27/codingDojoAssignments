<?php  
	session_start();

?>

<html>
<head>
	<title>Quotes</title>
</head>
<style type="text/css">
	.post {
		border-bottom: 1px solid black;
	}
</style>
<body>
	<h1>Here are the awesome quotes!</h1>

	<?php  
	// var_dump($_SESSION['infoReturn']);
		if(isset($_SESSION['infoReturn']))
		{
			for($i=count($_SESSION['infoReturn'])-1; $i>=0; $i--)
			{
				echo '<div class="post"><p>"'.$_SESSION['infoReturn'][$i]['quote'].'"</p>';
				echo '<p>-'.$_SESSION['infoReturn'][$i]['name'].' at '.$_SESSION['infoReturn'][$i]['created_at'].'</p></div>';

			}
		}


	?>

</body>
</html>