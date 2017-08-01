<?php
$action = isset($_GET['action']) ? htmlspecialchars($_GET['action']) : 'edit';

if(is_file('views/fiches/'.$action.'.php')) {
	$view = 'views/fiches/'.$action.'.php';
}