<?php 
include_once 'config.php'; 
?>

<!DOCTYPE html>
<html lang="de">

<head>
<base href="<?php echo $base ?>">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Bitcoins Wealth</title>
    <script src="assets/BitcoinsWealth_files/jquery-3.3.1.min.js"></script>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="assets/BitcoinsWealth_files/font-awesome.min.css" rel="stylesheet">
    <link href="assets/BitcoinsWealth_files/bootstrap.min.css" rel="stylesheet">
    <link href="assets/BitcoinsWealth_files/reset.css" rel="stylesheet" type="text/css">
    <link href="assets/BitcoinsWealth_files/style.css" rel="stylesheet" type="text/css">
    <link href="assets/BitcoinsWealth_files/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <meta content="#ffffff" name="theme-color">
    <script src="assets/BitcoinsWealth_files/jquery-3.3.1.min.js"></script>
    <script src="assets/BitcoinsWealth_files/bootstrap.min.js"></script>
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
	<!-- INDEX.PHP -->
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

<body>
    <div id="wrapper">
        <header id="header">
            <div class="header-content">
                <a class="header-logo">Bitcoins Wealth</a>
            </div>
        </header>
        <div id="container">
            <div class="section section-intro scroll-trigger">
                <div class="section-container">
                    <div class="intro-title">
                        Reite auf der Erfolgswelle des
                        <div>
                            Bitcoins
                        </div>und du kannst bis zu <span>€13.000 in den nächsten 24h verdienen</span>
                    </div>
                    <div class="row intro-wrapper">
                        <div class="col-md-8">
                            <div class="video_wrap">
                                <video autoplay muted style="width: 100%; background-color: #000000;" id="tesler_nc_html5_api" poster="#" preload="auto" controls><source src="assets/video/video_1_de.mp4" type="video/mp4">
                            </div>
						</div>
						<div class="col-md-4">
							<div class="top-form-wrapper">
								<div class="form-title">
									Lass mich dir jetzt
									<div>
										<div>
											LIVE zeigen
										</div>wie man sich Cash verdient!
									</div>
								</div>
								<div class="form-container-unique ti-form-1" id="fdorm">
									<div class="app" id="app1" data-type="1" data-butt="FANG JETZT AN"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="section section-tbc-description">
				<div class="section-container">
					<div class="section-content">
						<div class="section-title">
							Trete dem <span>Bitcoins Wealth</span> bei
						</div>
						<div class="section-description">
							<p><b><i>Bitcoins Wealth</i></b> ist eine exklusive Gruppe für Leute die das wahnsinnige Finanzpotential von Bitcoin erkannten und damit ganz leise super reich geworden sind.</p>
							<p><b><i>Mitglieder des Bitcoins Wealth</i></b> genießen das Reisen um die ganze Welt während sie mit nur ein paar Minuten „Arbeit“ pro Tag von ihrem Laptop aus Geld verdienen.</p>
						</div>
					</div>
				</div>
			</section>
			<section class="section section-vacations">
				<div class="section-container">
					<div class="section-content">
						<div class="section-title">
							<div>
								Hier sind ein paar unserer bisherigen Ausflüge:
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section section-testimonials">
				<div class="section-container">
					<div class="section-content">
						<div class="section-title">
							Hör von unseren Mitgliedern die sich auf unsere Software verlassen um ihre Luxusleben zu finanzieren…
						</div>
						<div class="row">
							<div class="col-md-6">
								<ul class="testimonials-list">
									<li>
										<img src="assets/BitcoinsWealth_files/testimonial-1.jpg">
										<div class="name">
											Laura Eckstein
										</div>
										<div class="description">
											„Ich bin erst seit 47 Tagen Mitglied des Bitcoins Wealth. Aber mein Leben hat sich schon total verändert! Ich habe nicht nur meine ersten €100K verdient, sondern habe währenddessen auch einige unglaubliche Leute kennengelernt. Danke, Sven!“
										</div>
									</li>
									<li>
										<img src="assets/BitcoinsWealth_files/testimonial-2.jpg">
										<div class="name">
											Johann Schreiber
										</div>
										<div class="description">
											„Als ich dem Bitcoins Wealth vor 2 Monaten beigetreten bin, hätte ich mir niemals vorstellen können was in den ersten paar Tagen nach der Freischaltung der Software passieren würde. Ich konnte endlich meine Schulden von €131.382 abbezahlen. Es gibt kein besseres Gefühl als schuldenfrei zu sein. Jetzt bin ich gerade dabei mir mein Traumhaus zu kaufen. Ich kann immer noch nicht glauben, dass das hier wirklich gerade passiert… ich werde Sven für immer dankbar sein.“
										</div>
									</li>
									<li>
										<img src="assets/BitcoinsWealth_files/testimonial-3.jpg">
										<div class="name">
											Michael Steiger
										</div>
										<div class="description">
											„Die Ergebnisse der Software sagen schon alles… genau wie versprochen, machte ich jeden Tag über €13.000. Muss ich da noch irgendetwas sagen?“
										</div>
									</li>
									<li>
										<img src="assets/BitcoinsWealth_files/testimonial-4.jpg">
										<div class="name">
											Paolo Iovinelli
										</div>
										<div class="description">
											„Gestern KÜNDIGTE ich meinen Job… und heute bin ich auf einer Pool-Party in Las Vegas! Das Leben ist VERRÜCKT! Und das alles dank dem Bitcoins Wealth. DANKE SVEN!“
										</div>
									</li>
									<li>
										<img src="assets/BitcoinsWealth_files/testimonial-5.jpg">
										<div class="name">
											Alex Fischer
										</div>
										<div class="description">
											„Ist das wirklich real? Ich bin erst vor 2 Tagen beigetreten und auf meinem Konto sitzen schon wahnsinnige €27.484,98!!!“
										</div>
									</li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="testimonials-list">
									<li>
										<img src="assets/BitcoinsWealth_files/testimonial-6.jpg">
										<div class="name">
											Paul Berg
										</div>
										<div class="description">
											„Jeden Morgen nachdem ich aufstehe und ich mir meinen Kontostand ansehe sage ich meiner Frau mich kurz zu kneifen. Ich habe vorher noch nie so eine RIESIGE Zahl auf MEINEM Bankkonto gesehen. Und die Zahl wächst und wächst… Darauf warte ich schon mein ganzes Leben. Jetzt weiß ich endlich wie es ist mein eigener Chef zu sein und jede Woche Tausende von Euro zu verdienen. Ich werde niemals zurückblicken!“
										</div>
									</li>
									<li>
										<img src="assets/BitcoinsWealth_files/testimonial-7.jpg">
										<div class="name">
											Daniel Rosenzweig
										</div>
										<div class="description">
											„Ob ihr es glaubt oder nicht, ich war früher mal Investor an der Wall Street. Und so etwas habe ich in meinen 10 Jahren bei der Firma noch nie gesehen. Meine Kollegen dachten alle ich wäre verrückt als ich bei der Firma kündigte um vollzeitig mit der Bitcoins Wealth Software zu investieren. €385.595 in Profiten später und alle meine Kollegen FLEHEN mich danach an sie reinzulassen.“
										</div>
									</li>
									<li>
										<img src="assets/BitcoinsWealth_files/testimonial-8.jpg">
										<div class="name">
											Susanne Boltyanski
										</div>
										<div class="description">
											„Nun weiß ich endlich wie es ist seinen Traum zu leben. Ich fühle mich nicht länger so als würden alle Spaß und Ruhm haben und ich schaue nur zu. Der Bitcoins Wealth hat es mir erlaubt frühzeitig in Rente zu gehen und das Leben der 1% zu genießen.“
										</div>
									</li>
									<li>
										<img src="assets/BitcoinsWealth_files/testimonial-9.jpg">
										<div class="name">
											Bruno Bauer
										</div>
										<div class="description">
											„Vor zwei Wochen erhielt ich die Kündigung. Ohne Alternativen dachte ich mein Leben wäre zu ende. Jetzt mache ich über €13.261,42 jeden einzelnen Tag. Und zum aller ersten Mal in 2 Monaten stehe ich nicht im Minus. Danke, SVEN!“
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section section-man">
				<div class="section-container">
					<div class="section-content">
						<img src="assets/BitcoinsWealth_files/founder.png">
						<div class="content-wrapper">
							<div class="section-title">
								Und das ist Sven Klaren<span>Das Genie hinter dem Bitcoins Wealth</span>
							</div>
							<div class="section-description">
								<p>Hi - ich bin ein ehemaliger Software-Entwickler bei einem großen Unternehmen, welches ich lieber nicht nennen würde.</p>
								<p>Ich habe eine Bitcoin-Trading-Software entwickelt die über €18.484.931,77 an Profiten in den letzten 6 Monaten eingebracht hat.</p>
								<p>Die Software macht Leute schneller zu Millionären als die ersten Investoren bei Uber, Facebook oder AirBnB.</p>
								<p>Wenn du selbst eine Million mit Bitcoin machen willst, guck dir das Video hier oben an um herauszufinden wie.</p><img align="right" class="sign" src="assets/BitcoinsWealth_files/signature.png">
								<p>Dein Freund,<br>
								Sven Klaren</p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<div style="display: none;" id="footer">
		<div class="footer-content">
			<div class="top-form-wrapper" style="margin-bottom:20px;">
				<div id="form">
                    
				</div>
			</div>
		</div>
	</div>
	<div class="widget widget-people block-hidden first shown">
		<div class="widget-inner">
			<div class="content">
				<div class="desc">
					<div class="name">
						<span class="pname">Michael Z.</span>hat gerade
					</div>
					<div class="sum">
						€<span class="pnum">259</span>gemacht.
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="widget widget-spots-left block-hidden secondary shown">
		<div class="widget-inner">
			<div class="content">
				<div class="value pspots">
					4
				</div>
				<div class="desc">
					KOPIEN VERFÜGBAR
				</div>
			</div>
		</div>
	</div>

	<script src="assets/BitcoinsWealth_files/scripts.js" type="text/javascript"></script> 
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>
</html>