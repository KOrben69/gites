<?php
include 'bootstrap.php';
include 'bdd.php';

if (!isset($_SESSION['id_user'])){
	$controllers = 'session';
} else {
	$controllers = isset($_GET['controllers']) ? htmlspecialchars($_GET['controllers']) : 'home';
}

if(is_file('models/'.$controllers.'.php')) {
	include('models/'.$controllers.'.php');
}
if(is_file('controllers/'.$controllers.'.php')) {
	include('controllers/'.$controllers.'.php');
} else {
	include('controllers/erreur.php');
}

include('views/template/template.php');
?>