<?php include('functions/database.php');	?>
<!DOCTYPE htlm>
<html>
<head>
	<meta charset="utf-8">
	<title>Collège Jean Moulin Login Page</title>
</head>
<body>
	
	<h1>Veuillez vous authentifiez</h1>
	<form method="post">
		<input type="text" name="id", id="id", placeholder="Identifiants", required>
		<input type="password" name="password", id="password", placeholder="Mot de Passe", required>
		<input type="submit" name="formlogin", id="formlogin">
	</form>
	<?php include 'functions/signin.func.php'?>
</body>
</html>