<?php 
	session_start() 
?>
<html>
<head>
	<title>Login and Registration</title>
</head>
<style type="text/css">
	.error {
		color: red;
	}
</style>
<body>
	<h1></h1>
	<?php  
		if(isset($_SESSION['errors']))
		{
			foreach ($_SESSION['errors'] as $error) 
			{
				echo "<p class='error'>{$error} </p>";
			}
			unset($_SESSION['errors']);
		}
	?>
	<h2>Register</h2>
	<form action='process.php' method='post'>
		<input type='hidden' name='action' value='register'>
		First Name: <input type='text' name='first_name'><br>
		Last Name: <input type='text' name='last_name'><br>
		Email Address: <input type='text' name='email'><br>
		Password: <input type='password' name='password'><br>
		Confirm Password: <input type='password' name='confirm_password'><br>
		<input type='submit' value='register'>
	</form>
	<h2>Login</h2>
	<form action='process.php' method='post'>
		<input type='hidden' name='action' value='login'>
		Email Address: <input type='text' name='email'><br>
		Password: <input type='password' name='password'><br>
		<input type='submit' value='register'>
	</form>
</body>
</html>

