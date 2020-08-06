<?php include('html/head.html') ?>
<?php include('html/nav.html') ?>

<section class="library_admin">
	<div class="container">
		<div class="post_time">
			<a href="index.php" class="in_this_moment">Главная</a><span>/</span><a class="in_this_moment">Библиотека</a>
		</div>
		<h1 class="library_title">Библиотека</h1>
		<p class="section_paragraph">Здесь вы можете прочитать приключенческую историю Ньюка</p>
		<div class="tabs ">
		   <div class="tab">
			    <input type="radio" id="tab1" name="tab-group" checked>
			    <label for="tab1" class="tab-title"><p>Глава 1. <span>“Явление”</span></p>
			    	<span class="down down1">
			    		<i class="far fa-file-pdf"></i>
			    		<a href="">PDF</a>
			    	</span>
			    	<span class="down2">
			    		<i class="far fa-trash-alt"></i>
			    	</span>
			    </label> 
			    <div class="tab-content">
					<div class="block">Глава</div>
					<div class="block_chapter">
						<form action="" method="get" class="form_downl">
							<p>Название главы:<input type="text" name=""></p>
						    	<button class="delete"><i class="fas fa-trash"></i></button> 
						    <div class="form_layer">
						    	<p>Номер главы:<input type="text"></p>
						    	<div>
						    		<p>PDF:<label class="doshed" for="file4">Перетащите файл</label></p>
									<input class="input_hidden" type="file" name="file" id="file4">
						    		<input type="submit" value="Загрузить" class="blue_sub">
						    	</div>
						    </div>
						</form>
					</div>
					<div class="block">Текст</div>
					<div class="windows">
					    <div class="panel clearfix">
					        <a href="#" class="btn_bold"><img src="http://i-ingame.com/inc/img/btn_bold.png" alt="" /></a>
					        <a href="#" class="btn_italic"><img src="http://i-ingame.com/inc/img/btn_italic.png" alt="" /></a>
					        <a href="#" class="btn_ul"><img src="http://i-ingame.com/inc/img/btn_ul.png" alt="" /></a>
					        <a href="#" class="btn_ol"><img src="http://i-ingame.com/inc/img/btn_ol.png" alt="" /></a>
					        <a href="#" class="btn_file"><img src="http://i-ingame.com/inc/img/btn_file.png" alt="" /></a>

					        <form enctype="multipart/form-data" method="post" class="form_downl">
					            <div class="parent_text_field prokrutka">
           							<div class="text_field" contenteditable="true" data-target="insert"></div>    
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
						<div class="allin">
							<a href="#" >Сохранить (не публиковать)</a>
							<a href="#"  class="btn">Добавить</a>
						</div>
				    </div>
			   </div> 
		   <div class="tab">
			    <input type="radio" id="tab2" name="tab-group">
			    <label for="tab2" class="tab-title"><p>Глава 2. <span>“Охота”</span></p>
			    	<span class="down">
			    		<i class="far fa-file-pdf"></i>
			    		<a href="">PDF</a>
			    	</span>
			    	<span class="down2">
			    		<i class="far fa-trash-alt"></i>
			    	</span>
			    </label> 
			    <div class="tab-content">
			        2
			    </div>
		   </div>
		   <div class="tab">
		   		 <input type="radio" id="tab3" name="tab-group">
		   		 <label for="tab3" class="tab-title"><p>Глава 3. <span>“Путешествие на край света”</span></p>
			    	<span class="down">
			    		<i class="far fa-file-pdf"></i>
			    		<a href="">PDF</a>
			    	</span>
			    	<span class="down2">
			    		<i class="far fa-trash-alt"></i>
			    	</span>
			    </label> 
		  	      <div class="tab-content">
		  	      	 3
			    </div> 
		   </div> 
		   <div class="tab">
		   		 <input type="radio" id="tab4" name="tab-group">
		   		 <label for="tab4" class="tab-title"><p>Глава 4. <span>“Таинственный чердак”</span></p>
			    	<span class="down">
			    		<i class="far fa-file-pdf"></i>
			    		<a href="">PDF</a>
			    	</span>
			    	<span class="down2">
			    		<i class="far fa-trash-alt"></i>
			    	</span>
			    </label> 
		  	     <div class="tab-content">
					 4
			    </div>
		   </div>
		    <div class="tab">
		   		 <input type="radio" id="tab5" name="tab-group">
		   		 <label for="tab5" class="tab-title"><p>Глава 5. <span class="fixit">Неопубликовано</span> <span>“Таинственный чердак”</span></p>
			    	<span class="down">
			    		<i class="far fa-file-pdf"></i>
			    		<a href="">PDF</a>
			    	</span>
			    	<span class="down2">
			    		<i class="far fa-trash-alt"></i>
			    	</span>	
			    	<i class="fa fa-pen"></i>
			    </label> 
		  	    <div class="tab-content">
		  	      	 5
			    </div> 
		   </div> 
		   <div class="add_new_head">
			   	<a href="#">+</a>
			   	<p>Добавить новую главу</p>
		   </div>
	  </div>
	</div>
</section>
<?php include 'html/footer.html'; ?>