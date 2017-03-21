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
			if($genre = "homme") {
				return "Vous êtes un homme et vous êtes majeur. <br>";
			} else if ($genre = "femme") {
				return "Vous êtes une femme et vous êtes majeure. <br>";
			}
		} else if ($age < 18) {
			if($genre = "homme") {
				return "Vous êtes un homme et vous êtes mineur. <br>";
			}
			if ($genre = "femme") {
				return "Vous êtes une femme et vous êtes mineur. <br>";
			}
		}
	}
	echo personne(18, "homme");
	echo personne(17, "homme");
	echo personne(18, "femme");
	echo personne(17, "femme");
	
	?>
</body>
</html>