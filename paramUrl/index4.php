<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php



	if (isset($_GET["langage"]) && isset($_GET["serveur"])) {
		echo "Le langage est " . $_GET["langage"] . " .Le serveur est " . $_GET["serveur"] . ". ";
	} else{
		echo "Il n'y a pas de langage et/ou de serveur .";
	}

	?>

</body>
</html>