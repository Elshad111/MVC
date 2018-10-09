<?php 

$id = isset($params[1]) ? trim(strip_tags($params[1])) : null;
$err404 = false;
	
	
if($id === null || $id == "" || preg_match('/[^0-9]/', $id)){
		$err404 = true;
}else{
	$article = article_one($id);
	
	if($article === false){
		$err404 = true;
	}
}

if(!$err404){
	$inner = template('v_post', [
		'err404' => $err404,
		'article' => $article
	]);

	$title = 'Просмотр сообщения';
}
