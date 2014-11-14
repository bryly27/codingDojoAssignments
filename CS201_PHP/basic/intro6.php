<?php

	// function print_lists($array){
	// 	foreach ($array as $key => $value) {
	// 		echo '<li>'.$value.'</li>';
	// 	}
	// }


	// $a=array(2,3,'hello');
	// print_lists($a);


?>

<html>
<head>
	<title>intro6</title>
</head>
<body>
	<ul>

<?php function print_lists($array){
		foreach ($array as $key => $value) {
?> 
			<li><?= $value; ?></li>
<?php
		}
	}

	$a=array(2,3,'hello');
	print_lists($a);
?>

	</ul>

</body>
</html>