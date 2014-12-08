<html>
<head>
	<title></title>
	<style type="text/css">
		.header {
			border-bottom: 1px solid black;
		}

		.headerright {
			margin-left: 600px;
		}

		.headerleft {
			margin-left: 50px;
		}
	</style>
</head>
<body>

	<div class='header'>
		<a class='headerleft' href="/dash/index">Home</a>
		<a class='headerright' href="/dash/signIn">Sign In</a>
	</div>

<?php 
		// echo validation_errors();
 ?>

	<div class='register'>
		<form action='/dash/registering' method='post'>
			<h5>Register</h5>
			<p>First Name: <input name='first_name' type='text'></p>
			<p>Last Name: <input name='last_name' type='text'></p>
			<p>Email Address: <input name='email' type='text'></p>
			<p>Password: <input name='password' type='password'></p>
			<p>Confirm Password: <input name='confirm_password' type='password'></p>
			<input type='submit' value='register' class='button'>
			<input type='hidden' name='action' value='register'>
		</form>
	</div>

	<div class='signin'>
		<a href="/dash/signin">Already have an account? Login</a>
	</div>

</body>
</html>