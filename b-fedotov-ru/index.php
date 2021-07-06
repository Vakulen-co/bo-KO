<?php 
    include_once 'config.php'; 
?>
<!doctype html>
<html lang="ru" class="no-js">
<head>
    <base href="<?php echo $base; ?>">
    <title>Boris Fedotov</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="icon" href="img/favicon.ico"/>
    <!-- Open Graph -->
    <?php $seoText = 'Добро пожаловать!'; ?>
    <meta name="description" content="<? echo $seoText; ?>"/>
    <meta name="keywords" content="<? echo $seoText; ?>"/>
    <meta property="og:title" content="<? echo $seoText; ?>"/>
    <meta property="og:description" content="<? echo $seoText; ?>"/>
    <meta property="og:image" content="<? echo $base; ?>img/icon1.png"/>
    <meta property="og:image:width" content="450"/>
    <meta property="og:image:height" content="450"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo $base; ?>"/>
    <link rel="canonical" href="<?php echo $base; ?>"/>
    <!-- Pixel -->
    <!-- Pixel -->
    <meta name="pixel_id" content="<?php echo $FacebookPixel; ?>">
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
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Oswald:300,400,500|Roboto:300,300i,400,500,600&amp;amp;subset=cyrillic,cyrillic-ext" rel="stylesheet"/>
    <link rel="stylesheet" href="css/main.min.css"/>    
