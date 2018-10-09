<?php 

$id = isset($params[1]) ? strip_tags(trim($params[1])) : null;
$err404 = false;

if(!isAuth()){
	header("Location: ". ROOT ."login");
	exit();
}

if (count($_POST) > 0){			
	$title = htmlspecialchars(trim($_POST['title']));
	$content = htmlspecialchars(trim($_POST['content']));
		
	if(!news_check_title($title) | !news_check_content($content)){
		$msg = news_last_error();
		
	}else{ 	
		articles_edit($title, $content, $id);		
		header("Location: ".ROOT. "post/$id");
		exit();
	}
}else{	
	$query = db_query("SELECT id_article, dt, title, content FROM articles WHERE id_article = :id", ['id' => $id]);
	$msg = '';
	$article = $query->fetch();
	
	if($article == null){
		$err404 = true;
	}
}

$inner = template('v_edit', [
	'article' => $article,
	'title' => $title,
	'content' => $content,
	'msg' => $msg
]);

$title = 'Добавить новость';


