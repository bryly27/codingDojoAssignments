<html>
<head>
	<title></title>
</head>
<style type="text/css">

	body {
		margin-left: 400px;
		margin-top: 100px;
	}
	.randomWord {
		border: 1px solid black;
		width: 250px;
	} s 
</style>
<body>
	<h4>Random Word (attempt #<?= $this->session->userdata('counter'); ?>)</h4>
	<form action='process' method='post'>
		<div class='randomWord'>
			<center><p>   s<?= $this->session->userdata('rand'); ?></p></center>
		</div>
		<input type='submit' value='Generate' name='submit'>
		<input type='hidden' name='action' value='register'>
	</form>
</html>