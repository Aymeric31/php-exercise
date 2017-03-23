<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	session_start();

	echo $_SESSION["prenom"];
	echo $_SESSION["nom"];
	echo $_SESSION["age"];

	?>
</body>
</html>