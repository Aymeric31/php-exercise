<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post">
		<p> Login: <input type="text" value="JeanPierre" name="login"> </p>
		<p> MDP: <input type="password" value="123" name="pwd"></p>
		<p> <input type="submit" value="ok"></p>
	</form>

	<?php 
	setcookie("login", $_POST["login"]);
	setcookie("pwd", $_POST["pwd"]);

	?>
</body>
</html>