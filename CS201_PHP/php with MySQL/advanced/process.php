<?php  
	session_start();
	// session_destroy();
	// die();
	include('connection.php');




	//----------insert data-------------

	if(isset($_POST['submitMessage']))
	{
		
		$messageInput="INSERT INTO messages (message, created_at, updated_at, users_id) VALUES ('".$_POST['message']."', NOW(), NOW(), 1, 1)";
		// var_dump($messageInput);
		// die();
		run_mysql_query($messageInput);

			$message = "SELECT messages.id, message, messages.users_id  FROM messages";
	// run_mysql_query($message);
	$_SESSION['messages']=array();
	$_SESSION['messages']=fetch_all($message);
	// var_dump($_SESSION['messages']);

		

	}

if(isset($_POST['submitComment']))
{
	$commentInput="INSERT INTO comments (comment, created_at, updated_at, messages_id, users_id) VAlUES ('".$_POST['comment']."', NOW(), NOW(), 1, 1)";
		// var_dump($commentInput);
		run_mysql_query($commentInput);
		// header('location: main.php');
		// die();

	// 	$comment = "SELECT comment FROM comments JOIN messages ON comments.message_id = message.id WHERE messages_id='".$_SESSION['messageid']."'";
	// $_SESSION['comments']=array();
	// $_SESSION['comments']=fetch_all($comment);

		$comment = "SELECT comment, comments.messages_id, comments.users_id FROM comments WHERE messages_id='".$_SESSION['messageid']."'";
	$_SESSION['comments']=array();
	$_SESSION['comments']=fetch_all($comment);
}

	






header('location: main.php');
		die();


	//-------------end-----------

	// $message = "SELECT messages.id, message, messages.users_id  FROM messages";
	// // run_mysql_query($message);
	// $_SESSION['messages']=array();
	// $_SESSION['messages']=fetch_all($message);
	// // var_dump($_SESSION['messages']);

	// $comment = "SELECT comment, comments.messages_id, comments.users_id FROM comments";
	// $_SESSION['comments']=array();
	// $_SESSION['comments']=fetch_all($comment);
	// var_dump($_SESSION['comments']);




?>