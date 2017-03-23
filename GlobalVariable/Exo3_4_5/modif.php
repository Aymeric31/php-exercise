<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	echo '<form action="aux.php" method="post">
	<p> Login: <input type="text" value="'.$_COOKIE["login"].'" name="login"> </p>
	<p> MDP: <input type="password" value="'.$_COOKIE["pwd"].'" name="pwd"></p>
	<p> <input type="submit" value="ok"></p>
</form>';
?>
</body>
</html>