<?php

	session_start();


?>
<html>
<head>
	<title>Info Submitted</title>
</head>
<style type="text/css">

h3 {
	width: 380px;
	margin-left: 400px;
	border: 1px solid black;
	padding: 10px;
	background-color: #B6D7A8;
}

h2 {
	padding-left: 40px;
	text-decoration: underline;
}

ul {
	width: 300px;
}

li {
	list-style-type: none;
	line-height: 40px;
}

.box {
	border: 1px solid black;
	width: 400px;
	margin-left: 400px;
}

.goback {
	margin-left: 50px;
}

</style>
<body>
	<h3>Thank you for submitting this form! You have submitted this form <?= $_SESSION['counter'] ?> time now</h3>
	
	<div class="box">
		<h2>Submitted Information</h2>
		<ul>
			<li>Name: <?= $_SESSION['name'] ?></li>
			<li>Dojo Location: <?= $_SESSION['location'] ?></li>
			<li>Favorite Language: <?= $_SESSION['language'] ?></li>
			<li>Comment: <?= $_SESSION['comment'] ?></li>
		</ul>
		<form  class="goback" action='index.php' method='post'>
			<input type='submit' value='goback'>
		</form>
	</div>
</body>
</html>