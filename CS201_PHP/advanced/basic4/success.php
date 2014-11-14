<?php
 session_start();	

if(!isset($_SESSION['email'])){
	header('location: index.php');
	die();
}
?>

<html>
<head>
	<title>Success</title>
</head>
<style type="text/css">
	h3{
		background-color: #6CA753;
		border: 1px solid black;
		width: 400px;
		height: 75px;
		text-align: center;
		padding: 5px;
		margin-left: 300px;
		margin-top: 50px;
	}
</style>
<body>
	<h3>The email address you entered (<?= $_SESSION['email'] ?>) is a VALID email address! Thank you!</h3>

</body>
</html>