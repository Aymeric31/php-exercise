<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$dpt = array(
		02 => "Aisne",
		59 => "Nord",
		60 => "Oise",
		62 => "Pas-de-Calais",
		80 => "Somme",
		);

	print_r(array_values($dpt));
	?>
</body>
</html>