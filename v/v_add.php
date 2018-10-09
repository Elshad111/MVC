<form method="POST">
	Название<br>
	<input type="text" name="title" value="<?php echo $title; ?>"><br>
	Контент<br>
	<textarea name="content" ><?php echo $content; ?></textarea><br>
	<input type="submit" value="Добавить">
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

