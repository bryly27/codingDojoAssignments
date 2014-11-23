<html>
<head>
	<title></title>
	<style>
		body
		{
			border: 1px solid black;
			width: 300px;
			height: 200px;
			text-align: center;
			margin-left: 100px;
		}

		h4
		{
			border: 1px solid black;
			width: 170px;
			height: 50px;
			text-align: center;
			margin: 10px 60px;
		}

	</style>
</head>
<body>
	<h4>The current time and date:</h4>
	<h1><?= date("M d, Y ");  ?></h1>
	<h1><?= date("h:i A")?></h1>
</body>
</html>