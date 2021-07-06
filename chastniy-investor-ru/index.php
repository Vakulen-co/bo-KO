<?php 
  include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <base href="<?php echo $base ?>">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="images/favicon.ico" sizes="32x32" type="image/x-icon" />
    <link rel="shortcut icon" href="images/favicon.ico" sizes="32x32" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" href="images/favicon.ico" type="image/x-icon" />
    <?php $seoText = 'Добро пожаловать!'; ?>
    <meta name="description" content="<? echo $seoText; ?>"/>
    <meta name="keywords" content="<? echo $seoText; ?>"/>
    <meta property="og:title" content="<? echo $seoText; ?>"/>
    <meta property="og:description" content="<? echo $seoText; ?>"/>
    <meta property="og:image" content="<? echo $base; ?>design/poster.jpg"/>
    <meta property="og:image:width" content="450"/>
    <meta property="og:image:height" content="450"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo $base; ?>"/>
    <link rel="canonical" href="<?php echo $base; ?>"/>
    
    <title>Трейдер - частный инвестор - финансовый консультант</title>
    <link rel="icon" href="favicon.ico" sizes="32x32" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" sizes="32x32" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="build/css/style.css" />
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    <!-- Pixel -->
    <meta name="pixel_id" content="<?php echo $FacebookPixel; ?>">
    <!--  Pixel Code -->
    <?php if($FacebookPixel) : ?>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $FacebookPixel ?>&ev=PageView&noscript=1"/>
    <?php endif; ?>

    <?php if($TiktokPixel) : ?>
    <script>
        !function (w, d, t) {
            w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};
            ttq.load('<?php echo $TiktokPixel; ?>');
            ttq.page();
        }(window, document, 'ttq');
    </script>
    <?php endif; ?>

    <?php if($GooglePixel) : ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-<?php echo $GooglePixel; ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-<?php echo $GooglePixel; ?>');
        </script>
    <?php endif; ?>
    <!-- End  Pixel Code -->
  </head>

  <body>
    <!-- begin main-wrapper -->
    <div class="main-wrapper">
      <!-- begin section videolesson -->
      <section class="section-video-lesson">
        <div class="container">
          <div class="section-video-lesson-block">
            <div class="section-video-lesson-block_about">
              <span>-&nbsp;</span>Трейдер<br />
              - частный инвестор<br />
              - финансовый консультант
            </div>
            <div class="section-video-lesson-block_author">
              Алексей Ковальцов
            </div>
          </div>
          <div class="section-video-lesson-description">
            <h2>
              Представляет
              <span class="section-video-lesson_bold">обучающий видеокурс<span class="colon">:</span></span>
            </h2>
            <h1>
              Торговля на бирже: <br class="hidden_br" />от первых результатов<br />
              к большому капиталу
            </h1>
          </div>
          <div class="section-video-lesson-block-button">
            <div class="section-video-lesson-block-button_btn">
              <a class="show-popUp">Скачать прямо сейчас</a>
            </div>
            <div class="section-video-lesson-block-button__text">
              Бесплатно только 25 копий <span class="hidden">/</span
              ><span class="section-video-lesson-block-button__text-copies"> Осталось: 7 копий</span>
            </div>
          </div>
        </div>

        <!-- hidden modal window -->
        <div class="modal-shadow"></div>
        <div class="modal-window">
          <a class="close-popUp">×</a>
          <div class="page-form-block page-form-block_modal">
            <h4 class="page-form-title">
              Успейте скачать курс<br />
              прямо сейчас бесплатно!
            </h4>
            <div class="section-video-lesson-block-button__text_steps">
              Бесплатных копий: 25 /
              <span class="section-video-lesson-block-button__text-copies_steps">Осталось: 7</span>
            </div>
            <div class="form-wrap RForm">
              <div class="bc-form">
                <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Получить"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end section video-lesson -->

      <!-- begin section-bullets -->
      <section class="section-bullets">
        <div class="block_bullets">
          <h2 class="block_bullets_title">У вас есть мечта?</h2>
          <div class="block_bullets_benefits">
            <div class="block_bullets_benefits__items">
              <img src="images/icon_profit.png" alt="icon_profit" class="image_icon" />
              <div class="block_bullets_benefits__text">
                Сбережения <br />
                растут без вашего участия
              </div>
            </div>
            <div class="block_bullets_benefits__items">
              <img src="images/icon_car.png" alt="icon_car" class="image_icon" />
              <div class="block_bullets_benefits__text">
                Новый<br />
                автомобиль
              </div>
            </div>
            <div class="block_bullets_benefits__items">
              <img src="images/icon_flat.png" alt="icon_flat" class="image_icon" />
              <div class="block_bullets_benefits__text">
                Собственная<br />
                квартира <br />
                без ипотеки
              </div>
            </div>
            <div class="block_bullets_benefits__items">
              <img src="images/icon_travelling.png" alt="icon_travelling" class="image_icon" />
              <div class="block_bullets_benefits__text">
                Путешествия<br />
                несколько <br />
                раз в год
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end section-bullets -->

      <!-- begin section-money -->
      <section class="section-money">
        <div class="container section-steps">
          <div class="steps">
            <h2 class="steps_title">Сделайте ваши мечты реальностью прямо сейчас!</h2>
            <p class="steps_text">Путь к их осуществлению состоит всего из четырех шагов:</p>
            <div class="steps_bullets">
              <div class="steps_bullets_item">
                <div class="steps_bullets_item__image">
                  <img src="images/step_today.png" alt="step_today" />
                  <div class="steps_bullets_item__arrow"></div>
                </div>
                <div class="steps_bullets_item-description">
                  <div class="steps_bullets__title">Сегодня</div>
                  <div class="steps_bullets_text">
                    Получите видеокурс,<br />
                    пока он доступен<br />
                    бесплатно
                  </div>
                </div>
              </div>
              <div class="steps_bullets_item">
                <div class="steps_bullets_item__image">
                  <img src="images/step_next_day.png" alt="step_next_day" />
                  <div class="steps_bullets_item__arrow"></div>
                </div>
                <div class="steps_bullets_item-description">
                  <div class="steps_bullets__title">Завтра</div>
                  <div class="steps_bullets_text">Ознакомьтесь<br />с видеоуроками</div>
                </div>
              </div>
              <div class="steps_bullets_item">
                <div class="steps_bullets_item__image">
                  <img src="images/step_after.png" alt="step_after" />
                  <div class="steps_bullets_item__arrow"></div>
                </div>
                <div class="steps_bullets_item-description">
                  <div class="steps_bullets__title">Послезавтра</div>
                  <div class="steps_bullets_text">
                    Примените знания для<br />
                    увеличения<br />
                    достатка
                  </div>
                </div>
              </div>
              <div class="steps_bullets_item">
                <div class="steps_bullets_item__image">
                  <img src="images/step_forever.png" alt="step_forever" />
                </div>
                <div class="steps_bullets_item-description">
                  <div class="steps_bullets__title">Навсегда</div>
                  <div class="steps_bullets_text">
                    Получите то,<br />
                    о чем мечтали
                  </div>
                </div>
              </div>
            </div>
            <div class="section-video-lesson-block-button_steps">
              <div class="section-video-lesson-block-button_btn_steps">
                <a class="go_to_form">Скачать прямо сейчас</a>
              </div>
              <div class="section-video-lesson-block-button__text_steps">
                Бесплатно только 25 копий <span class="devider">/ </span
                ><span class="section-video-lesson-block-button__text-copies_steps">Осталось: 7 копий</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end section-money -->

      <!-- begin section-list -->
      <section class="section-list">
        <div class="container">
          <div class="section-list__block">
            <h2 class="section-list__title">Этот курс подойдет вам, если:</h2>
            <ul>
              <li>Вы хотите видеть отдачу от каждого вложения</li>
              <li>Вы устали трудиться за копеечный оклад</li>
              <li>Вы настроены обогащать себя, а не начальника</li>
              <li>Вы стремитесь к материальной независимости</li>
              <li>Вы хотите, чтобы мечты наконец стали реальностью</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end section-list -->

      <!-- begin section-about -->
      <section class="section-profit">
        <div class="image-money">
          <div class="img-money"></div>
        </div>
        <div class="container">
          <div class="block-author-total">
            <h3 class="block-author-title">
              <span class="block-author__title-bold">Обо мне:<br /></span> цифры и факты
            </h3>
            <p>Мне <span class="profit">42 года</span></p>
            <p>Инженер по образованию</p>
            <p>Опыт в торговле — <span class="profit">18 лет</span></p>
            <p>Средний ежемесячный профит за последний год: <span class="profit">22 900 долларов США</span></p>
            <p>
              Моя собственность: автомобили <span class="profit">Range Rover и Audi A7,</span> квартира
              <span class="profit">167 м2 </span><br />
              в центре Москвы, загородный дом
            </p>
            <p>Общее состояние: более <span class="profit">3,1 млн долларов</span></p>
          </div>
          <div class="block-sing">
            <div>
              <div class="block-sing__text">
                Я осуществил свои мечты. Теперь у меня достаточно <br />свободного времени, чтобы помочь в этом вам
              </div>
              <div class="block-sing__author">
                Всегда ваш,<br />
                Алексей Ковальцов
              </div>
            </div>
            <div class="author-sign">
              <img src="images/icon_sign.png" alt="" />
            </div>
          </div>
        </div>
        <div class="bg_about_small">
          <img src="images/bg_about_small.png" alt="image_bg_about_small" class="image_bg_about_small" />
        </div>
      </section>
      <!-- end section-about -->

      <!-- begin section-quotes -->
      <section class="section-quotes">
        <div class="container">
          <div class="section-quotes-total">
            <h2 class="section-quotes-title">Мнения первых участников о курсе</h2>

            <div class="quote-slider">
              <div class="section-quotes-block">
                <div class="wrapper_quote">
                  <div class="section-quotes-block-image">
                    <img src="images/img_igor.png" alt="img_igor" />
                  </div>
                  <blockquote class="section-quotes__question">
                    <h4 class="section-quotes__question-title">Игорь, 31 год</h4>
                    <p class="section-quotes__question-text">
                      Наконец закончил весь цикл уроков и вчера вывел первые деньги. Стратегия «Три<br />
                      индейца» просто космос! Спасибо, Алексей, за такой подробный материал, а главное —
                      <br />простой.***
                    </p>
                  </blockquote>
                </div>
                <div class="wrapper_quote_owner">
                  <div class="section-quotes-block-image_owner">
                    <img src="images/img_owner.png" alt="img_owner" />
                  </div>
                  <blockquote class="section-quotes__question_owner">
                    <h4 class="section-quotes__question-title">Алексей Ковальцов</h4>
                    <p class="section-quotes__question-text">
                      Игорь, всегда рад помочь! Надеюсь, цифры на вашем счете вас полностью устроили. Эта стратегия была
                      создана группой авторитетных аналитиков, поэтому ее надежность давно доказана. Буду рад вам
                      помочь, если появятся вопросы!
                    </p>
                  </blockquote>
                </div>
              </div>

              <div class="section-quotes-block second">
                <div class="wrapper_quote">
                  <div class="section-quotes-block-image">
                    <img src="images/img_alena.png" alt="img_alena" />
                  </div>
                  <blockquote class="section-quotes__question">
                    <h4 class="section-quotes__question-title">Алёна, 27 лет</h4>
                    <p class="section-quotes__question-text">
                      Доброго времени суток! Ваша история успеха меня очень вдохновила. Торгую уже две недели по вашим
                      стратегиям — ни одного ошибочного решения. Зато каждый день наблюдаю, как растут цифры на счете.
                      Спасибо!***
                    </p>
                  </blockquote>
                </div>
                <div class="wrapper_quote_owner">
                  <div class="section-quotes-block-image_owner">
                    <img src="images/img_owner.png" alt="img_owner" />
                  </div>
                  <blockquote class="section-quotes__question_owner">
                    <h4 class="section-quotes__question-title">Алексей Ковальцов</h4>
                    <p class="section-quotes__question-text">
                      Алёна, и вам хорошего дня! Я специально подбирал стратегии с балансом рисков и выгоды, поэтому они
                      всегда выходят в плюс. Если я вас вдохновил, значит, добился своей главной цели. Идите к мечте
                      прямо, не сворачивая!
                    </p>
                  </blockquote>
                </div>
              </div>

              <div class="section-quotes-block">
                <div class="wrapper_quote">
                  <div class="section-quotes-block-image">
                    <img src="images/img_irina.png" alt="img_irina" />
                  </div>
                  <blockquote class="section-quotes__question">
                    <h4 class="section-quotes__question-title">Ирина Кудрявцева, 29 лет</h4>
                    <p class="section-quotes__question-text">
                      Стратегия «Соковыжималка», наверное, лучшая из ваших! Не думала, что позволю себе уйти с работы,
                      но уже готова к этому. Профита от торговли явно хватит на всю семью, и смогу даже откладывать.
                      Спасибо, Алексей.***
                    </p>
                  </blockquote>
                </div>
                <div class="wrapper_quote_owner">
                  <div class="section-quotes-block-image_owner">
                    <img src="images/img_owner.png" alt="img_owner" />
                  </div>
                  <blockquote class="section-quotes__question_owner">
                    <h4 class="section-quotes__question-title">Алексей Ковальцов</h4>
                    <p class="section-quotes__question-text">
                      Ирина, приятно слышать такие слова! У каждой из стратегий есть свои ярые поклонники, но
                      «Соковыжималка», по моим наблюдениям, входит в топ-5. А вот копить я бы не рекомендовал — лучше
                      инвестируйте. Обращайтесь, подскажу, как лучше это сделать!
                    </p>
                  </blockquote>
                </div>
              </div>
            </div>

            <div class="section-quotes-notice">
              *** Все результаты индивидуальны и зависят от способностей участника
            </div>
          </div>
        </div>
      </section>
      <!-- end section-quotes -->

      <!-- begin section-events -->
      <section class="section-events">
        <div class="container">
          <div class="section-events__text_block">
            <h2 class="section-events__text_block__title">Сомневаетесь?</h2>
            <p class="section-events__text_block__text">Выберите свой вариант развития событий</p>
          </div>
          <div class="section-events_total_block">
            <div class="section-events-block">
              <div class="section-events-block__leaving_page">
                <h3>Вы ушли <br />со страницы</h3>
                <div class="hr_line"></div>
                <ul>
                  <li>Все остается по-прежнему</li>
                  <li>Денег больше не стало</li>
                  <li>Мечты остаются фантазией</li>
                  <li>Жизнь скучная, а работа рутинная</li>
                  <li>Вы пожалели, что закрыли страницу</li>
                  <li>
                    Вернулись, но курс уже недоступен или<br />
                    продается по реальной цене — 29 тысяч рублей.
                  </li>
                </ul>
              </div>
              <div class="section-events-block__conclusion">
                <div class="section-events-block__image">
                  <div class="icon_close"></div>
                </div>
                <div class="conclusion_block">
                  <div class="section-events-block__conclusion_title">Не нравится этот вариант?</div>
                  <div class="section-events-block__conclusion_text">
                    Вы упустили возможность пройти курс<br />
                    бесплатно, а мечты всё откладываются<br />
                    на неопределенный срок.
                  </div>
                </div>
              </div>
            </div>
            <div class="section-events-block">
              <div class="section-events-block__download">
                <h3>Вы скачали <br />видеокурс бесплатно</h3>
                <div class="hr_line"></div>
                <ul>
                  <li>Вы изучили курс и узнали, что тоговать на бирже реально</li>
                  <li>Применили знания и получили ощутимые результаты</li>
                  <li>Жизнь круто изменилась, вы можете позволить себе больше</li>
                  <li>Покупаете дом, переезжаете в новую квартиру, забираете автомобиль из салона</li>
                  <li>Довольны жизнью, имеете все, чего хотели, и ни от кого не зависите.</li>
                </ul>
              </div>
              <div class="section-events-block__conclusion_download">
                <div class="section-events-block__image">
                  <div class="icon_welcome"></div>
                </div>
                <div class="conclusion_block">
                  <div class="section-events-block__conclusion_title">Нравится этот вариант?</div>
                  <div class="section-events-block__conclusion_text">
                    Вы счастливы и успешны, а все ваши<br />
                    цели и мечты воплотились в жизнь!
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="time show-popUp" style="display: block;">
          <div class="block-download-time">
            <h3 class="last__box-text">
              Скачайте<br />
              в один клик
            </h3>
            <p class="last__box-count">Осталось 7 копий</p>
          </div>
        </div>
      </section>
      <!-- end section-events -->

      <!-- begin section relax -->
      <section class="section-quote">
        <div class="image_money_quote">
          <img src="images/img_relax.png" alt="img_money_quote" class="img_money_quote" />
        </div>
        <div class="container">
          <div class="block-quote_wrapper">
            <div class="block-quote_wrapper-item">
              <div class="page-form-block">
                <h4 class="page-form-title">
                  Успейте скачать курс<br />
                  прямо сейчас бесплатно!
                </h4>
                <div class="section-video-lesson-block-button__text_steps">
                  Бесплатных копий: 25 /
                  <span class="section-video-lesson-block-button__text-copies_steps">Осталось: 7</span>
                </div>
                <div class="form-wrap RForm">
                  <div class="bc-form-second">
                    <div class="app" id="app2" data-butt="Получить" data-type="2" data-target-geo="RU"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end section relax -->

      <!-- begin footer -->
      <footer>
        <div class="container">
          <p class="footer_text">
          <a href="javascript:void(0)" data-name="terms" class="alterlink">Пользовательское соглашение</a> | <a href="javascript:void(0)" data-name="policy" class="alterlink">Политика конфиденциальности</a>
            <br />
            «Школа трейдинга Бориса Купера» ©2015-2020. Все права защищены
          </p>
        </div>
      </footer>
      <!-- end footer -->
    </div>
    <!-- end main-wrapper -->
    <script src="build/js/jquery-3.1.0.js"></script>
    <script src="build/js/script.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
    <script>
      $(window).on('scroll', function () {
        var currentTop = $(window).scrollTop();
        if (currentTop < $('.section-bullets').offset().top) {
          $('.time').hide('fast');
        } else {
          $('.time').show('fast');
        }
      });

      $(document).on('click', '.go_to_form', function () {
        $('html, body').animate(
          {
            scrollTop: $('.bc-form-second').offset().top,
          },
          1500
        );
      });

      $(document).ready(function () {
        $('.show-popUp').click(function () {
          $('.modal-shadow').show();
          $('.modal-window').show();
        });

        $('.modal-shadow').click(function () {
          $('.modal-shadow').hide();
          $('.modal-window').hide();
        });

        $('.close-popUp').click(function () {
          $('.modal-shadow').hide();
          $('.modal-window').hide();
        });
      });
    </script>
  </body>
</html>
