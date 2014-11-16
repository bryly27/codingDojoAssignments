<?php  
	session_start();

?>

<html>
<head>
	<title>Quoting Dojo</title>
</head>
<body>
	<h1>Welcome to QuotingDojo</h1>
	<form action='process.php' method='post'>
		Your Name:  <input name='name' type='text' placeholder='Enter your name'>
		Your Quote: <textarea name='textarea' placeholder='Enter your quote here'>
					</textarea>
					<input name='submit' type='submit' value='Add my quote!'>
	</form>
	<form action='main.php'>
		<input name='skip' type='submit' value='Skip to quotes!'>
	</form>

</body>
</html>