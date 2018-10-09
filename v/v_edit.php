<form method ="POST">
	Название<br>
	<input type="text" name="title" value="<?php echo $heading = empty($title) ? $article['title'] : $title; ?>"><br>
	Контент<br>
	<textarea name="content" ><?php echo $text = empty($content) ? $article['content'] : $content;  ?></textarea><br>
	<input type="submit" value="Изменить">
</form>
<?php 
if(is_array($msg)){
	foreach($msg as $one){
		echo "$one <br>";
	}
}else{
	echo $msg;
}
?>




