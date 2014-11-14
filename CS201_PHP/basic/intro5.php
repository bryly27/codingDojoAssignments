<?php

function multiply($array,$number){

	// foreach ($array as $key => $value) {
	// 	$value=$value*$number;
	// 	echo $value.'<br>';

	// }


	for($i=0; $i<count($array); $i++){
		$array[$i]=$array[$i]*$number;
	}
	return($array);
}

$a=array(1,2,5,20);

$b=multiply($a,5);
var_dump($b);



// $b=multiply($a,5);
// var_dump($b);

?>