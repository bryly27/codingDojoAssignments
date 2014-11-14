<html>
<head>
	<title>Coin Throw</title>
</head>
<body>

	<h1>Starting the program</h1>

	<?php

		$sumtails=0;
		$sumheads=0;

		for($i=0; $i<=5000; $i++){
			$number=rand();
			if($number%2==0){
				$flip='heads';
				$sumheads+=1;
				echo "Attempt # $i: Throwing a coin... It's a $flip! ... Got $sumheads $flip so far and $sumtails tails so far.<br>";

			} else {
				$flip='tails';
				$sumtails+=1;
				echo "Attempt # $i: Throwing a coin... It's a $flip! ... Got $sumtails $flip so far and $sumheads heads so far.<br>";
			}	

		}

	?>

</body>
</html>