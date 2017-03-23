<?php 
setcookie("login", $_POST["login"]);
setcookie("pwd", $_POST["pwd"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	echo $_COOKIE["login"] . " " . $_COOKIE["pwd"];
	?>
	<a href="modif.php"> Modif</a>
</body>
</html>