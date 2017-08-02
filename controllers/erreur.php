<?php
$action = isset($_GET['action']) ? htmlspecialchars($_GET['action']) : '404';

$view = 'views/erreurs/'.$action.'.php';
?>