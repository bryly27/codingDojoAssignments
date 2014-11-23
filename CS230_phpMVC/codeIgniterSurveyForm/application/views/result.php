
<html>
<head>
	<title></title>
</head>

<style type="text/css">
	h4 {
		border: 1px solid black;
		width: 400px;
		height: 50px;
		margin-left: 400px;
		background-color: #B6D7A8;
		padding: 5px;
	}

	h3 {
		text-decoration: underline;
	}

	.form {
		margin-left: 400px;
		border: 1px solid black;
		width: 400px;
		padding: 10px;
	}

	.backButton {
		margin-left: 300px;
	}


</style>

<body>

	


	<h4>Thanks for submitting this form! You have submitted this form <?php echo $this->session->userdata('counter'); ?> times now.</h4>

	<div class='form'>	
		<h3>Submitted Information</h3>
		<h5>Name: <?= $this->session->userdata('name')?></h5>
		<h5>Dojo Location:  <?= $this->session->userdata('location')?></h5>
		<h5>Favorite Language:  <?= $this->session->userdata('language')?></h5>
		<h5>Comment:  <?= $this->session->userdata('comment')?></h5>
		<form class='backButton' action='process' method='post'>
			<input type='submit' value='back'>
		<input type='hidden' name='action2' value='register2'>
	</form>
	</div>
	
</body>
</html>

