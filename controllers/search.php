<?php
$action = isset($_GET['action']) ? htmlspecialchars($_GET['action']) : 'show';

$view = 'views/search/'.$action.'.php';
?>