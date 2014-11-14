<?php

	session_start();

	if(isset($_POST['action']))

	{

		$_SESSION['guess']=$_POST['guess'];

		if($_SESSION['guess']<$_SESSION['randomNumber'])
		{
			header('location: index.php');
			$_SESSION['answer']="<div class=\"left\"><p>Number is too low!</p></div>";
		}
		elseif($_SESSION['guess']>$_SESSION['randomNumber']) 
		{
			header('location: index.php');
			$_SESSION['answer']="<div class=\"right\"><p>Number is too high!</p></div>";

		}
		// elseif($_SESSION['guess']=$_SESSION)
		else
		{	
			header('location: success.php');
			$_SESSION['answer']="<div class=\"center\"><p> Congratulations! You Got it!!!</p></div>";
		}
	}

	if(isset($_POST['action2']))
	{
		header('location: index.php');
		unset($_SESSION['randomNumber']);
	}

?>