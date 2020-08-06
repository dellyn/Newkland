<?php include('html/head.html') ?>
<?php include('php/user_nav.php') ?>

<section class="user admin">	
	<div class="container">	
		<div class="user_layer">	
			<div class="user_information">
				<div class="user_head">
					<img src="img/clear.jpg" alt="" class="">
					<div class="user_content">
		                <div class="people_icon">
		                	<img src="img/admin_clear.png" alt="">
								<label class="add_photo" for="file1">Добавить фото</label>
		                	
		                    <!-- <svg class="circle_svg" viewBox="0 0 328 328">
		                        <path class="st0" d="M164.38 2c89.296.205 161.62 72.656 161.62 162 0 89.47-72.53 162-162 162s-162-72.53-162-162 72.53-162 162-162M164 2h.38"/>
		                    </svg> -->
						</div>
						<p class="user_name">Администратор Олег</p>
					</div>

				</div>
					
					<div class="adnim_post">
						<div class="head"></div>
						<div class="sub">
							<form enctype="multipart/form-data" method="post" class="form_downl">
							<p>Опубликуйте пост который увидят все пользователи.</p>
								<label class="label" for="file1"><i class="fas fa-paperclip"></i>Файл</label>
						  		<label class="label" for="file2"><i class="far fa-image"></i>Фото</label>
						   		<label class="label" for="file3"><i class="fas fa-film"></i>Видео</label>
						   		<label class="label"  class="sub_label" for="btn_download"><!-- <i class="fas fa-play"></i> --></label>
							   <input class="input_hidden" type="file" name="file" id="file1">
							   <input class="input_hidden" type="file" accept="image" name="file" id="file2">
							   <input class="input_hidden" type="file" name="file" id="file3">
							   <input class="" type="submit" class="" value="" id="btn_download">
						  </form>
						</div>
					</div>
					<div class="user_post admin_post">
						<div class="user_post_head">
							<img src="img/admin_photo.png" alt="">
							<p>Администратор Олег</p>
							<div class="post_head_right">
								<div class="sms_info"><span></span><span></span><span></span>
									<div class="sms_pop">
										<a href="#">Удалить из закладок</a>
										<a href="#">Спам</a>
									</div>
								</div>
								<time>25 минут назад</time>
							</div>
						</div>
						<p>Друзья всем привет! <span>У нас обновление в конкурсах. Участники, которые примут участие в всех номинациях получат дополнительный приз. </span><span>Для этого вам нужно скачать в каждую номинацию минимум по 3 фото и вы автоматически станете претендентом на розыгрыш дополнительного приза.</p></span>
						<div class="admin_post_foot">
							<div class="comments_like"><i class="fa fa_comments fa-heart"></i>379</div>
							<div class="comments_like"><i class="fa fa-comments "></i>22</div>
							<span>Категория: <a href="#">Инфо</a></span>
						</div>
					</div>
				<!-- Pop Up Contest -->
			<div class="user_pop">
			<div class="user_pop_track">
				<p><span><b>Анна Соломина</b></span> приняла участие в <span><b>5</b></span> конкурсах.</p>
				<div class="pop_close"><div><span></span></div></div>
				<div class="pop_block df">
					<div class="pop_block_left df">
						<div class="pop_image_block">
							<div class="layout"></div>
							<img src="img/pop2.jpg" alt="" class="pop_img">
							<div class="people_heart">
								<i class="fa fa-heart"><span>340</span></i>
							</div>
							<a href="" class="people_learn_txt">Фото в полном размере</a>
							<div class="people_trophy">	
								<i class="fa fa-trophy"></i>
								<span class="number_place">5</span>	
							</div>
						</div>
						<div class="pop_block_fix">
							<div class="user_info_date">
								<a class="social_circle"><i class="fa fa-stopwatch"></i></a><p>Окончено</p>
							</div>
							<div class="user_info_date">
								<a class="social_circle"><i class="fa fa-users"></i></a><p>1029</p>
							</div>
							<p>Пушистый друг всей нашей семьи</p>
						</div>
						
					</div>

						<div class="pop_block_right">
		                	<p><i class="fa fa-star"></i><span>Номинация:</span><a href="">Юные фотографы</a></p>
    						<p><i class="fa fa-star"></i><span>Номинация:</span>Этот забавный мир животных и птиц</p>
    						<p><i class="fa fa-star"></i><span>Категория:</span>«Младшая» (11-14)</p>
		                </div>
				</div>
					<div class="pop_block df">
					<div class="pop_block_left df">
						<div class="pop_image_block">
							<div class="layout"></div>
							<img src="img/pop1.jpg" alt="" class="pop_img">
							<div class="people_heart">
								<i class="fa fa-heart"><span>790</span></i>
							</div>
							<a href="" class="people_learn_txt">Фото в полном размере</a>
							<div class="people_trophy">	
								<i class="fa fa-trophy"></i>
								<span class="number_place">1</span>	
							</div>
						</div>
						<div class="pop_block_fix">
							<div class="user_info_date">
								<a class="social_circle"><i class="fa fa-stopwatch"></i></a><p>Окончено</p>
							</div>
							<div class="user_info_date">
								<a class="social_circle"><i class="fa fa-users"></i></a><p>1029</p>
							</div>
							<p>Наш вид из окна</p>
						</div>
						
					</div>

						<div class="pop_block_right">
		                	<p><i class="fa fa-star"></i><span>Номинация:</span><a href="">Юные фотографы</a></p>
    						<p><i class="fa fa-star"></i><span>Номинация:</span>Пейзажживотных и птиц</p>
    						<p><i class="fa fa-star"></i><span>Категория:</span>«Младшая» (11-14)</p>
		                </div>
				</div>
				<div class="pop_block df">
					<div class="pop_block_left df">
						<div class="pop_image_block">
							<div class="layout"></div>
							<img src="img/pop2.jpg" alt="" class="pop_img">
							<div class="people_heart">
								<i class="fa fa-heart"><span>340</span></i>
							</div>
							<a href="" class="people_learn_txt">Фото в полном размере</a>
							<div class="people_trophy">	
								<i class="fa fa-trophy"></i>
								<span class="number_place">3</span>	
							</div>
						</div>
						<div class="pop_block_fix">
							<div class="user_info_date">
								<a class="social_circle"><i class="fa fa-stopwatch"></i></a><p>Окончено</p>
							</div>
							<div class="user_info_date">
								<a class="social_circle"><i class="fa fa-users"></i></a><p>1029</p>
							</div>
							<p>Пушистый друг всей нашей семьи</p>
						</div>
						
					</div>

						<div class="pop_block_right">
		                	<p><i class="fa fa-star"></i><span>Номинация:</span><a href="">Юные фотографы</a></p>
    						<p><i class="fa fa-star"></i><span>Номинация:</span>Этот забавный мир животных и птиц</p>
    						<p><i class="fa fa-star"></i><span>Категория:</span>«Младшая» (11-14)</p>
		                </div>
				</div>
					<div class="pop_block df">
					<div class="pop_block_left df">
						<div class="pop_image_block">
							<div class="layout"></div>
							<img src="img/pop1.jpg" alt="" class="pop_img">
							<div class="people_heart">
								<i class="fa fa-heart"><span>790</span></i>
							</div>
							<a href="" class="people_learn_txt">Фото в полном размере</a>
							<div class="people_trophy">	
								<i class="fa fa-trophy"></i>
								<span class="number_place">5</span>	
							</div>
						</div>
						<div class="pop_block_fix">
							<div class="user_info_date">
								<a class="social_circle"><i class="fa fa-stopwatch"></i></a><p>Окончено</p>
							</div>
							<div class="user_info_date">
								<a class="social_circle"><i class="fa fa-users"></i></a><p>1029</p>
							</div>
							<p>Наш вид из окна</p>
						</div>
						
					</div>

						<div class="pop_block_right">
		                	<p><i class="fa fa-star"></i><span>Номинация:</span><a href="">Юные фотографы</a></p>
    						<p><i class="fa fa-star"></i><span>Номинация:</span>Пейзажживотных и птиц</p>
    						<p><i class="fa fa-star"></i><span>Категория:</span>«Младшая» (11-14)</p>
		                </div>
				</div>
				<div class="pop_block df">
					<div class="pop_block_left df">
						<div class="pop_image_block">
							<div class="layout"></div>
							<img src="img/pop2.jpg" alt="" class="pop_img">
							<div class="people_heart">
								<i class="fa fa-heart"><span>340</span></i>
							</div>
							<a href="" class="people_learn_txt">Фото в полном размере</a>
							<div class="people_trophy">	
								<i class="fa fa-trophy"></i>
								<span class="number_place">2</span>	
							</div>
						</div>
						<div class="pop_block_fix">
							<div class="user_info_date">
								<a class="social_circle"><i class="fa fa-stopwatch"></i></a><p>Окончено</p>
							</div>
							<div class="user_info_date">
								<a class="social_circle"><i class="fa fa-users"></i></a><p>1029</p>
							</div>
							<p>Пушистый друг всей нашей семьи</p>
						</div>
						
					</div>

						<div class="pop_block_right">
		                	<p><i class="fa fa-star"></i><span>Номинация:</span><a href="">Юные фотографы</a></p>
    						<p><i class="fa fa-star"></i><span>Номинация:</span>Этот забавный мир животных и птиц</p>
    						<p><i class="fa fa-star"></i><span>Категория:</span>«Младшая» (11-14)</p>
		                </div>
				</div>
			</div>
					
			</div>
			</div>
<?php include 'php/touch.php'; ?>
				
			</div>
		</div>

	</div>
</section>


<?php include 'html/footer.html'; ?>