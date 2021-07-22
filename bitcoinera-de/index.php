<?php 
    include_once 'config.php'; 
    ?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <base href="<?php echo $base ?>">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bitcoin Era - DE </title>
        <meta name="description" content="Bitcoin Era">
        <meta name="robots" content="noindex" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link type="text/css" href="assets/css/app-era.css" rel="stylesheet">
        <meta name="msapplication-TileColor" content="#311321">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
        <!-- Open Graph -->
        <?php $seoText = 'Willkommen zurück!'; ?>
        <meta name="description" content="<? echo $seoText; ?>"/>
        <meta name="keywords" content="<? echo $seoText; ?>"/>
        <meta property="og:title" content="<? echo $seoText; ?>"/>
        <meta property="og:description" content="<? echo $seoText; ?>"/>
        <meta property="og:image" content="<? echo $base; ?>video/1.png"/>
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
    </head>
    <body class="antialiased bg-gray-100 font-cabin">
        <main>
            <div class="hidden bg-blazeOrange py-1 px-4 md:block">
                <div class="container mx-auto px-4 md:px-2">
                    <div class="text-white text-center">
                        <p class="inline font-bold">WARNUNG:</p>
                        <p class="inline">Aufgrund der extrem hohen Nachfrage schließen wir die Registrierung ab </p>
                        <p class="inline font-bold">23/03/2021</p>
                        <p class="inline font-bold">- Beeilen Sie sich!</p>
                    </div>
                </div>
            </div>
            <header class="py-4 shadow bg-white">
                <div class="container mx-auto px-4 md:px-2">
                    <div class="justify-center flex sm:justify-between items-center">
                        <figure class="h-16 max-w-xs flex items-center sm:mr-4">
                            <img class="max-h-full max-w-full" src="assets/logos/MjAyMC8wNy8xNC8xNTk3NDIzMzcxNjA1LThmZGE0MmZlLTg3NTUtNGMyMi1iZDhkLTc3ZmZjMmU1ZDM2MS5wbmc.png" alt="bitcoin-era-crypto-robots" />
                        </figure>
                        <div class="hidden items-center md:flex">
                            <div class="leading-none mr-4 text-lg font-bold">
                                <p class="text-blue-800">EXKLUSIVANGEBOT</p>
                                <p class="text-red-600">für Händler IN</p>
                                <p class="text-blue-800 uppercase">DEUTSCHLAND</p>
                            </div>
                            <div class="mr-4">
                                <img class="h-8" src="assets/images/flags/de.svg" alt="de">
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section id="hero" class=" bg-blue-800 bg-cover" style="background-image: url('assets/images/hero-background.jpeg')">
                <div class="py-8" style="background: linear-gradient(0deg, rgba(247,247,247,1) 0%, rgba(247,247,247,1) 35%, rgba(0,212,255,0) 35%);">
                    <div class="container mx-auto text-white text-center px-4 -mb-32 md:px-2 md:mb-0">
                        <h1 class="text-4xl md:text-headingalt font-bold leading-none my-2 md:my-8">Verpassen Sie es nicht, Kryptowährungen werden immer teurer!</h1>
                        <h2 class="text-xl md:text-subheadingalt mb-4 md:mb-8">
                            <span>Werden Sie der nächste Krypto-Millionär sein? </span>
                        </h2>
                        <div class="flex flex-wrap md:justify-between md:space-x-12 flex-col-reverse md:flex-row">
                            <div class="flex-1">
                                <div class="w-full mb-4 md:mb-0 mt-8 md:mt-0 md:w-auto md:flex-1 border-purple-800 shadow rounded">
                                    <video controls="controls" poster="assets/images/cryptocurrencyposter.png" allowfullscreen="" width="100%">
                                        <source src="assets/video/en-1.mp4" type="video/mp4" />
                                    </video>
                                </div>
                                <div class="text-md text-left flex items-center mt-8 md:justify-between md:space-x-6">
                                    <div class="hidden md:block">
                                        <img src="assets/images/bitcoin-era/bc_asset_13.png" alt="crypto-logo" class="w-16">
                                    </div>
                                    <div class="inline text-left mb-8 md:mb-0 text-black md:text-black">
                                        <strong>1.000 £</strong> die im Jahr 2018 investiert wurden, sind im Jahr 2021 <strong style="color:#22ad38;">11.600 £</strong> wert! Das ist eine Steigerung von <strong style="color:#22ad38;">1160% </strong> in weniger
                                        als 36 Monaten. Kryptowährung hat populäre Aktien-Investments wie $APPL, $GOOG &amp; $TSLA <strong style="color:#afb7bd;">$APPL </strong>, <strong style="color:#afb7bd;">$GOOG </strong> & <strong style="color:#afb7bd;">$TSLA deutlich übertroffen.</strong>                                    deutlich übertroffen.
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 bg-white bg-contain shadow rounded overflow-hidden border-white border-4 md:border-0">
                                <div id="register" class="px-5 py-3 md:px-6 md:py-6 font-bold text-left bg-purple-800 bg-cover leading-tight text-2xl md:text-3xl">
                                    <p class="inline">60-Sekunden-Registrierung</p>
                                </div>
                                <div class="p-4">
                                    <div class="app" id="app1" data-geo="EU" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Handel jetzt"></div>
                                </div>
                                <div class="flex justify-between items-center mt-4 px-4 pb-4">
                                    <img class="h-4 max-w-min	" src="assets/images/paypal.png">
                                    <img class="h-8 max-w-min	" src="assets/images/amex.png">
                                    <img class="h-6 max-w-min	" src="assets/images/ipay.png">
                                    <img class="h-4 max-w-min	" src="assets/images/visa.png">
                                    <img class="h-6 max-w-min	" src="assets/images/mastercard.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-12 mt-20 md:mt-0">
                <div class="container mx-auto px-4 md:px-2">
                    <h1 class="text-4xl text-center mb-6">Entdecken Sie die leistungsfähigsten Kryptowährungen für Investitionen im Jahr 2021</h1>
                    <div class="bg-gray-900 p-8 rounded-lg">
                        <div class="flex flex-wrap items-center mb-8">
                            <div class="flex-shrink-0 w-full md:w-auto md:mr-8 mb-4 md:mb-0">
                                <img class="w-8 mb-4 mx-auto md:mx-0" src="assets/images/bitcoin-era/bc_asset_13.png" alt="crypto-logo" />
                                <p class="text-white text-center md:text-left"><strong>BTC</strong></p>
                            </div>
                            <div class="flex-shrink-0 w-full md:w-auto md:mr-8 mb-4 md:mb-0">
                                <img class="h-40 mx-auto mb-4" src="assets/images/bitcoin-era/btc-price.png" alt="crypto-graph" />
                            </div>
                            <div class="w-full md:w-auto md:flex-1 md:mr-8 mb-4 md:mb-0">
                                <p class="text-white mb-4 text-center md:text-left">Bei einer Investition von 10.000 £ auf einem kürzlichen Tiefststand würde Ihr Bestand 101.453 £ wert sein, eine Steigerung um 91.453 £ !</p>
                                <p class="text-white text-xs text-center md:text-left">Quelle: Coin Market Cap</p>
                            </div>
                            <div class="flex-shrink-0 w-full md:w-auto md:ml-auto">
                                <a href="javascript:void(0)" class="block py-4 bg-blazeOrange text-white rounded text-center px-4 md:px-12" onclick="scrollToForm()">
                                <span class="text-lg font-bold mr-2">Handel jetzt</span>
                                <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center mb-8">
                            <div class="flex-shrink-0 w-full md:w-auto md:mr-8 mb-4 md:mb-0">
                                <img class="w-8 mb-4 mx-auto md:mx-0" src="assets/images/bitcoin-era/bc_asset_6.png" alt="crypto-logo" />
                                <p class="text-white text-center md:text-left"><strong>ETH</strong></p>
                            </div>
                            <div class="flex-shrink-0 w-full md:w-auto md:mr-8 mb-4 md:mb-0">
                                <img class="h-40 mx-auto mb-4" src="assets/images/bitcoin-era/eth-price.png" alt="crypto-graph" />
                            </div>
                            <div class="w-full md:w-auto md:flex-1 md:mr-8 mb-4 md:mb-0">
                                <p class="text-white mb-4 text-center md:text-left">Bei einer Investition von 10.000 £ auf einem kürzlichen Tiefststand würde Ihr Bestand 168.675 £ wert sein, eine Steigerung um 158.675 £ !</p>
                                <p class="text-white text-xs text-center md:text-left">Quelle: Coin Market Cap</p>
                            </div>
                            <div class="flex-shrink-0 w-full md:w-auto md:ml-auto">
                                <a href="javascript:void(0)" class="block py-4 bg-blazeOrange text-white rounded text-center px-4 md:px-12" onclick="scrollToForm()">
                                <span class="text-lg font-bold mr-2">Handel jetzt</span>
                                <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center">
                            <div class="flex-shrink-0 w-full md:w-auto md:mr-8 mb-4 md:mb-0">
                                <img class="w-8 mb-4 mx-auto md:mx-0" src="assets/images/bitcoin-era/dot-icon.png" alt="crypto-logo" />
                                <p class="text-white text-center md:text-left"><strong>DOT</strong></p>
                            </div>
                            <div class="flex-shrink-0 w-full md:w-auto md:mr-8 mb-4 md:mb-0">
                                <img class="h-40 mx-auto mb-4" src="assets/images/bitcoin-era/dot-price.png" alt="crypto-graph" />
                            </div>
                            <div class="w-full md:w-auto md:flex-1 md:mr-8 mb-4 md:mb-0">
                                <p class="text-white mb-4 text-center md:text-left">Bei einer Investition von 10.000 £ auf einem kürzlichen Tiefststand würde Ihr Bestand 60.360 £ wert sein, eine Steigerung um 50.360 £ !</p>
                                <p class="text-white text-xs text-center md:text-left">Quelle: Coin Market Cap</p>
                            </div>
                            <div class="flex-shrink-0 w-full md:w-auto md:ml-auto">
                                <a href="javascript:void(0)" class="block py-4 bg-blazeOrange text-white rounded text-center px-4 md:px-12" onclick="scrollToForm()">
                                <span class="text-lg font-bold mr-2">Handel jetzt</span>
                                <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-12 bg-gray-900">
                <div class="container mx-auto px-4 md:px-2">
                    <h1 class="text-white text-4xl text-center mb-6">Warum in Bitcoin investieren?</h1>
                    <div class="flex flex-wrap items-center mb-6">
                        <img class="block h-20 mx-auto mb-4 md:mx-12 md:mb-0" src="assets/images/bitcoin-era/bonus.png" alt="why-image" />
                        <p class="block text-white text-xl w-full text-center md:flex-1 md:text-left">Bitcoin war 2013 100 £ wert. Im Jahr 2018 erreichte er 20.000 £ . Forbes Peter Brandt hat behauptet, dass Bitcoin sich auf dem perfekten &quot;Kaufniveau&quot; befindet und ein wichtiger Grund dafür ist, dass institutionelle Anleger
                            schnell anhäufen.
                        </p>
                    </div>
                    <div class="flex flex-wrap items-center mb-6">
                        <img class="block h-20 mx-auto mb-4 md:mx-12 md:mb-0" src="assets/images/bitcoin-era/profit.png" alt="why-image" />
                        <p class="block text-white text-xl w-full text-center md:flex-1 md:text-left">Bitcoin befindet sich noch in einem frühen Stadium, und die Entwicklung der Blockchain wächst exponentiell. Eine frühe Annahme bedeutet, dass Sie an mehr Wachstum teilhaben können.</p>
                    </div>
                    <div class="flex flex-wrap items-center mb-6">
                        <img class="block h-20 mx-auto mb-4 md:mx-12 md:mb-0" src="assets/images/bitcoin-era/payout.png" alt="why-image" />
                        <p class="block text-white text-xl w-full text-center md:flex-1 md:text-left">Das Investieren und Handeln mit Bitcoin kann an jedem Tag und zu jeder Zeit erfolgen, so dass Sie flexibel und ohne Hindernisse mit Ihren Investitionen arbeiten können.</p>
                    </div>
                    <p class="text-white text-center text-base font-light mb-4 md:mb-0">Quelle: <a href="javascript:void(0);" class="hover:underline">forbes.com</a></p>
                    <a href="javascript:void(0)" class="table mx-auto py-4 bg-blazeOrange text-white rounded text-center px-4 md:px-12 md:hidden" onclick="scrollToForm()">
                    <span class="text-lg font-bold mr-2">Handel jetzt</span>
                    <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </section>
            <section class="hidden py-12 md:block">
                <div class="container mx-auto px-4 md:px-0">
                    <h1 class="text-4xl text-center mb-6">Die wichtigsten Währungen für den Handel im Moment</h1>
                    <image-slideshow :images="['assets/images/bitcoin-era/currency_415.png', 'assets/images/bitcoin-era/currency_416.png', 'assets/images/bitcoin-era/currency_417.png', 'assets/images/bitcoin-era/currency_418.png', 'assets/images/bitcoin-era/currency_419.png', 'assets/images/bitcoin-era/currency_420.png', 'assets/images/bitcoin-era/currency_421.png', 'assets/images/bitcoin-era/currency_422.png', 'assets/images/bitcoin-era/currency_423.png', 'assets/images/bitcoin-era/currency_424.png', 'assets/images/bitcoin-era/currency_425.png', 'assets/images/bitcoin-era/currency_426.png', 'assets/images/bitcoin-era/currency_427.png', 'assets/images/bitcoin-era/currency_428.png']"></image-slideshow>
                    <a href="javascript:void(0)" class="table mx-auto px-24 py-4 bg-blazeOrange text-white rounded text-center" onclick="scrollToForm()">
                        <div class="inline-block relative -ml-4 font-bold " style="font-size:1.25rem;">
                            Handel jetzt
                            <span class="absolute right-0 -mr-8 top-0" style="margin-top:7px;">
                                <svg class="h-4" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M254.544 154.427L320.118 220H24c-13.255 0-24 10.745-24 24v24c0 13.255 10.745 24 24 24h296.118l-65.574 65.573c-9.373 9.373-9.373 24.569 0 33.941l16.971 16.971c9.373 9.373 24.569 9.373 33.941 0L440.97 272.97c9.373-9.373 9.373-24.569 0-33.941L305.456 103.515c-9.373-9.373-24.569-9.373-33.941 0l-16.971 16.971c-9.373 9.372-9.373 24.568 0 33.941z" class=""></path>
                                </svg>
                            </span>
                        </div>
                    </a>
                </div>
            </section>
            <sticky-button theme="template_4" text="Handel jetzt"></sticky-button>
            <section class="py-12 shadow">
                <div class="container mx-auto px-4 md:px-2">
                    <div class="block text-center md:text-left md:flex items-center justify-center mb-12">
                        <a href="javascript:void(0);" class="alterlink block mx-auto md:mx-0 md:inline mb-4 font-bold text-blue-800 hover:text-blue-900 focus:outline-none hover:underline md:mr-4 md:mb-0" data-name="policy">Datenschutz</a>
                        <a href="javascript:void(0);" class="alterlink block mx-auto md:mx-0 md:inline font-bold text-blue-800 hover:text-blue-900 focus:outline-none hover:underline" data-name="terms">Nutzungsbedingungen</a>
                    </div>
                    <div class="flex items-center justify-center pb-8">
                        <a href="javascript:void(0)">
                            <figure class="h-16 max-w-xs flex items-center sm:mr-4">
                                <img class="max-h-full max-w-full" src="assets/logos/MjAyMC8wNy8xNC8xNTk3NDIzMzcxNjA1LThmZGE0MmZlLTg3NTUtNGMyMi1iZDhkLTc3ZmZjMmU1ZDM2MS5wbmc.png" alt="bitcoin-era-crypto-robots" />
                            </figure>
                        </a>
                    </div>
                </div>
            </section>
        </main>
        <script>
            const scrollToForm = () => {
                document.querySelector('#register').scrollIntoView({behavior:"smooth"})
            }
        </script>
        <script defer src="assets/js/app-era.js"></script>
        <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
        <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
    </body>
</html>