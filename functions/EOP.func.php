<?php
	if(!isset($_COOKIE['username'])){
		header("Location:index.php");
	}
	if(isset($_POST['formsend'])){
		global $db;
		extract($_POST);
		if(isset($opassword) && isset($ncpassword) && isset($npassword)){
			$q = $db->prepare("SELECT password FROM users WHERE identifiant = :identifiant");
			$q->execute(['identifiant' => $_COOKIE['username']]);
			$result = $q->rowCount();
			if($result == 1){
				$hashpass = password_hash($npassword, PASSWORD_DEFAULT);
				$c = $db->prepare("UPDATE users SET password = :password WHERE identifiant = :identifiant");
				$c->execute(['password'=> $hashpass, 'identifiant' => $_COOKIE['username']]);
				echo "Mot de passe modifier";
				header("Location:home.php");
			} else {
				echo "echec";
			}
		}
	}
?>