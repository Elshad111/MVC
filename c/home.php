<?php

$isAuth = isAuth();

$articles = articles_all();

switch(isset($_GET['view']) ? $_GET['view'] : null){
	case 'base':
		$template = 'v_index';
		break;
	case 'strong':
		$template = 'v_index_inline';
		break;
	default:
		$template = 'v_index';
}

$inner = template("$template", [
	'isAuth' => $isAuth,
	'articles' => $articles	
]);

$title = "Главная";