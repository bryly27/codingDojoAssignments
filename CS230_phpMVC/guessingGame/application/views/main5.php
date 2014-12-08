<html>
<head>
	<title></title>
	<style type="text/css">
		div {
			display: inline-block;
		}

		.photo {
			margin-left: 100px;
		}

	</style>
</head>
<body>


	<div class='question'>
		<form action='/guessing/question<?= $photos[4]['id'] ?>' method='post'>
			<p>What asian is this dude</p>
				<p>Chinese<input type='checkbox' name='answer' value='chinese'></p>
				<p>Japanese<input type='checkbox' name='answer' value='japanese'></p>
				<p>Cambodian<input type='checkbox' name='answer' value='cambodian'></p>
				<p>Mongolian<input type='checkbox' name='answer' value='mongolian'></p>
				<p>Vietnamese<input type='checkbox' name='answer' value='vietnamese'></p>
				<p>Thai<input type='checkbox' name='answer' value='thai'></p>
				<p>Indonesian<input type='checkbox' name='answer' value='indonesian'></p>
				<p>Korean<input type='checkbox' name='answer' value='korean'></p>
				<p>Filipino<input type='checkbox' name='answer' value='filipino'></p>
				<input type='submit' value='submit'>
			</form>
	</div>	
	<div class='photo'> 
		<?= $photos[4]['photo']; ?>
	<div>
<?php 
if(!empty($guess))
{ 
	if($guess['answer'] == 'cambodian')
	{ ?>
		<h1><?= 'You got the correct answer' ?></h1>
<?php
	}
	else 
	{ ?>
		<p><?= 'You got it wrong' ?></p>
<?php
	}
} ?>

	<a href="/guessing/question6">Next question</a>



</body>
</html>