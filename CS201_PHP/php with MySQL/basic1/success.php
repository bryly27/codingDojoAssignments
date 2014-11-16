<?php
	
	session_start();

	if(isset($_SESSION['success']))
	{
		echo "You have successfully registered!";
		unset($_SESSION['success']);
	}
	else
	{
		header('location: index.php');
		die();
	}

?>