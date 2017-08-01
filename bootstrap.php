<?php
session_start();

function debug($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
function message($message){
	$_SESSION['message'] = $message;
}
function read_message(){
	if (isset($_SESSION['message'])) {
		$message = htmlspecialchars($_SESSION['message']);
		unset($_SESSION['message']);
		echo '<p class="message">'.$message.'</p>';
	}
}
function redirect($url){
	header('Location: ' . $url);
	exit;
}
?>