<?php 	


if(!isAuth()){
	header('Location: index.php');
	exit();
}

if(count($_POST) > 0){
	$title = htmlspecialchars(trim($_POST['title']));
	$content = htmlspecialchars(trim($_POST['content']));
	
	if(!news_check_title($title) | !news_check_content($content)){
		$msg = news_last_error();
		
	}else{ 
		$id = articles_add($title, $content);
		header("Location: post/$id");
		exit();
	}
}else{
	$title = "";
	$content = "";
	$msg = "";
}

$inner = template('v_add', [
	'title' => $title,
	'content' => $content,
	'msg' => $msg
]);

$title = 'Добавить сообщеие';
