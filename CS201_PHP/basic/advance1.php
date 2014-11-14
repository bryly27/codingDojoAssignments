<?php



?>


<html>
<head>
	<title>HTML Table</title>
</head>
<style type="text/css">
	td, th{
		border: 1px solid black;
	}
	table {
		border-collapse: collapse;
	}

	.grey {
		background-color: grey;
	}
</style>
<body>
	<table>
		<thead>
			<th>User ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Full Name</th>
			<th>Full Name Uppercase</th>
			<th>Length of name</th>
		</thead>
		<tbody>

<?php
	$users = array( 
	   array('first_name' => 'Michael', 'last_name' => 'Choi '),
	   array('first_name' => 'John', 'last_name' => 'Supsupin    '),
	   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
	   array('first_name' => 'KB', 'last_name' => 'Tonel '),
	   array('first_name' => 'Michael', 'last_name' => 'Choi '),
	   array('first_name' => 'John', 'last_name' => 'Supsupin    '),
	   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
	   array('first_name' => 'KB', 'last_name' => 'Tonel '),
	   array('first_name' => 'Michael', 'last_name' => 'Choi '),
	   array('first_name' => 'John', 'last_name' => 'Supsupin    '),
	   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
	   array('first_name' => 'KB', 'last_name' => 'Tonel '),
	   array('first_name' => 'Michael', 'last_name' => 'Choi '),
	   array('first_name' => 'John', 'last_name' => 'Supsupin    '),
	   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
	   array('first_name' => 'KB', 'last_name' => 'Tonel '),
	);
	$count=0;
	foreach ($users as $rows) 
		{
		$count++;
		if ($count%5==0) 
		{	?>
			<tr class="grey">
		<?php 	} 
			else 
		{ 	?>
			</tr>
		<?php 	}
		?>
			<th><?= $count ?></th>
		<?php
			
		$full_name=implode(' ', $rows);
		$full_name_upper=strtoupper($full_name);
		$trimmed=trim($full_name);
		$name_length=strlen($trimmed);

		foreach ($rows as $key => $value) 
		{ 	?>
			<td><?= $value ?></td>
		<?php 	}	
		?>
			<td><?= $full_name ?></td>
			<td><?= $full_name_upper ?></td>
			<td><?= $name_length ?></td>
		<tr>
	<?php
		}
	?>

		</tbody>




</body>
</html>