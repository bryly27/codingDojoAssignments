<?php  
	session_start();

	header('location: main.php');
	include('connection.php');
	$info = "INSERT INTO name (name, quote, created_at, updated_at) VALUES('".$_POST['name']."','".$_POST['textarea']."', NOW(), NOW())";
	run_mysql_query($info);
	
	$query = "SELECT * FROM name";
	$_SESSION['infoReturn']=array();
	$_SESSION['infoReturn'] = fetch_all($query);
	var_dump($_SESSION['infoReturn']);


?>