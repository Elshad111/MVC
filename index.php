<?php

define('ROOT', '/');

include_once('m/functions.php');
include_once('m/system.php');



$params = explode('/', $_GET['phpchpu']);
$end = count($params) - 1;

if($params[$end] === ""){
	unset($params[$end]);
	$end--;
}

session_start();

$title = '';
$inner = '';
$err404 = false;


$controller = trim(strip_tags($params[0] ?? 'home'));


if(!file_exists("c/{$controller}.php")){
	$err404 = true;
	
}else if(!preg_match("/^[a-z0-9_]+$/", $controller)){
	$err404 = true;
	
} else if(strlen($controller) < 3 || strlen($controller) > 5){
	$err404 = true;
	
}else{	
	include_once("c/$controller.php");
}


if($err404){
	$title = "Ошибка 404! Страница не найдена.";
	$inner = template('v_404');
	
}
	
echo template('v_main', [
'title' => $title,
'content' => $inner
]);





