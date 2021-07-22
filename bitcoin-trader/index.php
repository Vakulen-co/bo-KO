<?php 
    include_once 'config.php'; 
?>
<html lang="en" class="ever">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Bitcoin Automated Trading. Buy and sell Bitcoin with the Automated Bitcoin Trader. Bitcoin Trader delivers signals based on trading indicators. Trade Bitcoin, Ethereum, Ripple and other crypto currencies." />
    <title>Bitcoin Trader | Bitcoin Automated Trading</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">

    <!-- Open Graph -->
    <?php $seoText = 'Welcome!'; ?>
    <meta name="description" content="<? echo $seoText; ?>"/>
    <meta name="keywords" content="<? echo $seoText; ?>"/>
    <meta property="og:title" content="<? echo $seoText; ?>"/>
    <meta property="og:description" content="<? echo $seoText; ?>"/>
    <meta property="og:image" content="<? echo $base; ?>img/bitcointrader-screenshot.png"/>
    <meta property="og:image:width" content="450"/>
    <meta property="og:image:height" content="450"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo $base; ?>"/>
    <link rel="canonical" href="<?php echo $base; ?>"/>
    <!-- Pixel -->
    <meta name="pixel_id" content="<?php echo $FacebookPixel; ?>">
    <!-- Facebook Pixel Code -->
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
    <!-- End Facebook Pixel Code -->

    <style>
        button[type="submit"] {
            background-image: linear-gradient(166deg, #156cff 1%, #0e49ff);
            box-shadow: 0px 4px 20.9px 3.1px rgba(13, 13, 13, 0.43);
            color: #fff;
            border-radius: 6px;
            border: 0;
            outline: none;
            font-size: 18px;
            font-weight: bold;
        }
        input:not([type=checkbox]) {
            height: 40px;
            border-radius: 0;
        }
        form .input-wrap {
            margin: 10px 0;
        }
        form .checkbox-wrap {
            display: flex;
            justify-content: flex-start;
        }
        form .checkbox-wrap input{
            height: auto !important;
            width: auto !important;
        }
        input {
            width: auto;
            height: auto;
            margin-bottom: 0 !important;
        }
    </style>

</head>

<body class="content">
    <div class="navbar header">
        <div class="col-12 text-center">
            <img class="img-fluid m-2" src="img/946_3400018_logo.png">
        </div>
    </div>
    <main role="main">
        <section id="home" class="text-center content py-4">
            <div class="container">
                <h1 class="jumbotron-heading">Automated Trading for <b class="special">Bitcoin</b> and CryptoCurrencies</h1>
                <div class="row">
                    <div class="col-xs-12 col-md-7 col-lg-8 mt-3">
                        <img src="img/bitcointrader-screenshot.png" class="img-responsive"> </div>
                    <div class="col-xs-12 col-md-5 col-lg-4 mt-3">
                        <div id="signup" class="wl-signup modal-body highlight">
                            <h4>Open an account</h4>
                            <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="REGISTER NOW"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="features" class="content py-4">
            <div class="container p-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <h4 class="card-header title">Crypto Trading</h4>
                            <div class="card-body">
                                <p class="card-text">Bitcoin Trader allows trading of cryptocurrencies like Bitcoin Ethereume, Ripple and many others.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <h4 class="card-header title">Technical Indicators</h4>
                            <div class="card-body">
                                <p class="card-text">6 Trading indicators generates automated trading signals 24h 7/7.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <h4 class="card-header title">Multi Brokers</h4>
                            <div class="card-body">
                                <p class="card-text">Bitcoin Trader is compatible and able to interact with more than 10 brokers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="steps" class="title py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-uppercase">How It Works</h2>
                        <p> </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="step">
                            <h3><b class="badge content">1.</b> Open an Account</h3>
                            <p>After the signup, you will be directed to the APP interface.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="step">
                            <h3><b class="badge content">2.</b> Fund Your Account</h3>
                            <p>To start, you need to deposit in your broker account.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="step">
                            <h3><b class="badge content">3.</b> Start Profiting</h3>
                            <p>Click on 'Start Auto Trading' or trade manually the signals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="feed" class="content py-5">
            <div class="container">
                <h2 class="text-uppercase">Last Trades</h2>
                <div class="a_table table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th class="text-center title highlight"></th>
                                <th class="text-center title hidden-xs highlight">Date </th>
                                <th class="text-center title highlight">Direction </th>
                                <th class="text-center title highlight">Profit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>BITCOIN.m</b></td>
                                <td class="hidden-xs">2020-04-24 15:59:56</td>
                                <td>
                                    <div class="badge btn-xs text-uppercase btn-success">
                                        <span class="glyphicon glyphicon-arrow-up"></span> BUY</div>
                                </td>
                                <td>$100.13</td>
                            </tr>
                            <tr>
                                <td><b>BITCOIN</b></td>
                                <td class="hidden-xs">2020-04-24 15:51:47</td>
                                <td>
                                    <div class="badge btn-xs text-uppercase btn-success">
                                        <span class="glyphicon glyphicon-arrow-up"></span> BUY</div>
                                </td>
                                <td>$25.00</td>
                            </tr>
                            <tr>
                                <td><b>BITCOIN</b></td>
                                <td class="hidden-xs">2020-04-24 15:51:40</td>
                                <td>
                                    <div class="badge btn-xs text-uppercase btn-success">
                                        <span class="glyphicon glyphicon-arrow-up"></span> BUY</div>
                                </td>
                                <td>$25.00</td>
                            </tr>
                            <tr>
                                <td><b>BITCOIN.m</b></td>
                                <td class="hidden-xs">2020-04-24 15:50:05</td>
                                <td>
                                    <div class="badge btn-xs text-uppercase btn-success">
                                        <span class="glyphicon glyphicon-arrow-up"></span> BUY</div>
                                </td>
                                <td>$60.00</td>
                            </tr>
                            <tr>
                                <td><b>BITCOIN.m</b></td>
                                <td class="hidden-xs">2020-04-24 15:13:07</td>
                                <td>
                                    <div class="badge btn-xs text-uppercase btn-success">
                                        <span class="glyphicon glyphicon-arrow-up"></span> BUY</div>
                                </td>
                                <td>$100.17</td>
                            </tr>
                            <tr>
                                <td><b>BITCOIN.m</b></td>
                                <td class="hidden-xs">2020-04-24 14:51:25</td>
                                <td>
                                    <div class="badge btn-xs text-uppercase btn-danger">
                                        <span class="glyphicon glyphicon-arrow-down"></span> SELL</div>
                                </td>
                                <td>$100.17</td>
                            </tr>
                            <tr>
                                <td><b>BITCOIN</b></td>
                                <td class="hidden-xs">2020-04-24 14:50:42</td>
                                <td>
                                    <div class="badge btn-xs text-uppercase btn-danger">
                                        <span class="glyphicon glyphicon-arrow-down"></span> SELL</div>
                                </td>
                                <td>$25.00</td>
                            </tr>
                            <tr>
                                <td><b>BITCOIN.m</b></td>
                                <td class="hidden-xs">2020-04-24 14:42:46</td>
                                <td>
                                    <div class="badge btn-xs text-uppercase btn-danger">
                                        <span class="glyphicon glyphicon-arrow-down"></span> SELL</div>
                                </td>
                                <td>$60.00</td>
                            </tr>
                            <tr>
                                <td><b>BITCOIN.m</b></td>
                                <td class="hidden-xs">2020-04-24 14:37:02</td>
                                <td>
                                    <div class="badge btn-xs text-uppercase btn-success">
                                        <span class="glyphicon glyphicon-arrow-up"></span> BUY</div>
                                </td>
                                <td>$8.07</td>
                            </tr>
                            <tr>
                                <td><b>BITCOIN.m</b></td>
                                <td class="hidden-xs">2020-04-24 14:28:54</td>
                                <td>
                                    <div class="badge btn-xs text-uppercase btn-danger">
                                        <span class="glyphicon glyphicon-arrow-down"></span> SELL</div>
                                </td>
                                <td>$60.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section id="benefit" class="title py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-left">
                        <h2 class="text-uppercase">Frequently Asked Questions</h2>
                        <p> </p>
                        <h3 class="lead text-uppercase"><i class="fa fa-clock-o"></i> What kind of results can I expect?</h3>
                        <p>Bitcoin Trader has an average of 73% successful trades.</p>
                        <h3 class="lead text-uppercase"><i class="fa fa-heart"></i> How many hours per day do I need to use Bitcoin Trader?</h3>
                        <p>In automated trading modec Bitcoin Trader handles the trading, so you will just need to start it and let it run.</p>
                        <h3 class="lead text-uppercase"><i class="fa fa-calculator"></i> What is the maximum amount that I can make?</h3>
                        <p>There is no limit of earning. The profits are unlimited with Bitcoin Trader.</p>
                        <h3 class="lead text-uppercase"><i class="fa fa-life-ring"></i> How much does Bitcoin Trader cost?</h3>
                        <p>Bitcoin Trader is 100% free of charge.</p>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="content">
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-uppercase"> </h2>
                        <p><small>Important Risk Note: Trading can generate significant benefits but also involves a risk of partial or full funds loss and should be considered by initial investors. we strongly advise that you read our terms &amp; conditions and disclaimer page before making any investment. customers must be aware of their individual capital gain tax liability in their country of residence. It is against the law to solicit U.S. persons to buy and sell commodity options, even if they are called \prediction' contracts, unless they are listed for trading and traded on a CFTC-registered exchange or unless legally exempt.</small>                            </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="text-center menu">
        <span>2020 @ Bitcoin Trader</span> - <a href="javascript:void(0)" data-name="terms" class="alterlink">Terms &amp; Conditions</a> - <a href="javascript:void(0)" data-name="policy" class="alterlink">Privacy Policy</a>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>