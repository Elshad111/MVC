<a href="<?=ROOT?>?view=strong">Отобразить жирным</a><br><br>
<?
foreach($articles as $article):?>
	<a href="post/<?=$article['id_article']?>">Новость <?=$article['title']?> </a>
	<? if($isAuth):?>
	<a href="edit/<?=$article['id_article']?>">	&#9997;</a><br>
	<?else :?>
	<br>
	<? endif;?>
<? endforeach; ?>
	
<? if($isAuth) :?>
<br><a href="<?=ROOT?>add">Добавить статью!</a>
<? endif;?>
<br><a href="<?=ROOT?>login">Войти</a>
