
	
<?php

$users = array("first_name" => "Michael", "last_name" => "Choi");

function print_names($array) {
	echo 'There are 2 keys in this array: first_name, last_name <br>';

	foreach($array as $key => $value) {
	echo 'The value in the key '. $key. ' is '. $value. '. <br>';
	}
echo '<br>';
}

print_names($users);


?>
