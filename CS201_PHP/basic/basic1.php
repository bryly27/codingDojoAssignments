


<html>
<head>
	<title>Score and Grade</title>
</head>
<body>
	<?php
		for($i=1; $i<=100; $i++){
		$score=rand(50,100);

		if ($score<70){
			$grade='D';
		} else if($score<80){
			$grade='C';
		} else if($score<90){
			$grade='B';
		} else {
			$grade='A';
		}
	?>
	<h1>Your score:<?= $score ?>/100</h1>
	<h2>Your grade is <?= $grade ?><h2>

	<?php } ?>


</body>
</html>