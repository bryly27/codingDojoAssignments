<?php

	// Create a program that prints the sum of all the values in the array A. Have A have the following values [1, 2, 5, 10, 255, 3].
	$a=array(1,2,5,10,255,3);

	$sum=0;
	for($i=0; $i<count($a); $i++){
		$sum+=$a[$i];
	}

	echo $sum;

?>