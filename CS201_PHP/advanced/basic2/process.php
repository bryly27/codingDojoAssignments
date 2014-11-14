<?php

	session_start();

	if(isset($_POST['action'])&& $_POST['action']=='register')
		{

		$errors=array();

			if(empty($_POST['name']))
			{
				$errors[] = "You need to type in your name!<br>";
			} else {
				$_SESSION['name']=$_POST['name'];
			}

			if(!empty($_POST['location']))
			{
				$_SESSION['location']=$_POST['location'];
			}

			if(!empty($_POST['language']))
			{
				$_SESSION['language']=$_POST['language'];
			}

			if(!empty($_POST['comment']))
			{
				$_SESSION['comment']=$_POST['comment'];
			}

			if(count($errors) > 0)
			{
				header('location: index.php');
				$_SESSION['errors'] = $errors;
			
				die();
			}
			else
			{
				header('location: success.php');
				$_SESSION['success'] = "Info Submitted";
				$_SESSION['counter']++;
				die();

			}


		}




?>