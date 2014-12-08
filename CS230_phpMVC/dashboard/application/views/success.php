
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
<?php  
	$userInfo = $this->session->userdata('userInfo');
?>
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
			<input type='hidden' name='action' value='<?= $userInfo['id'] ?>'>
		</form>
	</div>

<?php  
	
	foreach ($message as $messages) 
		  { ?>
				<div class='wallMessage'>
					<h5><?= $messages['first_name']. ' ' .$messages['last_name']. ' - ' .$messages['created_at']  ?></h5>
					<p><?= $messages['message'] ?></p>
				</div>
<?php  
				// $this->load->model('user');
				// $commentPost = $this->user->get_comments($messages['id']);
					
					// foreach ($commentPost as $value) 
					// { ?>
						<!-- <div class='wallComment'> -->
							<!-- <h5><?= $value['first_name']. ' ' .$value['last_name']. ' - ' .$value['created_at'] ?></h5> -->
							<!-- <p><?= $value['comment'] ?></p> -->
						<!-- </div> -->
<?php  

// var_dump($comment);
// die();
			foreach ($comment as $comments) 
			{
				if($messages['id'] == $comments['messages_id'])
				{ ?>
					<div class='wallComment'>
						<h5><?= $comments['first_name']. ' ' .$comments['last_name']. ' - ' .$comments['created_at'] ?></h5>
						<p><?= $comments['comment'] ?></p>
					</div>	
<?php
				}
			}
?>




<?php			
// }
	
?>
				<div class='comment'>
					<h5>Post a comment</h5>
					<form action='/wall/addcomment' method='post'>
						<textarea name='comment'></textarea>
						<input type='submit' value='Post a comment'>
						<input type='hidden' name='commentAction' value='<?= $messages['id'] ?>'>
						<input type='hidden' name='commentAction2' value='<?= $userInfo['id'] ?>'>
					</form>
				</div>
<?php
			}
?>


	

</body>
</html>