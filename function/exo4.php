<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	function renvoie($nb1, $nb2){
		if ($nb1 > $nb2){
			return "Le premier nombre est plus grand";
		}
		elseif ($nb1 < $nb2){
			return "Le premier nombre est plus petit";
		}
		else{
			return "Les deux nombres sont identiques";
		}
	}
	echo renvoie(6 , 5);
	?>
</body>
</html>