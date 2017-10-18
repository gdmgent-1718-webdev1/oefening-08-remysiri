<?php

	function Greyshade($i)
	{
		return "<div class='e' style='background: rgb($i, $i, $i)'></div>";
	}

	for ($i = 256; $i > 0; $i--)
	{
		echo Greyshade($i);
	}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="e"></div>


	<style>
		.e {
			width: 100%;
			height: 20px;
			margin: 1px;
		}
	</style>
</body>
</html>