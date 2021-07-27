<?php
		if(isset($_COOKIE['username'])){
			header("Location:home.php");
		}
		if(isset($_POST['formlogin'])){
			extract($_POST);
			global $db;

			if (isset($id) && isset($password)) {

				$c = $db->prepare("SELECT * FROM users WHERE identifiant = :id");
				$c->execute(['id' => $id]);
				$result = $c->fetch();

				if ($result == true){
					setcookie('username', $id, time() + 3600);
					$hashpassword = $result['password'];
					if(password_verify($password, $hashpassword)){
						$q = $db->query("SELECT Classe FROM users WHERE identifiant = :id");
						$q->execute(['id' => $id]);
						$classe = $q->fetch(PDO::FETCH_OBJ);
						setcookie('class', $classe, time() + 3600);
						header("Location:home.php");
						echo "lelz, prout";
					} else {
						echo "Echec de l'ahthentification";
					}
				} else {
					echo "Aucun untilisateur avec cet identifiant";
				}
			} else {
				echo "Remplissez tous les champs";
			}
		}
	?>