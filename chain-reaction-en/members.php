<?php
  include_once 'config.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <base href="<?php echo $base ?>">
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration - Chain Reaction</title>
  <link rel="shortcut icon" href="datacontent/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="datacontent/img/favicon.ico" type="image/x-icon">
  <!-- Open Graph -->
  <?php $seoText = 'Welcome! - Chain Reaction'; ?>
  <meta name="description" content="<? echo $seoText; ?>"/>
  <meta name="keywords" content="<? echo $seoText; ?>"/>
  <meta property="og:title" content="<? echo $seoText; ?>"/>
  <meta property="og:description" content="<? echo $seoText; ?>"/>
  <meta property="og:image" content="<? echo $base; ?>datacontent/img/logo-new.png"/>
  <meta property="og:image:width" content="450"/>
  <meta property="og:image:height" content="450"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="<?php echo $base; ?>"/>
  <link rel="canonical" href="<?php echo $base; ?>"/>
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
  <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
  <link href="datacontent/css/css.css" rel="stylesheet" />
  <link href="datacontent/css/css_custom.css" rel="stylesheet" />

  <script src="datacontent/js/modernizr.js"></script>

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900&subset=latin,cyrillic' rel="preload" as="style" onload="this.rel='stylesheet'">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>

  <div class="wrapper header">
    <div class="orange-chainStreap">
      <div class="headerLogoChain">
        <img src="datacontent/img/logo-new.png" class="" alt="Chain Reaction" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-sm-offset-4">
            <img src="datacontent/img/trusted-new.png" class="img-responsive center-block" alt="Chain Reaction" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="wrapper subheader pattern2">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="teaserReaction" id="topToTop">
            YOU ARE JUST <b>3 STEPS</b> AWAY<br /> FROM DAILY INCOME OF <b>£1000 </b>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-8">
          <div class="video-wrapper">
            <div class="video">
              <div class="embed-responsive embed-responsive-16by9">
                <div class="video" style="width:100%;height:100%;position:absolute;border:none;">
                    <video controls="controls" poster="datacontent/video/poster-2.jpg" allowfullscreen="">
                        <source src="datacontent/video/video-2.mp4" type="video/mp4" />
                    </video>
                    <div class="play-btn"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4">
          <h2>FREE REGISTRATION</h2>

          <div class="signup regForm">
            <div class="reg-form form-holder">
            <div class="app" id="app1" data-butt="REGISTER RIGHT NOW" data-geo="EU" data-url="<?php echo $thankyou ?>" data-type="2" data-email="<?php echo $_POST['email'] ?>" data-name="<?php echo $_POST['f_name'] ?>"></div>
            </div>

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="bottom-arrow"></div>
        </div>
      </div>
    </div>
  </div>


  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div data-aos="zoom-in" data-aos-duration="1000">
            <h1>
              CHAIN ​​REACTION
            </h1>
          </div>
          <div id="currtime">
            Time ( <span class="timezone"></span>)
            <span class="date"></span> <span class="time"></span>
          </div>
        </div>
        <div class="col-xs-12">
          <div id="curresults" class="table-responsive">
            <table class="table" id="live-table">
              <tr class="headerwrapper">
                <th>
                  <span>Asset</span>
                </th>
                <th>
                  <span>Direction</span>
                </th>
                <th>
                  <span>Amount</span>
                </th>
                <th>
                  <span>Opening time</span>
                </th>
                <th>
                  <span>Expiry time</span>
                </th>
                <th>
                  <span>Status</span>
                </th>
                <th>
                  <span>Payment</span>
                </th>
              </tr>
              <tr>
                <td>
                  GBP/CHF
                </td>
                <td>
                  CALL
                </td>
                <td>
                  £106.52
                </td>
                <td>
                  2020/06/12 01:03:01
                </td>
                <td>
                  2020/06/12 02:44:44
                </td>
                <td class="result">
                  PROFIT
                </td>
                <td>
                  £196
                </td>
              </tr>
              <tr>
                <td>
                  GBP/CHF
                </td>
                <td>
                  CALL
                </td>
                <td>
                  £106.52
                </td>
                <td>
                  2020/06/12 01:03:01
                </td>
                <td>
                  2020/06/12 02:44:44
                </td>
                <td class="result">
                  PROFIT
                </td>
                <td>
                  £196
                </td>
              </tr>
              <tr>
                <td>
                  GBP/CHF
                </td>
                <td>
                  CALL
                </td>
                <td>
                  £106.52
                </td>
                <td>
                  2020/06/12 01:03:01
                </td>
                <td>
                  2020/06/12 02:44:44
                </td>
                <td class="result">
                  PROFIT
                </td>
                <td>
                  £196
                </td>
              </tr>
              <tr>
                <td>
                  GBP/CHF
                </td>
                <td>
                  CALL
                </td>
                <td>
                  £106.52
                </td>
                <td>
                  2020/06/12 01:03:01
                </td>
                <td>
                  2020/06/12 02:44:44
                </td>
                <td class="result">
                  PROFIT
                </td>
                <td>
                  £196
                </td>
              </tr>
              <tr>
                <td>
                  GBP/CHF
                </td>
                <td>
                  CALL
                </td>
                <td>
                  £106.52
                </td>
                <td>
                  2020/06/12 01:03:01
                </td>
                <td>
                  2020/06/12 02:44:44
                </td>
                <td class="result">
                  PROFIT
                </td>
                <td>
                  £196
                </td>
              </tr>
              <tr>
                <td>
                  GBP/CHF
                </td>
                <td>
                  CALL
                </td>
                <td>
                  £106.52
                </td>
                <td>
                  2020/06/12 01:03:01
                </td>
                <td>
                  2020/06/12 02:44:44
                </td>
                <td class="result">
                  PROFIT
                </td>
                <td>
                  £196
                </td>
              </tr>
              <tr>
                <td>
                  GBP/CHF
                </td>
                <td>
                  CALL
                </td>
                <td>
                  £106.52
                </td>
                <td>
                  2020/06/12 01:03:01
                </td>
                <td>
                  2020/06/12 02:44:44
                </td>
                <td class="result">
                  PROFIT
                </td>
                <td>
                  £196
                </td>
              </tr>
              <tr>
                <td>
                  GBP/CHF
                </td>
                <td>
                  CALL
                </td>
                <td>
                  £106.52
                </td>
                <td>
                  2020/06/12 01:03:01
                </td>
                <td>
                  2020/06/12 02:44:44
                </td>
                <td class="result">
                  PROFIT
                </td>
                <td>
                  £196
                </td>
              </tr>
              <tr>
                <td>
                  GBP/CHF
                </td>
                <td>
                  CALL
                </td>
                <td>
                  £106.52
                </td>
                <td>
                  2020/06/12 01:03:01
                </td>
                <td>
                  2020/06/12 02:44:44
                </td>
                <td class="result">
                  PROFIT
                </td>
                <td>
                  £196
                </td>
              </tr>
              <tr>
                <td>
                  GBP/CHF
                </td>
                <td>
                  CALL
                </td>
                <td>
                  £106.52
                </td>
                <td>
                  2020/06/12 01:03:01
                </td>
                <td>
                  2020/06/12 02:44:44
                </td>
                <td class="result">
                  PROFIT
                </td>
                <td>
                  £196
                </td>
              </tr>
              <tr>
                <td>
                  GBP/CHF
                </td>
                <td>
                  CALL
                </td>
                <td>
                  £106.52
                </td>
                <td>
                  2020/06/12 01:03:01
                </td>
                <td>
                  2020/06/12 02:44:44
                </td>
                <td class="result">
                  PROFIT
                </td>
                <td>
                  £196
                </td>
              </tr>
              <tr>
                <td>
                  GBP/CHF
                </td>
                <td>
                  CALL
                </td>
                <td>
                  £106.52
                </td>
                <td>
                  2020/06/12 01:03:01
                </td>
                <td>
                  2020/06/12 02:44:44
                </td>
                <td class="result">
                  PROFIT
                </td>
                <td>
                  £196
                </td>
              </tr>
              <tr>
                <td>
                  GBP/CHF
                </td>
                <td>
                  CALL
                </td>
                <td>
                  £106.52
                </td>
                <td>
                  2020/06/12 01:03:01
                </td>
                <td>
                  2020/06/12 02:44:44
                </td>
                <td class="result">
                  PROFIT
                </td>
                <td>
                  £196
                </td>
              </tr>
              <tr>
                <td>
                  GBP/CHF
                </td>
                <td>
                  CALL
                </td>
                <td>
                  £106.52
                </td>
                <td>
                  2020/06/12 01:03:01
                </td>
                <td>
                  2020/06/12 02:44:44
                </td>
                <td class="result">
                  PROFIT
                </td>
                <td>
                  £196
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div data-aos="zoom-in" data-aos-duration="2000">
            <h1>
              Frequently Asked Questions
            </h1>
          </div>
        </div>
      </div>

      <div class="row faqs">
        <div class="col-xs-12">
          <!--FAQ-->
          <div class="faq faq1">
            <div class="question">
              Do I need to have some kind of experience?
            </div>

            <div class="answer">
              No, the program and my team will help you earn money every day, even if you&#39;ve never worked online.
            </div>
          </div>
          <div class="faq faq2">
            <div class="question">
              Is the Chain Reaction really free?
            </div>

            <div class="answer">
              Yes, you will not have to pay a dime to get the application. Later, when you will start earning
              money, a certain percentage of your earnings will be received by me and my team. But this
              percentage will be not withdrawn from your account — it will be withdrawn directly from the
              profit before it is entered to your account. At the same time, you will receive 75–85 % of the
              profit from every trade, as it usually happens in the financial trading.
            </div>
          </div>
          <div class="faq faq3">
            <div class="question">
              How much can I earn?
            </div>

            <div class="answer">
              Each of the Chain Reaction users earns at least £1000 a day, and if you sign up, you will be able to earn
              the same!
            </div>
          </div>
          <div class="faq faq4">
            <div class="question">
              What do I need to start earning?
            </div>

            <div class="answer">
              Only an Internet-connected computer, laptop or smart phone.
            </div>
          </div>

          <div class="faq faq5">
            <div class="question">
              Why do I have to top up a trading account?
            </div>

            <div class="answer">
              The Chain Reaction application is connected to the global financial market, and it is natural that,
              in order to start trading with binary options, you need some initial capital. However, taking into
              account that the minimum amount for replenishing the account is only £250, you will return the
              money just in one day.
            </div>
          </div>
          <div class="faq faq6">
            <div class="question">
              How do I contact the technical support service?
            </div>

            <div class="answer">
              The technical support service is available 24/7, around the clock, including weekends and holidays. You
              can contact our team by e-mail
              <a href="mailto:support@chain-reaction.cc">support@chain-reaction.cc</a>. If you want to get
              advice over the phone, please contact us by e-mail, leave your phone number and we will call
              you back at any time convenient for you.
            </div>
          </div>
          <div class="faq faq7">
            <div class="question">
              Should I need to download something?
            </div>

            <div class="answer">
              No, it works online, on any device connected to the Internet.
            </div>
          </div>
          <div class="faq faq8">
            <div class="question">
              Would I be able to log in to my account from a smart phone or MacBook?
            </div>

            <div class="answer">
              Yes, the Chain Reaction program is compatible with any system and with any device — whether
              it is a Windows or Apple PC or laptop, as well as a smart phone or tablet based on Android, IOS
              or Windows Mobile.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container narrow">
    <div class="row">
      <div class="col-xs-12">
        <div class="toolbar">
          <div class="toolbar_logo">
            <div class="toolbar_logo_img link"></div>
          </div>

          <div class="toolbar_wrapper">
            <ul class="toolbar_nav">
              <li class="toolbar_nav_i">
                <div class="toolbar_nav_a toolbar_nav_a__messa">
                  <div class="toolbar_nav_i_ic">
                    <div unselectable="on" class="toolbar_nav_i_tx-w usel-off">Messages</div>
                  </div>
                </div>
              </li>
              <li class="toolbar_nav_i">
                <div class="toolbar_nav_a toolbar_nav_a__discu">
                  <div class="toolbar_nav_i_ic">
                    <div unselectable="on" class="toolbar_nav_i_tx-w usel-off">Discussions</div>
                  </div>
                </div>
              </li>
              <li class="toolbar_nav_i">
                <div class="toolbar_nav_a toolbar_nav_a__notif">
                  <div class="toolbar_nav_i_ic">
                    <div unselectable="on" class="toolbar_nav_i_tx-w usel-off">Notifications</div>
                  </div>
                  <span class="new-marker"></span>
                </div>
              </li>
              <li class="toolbar_nav_i">
                <div class="toolbar_nav_a toolbar_nav_a__guests">
                  <div class="toolbar_nav_i_ic">
                    <div unselectable="on" class="toolbar_nav_i_tx-w usel-off">Guests</div>
                  </div>
                </div>
              </li>
              <li class="toolbar_nav_i">
                <div class="toolbar_nav_a toolbar_nav_a__marks">
                  <div class="toolbar_nav_i_ic">
                    <div unselectable="on" class="toolbar_nav_i_tx-w usel-off">Evaluations</div>
                  </div>
                </div>
              </li>
              <li class="toolbar_nav_i">
                <div class="toolbar_nav_a toolbar_nav_a__audio">
                  <div class="toolbar_nav_i_ic">
                    <div unselectable="on" class="toolbar_nav_i_tx-w usel-off">Music</div>
                  </div>
                </div>
              </li>
              <li class="toolbar_nav_i">
                <div class="toolbar_nav_a toolbar_nav_a__video">
                  <div class="toolbar_nav_i_ic">
                    <div unselectable="on" class="toolbar_nav_i_tx-w usel-off">Video</div>
                  </div>
                </div>
              </li>
            </ul>
          </div>

          <div id="toolbar_search" class="toolbar_search">
            <div class="it_w ">
              Сhain Reaction
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="feed">
          <div class="messages">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
              <div class="message">
                <div class="userphoto">
                  <img src="datacontent/img/ok-01.jpg" />
                </div>
                <div class="content">
                  <div class="username">
                    Olivia Evans
                  </div>
                  <div class="usertext">
                    This program is simply incredible, and your team is ready to help. Thank you
                    for helping me earn enough money to buy a watch for my husband, which he had
                    always dreamed of. It used to be an unaffordable luxury for us, but with the
                    Сhain Reaction I managed to pile up money for it in a week)))))
                    <img src="datacontent/img/proof_01.jpg" class="img-responsive" />
                  </div>
                  <div class="action comment">
                    Comment
                    <span>67</span>
                  </div>
                  <div class="action share">
                    <span>43</span>
                  </div>
                  <div class="action like">
                    <span>681</span>
                  </div>
                </div>
              </div>

              <div class="message">
                <div class="userphoto">
                  <img src="datacontent/img/ok-02.jpg" />
                </div>
                <div class="content">
                  <div class="username">
                    Fred Parson
                  </div>
                  <div class="usertext">
                    You and your team have become my heroes – I tip my hat to you! I think, this
                    will be clearly no
                    idle boast to my followers! I have failed to tell you from the very
                    beginning that, in general, I
                    don’t deal with the overview of trading systems. I am engaged in searching
                    for programs that fail
                    to work or do not work as promised by their creators, and I post reviews on
                    them in my blog...
                    And, of course, there’s a hell of a lot of them ... It is fortunate for you
                    and your customers that I
                    haven’t found any shortcomings in your program. It&#39;s really a high tech,
                    well-thought-out
                    solution. Having worked with the Chain Reaction only for 9 days, I have
                    earned £9385. Keep it
                    up!
                    <img src="datacontent/img/proof_02.jpg" class="img-responsive" />
                  </div>
                  <div class="action comment">
                    Comment
                    <span>67</span>
                  </div>
                  <div class="action share">
                    <span>82</span>
                  </div>
                  <div class="action like">
                    <span>681</span>
                  </div>
                </div>
              </div>

              <div class="message">
                <div class="userphoto">
                  <img src="datacontent/img/ok-03.jpg" />
                </div>
                <div class="content">
                  <div class="username">
                    Emma Broock
                  </div>
                  <div class="usertext">
                    I would like to thank my husband William that he has found this application
                    and insisted on trying
                    it. I was told that I would not need any special expertise and I said, “Ok.
                    Let&#39;s try”. They
                    promised the 24/7 support, and I also found it hard to believe. And when I
                    was told that I would
                    earn £1,000 a day ... I thought it was sheer nonsense! I am very glad that
                    this is not like that, I am

                    GRATEFULL to William that he has persuaded me to try it! This is our result
                    for 7 days...
                    THANK YOU VERY MUCH FOR THE PROGRAM AND YOUR ASSISTANCE!
                    <img src="datacontent/img/proof_03.jpg" class="img-responsive" />
                  </div>
                  <div class="action comment">
                    Comment
                    <span>843</span>
                  </div>
                  <div class="action share">
                    <span>211</span>
                  </div>
                  <div class="action like">
                    <span>2648</span>
                  </div>
                </div>
              </div>

              <div class="message">
                <div class="userphoto">
                  <img src="datacontent/img/ok-04.jpg" />
                </div>
                <div class="content">
                  <div class="username">
                    Martin Ellington
                  </div>
                  <div class="usertext">
                    I have been using the program for a few weeks, and I believe that it is time
                    to THANK you and
                    tell what I have achieved with your help! Only in a few weeks, I have
                    managed to amass money
                    for a down payment for a spacious apartment in a prime bedroom community
                    area of ​​London!
                    Jessica (my wife) and I would like to thank you for that we and our children
                    are able to live in
                    completely different conditions and not be afraid for our future!
                    <img src="datacontent/img/proof_04.jpg" class="img-responsive" />
                  </div>
                  <div class="action comment">
                    Comment
                    <span>168</span>
                  </div>
                  <div class="action share">
                    <span>91</span>
                  </div>
                  <div class="action like">
                    <span>1206</span>
                  </div>
                </div>
              </div>

              <div class="message">
                <div class="userphoto">
                </div>
                <div class="content">
                  <div class="username">
                    Gordon Davies
                  </div>
                  <div class="usertext">
                    I do not know whether you are aware that here, in Lancashire, it is almost
                    impossible to find a job!
                    Especially with a good salary and PARTICULARLY IF YOU ARE A STUDENT! Your
                    program “Chain Reaction” has just saved me ... now I earn 5000 pounds a
                    week. Here such
                    money could not be earned even in half a year! God bless you!
                    <img src="datacontent/img/proof_05.jpg" class="img-responsive" />
                  </div>
                  <div class="action comment">
                    Comment
                    <span>84</span>
                  </div>
                  <div class="action share">
                    <span>17</span>
                  </div>
                  <div class="action like">
                    <span>584</span>
                  </div>
                </div>
              </div>

              <div class="message">
                <div class="userphoto">
                  <img src="datacontent/img/ok-06.jpg" />
                </div>
                <div class="content">
                  <div class="username">
                    Jerry Adamson
                  </div>
                  <div class="usertext">
                    I have tested this program 10 days, and now I want to tell the whole world
                    how effective it is! I
                    have a lot of subscribers and I am not
                    intended to keep
                    this discovery secret. I think they will be shocked when they find out that
                    during this week I have
                    earned more than £1000 per day.
                    <img src="datacontent/img/proof_06.jpg" class="img-responsive" />
                  </div>
                  <div class="action comment">
                    Comment
                    <span>47</span>
                  </div>
                  <div class="action share">
                    <span>49</span>
                  </div>
                  <div class="action like">
                    <span>706</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>



  <div class="wrapper pattern3">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <div class="signup" id="">
            <button class="default smaller reg-btn" id="scrollToTopBtn">

              <a href="javascript:void()" style="text-decoration: none; color: #fff; margin-top: 30px;"> REGISTER <nobr>RIGHT NOW</nobr></a>
            </button>
          </div>
        </div>

        <div class="col-xs-12 col-sm-8 col-sm-offset-2 support">
          <div class="spacer"><img src="datacontent/img/support.png" /></div>
          <h2>24/7 TECHNICAL SUPPORT</h2>
          <p>
            Do not hesitate to ask your questions! Our friendly staff of the technical support service will be happy to
            help you at any time. <br />

          </p>
        </div>

        <div class="col-xs-12">
          <div class="footer-logo-dark">
            <img src="datacontent/img/logo-footer-white-new.png" class="" alt="ChainReactionS" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal-backdrop fade myaddone in"></div>
  <div class="loader-wrapper">
    <div class="loader">
      <div class="roller"></div>
      <div class="roller"></div>
    </div>
    <div id="loader2" class="loader">
      <div class="roller"></div>
      <div class="roller"></div>
    </div>
    <div id="loader3" class="loader">
      <div class="roller"></div>
      <div class="roller"></div>
    </div>
  </div>

  <div class="wrapper footer pattern">
    <div class="container">
      <div class="row">

        <div class="col-xs-12">
          <p>2021 <a href="/" style="cursor: auto; color: #ddd;">©</a> Chain Reaction. All rights reserved.</p>
          <p>
                        <a href="#" data-name="policy" class="alterlink">Risk Disclosure</a> |
                        <a href="#" data-name="terms" class="alterlink">Terms of Use</a>
                    </p>
        </div>
      </div>
    </div>
  </div>


  <script src="datacontent/js/jquery.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
  <script src="datacontent/js/bootstrap.js"></script>
  <script src="datacontent/js/jqueryval.js"></script>
  <script src="datacontent/js/js_custom.js"></script>
  <script src="datacontent/js/loadingoverlay.js"></script>
  <script src="datacontent/js/seconfStep.js"></script>
  
  <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
  <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>