<?php
$action = isset($_GET['action']) ? htmlspecialchars($_GET['action']) : 'edit';

if(isset($_GET['modele'])) {
	$action = $_GET['modele'];
}
if(is_file('views/fiches/'.$action.'.php')) {
	$view = 'views/fiches/'.$action.'.php';
}