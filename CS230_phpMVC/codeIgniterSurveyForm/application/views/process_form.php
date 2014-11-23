<?php  

?>

<html>
<head>
	<title></title>
</head>

<style type="text/css">
	body {
		margin-left: 400px;
	}


</style>
<body>	
	<form action='surveys/process' method='post'>
		<div>
			<h5>Your Name:</h5><input type='text' name='name'>
		</div>
		<div>
			<h5>Dojo Location:</h5>	<select name='location'>
											<option value='mountain view'>Mountain View</option>
											<option value='seattle'>Seattle</option>
											<option value='socal'>SoCal</option>
									  	</select>	
		</div>
		<div>
			<h5>Favorite Language</h5> 	<select name='language'>
													<option value='javascript'>Javascript</option>
													<option value='html css'>HTML/CSS</option>
													<option value='php'>PHP</option>
													<option value='ruby'>Ruby</option>
													</select>	
			</div>
		<div>
			<h5>Comment: </h5> <textarea name='comment' placeholder='type your comment here'></textarea>
		</div>
		<div>
			<input type='submit' value='Submit'>
			<input type='hidden' name='action' value='register'>
		</div>
	</form>
</body>
</html>