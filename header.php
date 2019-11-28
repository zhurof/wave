<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Верстка</title>
	<meta name="viewport" content="width=device-width, shrink-to-fit=no" />	
	<link rel="stylesheet" href="css/fonts.css" />	
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="libs/slick/slick.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="libs/likely/likely.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<? if(basename($_SERVER['REQUEST_URI']) == ''):?>
	<!--баннер только на главной, чтобы глаза не мозолил-->
	<div class="banner">
		<div class="wrapper"><strong>Новогодняя распродажа!</strong> Скидки на все до 70%!</div>
		<i class="icon-close banner__remove-btn"></i>
	</div>
	<? endif;?>
	<header class="header">
		<div class="wrapper header__wrapper">
			<a href="/" class="logo header__logo">
				<img src="img/logo.svg" alt="" />
			</a>
			<ul class="header__menu">
				<li>
					<a href="#">Каталог</a>
					<ul>
						<li><a href="#">Домашний кинотеатр <br>MagicSee N5 Nova</a></li>
						<li><a href="#">Умные часы <br>Xiaomi AMAZFIT</a></li>
						<li><a href="#">Зубная щетка <br>Oclean X</a></li>
					</ul>
				</li>
				<li><a href="#">Доставка</a></li>
				<li><a href="#">Оплата</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
			<a href="tel:88001234567" class="header__phone">8 800 123-45-67</a>
			<span class="icon-magnify header__search-btn"></span>
			<div class="header__info">
				<span class="icon-help header__info-trigger"></span>
				<div class="header__info-body">
					<p>Телефон <strong>8 800 123-45-56</strong></p>
					<p>Почта <strong>wave@example.com</strong></p>
					<p>Время работы <strong>Пн - Пт: 9:00 — 18:00 <br>Сб, Вс: выходные</strong></p>
					<button class="btn btn--block header__info-btn">Обратный звонок</button>
				</div>
			</div>
			<a href="#" class="header__cart icon-cart" data-amount="10"></a>
			<span class="menu-btn"></span>
		</div>
		<form action="" class="search-form header__search">
			<div class="wrapper search-form__wrapper">
				<input type="search" class="search-form__input" placeholder="Что вы ищете?">
				<span class="icon-close search-form__close"></span>
			</div>
		</form>
	</header>