<?php 
	session_start();

	include('connection.php');
	$new_person_query = "INSERT INTO users (first_name, last_name) VALUES('Bryant', 'Yu')";
	run_mysql_query($new_person_query);
	$query = "SELECT * FROM users WHERE first_name = 'Bryant' ";
	$people = fetch_record($query);


?>

<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		echo "<h3> {$people['first_name']} {$people['last_name']}</h3>";
	 ?>

</body>
</html>