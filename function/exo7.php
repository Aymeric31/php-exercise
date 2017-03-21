<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 
	function personne($age, $genre){
		if ($age >= 18){
			$age = " majeur(e) ";
		}
		else ($age < 18){
			$age = " mineur(e) ";
		};
		if ($genre == " homme ") {
			$genre = " un homme ";
		}
		elseif ($genre == " femme "){
			$genre = " une femme ";
		};
		return "Vous êtes " . $genre . " et vous êtes " . $age . ". ";
	}
	echo personne(" 18 ", " homme ");
	?>
</body>
</html>