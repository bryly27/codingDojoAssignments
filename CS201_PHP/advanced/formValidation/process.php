<?php

session_start();

	if(isset($_POST['action'])&& $_POST['action']=='register')
	{
		$errors=array();

		if(empty($_POST['first_name']))
		{
			$errors[] = "You have to include your first name!<br>";
		}

		if(strlen($_POST['first_name']) <2)
		{
			$errors[] = "Your first name must be at least 2 characters!<br>";
		}

		if(empty($_POST['last_name']))
		{
			$errors[] = "You have to include your last name!<br>";
		}

		if(strlen($_POST['last_name']) <2)
		{
			$errors[] = "Your first name must be at least 2 characters!<br>";
		}

		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
		{
			$errors[] = "Please enter a valid email address!<br>";
		}

		if(count($errors) > 0)
		{
			$_SESSION['errors'] = $errors;
			header('location: index.php');
			die();
		}
		else
		{
			$_SESSION['success'] = "Info Submitted";
			header('location: success.php');
			die();
		}
	}

?>