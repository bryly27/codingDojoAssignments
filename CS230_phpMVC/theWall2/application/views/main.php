<html>
<head>
	<title>login</title>
</head>

<style type="text/css">

	.login {
		border: 1px solid black;
		width: 600px;
		height: 180px;
		margin: 50px 10px 10px 200px;
	}

	.register {
		border: 1px solid black;
		width: 600px;
		height: 300px;
		margin: 10px 10px 10px 200px;
	}

	p	{
		margin-left: 100px;
	}

	h5 {
		margin-left: 20px;
	}

	.button {
		margin-left: 300px;
	}

	input {
		float: right;
	}

	form {
		width: 350px;
	}
	
</style>

<body>
<?php 
	// if(validation_errors())
	// {
		echo validation_errors();
	// } ?>
	<div class='login'>
		<form action='/wall/login' method='post'>
			<h5>Log In</h5>
			<p>Email: <input name='email' type='text'></p>
			<p>Password: <input name='password' type='password'></p>
			<input type='submit' value='login' class='button'>
			<input type='hidden' name='action' value='login'>
		</form>
	</div>

	<div class='register'>
		<form action='/wall/register' method='post'>
			<h5>Or Register</h5>
			<p>First Name: <input name='first_name' type='text'></p>
			<p>Last Name: <input name='last_name' type='text'></p>
			<p>Email Address: <input name='email' type='text'></p>
			<p>Password: <input name='password' type='password'></p>
			<p>Confirm Password: <input name='confirm_password' type='password'></p>
			<input type='submit' value='register' class='button'>
			<input type='hidden' name='action' value='register'>
		</form>
	</div>


</body>
</html>