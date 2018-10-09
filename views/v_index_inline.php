<a href="<?=ROOT?>?view=base">Отобразить нормально</a><br><br>
<?
foreach($articles as $article):?>
	<strong><a href="<?=ROOT?>post/<?=$article['id_article']?>">Новость <?=$article['title']?> </a></strong>
	<? if(isAuth()):?>
	<strong><a href="<?=ROOT?>edit/<?=$article['id_article']?>">	&#9997;</a><br></strong>
	<?else :?>
	<br>
	<? endif;?>
<? endforeach; ?>
	
<? if($isAuth) :?>
<br><a href="<?=ROOT?>add">Добавить статью!</a>
<? endif;?>
<br><a href="<?=ROOT?>login">Войти</a>

	