<?php
class session {
	static function connexion($login, $mdp) {
		global $bdd;
		
		$req = $bdd->prepare('SELECT `id_user`, `login`, `nom`, `prenom`, `mdp` FROM `users` WHERE `login` = :login');
		$req -> bindParam(':login', $login, PDO::PARAM_STR);
		$req -> execute();
		$data = $req -> fetch();
		$nb = $req -> rowCount();
		
		
		if($nb > 0){
			if($mdp == $data['mdp']) {
				$_SESSION['id_user'] = $data['id_user'];
				$_SESSION['nom'] = $data['nom'];
				$_SESSION['prenom'] = $data['prenom'];
				
				return $_SESSION;
			}
		}
	}
	static function deconnexion(){
		session_destroy();
	}
}
?>