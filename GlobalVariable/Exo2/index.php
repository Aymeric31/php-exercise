<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	session_start();
	$_SESSION["prenom"] = "Jeanluc";
	$_SESSION["nom"] = "Perno";
	$_SESSION["age"] = 40;

	echo '<br /><a href="aux.php">page 2</a>';

	?>

</body>
</html>