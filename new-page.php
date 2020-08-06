<?php include('html/head.html') ?>
<?php include('php/user_nav.php') ?>

<section class="user new library_admin">
	<div class="container">
		<div class="user_layer">
			<div class="user_information">
				<ul class="user_nav">
					<li><a href="#">Добавить новую страницу</a></li>
					<li><a href="#">Добавить новый конкурс</a></li>
					<li><a href="#">Неопубликованные</a></li>
				</ul>
				<div class="user_nav_content">
					<div class="user_nav_item">
						<div class="tab-content clearfix">
							<form enctype="multipart/form-data" method="post" class="form_downl form_down">
							    <div >
								   <p>Загрузите фото (Jpeg):<label class="doshed" for="file4">Перетащите файл</label></p>
								   <input type="submit" value="Загрузить" class="blue_sub">
								   <button class="delete"><i class="fas fa-trash"></i></button> 
							    </div>
						    </form>
						    <form enctype="multipart/form-data" method="post" class="form_downl form_down">
							    <div >
								   <p>Загрузите фото (Jpeg):<label class="doshed" for="file4">Перетащите файл</label></p>
								   <input type="submit" value="Загрузить" class="blue_sub">
								   <button class="delete"><i class="fas fa-trash"></i></button> 
							    </div>
							</form>
						</div>
						<div class="windows">
						    <div class="panel clearfix">
						        <a href="#" class="btn_bold"><img src="http://i-ingame.com/inc/img/btn_bold.png" alt="" /></a>
						        <a href="#" class="btn_italic"><img src="http://i-ingame.com/inc/img/btn_italic.png" alt="" /></a>
						        <a href="#" class="btn_ul"><img src="http://i-ingame.com/inc/img/btn_ul.png" alt="" /></a>
						        <a href="#" class="btn_ol"><img src="http://i-ingame.com/inc/img/btn_ol.png" alt="" /></a>
						        <a href="#" class="btn_file"><img src="http://i-ingame.com/inc/img/btn_file.png" alt="" /></a>
						        <div class="user_tab">
									<p>Категория<span><img src="img/down.png" alt="" class="down"></span></p>
									<div class="user_tab_content">
										<a href="#">Садоводство</a>
										<a href="#">Дом</a>
										<a href="#">Семья</a>
										<a href="#">Кулинария</a>
									</div>
								</div>
						        <form enctype="multipart/form-data" method="post" class="form_downl">
						            <div class="parent_text_field prokrutka">
	           							<div class="text_field" contenteditable="true" data-target="insert">Друзья всем привет!
	           							Сегодня я хочу вам рассказать интересный способ выращивания лимонного дерева в домашних условиях без</div>
	      							</div> 
	      							<div class="line_grey"></div>    
									<label class="label" for="file1"><i class="fas fa-paperclip"></i>Файл</label>
							  		<label class="label" for="file2"><i class="far fa-image"></i>Фото</label>
							   		<label class="label" for="file3"><i class="fas fa-film"></i>Видео</label>
							   		
								   <input class="input_hidden" type="file" name="file" id="file1">
								   <input class="input_hidden" type="file" accept="image" name="file" id="file2">
								   <input class="input_hidden" type="file" name="file" id="file3">
								   <input class="" type="submit" value="" class="btn_downl">
							  </form>
	           				 </div>	
						</div>
						<div class="tab-content">
						<form enctype="multipart/form-data" method="post" class="form_downl form_down">
						    <div >
							   <p>Загрузите фото (Jpeg):<label class="doshed" for="file4">Перетащите файл</label></p>
							   <input type="submit" value="Загрузить" class="blue_sub">
							   <button class="delete"><i class="fas fa-trash"></i></button> 
						    </div>
						      <div class="layer">	
								<button href="#">+</button>
								<span>Добавить еще одно фото</span>
						    </div>
						</form>
						 <form enctype="multipart/form-data" method="post" class="form_downl form_fix">
							   	<a href="#">+</a>
					    		<label class="label" for="file1"><i class="fas fa-font"></i>Текст</label>
								<label class="label" for="file1"><i class="fas fa-paperclip"></i>Файл</label>
						  		<label class="label" for="file2"><i class="far fa-image"></i>Фото</label>
						   		<label class="label" for="file3"><i class="fas fa-film"></i>Видео</label>

							   <input class="input_hidden" type="file" name="file" id="text1">
							   <input class="input_hidden" type="file" name="file" id="file1">
							   <input class="input_hidden" type="file" accept="image" name="file" id="file2">
							   <input class="input_hidden" type="file" name="file" id="file3">
						</form>
					</div>
						<div class="allin">
							<a href="#" >Сохранить (не публиковать)</a>
							<a href="#"  class="btn">Добавить</a>
						</div>
					</div>
					<div class="user_nav_item user_nav_item3">
						<div class="tab-content clearfix">
							<form enctype="multipart/form-data" method="post" class="form_downl form_down">
							    <div >
								   <p>Загрузите фото (Jpeg):<label class="doshed" for="file4">Перетащите файл</label></p>
								   <input type="submit" value="Загрузить" class="blue_sub">
								   <button class="delete"><i class="fas fa-trash"></i></button> 
							    </div>
						    </form>
							    <div class="no">
							    	<div class="block">	Дедлайн</div>
							    	<div class="no_fix clearfix">
							    	<p>Начало конкурса: <input type="text" value="30.04.2019"><i class="fa fa-pen"></i></p>	
							    		<label class="container_label">
										    <input type="checkbox">
										    <span class="checkmark"></span>
										</label>
							    		<p>Окончание конкурса:<input type="text">
										<input type="text">
										<input type="text"></p>
							    	</div>
							    </div>
						</div>
						<div class="block">Конкурс</div>
						<form action="#">
							<div class="form_bg">
							<p>Название конкурса:</p>
							<p>	<input type="text"><button class="delete"><i class="fas fa-trash"></i></button>	</p>
							<p>Категория конкурса:</p>
							<p>	<input type="text"><button class="delete"><i class="fas fa-trash"></i></button>	</p>
								
							</div>
							<!-- <p>3 место:</p>
							<input type="text">
							<p>4-5 место:</p>
							<input type="text"> -->
						</form>
						<div class="block">Описание</div>

						<div class="windows">
						    <div class="panel clearfix">
						        <a href="#" class="btn_bold"><img src="http://i-ingame.com/inc/img/btn_bold.png" alt="" /></a>
						        <a href="#" class="btn_italic"><img src="http://i-ingame.com/inc/img/btn_italic.png" alt="" /></a>
						        <a href="#" class="btn_ul"><img src="http://i-ingame.com/inc/img/btn_ul.png" alt="" /></a>
						        <a href="#" class="btn_ol"><img src="http://i-ingame.com/inc/img/btn_ol.png" alt="" /></a>
						        <a href="#" class="btn_file"><img src="http://i-ingame.com/inc/img/btn_file.png" alt="" /></a>
						        <form enctype="multipart/form-data" method="post" class="form_downl">
						            <div class="parent_text_field prokrutka">
	           							<div class="text_field" contenteditable="true" data-target="insert">Друзья всем привет!
	           							Сегодня я хочу вам рассказать интересный способ выращивания лимонного дерева в домашних условиях без</div>    
	      							</div> 
	      							<div class="line_grey"></div>
									<label class="label" for="file1"><i class="fas fa-paperclip"></i>Файл</label>
							  		<label class="label" for="file2"><i class="far fa-image"></i>Фото</label>
							   		<label class="label" for="file3"><i class="fas fa-film"></i>Видео</label>
							   		
								   <input class="input_hidden" type="file" name="file" id="file1">
								   <input class="input_hidden" type="file" accept="image" name="file" id="file2">
								   <input class="input_hidden" type="file" name="file" id="file3">
								   <input class="" type="submit" value="" class="btn_downl">
							  </form>
	           				 </div>	
						</div>
						<div class="block">Требования</div>
						<form action="#" class="boss">
							<div class="form_bg">
								<p>Основные требования конкурса:</p>
								<textarea name="" id="" >JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.JPEG.</textarea><button class="delete"><i class="fas fa-trash"></i></button>
								
							</div>
							<div class="block clearfix"><p>Номинации</p>
								<div class="user_tab">
								<p>Количество работ в одну номинацию:<span>3<img src="img/down.png" alt="" class="down"></span></p>
									<div class="user_tab_content">
										<a href="#">First</a>
										<a href="#">Second</a>
										<a href="#">Third</a>
									</div>
								</div>
							</div>
							<div class="form_bg">
								<p>1 номинация:<input type="text"> <button class="delete"><i class="fa fa-trash"></i></button></p>
								<p>2 номинация:<input type="text"> <button class="delete"><i class="fa fa-trash"></i></button></p>
								<p>3 номинация:<input type="text"> <button class="delete"><i class="fa fa-trash"></i></button></p>
								<p>4 номинация:<input type="text"> <button class="delete"><i class="fa fa-trash"></i></button></p>
								<button>+</button>
							</div>
							<div class="block">Категории</div>
							<div class="form_bg">
								<p>1 номинация:<input type="text"> <button class="delete"><i class="fa fa-trash"></i></button></p>
								<p>2 номинация:<input type="text"> <button class="delete"><i class="fa fa-trash"></i></button></p>
								<button>+</button>
							</div>
							<div class="block">Призы</div>
							<div class="form_bg">
								<p>1 номинация:<input type="text"> <button class="delete"><i class="fa fa-trash"></i></button></p>
								<p>2 номинация:<input type="text"> <button class="delete"><i class="fa fa-trash"></i></button></p>
								<p>3 номинация:<input type="text"> <button class="delete"><i class="fa fa-trash"></i></button></p>
								<p>4-5 номинация:<input type="text"> <button class="delete"><i class="fa fa-trash"></i></button></p>
								<button>+</button>
							</div>
							<div class="block">Заявка на конкурс включает</div>
							<div class="form_bg">
								<div class="set_chek">
									<p><span><span></span></span>Файл</p>
									<p><span><span></span></span>Название работы</p>
									<p><span><span></span></span>Описание работы</p>
									<p><span><span></span></span>Город</p>
									<button>+</button>
								</div>
							</div>
							<div class="block">Тип файла для подачи на конкурс</div>
	
							<div class="form_bg">
								<div class="set_chek">
									<p><span><span></span></span>Фото (jpeg)</p>
									<p><span><span></span></span>Текстовый файл (Word)</p>
								</div>
							</div>
							<div class="block">Взнос</div>
							<div class="form_bg">
								<div class="set_chek">
									<div class="input_tab">
										<p>300 руб.<span><img src="img/down.png" alt="" class="down"></span></p>
										<div class="input_tab_content user_tab_content">
											<a href="#">500 руб.</a>
											<a href="#">900 руб.</a>
											<a href="#">1100 руб.</a>
										</div>
									</div>
										<p><span><span></span></span>Взнос за конкурс</p>
										<p><span><span></span></span>Взнос за 1 номинацию</p>
								</div>
							</div>
						<div class="layer">
							<a href="#">Сохранить (не публиковать)</a>
							<input type="submit" class="btn" value="Добавить">
						</div>
				</form>
			</div>
					<div class="user_nav_item4 user_nav_item ">
						<div class="article">
							<div class="article_content anime">
								<a href="#"><img src="img/blog2.jpg" alt="" class="blog_content_img"></a>
								<div class="content_right">
									<div class="sub_head">
										<!-- <time>Сегодня, 17.03.19</time> -->
										<a href="#" class="post_time_txt">О главном</a><span>-</span><a href="#" class="post_time_txt">Дети</a> 
										<time class="head_data">Сегодня, 17.03.19</time>
									</div>
									<div class="info">
										<a href="#" class="info_txt">Легкий способ привязать ребенку любовь к чтению книг</a>
										<p class="info_paragraph">Пожалуй каждому знакомо когда ребенок не хочет читать книги. Мы нашли интересный способ который поможет заинтересовать вашего ребенка к прочтению книги.</p>
										<div class="info_layer">
												<a href="#" >Редактировать &rarr;</a>
												<a href="#" class="btn">Опубликовать</a>
											</div>
									</div>
								</div>
							</div> 
							<div class="contest ">
								<div class="contest_block">
									<div class="contest_info">
										<img src="img/child.png" alt="" class="info_bg">
										<div class="info_center clearfix">
											<div class="info_layer">
												<p class="info_top_txt">До окончания</p>
												<div id="CDT" class="otshet"></div>
											</div>
											<h3 class="center_title">Стихотворение о Ньюке</h3>
											<p class="center_paragraph">Литературный конкурс "Стихотворение о Ньюке" основан на первой главе книги. После прочтения первой главы участник конкурса должен придумать интересный и уникальный стих о Ньюке.</p>

											<div class="info_layer">
												<a href="#" >Редактировать &rarr;</a>
												<a href="#" class="btn">Опубликовать</a>
											</div>
										</div>		
									</div>
								</div>
							</div>
							<div class="article_content anime">
								<a href="#"><img src="img/blog2.jpg" alt="" class="blog_content_img"></a>
								<div class="content_right">
									<div class="sub_head">
										<!-- <time>Сегодня, 17.03.19</time> -->
										<a href="#" class="post_time_txt">О главном</a><span>-</span><a href="#" class="post_time_txt">Дети</a> 
										<time class="head_data">Сегодня, 17.03.19</time>
									</div>
									<div class="info">
										<a href="#" class="info_txt">Легкий способ привязать ребенку любовь к чтению книг</a>
										<p class="info_paragraph">Пожалуй каждому знакомо когда ребенок не хочет читать книги. Мы нашли интересный способ который поможет заинтересовать вашего ребенка к прочтению книги.</p>
										<div class="info_layer">
												<a href="#" >Редактировать &rarr;</a>
												<a href="#" class="btn">Опубликовать</a>
											</div>
									</div>
								</div>
							</div> 
						</div>
					</div>
				</div>

			</div>
<?php include 'php/touch.php'; ?>
		</div>
	</div>
</section>




<?php include 'html/footer.html'; ?>