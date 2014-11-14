<?php

	if ($_POST["submit"]) {

		$result='<div class="alert alert-success">Form submitted</div>';
		if(!$_POST['name']) {
			$error.="<br />Please enter your name";
		}
		if(!$_POST['email']) {
			$error.="<br />Please enter your email address";
		}
		if(!$_POST['comment']) {
			$error.="<br />Please enter a comment";
		}

		if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
 	 	 	
 	 	 	$error.="<br />Please enter a valid email address";
 		}

		if($error){
			$result='<div class="alert alert-danger"><strong>There were error(s) in your form</strong>'.$error.'</div>';
		} else {
			if (mail("bryly27@sbcglobal.net", "Comment from website!", 
				"Name: ".$_POST['name']."
 				Email: ".$_POST['email']."
 				Comment: ".$_POST['comment'])) {
 
 				$result='<div class="alert alert-success"><strong>Thank you!</strong> I\'ll be in touch.</div>';
 
 		} else {
 
 				$result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
 
 			}
		}
	}
			
?>

<!DOCTYPE html>
<html>
<head>

	<title>testing php</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<style>

.emailform {
	border:1px solid grey;
	border-radius: 10px;
	margin-top: 20px;
}

textarea {
	height: 120px;
}

form {
	padding-bottom: 20px;
}


</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 emailform">
				<h1>My email form</h1>

				<?php echo $result; ?>


				<p class="lead">Please get in touch - I'll get back to you as soon as I can.</p>

				<form method="post">
					<div class="form-group">
						<label form="name">Your Name:</label>
						<input type="text" name="name" class="form-control" placeholder="Your Name"></input>
					</div>
					<div class="form-group">
						<label form="email">Your Email:</label>
						<input type="email" name="name" class="form-control" placeholder="Your Email"></input>
					</div>
					<div class="form-group">
						<label form="comment">Your Comment:</label>
						<textarea class="form-control" name="comment"></textarea>
					</div>
					<input type="submit" name="submit" class="btn btn=success btn-lg" value="Submit"></input>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

