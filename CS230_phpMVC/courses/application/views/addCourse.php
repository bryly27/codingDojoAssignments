<html>
<head>
	<title></title>
</head>
<style type="text/css">
	form {
		margin-left: 300px;
		margin-top: 50px;
	}

	td {
		border: 1px solid black;
	}

	table {
		border-collapse: collapse;
	}

	
</style>
<body>
	<div class='addCourse'>
		<form action='/courses/add' method='post'>
			<h4>Add a new course</h4>
			<p>Name: <input type='text' name='name'></p>
			<p>Description: <input type='text' name='description'></p>
			<input type='submit' value='Add' name='submit'>
			<input type='hidden' name='action' value='submit'>
		</form>

		<table>
			<h4>Courses</h4>
			<tr>
				<td>Course Name</td>
				<td>Description</td>
				<td>Date Added</td>
				<td>Actions</td>
			</tr>

<?php  
				foreach ($courses as $course) 
				{	?>
				<tr>
					<td><?= $course['title'] ?></td>
					<td><?= $course['description'] ?></td>
					<td><?= $course['created_at'] ?></td>
					<td><a href="/courses/destroy/<?= $course['id'] ?>">remove</a></td>
				</tr>
<?php			}	?>
	
		</table>
	</div>
</body>
</html>