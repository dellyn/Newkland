<?php include('html/head.html') ?>
<?php include('php/user_nav.php') ?>

<section class="settings user">
	<div class="container">
		<div class="user_layer">
			<div class="user_information">
				<ul class="user_nav">
					<li><a href="#">Основные</a></li>
					<li><a href="#">Оповещения</a></li>
					<li><a href="#">Баланс и платежные настройки</a></li>
				</ul>
				<div class="user_nav_content">
					<div class="user_nav_item">
						<div class="block">Личная информация</div>
							<form action="#" class="settings_card clearfix" method="get">
							<div class="settings_card_bg">
								<p>Фамилия:<input type="text" placeholder="8790 **** **** **** 0967"><button></button></input></p>
								<p>Имя: <input type="parol"><button></button></input></p>
								<p>Отчество: <input type="text"><button></button></input></p>
								<p>Е-почта: <input type="email" placeholder=""><button></button></input></p>
								<p>Телефон: <input type="text" placeholder=""><button></button></input></p>
							</div>	
						<div class="block">Вывод средств на карту</div>
						<div class="trans">	
							<p>Старый пароль:<input type="text" placeholder="*********"><button></button></input></p>
							<p>Новый пароль: <input type="parol"><button></button></input></p>
							<p>Повторите пароль: <input type="parol"><button></button></input></p>
						</div>
						<div class="block"><p>Конфиденциальность</p>
							<p>Выберите может видеть записи в вашем профиле</p> 
							<div class="user_tab">
							<div class="sms_info"><span></span><span></span><span></span></div>
							<p>Друзья и друзья друзей</p>
								<div class="user_tab_content">
									<a href="#">Все пользователи</a>
									<a href="#">Мои друзья</a>
									<a href="#">Друзья и друзья друзей</a>
								</div>
							</div>
						</div>
						<input type="submit" class="btn" value="Сохранить">
					</form>	

					</div>
					<div class="user_nav_item user_nav_item2">
						<div class="block">Уведомления <p>На почту</p> <p>На сайте</p></div>
						<div class="set_chek">
							<p>Новые сообщения<span><span></span></span><span><span></span></span></p>
							<p>Новые запросы в друзья<span><span></span></span><span><span></span></span></p>
							<p>Новые запросы в друзья<span><span></span></span><span><span></span></span></p>
							<p>Новые комментарии к моим постам<span><span></span></span><span><span></span></span></p>
							<p> Ответы на мои комментарии<span><span></span></span><span><span></span></span></p>
							<p> Лайки моих комментариев<span><span></span></span><span><span></span></span></p>
							<p> Лайки моих постов<span><span></span></span><span><span></span></span></p>
							<p class="sss"> Новые посты друзей<span><span></span></span><span><span></span></span></p>
							<p> Новые статьи в блоге<span><span></span></span><span><span></span></span></p>
						</div>
						<div class="block">Настройка уведомлений</div>
						<div class="set_chek">
							<p>Получать мгновенные уведомления<span><span></span></span><span><span></span></span></p>
							<p>Получать мгновенные уведомления со звуком<span><span></span></span><span><span></span></span></p>
						</div>
						<input type="submit" name="" class="btn">
					</div>
					<div class="user_nav_item">
						<div class="block"><p>Мой баланс</p>
							<p>На вашем счету:</p> <span>15 000 руб.</span>
						</div>
						<div class="block">Платежная история</div>
						<div class="settings_history">
							<div class="left">
								<time>23.03.2019 <span>12:05</span></time>
								<time>23.02.2019 <span>22:12</span></time>
							</div>
							<div class="center">
								<p>Засчитано за занятое первое место в конкурсе "Дети и природа"</p>
								<p>Списение за участие в конкурсе "Дети и природа"</p>
							</div>
							<div class="right">
								<p>+ 15 0000 руб.</p>
								<p>- 1000 руб.</p>
							</div>
						</div>
						<div class="block">Информация о банковской карте</div>
						<form action="#" class="settings_card clearfix" method="get">
							<div class="settings_card_bg">
								<p>Номер карты:<input type="text" placeholder="8790 **** **** **** 0967"><button></button></input></p>
							<p>Секретный код: <input type="parol"><button></button></input></p>
							<p>Срок действия: <input type="text"><button></button></input></p>
							<label class="container_label">
								<input type="checkbox">
								<span class="checkmark"></span>
							</label>
							<i class="fa fa-trash">	</i>
								<div class="layer">	
									<button href="#"><span>+</span>Добавить еще одно фото</button>
								</div>
							</div>
						<div class="block">Вывод средств на карту</div>
						<div class="trans">	
							<p>Выберите карту:<input type="text" placeholder="8790 **** **** **** 0967"><button></button></input></p>
							<p>Сумма вывода средств: <input type="parol"><button></button></input></p>
							<input type="submit" class="btn" value="Вывести средства">
						</div>
					</form>
					</div>
				</div>
			</div>
		<?php include 'php/touch.php'; ?>
		</div>
	</div>
</section>
<?php include 'html/footer.html'; ?>