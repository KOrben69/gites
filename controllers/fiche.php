<?php
$action = htmlspecialchars($_GET['action']);

if(isset($_GET['modele'])) {
	$action = $_GET['modele'];
}
if(is_file('views/fiches/'.$action.'.php')) {
	$view = 'views/fiches/'.$action.'.php';
} else {
	header('Location: ./index.php?controllers=erreur');
}