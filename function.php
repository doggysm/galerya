<?php

//проверка авторизации пользователя
function isUser(){
	return isset($_COOKIE['auth']);
}
//возвращает значение $login(имя авторизованного пользователя)
function getUser(){
	return $_COOKIE['auth'];
}

//проверка пароля
function auto($login, $password){
	$users = ['admin' => 'admin', 'user' => 'user'];//массив пользователей с паролями по аналогии с городами в области
	return isset ($users[$login]) && $password == $users[$login];//проверка соответсвия пароля
}

// функция запоминает пользователя
function login($login){
	setcookie('auth', $login, time()+86400);//сохраняет логин пользователя на сутки
}

function imgUpLoad()
	{

	}


?>