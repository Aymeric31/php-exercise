<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php



	if (isset($_GET["batiment"]) && isset($_GET["salle"])) {
		echo "Nous sommes dans le batiment " . $_GET["batiment"] . " .Et dans la salle n° " . $_GET["salle"] . ". ";
	} else{
		echo "Dans quelle batiment et salle sommes nous ?";
	}

	?>

</body>
</html>