<html>
<head>
	<title></title>

	<style type="text/css">

	.header {
			border-bottom: 1px solid black;
		}

		.headerright {
			margin-left: 600px;
		}

		.headerleft {
			margin-left: 50px;
		}

		td, th {
			border: 1px solid black;
		}

		table {
			border-collapse: collapse;
		}

		</style>
</head>
<body>

	<div class='header'>
		<a class='headerleft' href="/dash/dashboard">Dashboard</a>
		<a href="/dash/profile">Profile</a>
		<a class='headerright' href="/dash/signIn">Log off</a>
	</div>

	<h2>All Users</h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Created_at</th>
				<th>User_level</th>
			</tr>
		</thead>
		<tbody>
<?php  
		foreach ($usersinfo as $key) 
		{ ?>
			<tr>
				<td><?= $key['id'] ?></td>
				<td><a href="/dash/wall/<?= $key['id'] ?>"><?= $key['first_name'].' '.$key['last_name'] ?></a></td>
				<td><?= $key['email'] ?></td>
				<td><?= $key['created_at'] ?></td>
				<td><?= $key['admin_level'] ?></td>
			</tr>	
<?php
		} ?>
		</tbody>
	</table>
</body>
</html>