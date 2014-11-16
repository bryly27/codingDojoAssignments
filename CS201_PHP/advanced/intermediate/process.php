<?php

	session_start();

	if(!isset($_SESSION['activityLog']))
	{
		$_SESSION['activityLog']= array();
	}

 	if(isset($_POST['farmButton']))
 	{
 		header('location: index.php');
 		$_SESSION['farmGold']=rand(10,20);
 		$_SESSION['goldNumber']=$_SESSION['goldNumber']+$_SESSION['farmGold'];
 	}

 	if(isset($_POST['caveButton']))
 	{
 		header('location: index.php');
 		$_SESSION['farmGold']=rand(5,10);
 		$_SESSION['goldNumber']=$_SESSION['goldNumber']+$_SESSION['farmGold'];
 	}

 	if(isset($_POST['houseButton']))
 	{
 		header('location: index.php');
 		$_SESSION['farmGold']=rand(2,5);
 		$_SESSION['goldNumber']=$_SESSION['goldNumber']+$_SESSION['farmGold'];
 	}

 	if(isset($_POST['casinoButton']))
 	{
 		header('location: index.php');
 		$_SESSION['farmGold']=rand(-50,50);
 		$_SESSION['goldNumber']=$_SESSION['goldNumber']+$_SESSION['farmGold'];
 	}

 	if(isset($_POST['resetButton']))
 	{
 		header('location: index.php');
 		session_destroy();
 	}

 	

 	if($_SESSION['farmGold']>0)
		{
			$_SESSION['activityLog'][] = '<p class=\'green\'>You entered a farm and earned '.$_SESSION['farmGold'].' golds. (' .date('l jS \of F Y h:i:s A').')</p>';
			
		}
		else 
		{
			$_SESSION['activityLog'][] = '<p class=\'red\'>You entered a casino and lost '.$_SESSION['farmGold'].' golds... Ouch... (' .date('l jS \of F Y h:i:s A').')</p>';
		
		}

?>