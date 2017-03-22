<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php



	if (isset($_GET["semaine"])) {
		echo "Nous sommes en semaine " . $_GET["semaine"] . ". ";
	} else{
		echo "Quelle semaine sommes nous?";
	}

	?>

</body>
</html>