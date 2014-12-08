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

		.welcome {
			height: 200px;
			width: 600px;
			border: 1px solid black;
			padding: 10px;
			margin-top: 50px;
			background: grey; 
		}


	</style>

</head>
<body>
	<div class='header'>
		<a class='headerleft' href="/dash/index">Home</a>
		<a class='headerright' href="/dash/signIn">Sign In</a>
	</div>

	<div class='welcome'>
		<h1>Welcome to the Test</h1>
		<h4>We're going to fuild a cool application using a MVC framework! This application was built with the Village88 folks!</h4>
		<form action='/dash/register' method='post'>
			<input type='submit' value='Start'>
		</form>
	</div>

</body>
</html>