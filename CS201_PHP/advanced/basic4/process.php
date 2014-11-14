<?php

session_start();

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
		{
 	 	 	header('location: index.php');
 	 	 	$_SESSION['email']=$_POST['email'];
 	 	 	$_SESSION['error']="<h3>The email address you entered (".$_SESSION['email'].") is NOT a valid email address!</h3></div>";
 		}
 			else
 		{
 			header('location: success.php');
 			$_SESSION['email']=$_POST['email'];
 		}




?>