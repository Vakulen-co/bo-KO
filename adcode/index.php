<?php
  include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <base href="<?php echo $base ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>不要错过这个机会!</title>
  <!-- Open Graph -->
  <?php $seoText = 'Welcome!'; ?>
  <meta name="description" content="<? echo $seoText; ?>"/>
  <meta name="keywords" content="<? echo $seoText; ?>"/>
  <meta property="og:title" content="<? echo $seoText; ?>"/>
  <meta property="og:description" content="<? echo $seoText; ?>"/>
  <meta property="og:image" content="<? echo $base; ?>video/poster.jpg"/>
  <meta property="og:image:width" content="450"/>
  <meta property="og:image:height" content="450"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="<?php echo $base; ?>"/>
  <link rel="canonical" href="<?php echo $base; ?>"/>
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
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" tytpe="text/css" href="css/comeback.css">
  <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
</head>

<div class="container_logo">
  <div class="container-fluid box_wrap">
    <div class="first_box">
      <div class="row">
        <div class="col-xs-12 first_box_margin">
          <img src="images/logo.png" alt="" class="first_box_img_logo">
        </div>
        <div class="row">
          <div class="col-xs-12 ">
            <p class="first_box_p"><span class="first_box_p_white">Do you want </span><span class="first_box_p_yellow"> <span class="currency">$</span>1.000</span></p>
            <p><span class="first_box_p_white_2">in </span><span class="first_box_p_yellow_2">60 minutes?</span></p>
            <p class="first_box_p_white_3">Walk away now and miss out on <br> your chance to make</p>
            <p class="first_box_p_purple"> <span class="currency">$</span>1.000 in 60 minutes</p>
            <p class="first_box_p_white_4">All you have to do is get your <span class="first_box_p_purple_2">FREE</span> software now</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="app form_box gtm-comeback-short-preland" id="app1" data-type="1" data-butt="Get started now"></div>
            <p class="first_box_p_white_5">We respect your privacy and your information is 100% secure</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="footer">
  <div class="container_logo_footer">
    <div class="container-fluid box_wrap">
      <div class="row">
        <div class="col-xs-12">
          <div class="partners">
            <img src="images/partners.png" alt="" class="footer_img">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container_logo_footer_2">
    <div class="container-fluid box_wrap">
      <div class="row">
        <div class="col-xs-12">
          <div class="warning">
            <p> IMPORTANT: Earnings and Legal Disclaimers Earnings and income representations made by <span class="disclaimer-brand_name__new">Website</span>, (collectively “This Website” only used as
              aspirational
              examples of your earnings potential. The success of those in the testimonials and other examples are
              exceptional
              results and therefore are not intended as a guarantee that you or others will achieve the same results.
              Individual results will vary and are entirely dependent on your use of <span class="disclaimer-brand_name__new">Website</span>.
              This Website is not responsible for your actions. You bear sole responsibility for your actions and
              decisions
              when using products and services and therefore you should always exercise caution and due diligence. You
              agree
              that this Website is not liable to you in any way for the results of using our products and services.
              See our
              Terms & Conditions for our full disclaimer of liability and other restrictions. This Website may receive
              compensation for products and services they recommend to you. If you do not want This Website to be
              compensated
              for a recommendation, then we advise that you search online for a similar product through a
              non-affiliate link.
              Trading can generate notable benefits, however, it also involves the risk of partial/full loss of the
              invested
              capital, therefore, you should consider whether you can afford to invest. ©<span id="yearDisclaimerNew">2021</span><br />
              USA REGULATION NOTICE: Trading Forex, CFDs and Cryptocurrencies is not regulated within the United
              States.
              Invest in Crypto is not supervised or regulated by any financial agencies nor US agencies. Any
              unregulated
              trading activity by U.S. residents is considered unlawful. <span class="disclaimer-brand_name__new">Website</span> does not accept customers located within the United
              States
              or holding an American citizenship.
              <script type="text/javascript">
                var yearDisclaimerNew = new Date();
                document.getElementById("yearDisclaimerNew").innerHTML = yearDisclaimerNew.getFullYear();
                document.querySelectorAll(".disclaimer-brand_name__new").forEach(function(brandName) {
                  brandName.innerHTML = location.hostname;
                })
              </script>
            </p>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="footer_sticks">
            <p class="">
              <a href="javascript:void(0)" data-name="terms" class="alterlink footer_link">Terms</a>
              <a href="javascript:void(0)" data-name="policy" class="alterlink footer_link">Privacy</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
<script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>