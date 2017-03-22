<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php



	if (isset($_GET["dateDebut"]) && isset($_GET["dateFin"])) {
		echo "Date de début " . $_GET["dateDebut"] . " .Date de fin " . $_GET["dateFin"] . ". ";
	} else{
		echo "Il n'y a pas de date de fin ou/et de date de début .";
	}

	?>

</body>
</html>