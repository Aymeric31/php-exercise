<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="user.php" method="post">
		<p>Prenom:
			<input type="text" name="prenom">
		</p>
		<p>Nom:
			<input type="text" name="nom">
		</p>
		<button type="submit" value="OK">Submit</button>
	</form>
	Bonjour, <?php echo htmlspecialchars ($_POST["prenom"]) ($_POST["nom"]); ?> 
</body>
</html>