<?php
try{
	$bdd = new PDO("mysql:host=mysql5.yulpa.io;dbname=137612_gites;charset=utf8",'137612_gites','un1gite');
}
catch (Exception $e){
	die('error:'.$e->getMessage());
}
?>