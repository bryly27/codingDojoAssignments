<?php
	session_start();
?>

<html>
<head>
	<title>Email Validation</title>
</head>
<style type="text/css">
	h3 {
		background-color: #DE6769;
		border: 1px solid black;
		width: 400px;
		height: 75px;
		text-align: center;
		padding: 5px;
		margin-left: 300px;
		margin-top: 50px;
	}
	p, form{
		text-align: center;
	}
</style>

<body>

<?php
	if(isset($_SESSION['email'])){
		echo $_SESSION['error'];
	}
?>


	<p>Please enter your email address:</p>
	<form action='process.php' method='post'>
		<input name='email' type='text' placeholder='enter here'>
		<div>
			<input name="number" type='submit' value='Submit'>
			<input type='hidden' name='action' value='register'>
		</div>
	</form>
	

</body>
</html>