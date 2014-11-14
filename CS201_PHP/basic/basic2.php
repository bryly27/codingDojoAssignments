<?php

	$states=array('CA', 'WA', 'VA', 'UT', 'AZ');

?>

<html>
<head>
	<title>States Array</title>
</head>
<body>
	<select>

		<?php 
			for($i=0; $i<count($states); $i++)
				{	?> 		
				<option><?= $states[$i]; ?></option>
		<?php	} 	?>

	</select>
	<select>
		
		<?php
			foreach ($states as $key => $value) 
				{	?>		
				<option><?= $value; ?></option>
		<?php	} 	?>

	</select>

</body>
</html>