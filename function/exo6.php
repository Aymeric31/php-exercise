<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	function aymeric ($nom, $prenom, $age){
		return "Bonjour " . $nom . $prenom . " , tu as " . $age . " ans .";
	}
	echo aymeric(" Gioia ", " Aymeric ", " 20 ");
	?>
</body>
</html>