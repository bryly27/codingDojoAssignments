<?php  
	session_start();
	// session_destroy();
	// die();
?>

<html>
<head>
	<title>The Wall</title>
</head>

<style type="text/css">
	h3, p, a {
		display: inline-block;
	}

	.header p {
		margin-left: 600px;
	}

	textarea {
		width: 800px;
		height: 100px;
		text-align: 
	}

	.header {
		border-bottom: 1px solid black;
	}

	.message {
		color: blue;
	}

	.comment {
		color: red;
	}

	</style>

<body>
	<div class='header'>
		<h3>CodingDojo Wall</h3>
		<p>Welcome Name</p>
		<a href=''>Log off</a>
	</div>
	<form action='process.php' method='post'>
		<h5>Post a message</h5>
		<textarea name='message'> 
		</textarea>
		<input name='submitMessage' type='submit' value='Submit Message'>
		<input type='hidden' name='action' value='hmessage'>
	</form>

	<div>
<?php 
// var_dump($_SESSION['comments']);
// die();

		if (isset($_SESSION['messages'])) 
		{

		
			for($i=count($_SESSION['messages'])-1; $i>=0; $i--)
			{
				echo $_SESSION['messages'][$i]['message'].'<br>';
				// $_SESSION['messageid']=$_SESSION['messages'][$i]['id'];
				// var_dump($_SESSION['messages']);
				// die();

					if(isset($_SESSION['comments']))
					{
				
						for($j=count($_SESSION['comments'])-1; $j>=0; $j--)
						{
							echo $_SESSION['comments'][$j]['comment'].'<br>';
							// var_dump($_SESSION['comments']);
							// die();
							if($_SESSION['messages'][$i]['id']==$_SESSION['comments'][$j]['messages_id'])
							{
								echo $_SESSION['comments'][$j]['comment'].'<br>';
								// var_dump($_SESSION['comments']);
								// die();
							}
						}
					}

						echo "<form action='process.php' method='post'>
										<textarea name='comment'> 
										</textarea>
										<input name='submitComment' type='submit' value='Submit Comment'>
										<input type='hidden' name='action' value='hcomment'>
									</form>";

			}

		}



	?>
	</div>



	<?php  
	
	?>


</body>
</html>