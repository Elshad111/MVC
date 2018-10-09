<?php

include_once('db.php');

function myhash($str){
	return hash('sha256', $str . '946shad');
}

function isAuth(){
	$isAuth = false;
	
	if(isset($_SESSION['is_auth']) && $_SESSION['is_auth']){
		$isAuth = true;
		
	}else if(isset($_COOKIE['login']) && isset($_COOKIE['password'])){
		if($_COOKIE['login'] == myhash('admin') && $_COOKIE['password'] == myhash('qwerty')){
			$_SESSION['is_auth'] = true;
			$isAuth = true;
		}
	}
	
	return $isAuth;
}



function news_check_title($title){
	if($title == ''){
		news_last_error('Тайтл не может быть пустым');
		return false;
		
	}else if(strlen($title) < 10){
		news_last_error('Тайтл не может быть меньше 10 символов');
		return false;
		
	}else if(strlen($title) > 20){
		news_last_error('Тайтл не может быть больше 20 символов');
		return false;		
		
	}else if(!preg_match('/^[a-zA-z0-9-]{1,}$/', $title)){
		news_last_error('Введите корректное название тайтла!');
		return false;
		
	}else{
		return true;
	}
}

function news_check_content($content){
	if($content == ""){
		news_last_error('Контент не может быть пустым');
		return false;
		
	}else if(strlen($content) < 50){
		news_last_error('Контент не может быть короче 50 символов');
		return false;	
		
	}else if(strlen($content) > 500){
		news_last_error('Контент не может превыать 100 символов');
		return false;
		
	}else{
		return true;
	}
}

function news_last_error($msg = null){
	static $last_error = [];
	if($msg !== null){
		return $last_error[] = $msg;
	}
	return $last_error;
}

function check_id($id){
	$err404 = false;
	
	if($id === null || $id == "" || preg_match('/[^0-9]/', $id)){
		$err404 = true;
	}
	return $err404;
}

function articles_all(){
	$query = db_query("SELECT id_article, title FROM articles ORDER BY id_article DESC");
	return $query->fetchAll();
}

function article_one($id){
	$query = db_query("SELECT id_article, dt, title, content FROM articles WHERE id_article = :id", [
	'id' => $id
	]);
	return $query->fetch();
}

function articles_add($title, $content){
	db_query('INSERT INTO articles (title, content) VALUES (:title, :content)', [
		'title' => $title,
		'content' => $content
	]);
	$db = db_connect();
	return $db->lastInsertId();
}

function articles_edit($title, $content, $id){
	db_query("UPDATE articles SET title = :title, content = :content WHERE id_article = :id", [
		'title' => $title,
		'content' => $content,
		'id' => $id
	]);
	$db = db_connect();	
	return $db->lastInsertId();
}



