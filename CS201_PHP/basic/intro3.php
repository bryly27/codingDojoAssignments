<?php

// Create a program that prints the average of the values in the array called A. Have A have the following values [1, 2, 5, 10, 255, 3].

	$a=array(1,2,5,10,255,3);
	$avg=0;

	for($i=0; $i<count($a); $i++){
		$avg+=$a[$i];
	}

	$avg=$avg/count($a);
	
	echo $avg;



?>