<?php include('html/head.html') ?>
<?php include('php/user_nav.php') ?>
<section class="sms user admin">
  <div class="container">
    <div class="user_layer">
      <div class="user_information">
        <div class="sms_head">
          <i class="fas fa-chevron-left"></i>
          <a href="#"><img src="img/profile.png" alt="" />Ольга Карлова</a>
          <div class="status">
            <div></div>
            <p>Online</p>
          </div>
          <div class="sms_info">
            <span></span><span></span><span></span>
            <div class="sms_pop">
              <a href="#">Удалить из закладок</a>
              <a href="#">Спам</a>
            </div>
          </div>
        </div>
        <div class="track">
          <div class="blog_layer">
            <div class="blog_line"></div>
            <time>Сегодня, <span>10 мая</span></time>
          </div>
          <div class="sms_chat">
            <a href="#"><img src="img/profile.png" alt="" />Ольга Карлова</a>
            <time>Сегодня, <span>12:14</span></time>
            <div class="chat_content">
              <p>
                Здравствуйте Юлия! <br />
                Увидела ваш пост о лимонном дереве, хочу спросить совет.
                <br /><br />
                Как вы пересаживаете его? У меня уже не помещается в кувшин :(
              </p>
            </div>
          </div>
          <div class="sms_chat2 sms_chat clearfix">
            <time>Сегодня, <span>12:14</span></time>
            <a href="#"><img src="img/profile.png" alt="" /></a>
            <div class="chat_content2">
              <p>
                Добрый день, Оля <br /><br />Я пересаживаю вместе с корнями и
                землей. Тогда корни не ломаются.
              </p>
            </div>
          </div>
          <div class="sms_chat">
            <a href="#"><img src="img/profile.png" alt="" />Ольга Карлова</a>
            <time><span>5 минут назад</span></time>
            <div class="chat_content">
              <p>Спасибо за совет!</p>
            </div>
          </div>
          <div class="sms_chat_beshreib">
            <div class="chat_content">
              <p>Ольга<span>пишет ....</span></p>
            </div>
          </div>
        </div>
        <form enctype="multipart/form-data" method="post" class="form_downl">
          <textarea
            name=""
            id=""
            placeholder="Введите сообщение ..."
          ></textarea>
          <label class="label" for="file1"
            ><i class="fas fa-paperclip"></i>Файл</label
          >
          <label class="label" for="file2"
            ><i class="far fa-image"></i>Фото</label
          >
          <label class="label" for="file3"
            ><i class="fas fa-film"></i>Видео</label
          >
          <label class="label" class="sub_label" for="btn_download"
            ><!-- <i class="fas fa-play"></i> --></label
          >
          <input class="input_hidden" type="file" name="file" id="file1" />
          <input
            class="input_hidden"
            type="file"
            accept="image"
            name="file"
            id="file2"
          />
          <input class="input_hidden" type="file" name="file" id="file3" />
          <input class="" type="submit" class="" value="" id="btn_download" />
        </form>
      </div>

      <?php include 'php/touch.php'; ?>
    </div>
  </div>
</section>

<?php include 'html/footer.html'; ?>
