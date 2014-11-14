<?php
	session_start()


?>

<html>
<head>
	<title>Survey Form</title>
</head>
<style type="text/css">

	form {
		border: 1px solid black;
		width: 300px;
		height: 150px;
		padding: 10px;
	}

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
		}

	?>
	<center><h1>Survey Form</h1><center>
	<form action='process.php' method='post'>
		<div>
			Your Name:<input type='text' name='name'>
		</div>
		<div>
			Dojo Location:	<select name='location'>
								<option value='mountain view'>Mountain View</option>
								<option value='seattle'>Seattle</option>
								<option value='socal'>SoCal</option>
						  	</select>	
		</div>
		<div>
			Favorite Language 	<select name='language'>
									<option value='javascript'>Javascript</option>
									<option value='html css'>HTML/CSS</option>
									<option value='php'>PHP</option>
									<option value='ruby'>Ruby</option>
								</select>	
			</div>
		<div>
			Comment (optional) <textarea name='comment' placeholder='type your comment here'></textarea>
		</div>
		<div>
			<input type='submit' value='Submit'>
			<input type='hidden' name='action' value='register'>
		</div>
	</form>

</body>
</html>