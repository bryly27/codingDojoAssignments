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

	<div class='login'>
		<form action='/dash/dashboard' method='post'>
			<h5>Sign In</h5>
			<p>Email: <input name='email' type='text' value='bryant@bryant.com'></p>
			<p>Password: <input name='password' type='password' value='12345678'></p>
			<input type='submit' value='login' class='button'>
			<input type='hidden' name='action' value='login'>
		</form>
	</div>

	<div class='register'>
		<a href="/dash/register">Don't have an account? Register</a>
	</div>

</body>
</html>