<?php
	if(isset($_POST['formsend'])){
		include 'functions/database.php';
		extract($_POST);
		global $db;
		if(isset($rid) && isset($rpassword) && isset($rcpassword)){
			if($rpassword == $rcpassword){
				$c = $db->prepare("SELECT * FROM users WHERE identifiant = :identifiant");
				$c->execute(['identifiant' => $rid]);
				$result = $c->rowCount();
				$hashpass = password_hash($rpassword, PASSWORD_DEFAULT);
				if($result == 0){
					$q = $db->prepare("INSERT INTO users(identifiant, password) VALUES (:identifiant, :password)");
					$q->execute([
						'identifiant' => $rid,
						'password' => $hashpass
					]);
					echo "L'élève à été créer";
				} else {
					echo "Cet élève existe déjà";
				}
			}else{
				echo "Les deux mots de passe ne correspondent pas";
			}
		} else {
			echo "Remplissez tous les champs";
		}
	}
?>