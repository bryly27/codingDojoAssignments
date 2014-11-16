<?php  
	session_start();
	echo "you are now logged in ".$_SESSION['name']."!";

?>

<form action='process.php' method='post'>
	<input type='submit' value='Log Off'>
</form>