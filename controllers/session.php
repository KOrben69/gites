<?php
$action = isset($_GET['action']) ? htmlspecialchars($_GET['action']) : 'register';

switch($action) {
	case 'connexion':
		if(session::connexion($_POST['login'], $_POST['mdp'])) {
			redirect('./index.php?controllers=home');
		} else {
			message('Login ou mot de passe non valide');
			header('Location: ./index.php?controllers=register');
		}
	break;
	case 'deconnexion':
		session::deconnexion();
		header('Location: ./index.php?controllers=register');
	break;
	case 'register':
		if(isset($_SESSION['id_user'])) {
			$action = 'home';
		}
	break;
	default:
		$action = 'register';
	break;
}
if(is_file('views/'.$action.'.php')) {
	$view = 'views/'.$action.'.php';
}