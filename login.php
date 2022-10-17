<?php

require ('function.php');

if(empty($_POST['login']) || empty($_POST['password'])){
	header("Location: log.html");
	exit;
}

$login = $_POST['login'];
$password = $_POST['password'];

if (!auto($login,$password)){
	header("Location: log.html");
	exit;
}

login($login);
header("Location: index.php");
exit;

?>