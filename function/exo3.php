<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	function renvoieTextOuAutre($x, $y){

		echo "j'aime le ".$x.' et '.$y;

	}

	renvoieTextOuAutre("nutella", "l'orangina");
	echo '<br>';
	renvoieTextOuAutre("tennis", "les voitures")

	?>
</body>
</html>