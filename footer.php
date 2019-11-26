	<footer class="footer">
		<div class="wrapper">
			<div class="footer__topline">
				<div class="footer__column">
					<a href="/" class="logo footer__logo"><img src="img/logo--white.svg" alt=""></a>
					<div class="footer__social">
						<a href="https://vk.com" class="fab fa-vk social-link" target="_blank"></a>
						<a href="https://facebook.com" class="fab fa-facebook-f social-link" target="_blank"></a>
						<a href="https://instagram.com" class="fab fa-instagram social-link" target="_blank"></a>
						<a href="https://t.me" class="fab fa-telegram social-link" target="_blank"></a>
					</div>
				</div>
				<div class="footer__column">
					<h3>Меню</h3>
					<ul class="footer__menu">
						<li><a href="#">Доставка</a></li>
						<li><a href="#">Оплата</a></li>
						<li><a href="#">Возврат</a></li>
						<li><a href="#">Гарантии</a></li>
						<li><a href="#">Вакансии</a></li>
						<li><a href="#">Видеообзоры</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</div>
				<div class="footer__column">
					<h3>Адрес</h3>
					<p>г. Санкт-Петербург, <br>пл. Александра Невского 2, БЦ «Москва», 12 этаж, офис 1203 <br>(смотреть на карте)</p>
				</div>
				<div class="footer__column">
					<h3>Контакты</h3>
					<p><a href="tel:88001234556">8 800 123-45-56</a></p>
					<p><a href="mailto:mail@example.com">mail@example.com</a></p>
				</div>
				<div class="footer__author">Создание сайта – <a href="#">romansergeev.com</a></div>
			</div>
			<div class="footer__bottomline">
				<div class="footer__text">© 2019 «НаВолне»</div>
				<div class="footer__text"><a href="#">Политика конфиденциальности</a></div>
			</div>
		</div>
	</footer>
	<?if(basename($_SERVER['REQUEST_URI']) == 'contacts.php'):?>
		<!-- api карт грузим только там, где надо. Для производительности -->
		<script  src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&#038;ver=1"></script>
	<?endif;?>	
	<script src="libs/jquery/jquery-3.4.1.min.js"></script>
	<script src="libs/slick/slick.min.js"></script>
	<script src="libs/fancybox/jquery.fancybox.min.js"></script>
	<script src="libs/likely/likely.js"></script>
	<script src="js/script.js"></script>	
</body>
</html>