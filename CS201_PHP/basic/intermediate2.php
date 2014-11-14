<html>
<head>
	<title>Multiplication Table</title>
</head>
<style type="text/css">

td {
	border: 1px solid black;
}

.bold {
	font-weight: bold;
}

table {
	border-collapse: collapse;
	text-align: center;
	
}


</style>
<body>

	<table>
		<tr class="bold">
			<td></td>
<?php
			for($a=1; $a<=9; $a++)
			{ ?>
				<td><?= $a ?></td>
<?php 		} ?>
		</tr>		
<?php  		
			for($j=1; $j<=9; $j++)
			{ ?>
				<tr><td class="bold"><?= $j ?></td>
<?php
					for($i=1; $i<=9; $i++)
					{ ?>
						<td><?= $i*$j; ?></td>
<?php 				} ?>
				</tr>
<?php 				} ?>
		</tr>
	</table>


</body>
</html>