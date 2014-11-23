<?php  
	$studentInfo = $this->session->userdata('studentInfo');
?>

<html>
<head>
	<title></title>
</head>

<style type="text/css">
	h3 {
		margin: 50px;
	}

	.userinfo {
		margin-left: 200px;
		border: 1px solid black;
		width: 400px;
	}

	h4 {
		margin: 10px;
	}

	p {
		margin: 20px;
	}

	a {
		margin-left: 700px;

	}
</style>

<body>
	<h3>Welcome <?= $studentInfo['first_name'] ?></h3>

	<a href="/login/logoff">Log Off</a>

	<div class='userinfo'>
		<h4>User Information</h4>
		<p>First name: <?= $studentInfo['first_name'] ?></p>
		<p>Last name: <?= $studentInfo['last_name'] ?></p>
		<p>Email Address: <?= $studentInfo['email'] ?></p>

	</div>

	

</body>
</html>