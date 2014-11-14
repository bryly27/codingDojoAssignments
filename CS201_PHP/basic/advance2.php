<html>
<head>
	<title>checkerboard</title>
</head>
<style type="text/css">

.black {
	background-color: black;
	width: 50px;
	height: 50px;
}

.red {
	background-color: red;
	width: 50px;
	height: 50px;
}
</style>
<body>
	<table>
		<?php
			for($i=1; $i<9; $i++ ){
				?><tr><?php
				for($j=$i; $j<=$i+8; $j++){
					if($j%2==0){
						?><td class="black"></td><?php
					}else{
						?><td class="red"></td><?php
					}
				}?></tr><?php
			}
		?>

	</table>

</body>
</html>