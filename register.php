<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Enregistreur d'élève</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post">
		<input type="text" name="rid", id="rid", placeholder="Nouvel Identifiants", required>
		<input type="password" name="rpassword", id="rpassword", placeholder="Nouveau Mot de Passe", required>
		<input type="password" name="rcpassword", id="rcpassword", placeholder="Confirmation du Nouveau Mot de Passe", required>
		<input type="type" name="type", id="type", placeholder="Type de personne au sein de l'établissement", required>
		<input type="text" name="classe", id="classe", placeholder="Classe de l'élève/du parent/principale du professeur", riquired>
		<input type="submit" name="formsend", id="formsend">
	</form>
	<?php include 'functions/register.func.php'?>
</body>
</html>