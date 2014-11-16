<?php
	session_start();
?>

<html>
<head>
	<title>Registration</title>
</head>
<style type="text/css">

</style>
<body>

<?php
		if (isset($_SESSION['errors'])) 
		{
			foreach ($_SESSION['errors'] as $error) 
			{
				echo "<p> $error </p>";
			}
			unset($_SESSION['errors']);
		} ?>


	<form action='process.php' method='post'>

		<div>
			Email: <input type="text" name='email'>
		</div>
		<div>
			First Name: <input type="text" name='firstName'>
		</div>
		<div>
			Last Name: <input type="text" name='lastName'>
		</div>
		<div>
			Password: <input type="password" name='password'>
		</div>
		<div>
			Confirm Password: <input type="password" name='confirmPassword'>
		</div>
		<div>
			Birth Date: <input type="text" name='birthDate'>
		</div>
		<div>
			Profile Picture:
			<label for="application">Choose File:</label>
			<input type="file" name="file" placeholder="put your file here">
		</div>
		<div>
			<input name='submit' type='submit' value='submit'>
			<input type='hidden' name='action' value='register'>
		</div>

	</form>

</body>
</html>