</head>
<body>
<div id="wrapper">
<div class="eupopup eupopup-bottom"></div>
    <div class="first">
        <div class="box">
            <h3 class="first__h3">ТРЕЙДЕР И БИЗНЕС-КОУЧ</h3>
            <h2 class="first__h2"> БОРИС ФЕДОТОВ</h2>
            <p class="first__p">представляет новый<br/><b>обучающий курс:</b></p>
            <p class="first__quote"><span>7 безрисковых и надежных методов</span><br/>торговли на валютных рынках</p>
            <div class="first__block">
                <h4 class="first__block--h4">Бесплатно!</h4>
                <p class="first__block--p">Только 20 копий </p>
                <h5 class="first__block--h5">Осталось: <b>9 копий</b></h5><a href="#subs"
                                                                             class="first__block--btn go_to"> <span
                            class="s-arr"></span>СКАЧАТЬ ПРЯМО СЕЙЧАС!</a>
            </div>
        </div>
    </div>
    <div class="second box">
        <h2 class="second__title">О чем вы мечтаете сейчас?</h2>
        <div class="second__list">
            <div class="second__list--item"><img src="img/icon1.png" alt=""/>
                <p>Стабильный высокий доход</p>
            </div>
            <div class="second__list--item"><img src="img/icon2.png" alt=""/>
                <p>Путешествия по всему миру</p>
            </div>
            <div class="second__list--item"><img src="img/icon3.png" alt=""/>
                <p>Шикарный автомобиль</p>
            </div>
            <div class="second__list--item"><img src="img/icon4.png" alt=""/>
                <p>Собственный большой дом</p>
            </div>
        </div>
    </div>
    <div class="third">
        <div class="box">
            <h2 class="third__title">Превратите ваши мечты в реальность сейчас!</h2>
            <p class="third__subtitle">Ваш путь к их осуществлению:</p>
            <div class="third__list">
                <div class="third__list--item">
                    <h3 class="third__list--title"><span>01</span>Сегодня</h3>
                    <p class="third__list--text"><span>Скачайте </span>бесплатно курс, пока он есть в свободном
                        доступе</p>
                </div>
                <div class="third__list--item">
                    <h3 class="third__list--title"><span>02</span>Завтра</h3>
                    <p class="third__list--text">Детально <span>изучите </span>обучающий курс</p>
                </div>
                <div class="third__list--item">
                    <h3 class="third__list--title"><span>03</span>ПослеЗавтра</h3>
                    <p class="third__list--text"><span>Примените </span>знания на практике и получите прибыль</p>
                </div>
                <div class="third__list--item">
                    <h3 class="third__list--title"><span>04</span>Скоро</h3>
                    <p class="third__list--text"><span>Приобретите </span>все, о чем мечтаете</p>
                </div>
            </div>
            <div class="third__block">
                <h4 class="first__block--h4">Бесплатно!</h4>
                <p class="first__block--p">Только 20 копий </p>
                <h5 class="first__block--h5">Осталось: <b>9 копий</b></h5><a href="#subs"
                                                                             class="first__block--btn go_to"> <span
                            class="s-arr"></span>СКАЧАТЬ СЕЙЧАС!</a>
            </div>
        </div>
    </div>
    <div class="fourth">
        <div class="box">
            <h2 class="fourth__title">Этот курс – для вас, если:</h2>
            <ul class="fourth__list">
                <li><span class="s-check"></span>вам требуется <b>дополнительный заработок;</b></li>
                <li><span class="s-check"></span>вам <b>надоело </b>работать <b>за гроши;</b></li>
                <li><span class="s-check"></span>вы хотите стать <b>финансово независимым;</b></li>
                <li><span class="s-check"></span>вы готовы <b>воплотить мечты </b>в реальность;</li>
                <li><span class="s-check"></span>вы желатете <b>работать </b>только <b>на себя;</b></li>
                <li><span class="s-check"></span>вы мечтаете <b>быть свободным</b></li>
            </ul>
            <img src="img/man.png" alt="" class="fourth__img"/>
        </div>
    </div>
    <div class="fifth">
        <div class="box">
            <div class="fifth__block">
                <h2 class="fifth__title">Обо мне<span>(только факты)</span></h2>
                <ul class="fifth__list">
                    <li>Мне <span>48 лет</span></li>
                    <li>Зарабатываю на торговле уже <span>17 лет</span></li>
                    <li>Средний доход за один месяц в 2020 году: <span>32453 долларов США</span></li>
                    <li>Моя собственность:<br/>автомобиль
                        <span>Maserati Ghibli, </span><span>дом в пригороде Лондона</span> стоимостью 310 тыс. долларов
                    </li>
                    <li>Двое детей:<br/>
                        сын закончил коледж в Лондоне, дочь - 3 курс университета в Цюрихе
                    </li>
                    <li>Общее состояние: более <span>2,6 млн долларов</span></li>
                </ul>
                <p class="fifth__text">«<i>Я осуществил свою мечту и помогу<br/>в этом вам.</i>»</p>
                <p class="fifth__p">Искренне Ваш, Борис Федотов</p>
            </div>
        </div>
    </div>
    <div class="sixth">
        <div class="box">
            <h2 class="sixth__title">Последние отзывы участников нашего курса</h2>
            <div class="sixth__item">
                <div class="sixth__item--block">
                    <div class="sixth__item--img s-foto"></div>
                    <p class="sixth__item--text">Сергей, 25 лет</p>
                </div>
                <div class="sixth__item--com">
                    <p>Успел ознакомиться с курсом полностью, у Бориса с объяснениями стратегий все просто и
                        понятно.<br/>Я очень вдохновлен идеями и уверен, что они помогут мне дальше в торговле. Борис,
                        спасибо Вам, это очень круто.</p>
                </div>
            </div>
            <div class="sixth__item left">
                <div class="sixth__item--com">
                    <p>Всегда пожалуйста, Сергей! Я всегда доволен, когда мои ученики вдохновлены, а особенно, когда
                        воплощаются в реальность их мечты. <br/>Надеюсь, у вас всё получится!</p>
                </div>
                <div class="sixth__item--block">
                    <div class="sixth__item--img s-fotoc"></div>
                    <p class="sixth__item--text">Борис Федотов</p>
                </div>
            </div>
            <div class="sixth__item">
                <div class="sixth__item--block">
                    <div class="sixth__item--img s-foto"></div>
                    <p class="sixth__item--text">Ольга, 29 лет</p>
                </div>
                <div class="sixth__item--com">
                    <p>Здравствуйте! Стратегия «Цейтнот» очень понравилась, шикарно реализована, в ней можно не тратить
                        много времени и выжимать неплохие деньги. Поработаю еще на ней, а дальше, вероятно, уйду с
                        основной работы и перейду на более прибыльные стратегии. Спасибо, Борис.</p>
                </div>
            </div>
            <div class="sixth__item left">
                <div class="sixth__item--com">
                    <p>Добрый день, Ольга! Да, это очень экономная по времени стратегия и вы принимаете правильное
                        решение – как только повысится доходность и объем торговли, используйте другие подходы. Так вы
                        сможете максимизировать доход. Пишите, обращайтесь с вопросами. Удачи!</p>
                </div>
                <div class="sixth__item--block">
                    <div class="sixth__item--img s-fotoc"></div>
                    <p class="sixth__item--text">Борис Федотов</p>
                </div>
            </div>
            <div class="sixth__item">
                <div class="sixth__item--block">
                    <div class="sixth__item--img s-foto"></div>
                    <p class="sixth__item--text">Леонид Андреевич, 48 лет</p>
                </div>
                <div class="sixth__item--com">
                    <p>«Двойной удар» - хорошая стратегия для быстрого заработка, очень эффективная. Никогда не думал,
                        что можно сорвать куш в такой кратковременный период. Спасибо!</p>
                </div>
            </div>
            <div class="sixth__item left">
                <div class="sixth__item--com">
                    <p>Леонид, «куш» - это выигрыш в казино, удача и ничего более. «Двойной удар» - это гарантия
                        стабильного заработка, каждый день позволяющая пополнять свой кошелек.<br/>Это не игра, а
                        инструкция, которая позволит вам при правильном и точном соблюдении получать даже заоблачные
                        суммы. Обращайтесь, и я с радостью Вам помогу!</p>
                </div>
                <div class="sixth__item--block">
                    <div class="sixth__item--img s-fotoc"></div>
                    <p class="sixth__item--text">Борис Федотов</p>
                </div>
            </div>
        </div>
    </div>
    <div class="last">
        <div class="box">
            <h2 class="last__title">СОМНЕВАЕТЕСЬ? У вас есть другие идеи? </h2>
            <div class="last__block">
                <div class="last__block--item">
                    <h3 class="last__block--title">ЕСЛИ ВЫ УШЛИ СО СТРАНИЦЫ</h3>
                    <ul class="last__block--list">
                        <li>Все остается по-прежнему</li>
                        <li>Денег НЕ прибавилось</li>
                        <li>Мечты остаются мечтами</li>
                        <li>Жизнь все такая же скучная и рутинная</li>
                        <li>Пожалели, что ушли со страницы</li>
                        <li>Вернулись, но курс уже недоступен либо продается за полную стоимость – 150 тыс. рублей</li>
                    </ul>
                    <div class="last__block--smile">
                        <div class="s-smile"></div>
                        <p>Вы не можете себе его купить, ваша жизнь все так же скучна и беспросветна!</p>
                    </div>
                    <h4 class="last__block--text">Не нравится этот вариант?</h4>
                </div>
                <div class="last__block--item right">
                    <h3 class="last__block--title">ЕСЛИ СКАЧАЛИ курс БЕСПЛАТНО</h3>
                    <ul class="last__block--list">
                        <li>Ознакомились и увидели, что ДЕЛАТЬ ДЕНЬГИ — это реально</li>
                        <li>Применили знания и начали зарабатывать</li>
                        <li>Жизнь меняется к лучшему, вы можете позволить себе больше, чем раньше</li>
                        <li>Вы покупаете первый объект (дом, машину и т. п.), о котором давно мечтали</li>
                        <li>Вы живете в свое удовольствие, ни от кого не зависите</li>
                    </ul>
                    <div class="last__block--smile">
                        <div class="s-smilec"></div>
                        <p>Все Ваши мечты одна за одной сбываются. Вы – счастливый и успешный человек!</p>
                    </div>
                    <h4 class="last__block--text">нравится этот вариант?</h4>
                </div>
            </div>
            <h2 class="last__title">Успейте скачать курс прямо <span>сейчас БЕСПЛАТНО!</span></h2>
            <div id="subs" class="last__box">
                <div class="last__box--form shared-form">
                    <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="СКАЧАТЬ ПРЯМО СЕЙЧАС!"></div>
                </div>
                <div class="last__box--time">
                    <div class="last__box--img">
                        <div class="s-clock"></div>
                    </div>
                    <h3 class="last__box--text">Осталось<span>копий:</span></h3>
                    <p class="last__box--num">9<span>/20</span></p>
                    <div class="last__box--line"></div>
                </div>
            </div>
            <p class="last__text" style="padding-bottom: 1rem;">Борис Федотов © 2020. Все права защищены.</p>
            <p class="last__text" style="margin-top: 0;"><a data-name="terms" class="alterlink" style="cursor: pointer;">Пользовательское
                    соглашение</a> и <a data-name="policy" class="alterlink" style="cursor: pointer;">Политика конфиденциальности</a></p>
            
			<p class="last__text_small" style="padding-bottom: 1rem;font-size:10px;text-align:center;">ООО «Альпари-Брокер». Имеет лицензии на брокерскую деятельность, деятельность по осуществлению доверительного управления и деятельность дилера в соответствии с Федеральным законом №39-ФЗ «О рынке ценных бумаг». Лицензии ФСФР России № 016-12915-100000, № 016-12917-010000 и № 016-12919-001000. Является членом СРО НАУФОР, свидетельство <a style="color:#fff" href="https://www.alpari-broker.ru/data/docs/certificate_000774.pdf" rel="nofollow">№ 000774</a>. Входит в реестр лицензированных дилеров в разделе профессиональных участников рынка ценных бумаг на официальном сайте Центрального Банка Российской Федерации. ОГРН: 1157746930582 ИНН: 9717003523</p>
            
            
            <div href="#subs" class="time go_to">
                <h3 class="last__box--text">Осталось<span>копий:</span></h3>
                <p class="last__box--num">9<span>/20</span></p>
            </div>
        </div>
    </div>    
</div>
<script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
<script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>
</html>
