<?php

session_start();

		unset($_SESSION['counter']);
		header('location: index.php');
		die();
	

?>