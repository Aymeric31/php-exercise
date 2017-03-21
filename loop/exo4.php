<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$initial = 1;
	$divise= $initial/2;
	while($initial < 10){
		echo $initial;
		$initial= $initial + $divise;
		echo (" ");
	}

	?>
</body>
</html>