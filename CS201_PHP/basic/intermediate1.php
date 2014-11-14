
<?php

	function draw_stars($array){
		for($i=0; $i<count($array); $i++){
 			if(is_numeric($array[$i])){
 				for($j=1;$j<=$array[$i]; $j++){
 					echo '*';
 				} 
 				echo '<br>';
 			} else {
 				for($k=0; $k<strlen($array[$i]);$k++){
 					echo $array[$i][0];
 				}
 				echo '<br>';
 			}
 		}
	}

$x = array(4,'tom',1,'Michael',5,7,'Jimmy Smith');
draw_stars($x);



?>