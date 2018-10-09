<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="<?=ROOT?>assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="shortcut icon" href="<?=ROOT?>assets/img/logo.png" type="image/png">
	<title><?=$title;?></title>
</head>
<body>
<div class="wrapper">

<nav class="menu">
	<div class="menu_container">
		<a href="/" class="menu_logo"><img class="logo" src="<?=ROOT?>assets/img/logo.png"></a>

		<div class="menu-toggle">
			<span class="menu-toggle-span"></span>
		</div>
		
		<div class="menu-main">

			<div class="menu-item">
					<a href="/" class="menu_link">Главная</a>
			</div>

			<div class="menu-item">
					<a href="#" class="menu_link">Материалы&nbsp;<span class="menu_link-span"></span></a>
					<div class="menu-submenu menu-submenu-theme">
						
						<div class="menu-submenu-item">
							<a href="#" class="menu-submenu-link">Структура работы JS</a>
						</div>

						<div class="menu-submenu-item">
							<a href="#" class="menu-submenu-link">Основы&nbsp;веб-программирования&nbsp;1</a>
						</div>

						<div class="menu-submenu-item">
							<a href="#" class="menu-submenu-link">Основы&nbsp;веб-программирования&nbsp;2</a>
						</div>

						<div class="menu-submenu-item">
							<a href="#" class="menu-submenu-link">Понимание Javascript</a>
						</div>

						<div class="menu-submenu-item">
							<a href="#" class="menu-submenu-link">Javascript на практике</a>
						</div>

						<div class="menu-submenu-item">
							<a href="#" class="menu-submenu-link">Карта лекций</a>
						</div>

						<div class="menu-submenu-item">
							<a href="#" class="menu-submenu-link">Начать обучение</a>
						</div>
						
						<div class="menu-submenu-item">
							<a href="#" class="menu-submenu-link">Тестирование</a>
						</div>


					</div>
			</div>

			<div class="menu-item">
					<a href="#" class="menu_link">Контакты</a>
			</div>

			<div class="menu-item">
					<a href="#" class="menu_link">О нас</a>
			</div>		
		</div>
		
	</div>
</nav>




<section class="page-content">
	<div class="content">
		<?=$content;?>		
	</div>
	<div class="footer-s"></div>

</section>

<footer class="footer-main footer-theme">

	<div class="footer-main-wrapper">
		<div class="footer-main-column">
			<a class="footer-main-link" href="javascript:void(0)" >Материалы</a>
			<ul class="footer-list">
				<li><a class="footer-item" href="../structure.php">Лекции</a></li>
				<li><a class="footer-item" href="../map.php">Карта лекций</a></li>
				<li><a class="footer-item" href="../courses/1.php">Тестирование</a></li>
				<li><a class="footer-item" href="#">Подписка</a></li>
			</ul>
		</div>

		<div class="footer-main-column">
			<a class="footer-main-link" href="javascript:void(0)" >Информация</a>
			<ul class="footer-list">
				<li><a class="footer-item" href="../about_us.php">О нас</a></li>
				<li><a class="footer-item" href="#">Для наставников</a></li>
				<li><a class="footer-item" href="#">Для учителей</a></li>
				<li><a class="footer-item" href="#">Для учащихся</a></li>
			</ul>
		</div>

		<div class="footer-main-column">
			<a class="footer-main-link" href="javascript:void(0)" >Поддержка</a>
			<ul class="footer-list">
				<li><a class="footer-item" href="#">F.A.Q.</a></li>
				<li><a class="footer-item" href="#">Карат сайта</a></li>
				<li><a class="footer-item" href="../about_us.php">О проекте</a></li>
				<li><a class="footer-item" href="#">Отзывы</a></li>
			</ul>
		</div>

		<div class="footer-main-column">
			<a class="footer-main-link" href="javascript:void(0)" >Интенсивы</a>
			<ul class="footer-list">
				<li><a class="footer-item" href="#">Все интенсивы</a></li>
				<li><a class="footer-item" href="#">Получить профессию</a></li>
				<li><a class="footer-item" href="#">База выпускников</a></li>
				<li><a class="footer-item" href="#">Рукрутинг</a></li>
			</ul>
		</div>

		<div class="footer-main-column">
			<a class="footer-main-link" href="javascript:void(0)" >Остальное</a>
			<ul class="footer-list">
				<li><a class="footer-item" href="../contacts.php">Написать нам</a></li>
				<li><a class="footer-item" href="#">Блог</a></li>
				<li><a class="footer-item" href="#">Форум</a></li>
			</ul>
		</div>

	</div>

	<div class="main-footer--dark-footer">
		<div class="dark-footer--container">
			<ul class="dark-footer--ul">
				<li><a class="dark-footer-link" href="#">Пользовательское соглашение</a></li>
				<li><a class="dark-footer-link" href="#">Политика конфиденциальности</a></li>
				<li><a class="dark-footer-link" href="#">Политика cookie</a></li>
			</ul>
			<div class="dark-footer-copyrights">
				© GOJS, 2017-2018.
			</div>
		</div>
	</div>

</footer>

</div>
<!--	<script src="js/menu.js"></script>
	<script src="js/scroll.js"></script> -->
</body>
</html>