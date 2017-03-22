<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php



	if (isset($_GET["prenom"]) && isset($_GET["nom"]) && isset($_GET["age"])) {
		echo "Roujonb " . $_GET["prenom"] . " " . $_GET["nom"] . ". Vous avez " . $_GET["age"] . " ans .";
	} else{
		echo "Roujonb " . $_GET["prenom"] . " " . $_GET["nom"] . ". Mais il n'y a pas d'age !";
	}

	?>
	
</body>
</html>