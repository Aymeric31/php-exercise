<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	echo $_SERVER["HTTP_USER_AGENT"]. "<br> ";
	echo $_SERVER["REMOTE_ADDR"]. " ";
	echo $_SERVER["SERVER_NAME"];
	?>
</body>
</html>