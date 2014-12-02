<?php  
	$userInfo = $this->session->userdata('userInfo');
?>

<html>
<head>
	<title>MVC Wall</title>
</head>

<style type="text/css">
	
	.header {
		border-bottom: 1px solid black;
	}

	.header h3 {
		display: inline-block;
	}

	.header h5 {
		display: inline-block;
		margin-left: 600px;
	}

	.header a {
		margin-left: 40px;
		font-size: 15px;
	}

	.message {
		margin: 40px 0 0 40px;
	}

	.message textarea {
		width: 700px;
		height: 75px;
		display: block;
	}

	.message input {
		margin: 10px 0 0 600px;
	}

	.wallMessage {
		margin-left: 30px;
	}

	.wallMessage p {
		margin-left: 20px;
	}

	.comment {
		margin-left: 60px; 
	}

	.comment textarea {
		width: 650px;
		height: 50px;
		display: block;
	}

	.comment input {
		margin: 10px 0 0 550px;
	}

	.wallComment {
		margin-left: 100px;
	}


</style>

<body>
	<div class='header'>
		<h3>CodingDojo Wall</h3>
		<h5>Welcome <?= $userInfo['first_name'] ?></h5>
		<a href="/wall/logoff/">log off</a>
	</div>
	
	<div class='message'>
		<h4>Post a message</h4>
		<form action='/wall/addmessage' method='post'>
			<textarea name='message'></textarea>
			<input type='submit' value='Post a message'>
			<input type='hidden' name='action' value='submitMessage'>
		</form>
	</div>

<?php
	if($this->input->post('message'))
	{
	foreach ($message as $key) 
	{ ?>
		<div class='wallMessage'>
			<h5><?= $key['first_name']. ' ' .$key['last_name']. ' - ' .$key['created_at']?></h5>
			<p><?= $key['message'] ?></p>
		</div>
<?php 
		$comments = $this->user->get_comments($key['id']);
		$this->session->set_userdata('userId',$key['user_id']);
		$this->session->set_userdata('messageId',$key['id']);
		foreach ($comments as $key => $value) 
		{ ?>
		<div class='wallComment'>
				<h5><?= $value['first_name']. ' ' .$value['last_name']. ' - ' .$value['created_at']?></h5>
				<p><?= $value['comment'] ?></p>
			</div>
<?php	
		} ?>
		<div class='comment'>
			<h4>Post a comment</h4>
			<form action='/wall/addcomment' method='post'>
				<textarea name='comment'></textarea>
				<input type='submit' value='Post a comment'>
				<input type='hidden' name='action' value='submitComment'>
			</form>
		</div>

<?php	}
}


?>
	

</body>
</html>