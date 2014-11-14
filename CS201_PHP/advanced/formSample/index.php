<?php
session_start();

echo "COOKIE INFO<br>";
var_dump($_COOKIE);
echo "SESSION INFO<br>";
var_dump($_SESSION);


?>

<form action='process.php' method='post' enctype="multipart/form-data">
    First-name:<input type='text' name='first_name'>
    Last-name: <input type='text' name='last_name'>
    Email address: <input type='text' name='email'>
<label for="color">What is your favorite type of music?</label> 
<select name="music">
	<option value="hip hop">Hip Hop</option>
	<option value="rap">Rap</option>
	<option value="pop">Pop</option>
	<option value="country">Country</option>


</select>


<div>
	<label for="application">Choose File:</label>
	<input type="file" name="file" placeholder="put your file here">
	<input type='submit' value='submit!'>
</div>
</form>

<?php 
$_SESSION = array();
// unset($_SESSION['music']);
// unset($_SESSION['first_name']);
?>
