<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Page d'acceuil</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Bievenue <?= str_replace('.', ' ', $_COOKIE['username']) ?> </h1>
	<p>Applications</p>
	<form method="post">
		<input type="submit", name="EOP", id="EOP" value="Changer son MDP">
	</form>
	<?php
		if(!isset($_COOKIE['username'])){
			header("Location:index.php");
		}
		extract($_POST);
		if(isset($EOP)){
			header('Location: EOP.php');
		}
	?>
</body>
</html>