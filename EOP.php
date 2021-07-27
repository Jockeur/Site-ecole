<?php include 'functions/database.php'	?>
<!DOCTYPE html>
<html>
<head>
	<title>EOP. Changer son Mot de Passe</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Changer votre mot de passe</h1>
	<form method="post">
		<input type="password" name="opassword", id="opassword", placeholder="Votre ancien mot de passe", required>
		<input type="password" name="npassword", id="npassword", placeholder="Votre nouveau mot de passe", required>
		<input type="password" name="ncpassword", id="ncpassword", placeholder="Confirmation de votre nouveau mot de passe", required>
		<input type="submit" name="formsend", id="formsend", Value="Changer">
		<?php include 'functions/EOP.func.php'?>
	</form>
</body>
</html>