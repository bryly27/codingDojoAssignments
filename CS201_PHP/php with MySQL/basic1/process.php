<?php 
	session_start();
	include('connection.php');
	

		if(isset($_POST['action'])&& $_POST['action']=='register')
		{
			$errors=array();

		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
		{
			$errors[]="Please enter a valid email address!<br>";
		}

		if(strcspn($_POST['firstName'], '0123456789')!= strlen($_POST['firstName']))
		{
			$errors[]="Please enter a valid name!<br>";
		}

		if(empty($_POST['firstName']))
		{
			$errors[] = "Please enter your first name!<br>";
		}

		if(strcspn($_POST['lastName'], '0123456789')!= strlen($_POST['lastName']))
		{
			$errors[]="Please enter a valid name!<br>";
		}

		if(empty($_POST['lastName']))
		{
			$errors[] = "Please enter your last name!<br>";
		}

		if(strlen($_POST['password'])<6)
		{
			$errors[]="Please enter a password with at least 6 characters!<br>";
		}

		if(count($errors) > 0)
		{
			$_SESSION['errors'] = $errors;
			header('location: index.php');
			die();
		}
			else
		{
			$query = "INSERT INTO emails (email) VALUES('".$_POST['email']."')";
			run_mysql_query($query);
			$_SESSION['success'] = "Info Submitted";
			header('location: success.php');
			die();
		}
		}



?>