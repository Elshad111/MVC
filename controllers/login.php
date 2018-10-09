<?php

if(isset($_SESSION['is_auth'])){
	unset($_SESSION['is_auth']);
}

if(isset($_COOKIE['login'])){
	setcookie('login', '', 1, '/');
}

if(isset($_COOKIE['password'])){
	setcookie('password', '', 1, '/');
}

session_start();

if(count($_POST) > 0){
	$login = $_POST['login'];
	$password = $_POST['password'];
	
	if($login == 'admin' && $password == 'qwerty' ){
		$_SESSION['is_auth'] = true;
		
		if($_POST['remember']){
			setcookie('login', myhash('admin'), time() + 3600 * 24 * 7, '/');
			setcookie('password', myhash('qwerty'), time() + 3600 * 24 * 7, '/');
		}
		
		if(isset($_SESSION['returnUrl'])){
			header('Location:' . $_SESSION['returnUrl']);
			exit();
		}else{
			header('Location: index.php?c=home');
			exit();
		}
		
		
	}else{
		$msg = "Не верный логин или пароль!";
	}
}else{
	$login = '';
	$password = '';
}

$inner = template('v_login', [
	'login' => $login,
	'password' => $password
]);

$title = 'Login';


