<?php
header('Content-type: text/css');
function random_color()
		{
			$rgb = array('a', 'b', 'c', 'd', 'e', 'f', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
			shuffle($rgb);
			$color_prefix = '#' ; //this is what we'll return!
			$color = '';
			for($i = 0; $i < 6; $i++) 
			{
				$color=$color.$rgb[rand(0,15)];
			}

			return $color_prefix.$color;

		}

$heading_color = random_color();
$para_color = random_color();

?>


p {
    color: <?= $para_color;  ?>;
}       
h1 {
    color: <?= $heading_color; ?>;
}