<?php 
include_once 'config.php'; 
?>

<!DOCTYPE html>
<html lang="de">

<head>
<base href="<?php echo $base ?>">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <script src="assets/BitcoinsWealth_files/jquery-3.3.1.min.js"></script>
    <title>The Bitcoin Code - Soci</title>
    <meta content="#ffffff" name="theme-color">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed|Ubuntu:300,300i,400,500,500i,700,700i&display=swap&subset=cyrillic" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/BitcoinsWealth_files/font-awesome.min.css" rel="stylesheet">
    <link href="assets/BitcoinsWealth_files/bootstrap.min.css" rel="stylesheet">
    <link href="assets/BitcoinsWealth_files/reset.css" rel="stylesheet" type="text/css">
    <link href="assets/BitcoinsWealth_files/style6dbd.css" rel="stylesheet">
    <link href="assets/BitcoinsWealth_files/normalize.min.css" rel="stylesheet">
    <link href="assets/BitcoinsWealth_files/style-it.css" rel="stylesheet" type="text/css">
    <link href="assets/BitcoinsWealth_files/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="assets/BitcoinsWealth_files/style.css" rel="stylesheet" type="text/css">
    <script src="assets/BitcoinsWealth_files/bootstrap.min.js"></script>
    <script src="assets/BitcoinsWealth_files/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/BitcoinsWealth_files/scripts.min.js" type="text/javascript"></script>
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
	<!-- MEMBERS.PHP -->
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $FacebookPixel ?>&ev=ViewContent&noscript=1"/>
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
<body>
    <div id="wrapper">
        <header id="header">
            <div class="header-content">
                <a class="header-logo">Bitcoins Wealth</a>
            </div>
        </header>
        <div id="container">
            <div class="section section-intro section-into-members">
                <div class="section-container">
                    <div class="section-title">
                        Willkommen im <b><i>Mitgliederbereich des Bitcoins Wealth</i></b>
                    </div>
                    <div class="row intro-wrapper">
                        <div class="col-md-8">
                            <div class="video_wrap">
                                <video autoplay muted style="width: 100%; background-color: #000;" id="tesler_nc_html5_api" poster="#" preload="auto" controls><source src="assets/video/video_2_de.mp4" type="video/mp4">
                            </div>
						</div>
						<div class="col-md-4" style="position: relative;">
							<div class="top-form-wrapper member-form scroll-trigger moreInputs">
								<div class="container" data-hidden-field="fName lName email country fullPhone agree button" data-show-hidden="yes" id="dataForm"></div>
								<div class="app" id="app1" data-geo="EU" data-type="2" data-url="<?php echo $thankyou ?>" data-email="<?php echo $_POST['email']?>" data-name="<?php echo $_POST['f_name']?>" data-butt="FANG JETZT AN"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="section section-app-features">
				<div class="section-container">
					<div class="section-content">
						<div class="row">
							<div class="col-md-4">
								<div class="app-feature-item">
									<div class="title">
										Bessere Technologie
									</div>
									<div class="description">
										Die Bitcoins Wealth Software wurde mit der besten Programmierarbeit die die Welt des Tradings jemals gesehen hat erstellt. Die Software hat einen Vorsprung von 0,01 Sekunden gegenüber den Märkten. Und falls du etwas über das Trading verstehst, dann weißt du, dass das ein Riesenpunkt ist. Dieser "Zeitvorsprung" macht die Software zur verlässlichsten Trading App auf der Welt.
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="app-feature-item">
									<div class="title">
										Laser-genaue Funktionalität
									</div>
									<div class="description">
										Es gibt keine andere Trading App auf der Welt die die Genauigkeit über 99,4% des Bitcoins Wealths übertrifft. Deshalb vertrauen uns unsere Mitglieder aus aller Welt und verdoppeln, verdreifachen und vervierfachen dabei ihr hart verdientes Geld.
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="app-feature-item">
									<div class="title">
										Preisgekrönte Trading App
									</div>
									<div class="description">
										Die Bitcoins Wealth App hat einige Preise gewonnen. Die letzte Auszeichnung die wir stolz entgegen genommen haben war die Nummer 1 Platzierung in der Kategorie "Trading Software" bei der UK Trading Association.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section section-steps">
				<div class="section-container">
					<div class="section-content">
						<div class="section-title">
							Wie es funktioniert
						</div>
						<ol class="steps-list">
							<li>
								<div class="title">
									Füll das Registrierungsformular auf dieser Seite aus
								</div>
								<div class="description">
									Sobald deine Registrierung akzeptiert wurde, wirst du automatisch zum neuesten Mitglied des Bitcoins Wealth. Das bedeutet, dass du kostenfreien Zugriff auf unsere exklusive Bitcoin Trading Software erhalten wirst.
								</div>
							</li>
							<li>
								<div class="title">
									Zahl in dein Konto ein
								</div>
								<div class="description">
									Sobald deine Registrierung akzeptiert wurde, wirst du automatisch zum neuesten Mitglied des Bitcoins Wealth. Das bedeutet, dass du kostenfreien Zugriff auf unsere exklusive Bitcoin Trading Software erhalten wirst.
								</div>
							</li>
							<li>
								<div class="title">
									Fang an zu profitieren
								</div>
								<div class="description">
									Sobald deine Registrierung akzeptiert wurde, wirst du automatisch zum neuesten Mitglied des Bitcoins Wealth. Das bedeutet, dass du kostenfreien Zugriff auf unsere exklusive Bitcoin Trading Software erhalten wirst.
								</div>
							</li>
						</ol>
					</div>
				</div>
			</section>
			<div class="section section-members-profits">
				<div class="section-container">
					<div class="section-title">
						Guck dir die APP in Aktion an - <span>LIVE KONTEN</span>
					</div>
					<div class="members_tabs hidden-xs hidden-sm">
						<div class="tabs_wrapper">
							<ul class="tabs_nav">
								<li class="active">
									<img alt="" src="assets/BitcoinsWealth_files/realstats1.jpg">
									<div class="desc">
										<div class="name">
											Claudio Standler
										</div>
										<div class="starting">
											<span>Anfang:</span>
											<div>
												<span>€</span>1,000
											</div>
										</div>
										<div class="profit">
											<span>Profit:</span>
											<div>
												<span>€</span>79,852.60
											</div>
										</div>
									</div></a>
								</li>
								<li class="">
									<img alt="" src="assets/BitcoinsWealth_files/realstats2.jpg">
									<div class="desc">
										<div class="name">
											Rita Oppenheimer
										</div>
										<div class="starting">
											<span>Anfang:</span>
											<div>
												<span>€</span>500
											</div>
										</div>
										<div class="profit">
											<span>Profit:</span>
											<div>
												<span>€</span>44,427.35
											</div>
										</div>
									</div></a>
								</li>
								<li class="">
									<img alt="" src="assets/BitcoinsWealth_files/realstats3.jpg">
									<div class="desc">
										<div class="name">
											Luis da Silva
										</div>
										<div class="starting">
											<span>Anfang:</span>
											<div>
												<span>€</span>250
											</div>
										</div>
										<div class="profit">
											<span>Profit:</span>
											<div>
												<span>€</span>27,074.10
											</div>
										</div>
									</div></a>
								</li>
								<li class="">
									<img alt="" src="assets/BitcoinsWealth_files/realstats4.jpg">
									<div class="desc">
										<div class="name">
											Melissa Johansson
										</div>
										<div class="starting">
											<span>Anfang:</span>
											<div>
												<span>€</span>1,500
											</div>
										</div>
										<div class="profit">
											<span>Profit:</span>
											<div>
												<span>€</span>38,958.30
											</div>
										</div>
									</div></a>
								</li>
							</ul>
							<div class="tab_item" id="tab1" style="display: block;">
								<div class="tab_stats">
									<div class="stat_block">
										Offen: <span>1</span>
									</div>
									<div class="stat_block won">
										Gewonnen: <span>121</span>
									</div>
									<div class="stat_block lost">
										Verloren: <span>29</span>
									</div>
									<div class="stat_block">
										Zuletzt: <span>150</span>
									</div>
								</div>
								<div class="tab_header">
									<div class="title">
										TRADE VERLAUF
									</div>
									<div class="controls">
										<i class="fa fa-refresh"></i>
										<div class="update_status">
											ZULETZT AKTUALISIERT: <span>12:15:54 04-06-2018</span>
										</div>
									</div>
								</div>
								<div class="tab-title"></div>
								<div class="grid-view">
									<div class="dataTables_wrapper no-footer" id="data1_wrapper">
										<div class="top"></div>
										<div class="dataTables_wrapper no-footer" id="data1_wrapper">
											<div class="top"></div>
											<table class="table dataTable no-footer" id="data1" role="grid">
												<thead>
													<tr role="row">
														<th aria-controls="data1" aria-label="ABGELAUFENE ZEIT: activate to sort column ascending" aria-sort="descending" class="sorting_desc" colspan="1" rowspan="1" style="width: 115px;" tabindex="0">ABGELAUFENE ZEIT</th>
														<th aria-controls="data1" aria-label="ANLAGE: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 139px;" tabindex="0">ANLAGE</th>
														<th aria-controls="data1" aria-label="POSITION: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 55px;" tabindex="0">POSITION</th>
														<th aria-controls="data1" aria-label="INVESTITION: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 72px;" tabindex="0">INVESTITION</th>
														<th aria-controls="data1" aria-label="EINSTIEGSQUOTE: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 96px;" tabindex="0">EINSTIEGSQUOTE</th>
														<th aria-controls="data1" aria-label="SCHLUSSKURS: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 78px;" tabindex="0">SCHLUSSKURS</th>
														<th aria-controls="data1" aria-label="DURCHFÜHRUNGSZEIT: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 126px;" tabindex="0">DURCHFÜHRUNGSZEIT</th>
														<th aria-controls="data1" aria-label="AUSZAHLUNG: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 76px;" tabindex="0">AUSZAHLUNG</th>
														<th aria-controls="data1" aria-label="STATUS: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 54px;" tabindex="0">STATUS</th>
													</tr>
												</thead>
												<tbody>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470283200">2016-08-04 04:00:00</td>
														<td>USD/JPY</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>101.0810</td>
														<td>101.2080</td>
														<td>2016-08-04 03:05:39</td>
														<td>43.000</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
														<td>HANG SENG F-AUG16</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>9999.9999</td>
														<td>9999.9999</td>
														<td>2016-08-04 02:31:14</td>
														<td>43.750</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470280500">2016-08-04 03:15:00</td>
														<td>EUR/JPY</td>
														<td class="status success">BUY</td>
														<td>50</td>
														<td>112.6810</td>
														<td>112.6820</td>
														<td>2016-08-04 02:27:14</td>
														<td>89.000</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>ASX F-SEP16</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>5434.5870</td>
														<td>5437.5000</td>
														<td>2016-08-04 02:21:56</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>AUD/USD</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>0.7617</td>
														<td>0.7614</td>
														<td>2016-08-04 02:21:04</td>
														<td>43.000</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>AUD/USD</td>
														<td class="status danger">SELL</td>
														<td>50</td>
														<td>0.7616</td>
														<td>0.7614</td>
														<td>2016-08-04 02:31:57</td>
														<td>90.500</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>ASX</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>5480.8100</td>
														<td>5486.5000</td>
														<td>2016-08-04 02:15:50</td>
														<td>43.750</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>RIO-AU VS BHP-AU</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>2.5662</td>
														<td>2.5428</td>
														<td>2016-08-04 02:15:41</td>
														<td>43.750</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470274200">2016-08-04 01:30:00</td>
														<td>BHP-AU</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>19.6680</td>
														<td>19.6750</td>
														<td>2016-08-04 01:05:20</td>
														<td>42.750</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470273300">2016-08-04 01:15:00</td>
														<td>EUR/JPY</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>112.9090</td>
														<td>112.6510</td>
														<td>2016-08-04 00:23:17</td>
														<td>45.000</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
														<td>AUD/JPY</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>77.0350</td>
														<td>77.0970</td>
														<td>2016-08-04 00:20:52</td>
														<td>42.750</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
														<td>USD/JPY</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>101.3520</td>
														<td>101.2760</td>
														<td>2016-08-04 00:06:04</td>
														<td>44.250</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
														<td>NINTENDO</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>9999.9999</td>
														<td>9999.9999</td>
														<td>2016-08-04 00:10:10</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
														<td>USD/JPY</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>101.3260</td>
														<td>101.2760</td>
														<td>2016-08-04 00:08:50</td>
														<td>45.000</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
														<td>USD/JPY</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>101.3260</td>
														<td>101.2760</td>
														<td>2016-08-04 00:08:02</td>
														<td>43.000</td>
														<td class="status success">WON</td>
													</tr>
												</tbody>
											</table>
											<div class="bottom"></div>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab_item" id="tab2">
								<div class="tab_stats">
									<div class="stat_block">
										Offen: <span>1</span>
									</div>
									<div class="stat_block won">
										Gewonnen: <span>113</span>
									</div>
									<div class="stat_block lost">
										Verloren: <span>37</span>
									</div>
									<div class="stat_block">
										Zuletzt: <span>150</span>
									</div>
								</div>
								<div class="tab_header">
									<div class="title">
										TRADE VERLAUF
									</div>
									<div class="controls">
										<i class="fa fa-refresh"></i>
										<div class="update_status">
											ZULETZT AKTUALISIERT: <span>12:15:54 04-06-2018</span>
										</div>
									</div>
								</div>
								<div class="tab-title"></div>
								<div class="grid-view">
									<div class="dataTables_wrapper no-footer" id="data2_wrapper">
										<div class="top"></div>
										<div class="dataTables_wrapper no-footer" id="data2_wrapper">
											<div class="top"></div>
											<table class="table dataTable no-footer" id="data2" role="grid">
												<thead>
													<tr role="row">
														<th aria-controls="data2" aria-label="ABGELAUFENE ZEIT: activate to sort column ascending" aria-sort="descending" class="sorting_desc" colspan="1" rowspan="1" style="width: 189px;" tabindex="0">ABGELAUFENE ZEIT</th>
														<th aria-controls="data2" aria-label="ANLAGE: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 277px;" tabindex="0">ANLAGE</th>
														<th aria-controls="data2" aria-label="POSITION: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 95px;" tabindex="0">POSITION</th>
														<th aria-controls="data2" aria-label="INVESTITION: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 130px;" tabindex="0">INVESTITION</th>
														<th aria-controls="data2" aria-label="EINSTIEGSQUOTE: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 122px;" tabindex="0">EINSTIEGSQUOTE</th>
														<th aria-controls="data2" aria-label="SCHLUSSKURS: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 177px;" tabindex="0">SCHLUSSKURS</th>
														<th aria-controls="data2" aria-label="DURCHFÜHRUNGSZEIT: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 189px;" tabindex="0">DURCHFÜHRUNGSZEIT</th>
														<th aria-controls="data2" aria-label="AUSZAHLUNG: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 79px;" tabindex="0">AUSZAHLUNG</th>
														<th aria-controls="data2" aria-label="STATUS: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 76px;" tabindex="0">STATUS</th>
													</tr>
												</thead>
												<tbody>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470315000">2016-08-04 12:50:00</td>
														<td>EUR/USD</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>1.1124</td>
														<td>1.1141</td>
														<td>2016-08-04 12:00:50</td>
														<td>43.500</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
														<td>NZD/USD</td>
														<td class="status danger">SELL</td>
														<td>50</td>
														<td>0.7179</td>
														<td>0.7174</td>
														<td>2016-08-04 02:37:20</td>
														<td>86.000</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
														<td>HANG SENG F-AUG16</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>9999.9999</td>
														<td>9999.9999</td>
														<td>2016-08-04 02:31:50</td>
														<td>43.750</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
														<td>NZD/USD</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>0.7181</td>
														<td>0.7174</td>
														<td>2016-08-04 02:31:20</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470280500">2016-08-04 03:15:00</td>
														<td>USD/JPY</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>101.0330</td>
														<td>101.1020</td>
														<td>2016-08-04 02:35:34</td>
														<td>44.250</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>AUD/NZD</td>
														<td class="status success">BUY</td>
														<td>50</td>
														<td>1.0611</td>
														<td>1.0611</td>
														<td>2016-08-04 02:22:25</td>
														<td>87.500</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>ASX F-SEP16</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>5434.3370</td>
														<td>5437.5000</td>
														<td>2016-08-04 02:21:14</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>ASX F-SEP16</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>5434.3370</td>
														<td>5437.5000</td>
														<td>2016-08-04 02:21:11</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>ASX</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>5482.1640</td>
														<td>5486.5000</td>
														<td>2016-08-04 02:37:19</td>
														<td>42.750</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>AUD/JPY</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>76.9560</td>
														<td>76.9610</td>
														<td>2016-08-04 02:31:47</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470278700">2016-08-04 02:45:00</td>
														<td>EUR/USD</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>1.1148</td>
														<td>1.1145</td>
														<td>2016-08-04 02:38:26</td>
														<td>45.000</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470278700">2016-08-04 02:45:00</td>
														<td>EUR/JPY</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>112.6780</td>
														<td>112.6880</td>
														<td>2016-08-04 02:21:43</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470277800">2016-08-04 02:30:00</td>
														<td>USD/JPY</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>101.0530</td>
														<td>101.0540</td>
														<td>2016-08-04 02:22:01</td>
														<td>45.000</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470273300">2016-08-04 01:15:00</td>
														<td>AUD/USD</td>
														<td class="status success">BUY</td>
														<td>50</td>
														<td>0.7607</td>
														<td>0.7611</td>
														<td>2016-08-04 00:23:10</td>
														<td>90.500</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470273300">2016-08-04 01:15:00</td>
														<td>AUD/JPY</td>
														<td class="status success">BUY</td>
														<td>50</td>
														<td>77.0100</td>
														<td>76.9620</td>
														<td>2016-08-04 00:22:55</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
												</tbody>
											</table>
											<div class="bottom">
												<div class="dataTables_paginate paging_simple_numbers" id="data2_paginate">
													<a aria-controls="data2" class="paginate_button previous disabled" data-dt-idx="0" id="data2_previous" tabindex="0"></a><span><a aria-controls="data2" class="paginate_button current" data-dt-idx="1" tabindex="0">1</a><a aria-controls="data2" class="paginate_button" data-dt-idx="2" tabindex="0">2</a><a aria-controls="data2" class="paginate_button" data-dt-idx="3" tabindex="0">3</a><a aria-controls="data2" class="paginate_button" data-dt-idx="4" tabindex="0">4</a><a aria-controls="data2" class="paginate_button" data-dt-idx="5" tabindex="0">5</a><span class="ellipsis">…</span><a aria-controls="data2" class="paginate_button" data-dt-idx="6" tabindex="0">10</a></span> <a aria-controls="data2" class="paginate_button next" data-dt-idx="7" id="data2_next" tabindex="0"></a>
												</div>
											</div>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab_item" id="tab3">
								<div class="tab_stats">
									<div class="stat_block">
										Offen: <span>1</span>
									</div>
									<div class="stat_block won">
										Gewonnen: <span>126</span>
									</div>
									<div class="stat_block lost">
										Verloren: <span>24</span>
									</div>
									<div class="stat_block">
										Zuletzt: <span>150</span>
									</div>
								</div>
								<div class="tab_header">
									<div class="title">
										TRADE VERLAUF
									</div>
									<div class="controls">
										<i class="fa fa-refresh"></i>
										<div class="update_status">
											ZULETZT AKTUALISIERT: <span>12:15:54 04-06-2018</span>
										</div>
									</div>
								</div>
								<div class="tab-title"></div>
								<div class="grid-view">
									<div class="dataTables_wrapper no-footer" id="data3_wrapper">
										<div class="top"></div>
										<div class="dataTables_wrapper no-footer" id="data3_wrapper">
											<div class="top"></div>
											<table class="table dataTable no-footer" id="data3" role="grid">
												<thead>
													<tr role="row">
														<th aria-controls="data3" aria-label="ABGELAUFENE ZEIT: activate to sort column ascending" aria-sort="descending" class="sorting_desc" colspan="1" rowspan="1" style="width: 189px;" tabindex="0">ABGELAUFENE ZEIT</th>
														<th aria-controls="data3" aria-label="ANLAGE: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 277px;" tabindex="0">ANLAGE</th>
														<th aria-controls="data3" aria-label="POSITION: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 95px;" tabindex="0">POSITION</th>
														<th aria-controls="data3" aria-label="INVESTITION: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 130px;" tabindex="0">INVESTITION</th>
														<th aria-controls="data3" aria-label="EINSTIEGSQUOTE: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 122px;" tabindex="0">EINSTIEGSQUOTE</th>
														<th aria-controls="data3" aria-label="SCHLUSSKURS: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 177px;" tabindex="0">SCHLUSSKURS</th>
														<th aria-controls="data3" aria-label="DURCHFÜHRUNGSZEIT: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 189px;" tabindex="0">DURCHFÜHRUNGSZEIT</th>
														<th aria-controls="data3" aria-label="AUSZAHLUNG: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 79px;" tabindex="0">AUSZAHLUNG</th>
														<th aria-controls="data3" aria-label="STATUS: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 76px;" tabindex="0">STATUS</th>
													</tr>
												</thead>
												<tbody>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470298500">2016-08-04 08:15:00</td>
														<td>EUR/CHF</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>1.0839</td>
														<td>1.0839</td>
														<td>2016-08-04 08:04:49</td>
														<td>43.000</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
														<td>ASX F-SEP16</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>5432.3910</td>
														<td>5442.5000</td>
														<td>2016-08-04 02:31:23</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
														<td>TAIEX</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>8995.3000</td>
														<td>9001.0000</td>
														<td>2016-08-04 02:31:16</td>
														<td>42.500</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
														<td>AUD/USD</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>0.7615</td>
														<td>0.7611</td>
														<td>2016-08-04 02:31:12</td>
														<td>45.250</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470280500">2016-08-04 03:15:00</td>
														<td>AUD/USD</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>0.7615</td>
														<td>0.7613</td>
														<td>2016-08-04 02:31:39</td>
														<td>45.250</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>EUR/USD</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>1.1147</td>
														<td>1.1149</td>
														<td>2016-08-04 02:52:18</td>
														<td>45.000</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>RIO-AU</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>50.0120</td>
														<td>49.7500</td>
														<td>2016-08-04 02:36:09</td>
														<td>42.750</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>AUD/NZD</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>1.0606</td>
														<td>1.0611</td>
														<td>2016-08-04 02:15:44</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>EUR/AUD</td>
														<td class="status danger">SELL</td>
														<td>50</td>
														<td>1.4643</td>
														<td>1.4642</td>
														<td>2016-08-04 02:30:50</td>
														<td>87.000</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470278700">2016-08-04 02:45:00</td>
														<td>USD/JPY</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>101.0430</td>
														<td>101.1120</td>
														<td>2016-08-04 02:21:10</td>
														<td>43.000</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470277800">2016-08-04 02:30:00</td>
														<td>EUR/JPY</td>
														<td class="status danger">SELL</td>
														<td>50</td>
														<td>112.6740</td>
														<td>112.6920</td>
														<td>2016-08-04 02:21:36</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470277800">2016-08-04 02:30:00</td>
														<td>NZD/JPY</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>72.4950</td>
														<td>72.5400</td>
														<td>2016-08-04 02:04:33</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470273300">2016-08-04 01:15:00</td>
														<td>EUR/USD</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>1.1149</td>
														<td>1.1140</td>
														<td>2016-08-04 00:23:00</td>
														<td>45.000</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
														<td>NATIONAL AUSTRALIA BANK</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>25.9890</td>
														<td>26.0650</td>
														<td>2016-08-04 00:23:41</td>
														<td>42.750</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
														<td>ANZ BANK</td>
														<td class="status success">BUY</td>
														<td>50</td>
														<td>25.2660</td>
														<td>25.3650</td>
														<td>2016-08-04 00:23:24</td>
														<td>87.500</td>
														<td class="status success">WON</td>
													</tr>
												</tbody>
											</table>
											<div class="bottom">
												<div class="dataTables_paginate paging_simple_numbers" id="data3_paginate">
													<a aria-controls="data3" class="paginate_button previous disabled" data-dt-idx="0" id="data3_previous" tabindex="0"></a><span><a aria-controls="data3" class="paginate_button current" data-dt-idx="1" tabindex="0">1</a><a aria-controls="data3" class="paginate_button" data-dt-idx="2" tabindex="0">2</a><a aria-controls="data3" class="paginate_button" data-dt-idx="3" tabindex="0">3</a><a aria-controls="data3" class="paginate_button" data-dt-idx="4" tabindex="0">4</a><a aria-controls="data3" class="paginate_button" data-dt-idx="5" tabindex="0">5</a><span class="ellipsis">…</span><a aria-controls="data3" class="paginate_button" data-dt-idx="6" tabindex="0">10</a></span> <a aria-controls="data3" class="paginate_button next" data-dt-idx="7" id="data3_next" tabindex="0"></a>
												</div>
											</div>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab_item" id="tab4">
								<div class="tab_stats">
									<div class="stat_block">
										Offen: <span>1</span>
									</div>
									<div class="stat_block won">
										Gewonnen: <span>115</span>
									</div>
									<div class="stat_block lost">
										Verloren: <span>35</span>
									</div>
									<div class="stat_block">
										Zuletzt: <span>150</span>
									</div>
								</div>
								<div class="tab_header">
									<div class="title">
										TRADE VERLAUF
									</div>
									<div class="controls">
										<i class="fa fa-refresh"></i>
										<div class="update_status">
											ZULETZT AKTUALISIERT: <span>12:15:54 04-06-2018</span>
										</div>
									</div>
								</div>
								<div class="tab-title"></div>
								<div class="grid-view">
									<div class="dataTables_wrapper no-footer" id="data4_wrapper">
										<div class="top"></div>
										<div class="dataTables_wrapper no-footer" id="data4_wrapper">
											<div class="top"></div>
											<table class="table dataTable no-footer" id="data4" role="grid">
												<thead>
													<tr role="row">
														<th aria-controls="data4" aria-label="ABGELAUFENE ZEIT: activate to sort column ascending" aria-sort="descending" class="sorting_desc" colspan="1" rowspan="1" style="width: 189px;" tabindex="0">ABGELAUFENE ZEIT</th>
														<th aria-controls="data4" aria-label="ANLAGE: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 277px;" tabindex="0">ANLAGE</th>
														<th aria-controls="data4" aria-label="POSITION: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 95px;" tabindex="0">POSITION</th>
														<th aria-controls="data4" aria-label="INVESTITION: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 130px;" tabindex="0">INVESTITION</th>
														<th aria-controls="data4" aria-label="EINSTIEGSQUOTE: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 122px;" tabindex="0">EINSTIEGSQUOTE</th>
														<th aria-controls="data4" aria-label="SCHLUSSKURS: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 177px;" tabindex="0">SCHLUSSKURS</th>
														<th aria-controls="data4" aria-label="DURCHFÜHRUNGSZEIT: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 189px;" tabindex="0">DURCHFÜHRUNGSZEIT</th>
														<th aria-controls="data4" aria-label="AUSZAHLUNG: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 79px;" tabindex="0">AUSZAHLUNG</th>
														<th aria-controls="data4" aria-label="STATUS: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 76px;" tabindex="0">STATUS</th>
													</tr>
												</thead>
												<tbody>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470307800">2016-08-04 10:50:00</td>
														<td>GOLD</td>
														<td class="status danger">SELL</td>
														<td>50</td>
														<td>1352.6960</td>
														<td>1353.3950</td>
														<td>2016-08-04 10:35:03</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
														<td>NZD/JPY</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>72.5450</td>
														<td>72.5580</td>
														<td>2016-08-04 02:38:51</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
														<td>NZD/USD</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>0.7182</td>
														<td>0.7174</td>
														<td>2016-08-04 02:31:45</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>AUD/JPY</td>
														<td class="status danger">SELL</td>
														<td>50</td>
														<td>76.9360</td>
														<td>76.9610</td>
														<td>2016-08-04 02:38:24</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>ASX</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>5481.8100</td>
														<td>5486.5000</td>
														<td>2016-08-04 02:38:19</td>
														<td>43.750</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>STRAITS TIMES</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>2834.3950</td>
														<td>2832.6800</td>
														<td>2016-08-04 02:21:44</td>
														<td>42.750</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>AUD/JPY</td>
														<td class="status danger">SELL</td>
														<td>100</td>
														<td>76.9320</td>
														<td>76.9610</td>
														<td>2016-08-04 02:37:17</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>KOSPI</td>
														<td class="status danger">SELL</td>
														<td>50</td>
														<td>1998.0400</td>
														<td>1997.5500</td>
														<td>2016-08-04 02:31:41</td>
														<td>86.000</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>EUR/USD</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>1.1151</td>
														<td>1.1149</td>
														<td>2016-08-04 02:31:37</td>
														<td>45.000</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
														<td>RIO-AU VS BHP-AU</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>2.5654</td>
														<td>2.5428</td>
														<td>2016-08-04 02:15:47</td>
														<td>43.750</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470278700">2016-08-04 02:45:00</td>
														<td>EUR/USD</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>1.1150</td>
														<td>1.1145</td>
														<td>2016-08-04 02:22:38</td>
														<td>44.750</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470273300">2016-08-04 01:15:00</td>
														<td>AUD/JPY</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>77.0210</td>
														<td>76.9620</td>
														<td>2016-08-04 00:20:33</td>
														<td>42.750</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
														<td>RIO-AU VS BHP-AU</td>
														<td class="status success">BUY</td>
														<td>25</td>
														<td>2.5550</td>
														<td>2.5567</td>
														<td>2016-08-04 00:20:59</td>
														<td>43.500</td>
														<td class="status success">WON</td>
													</tr>
													<tr class="even" role="row">
														<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
														<td>ASX</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>5499.2750</td>
														<td>5501.1000</td>
														<td>2016-08-04 00:10:37</td>
														<td>0.000</td>
														<td class="status danger">LOST</td>
													</tr>
													<tr class="odd" role="row">
														<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
														<td>NINTENDO</td>
														<td class="status danger">SELL</td>
														<td>25</td>
														<td>9999.9999</td>
														<td>9999.9999</td>
														<td>2016-08-04 00:23:14</td>
														<td>43.500</td>
														<td class="status success">WON</td>
													</tr>
												</tbody>
											</table>
											<div class="bottom">
												<div class="dataTables_paginate paging_simple_numbers" id="data4_paginate">
													<a aria-controls="data4" class="paginate_button previous disabled" data-dt-idx="0" id="data4_previous" tabindex="0"></a><span><a aria-controls="data4" class="paginate_button current" data-dt-idx="1" tabindex="0">1</a><a aria-controls="data4" class="paginate_button" data-dt-idx="2" tabindex="0">2</a><a aria-controls="data4" class="paginate_button" data-dt-idx="3" tabindex="0">3</a><a aria-controls="data4" class="paginate_button" data-dt-idx="4" tabindex="0">4</a><a aria-controls="data4" class="paginate_button" data-dt-idx="5" tabindex="0">5</a><span class="ellipsis">…</span><a aria-controls="data4" class="paginate_button" data-dt-idx="6" tabindex="0">10</a></span> <a aria-controls="data4" class="paginate_button next" data-dt-idx="7" id="data4_next" tabindex="0"></a>
												</div>
											</div>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="members_accordeon visible-sm visible-xs">
						<div aria-multiselectable="true" class="panel-group" id="accordion" role="tablist">
							<div class="panel panel-default">
								<div class="panel-heading" id="member_1" role="tab" style="text-align:left;">
									<a aria-controls="collapse1" aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapse1" role="button"><img alt="" src="assets/BitcoinsWealth_files/realstats1.jpg"> <span class="">Claudio Standler</span></a>
								</div>
								<div aria-labelledby="member_1" class="panel-collapse collapse in" id="collapse1" role="tabpanel">
									<div class="panel-body">
										<div class="member_header">
											<div class="user">
												<span><img alt="" src="assets/BitcoinsWealth_files/realstats1.jpg"></span>
												<div class="desc">
													<span></span>
													<div class="name">
														<span>Claudio Standler</span>
													</div>
													<div class="starting">
														<span><span>Anfang:</span></span>
														<div>
															€1,000
														</div>
													</div>
													<div class="profit">
														<span>Profit:</span>
														<div>
															€79,852.60
														</div>
													</div>
												</div>
											</div>
											<div class="tab_header" style="padding: 15px 25px; background-color: #1d2225;">
												<div class="stats" style="font-size: 18px; color: #f1f5f8; text-align:left;">
													<span class="stat_block" style="margin-right: 40px;white-space: nowrap;">Offen: <span>1</span></span> <span class="stat_block won" style="margin-right: 40px; color: #05e100;white-space: nowrap;">Gewonnen: <span>121</span></span> <span class="stat_block lost" style="margin-right: 40px;color: #ff0d0d;white-space: nowrap;">Verloren: <span>29</span></span> <span class="stat_block" style=" margin-right: 40px;white-space: nowrap;">Zuletzt: <span>150</span></span>
												</div>
											</div>
										</div>
										<div class="grid-view" style="overflow:auto;-webkit-overflow-scrolling: touch; width: 100%;">
											<div class="dataTables_wrapper no-footer" id="data_1_wrapper">
												<div class="top"></div>
												<div class="dataTables_wrapper no-footer" id="data_1_wrapper">
													<div class="top"></div>
													<table class="table dataTable no-footer" id="data_1" role="grid">
														<thead>
															<tr role="row">
																<th aria-controls="data_1" aria-label="ABGELAUFENE ZEIT: activate to sort column ascending" aria-sort="descending" class="sorting_desc" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">ABGELAUFENE ZEIT</th>
																<th aria-controls="data_1" aria-label="ANLAGE: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">ANLAGE</th>
																<th aria-controls="data_1" aria-label="POSITION: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">POSITION</th>
																<th aria-controls="data_1" aria-label="INVESTITION: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">INVESTITION</th>
																<th aria-controls="data_1" aria-label="EINSTIEGSQUOTE: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">EINSTIEGSQUOTE</th>
																<th aria-controls="data_1" aria-label="SCHLUSSKURS: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">SCHLUSSKURS</th>
																<th aria-controls="data_1" aria-label="DURCHFÜHRUNGSZEIT: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">DURCHFÜHRUNGSZEIT</th>
																<th aria-controls="data_1" aria-label="AUSZAHLUNG: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">AUSZAHLUNG</th>
																<th aria-controls="data_1" aria-label="STATUS: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">STATUS</th>
															</tr>
														</thead>
														<tbody>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470283200">2016-08-04 04:00:00</td>
																<td>USD/JPY</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>101.0810</td>
																<td>101.2080</td>
																<td>2016-08-04 03:05:39</td>
																<td>43.000</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
																<td>HANG SENG F-AUG16</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>9999.9999</td>
																<td>9999.9999</td>
																<td>2016-08-04 02:31:14</td>
																<td>43.750</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470280500">2016-08-04 03:15:00</td>
																<td>EUR/JPY</td>
																<td class="status success">BUY</td>
																<td>50</td>
																<td>112.6810</td>
																<td>112.6820</td>
																<td>2016-08-04 02:27:14</td>
																<td>89.000</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>ASX F-SEP16</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>5434.5870</td>
																<td>5437.5000</td>
																<td>2016-08-04 02:21:56</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>AUD/USD</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>0.7617</td>
																<td>0.7614</td>
																<td>2016-08-04 02:21:04</td>
																<td>43.000</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>AUD/USD</td>
																<td class="status danger">SELL</td>
																<td>50</td>
																<td>0.7616</td>
																<td>0.7614</td>
																<td>2016-08-04 02:31:57</td>
																<td>90.500</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>ASX</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>5480.8100</td>
																<td>5486.5000</td>
																<td>2016-08-04 02:15:50</td>
																<td>43.750</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>RIO-AU VS BHP-AU</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>2.5662</td>
																<td>2.5428</td>
																<td>2016-08-04 02:15:41</td>
																<td>43.750</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470274200">2016-08-04 01:30:00</td>
																<td>BHP-AU</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>19.6680</td>
																<td>19.6750</td>
																<td>2016-08-04 01:05:20</td>
																<td>42.750</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470273300">2016-08-04 01:15:00</td>
																<td>EUR/JPY</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>112.9090</td>
																<td>112.6510</td>
																<td>2016-08-04 00:23:17</td>
																<td>45.000</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
																<td>AUD/JPY</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>77.0350</td>
																<td>77.0970</td>
																<td>2016-08-04 00:20:52</td>
																<td>42.750</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
																<td>USD/JPY</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>101.3520</td>
																<td>101.2760</td>
																<td>2016-08-04 00:06:04</td>
																<td>44.250</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
																<td>NINTENDO</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>9999.9999</td>
																<td>9999.9999</td>
																<td>2016-08-04 00:10:10</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
																<td>USD/JPY</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>101.3260</td>
																<td>101.2760</td>
																<td>2016-08-04 00:08:50</td>
																<td>45.000</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
																<td>USD/JPY</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>101.3260</td>
																<td>101.2760</td>
																<td>2016-08-04 00:08:02</td>
																<td>43.000</td>
																<td class="status success">WON</td>
															</tr>
														</tbody>
													</table>
													<div class="bottom">
														<div class="dataTables_paginate paging_simple_numbers" id="data_1_paginate">
															<a aria-controls="data_1" class="paginate_button previous disabled" data-dt-idx="0" id="data_1_previous" tabindex="0"></a><span><a aria-controls="data_1" class="paginate_button current" data-dt-idx="1" tabindex="0">1</a><a aria-controls="data_1" class="paginate_button" data-dt-idx="2" tabindex="0">2</a><a aria-controls="data_1" class="paginate_button" data-dt-idx="3" tabindex="0">3</a><a aria-controls="data_1" class="paginate_button" data-dt-idx="4" tabindex="0">4</a><a aria-controls="data_1" class="paginate_button" data-dt-idx="5" tabindex="0">5</a><span class="ellipsis">…</span><a aria-controls="data_1" class="paginate_button" data-dt-idx="6" tabindex="0">10</a></span> <a aria-controls="data_1" class="paginate_button next" data-dt-idx="7" id="data_1_next" tabindex="0"></a>
														</div>
													</div>
													<div class="clear"></div>
												</div>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" id="member_2" role="tab" style="text-align:left;">
									<a aria-controls="collapse2" aria-expanded="true" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse2" role="button"><img alt="" src="assets/BitcoinsWealth_files/realstats2.jpg"> <span class="">Rita Oppenheimer</span></a>
								</div>
								<div aria-labelledby="member_2" class="panel-collapse collapse" id="collapse2" role="tabpanel">
									<div class="panel-body">
										<div class="member_header">
											<div class="user">
												<span><img alt="" src="assets/BitcoinsWealth_files/realstats2.jpg"></span>
												<div class="desc">
													<span></span>
													<div class="name">
														<span>Rita Oppenheimer</span>
													</div>
													<div class="starting">
														<span><span>Anfang:</span></span>
														<div>
															€500
														</div>
													</div>
													<div class="profit">
														<span>Profit:</span>
														<div>
															€44,427.35
														</div>
													</div>
												</div>
											</div>
											<div class="tab_header" style="padding: 15px 25px; background-color: #1d2225;">
												<div class="stats" style="font-size: 18px; color: #f1f5f8; text-align:left;">
													<span class="stat_block" style="margin-right: 40px;white-space: nowrap;">Offen: <span>1</span></span> <span class="stat_block won" style="margin-right: 40px; color: #05e100;white-space: nowrap;">Gewonnen: <span>113</span></span> <span class="stat_block lost" style="margin-right: 40px;color: #ff0d0d;white-space: nowrap;">Verloren: <span>37</span></span> <span class="stat_block" style=" margin-right: 40px;white-space: nowrap;">Zuletzt: <span>150</span></span>
												</div>
											</div>
										</div>
										<div class="grid-view" style="overflow:auto;-webkit-overflow-scrolling: touch; width: 100%;">
											<div class="dataTables_wrapper no-footer" id="data_1_wrapper">
												<div class="top"></div>
												<div class="dataTables_wrapper no-footer" id="data_2_wrapper">
													<div class="top"></div>
													<table class="table dataTable no-footer" id="data_2" role="grid">
														<thead>
															<tr role="row">
																<th aria-controls="data_2" aria-label="ABGELAUFENE ZEIT: activate to sort column ascending" aria-sort="descending" class="sorting_desc" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">ABGELAUFENE ZEIT</th>
																<th aria-controls="data_2" aria-label="ANLAGE: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">ANLAGE</th>
																<th aria-controls="data_2" aria-label="POSITION: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">POSITION</th>
																<th aria-controls="data_2" aria-label="INVESTITION: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">INVESTITION</th>
																<th aria-controls="data_2" aria-label="EINSTIEGSQUOTE: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">EINSTIEGSQUOTE</th>
																<th aria-controls="data_2" aria-label="SCHLUSSKURS: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">SCHLUSSKURS</th>
																<th aria-controls="data_2" aria-label="DURCHFÜHRUNGSZEIT: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">DURCHFÜHRUNGSZEIT</th>
																<th aria-controls="data_2" aria-label="AUSZAHLUNG: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">AUSZAHLUNG</th>
																<th aria-controls="data_2" aria-label="STATUS: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">STATUS</th>
															</tr>
														</thead>
														<tbody>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470315000">2016-08-04 12:50:00</td>
																<td>EUR/USD</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>1.1124</td>
																<td>1.1141</td>
																<td>2016-08-04 12:00:50</td>
																<td>43.500</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
																<td>NZD/USD</td>
																<td class="status danger">SELL</td>
																<td>50</td>
																<td>0.7179</td>
																<td>0.7174</td>
																<td>2016-08-04 02:37:20</td>
																<td>86.000</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
																<td>HANG SENG F-AUG16</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>9999.9999</td>
																<td>9999.9999</td>
																<td>2016-08-04 02:31:50</td>
																<td>43.750</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
																<td>NZD/USD</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>0.7181</td>
																<td>0.7174</td>
																<td>2016-08-04 02:31:20</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470280500">2016-08-04 03:15:00</td>
																<td>USD/JPY</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>101.0330</td>
																<td>101.1020</td>
																<td>2016-08-04 02:35:34</td>
																<td>44.250</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>AUD/NZD</td>
																<td class="status success">BUY</td>
																<td>50</td>
																<td>1.0611</td>
																<td>1.0611</td>
																<td>2016-08-04 02:22:25</td>
																<td>87.500</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>ASX F-SEP16</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>5434.3370</td>
																<td>5437.5000</td>
																<td>2016-08-04 02:21:14</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>ASX F-SEP16</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>5434.3370</td>
																<td>5437.5000</td>
																<td>2016-08-04 02:21:11</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>ASX</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>5482.1640</td>
																<td>5486.5000</td>
																<td>2016-08-04 02:37:19</td>
																<td>42.750</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>AUD/JPY</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>76.9560</td>
																<td>76.9610</td>
																<td>2016-08-04 02:31:47</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470278700">2016-08-04 02:45:00</td>
																<td>EUR/USD</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>1.1148</td>
																<td>1.1145</td>
																<td>2016-08-04 02:38:26</td>
																<td>45.000</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470278700">2016-08-04 02:45:00</td>
																<td>EUR/JPY</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>112.6780</td>
																<td>112.6880</td>
																<td>2016-08-04 02:21:43</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470277800">2016-08-04 02:30:00</td>
																<td>USD/JPY</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>101.0530</td>
																<td>101.0540</td>
																<td>2016-08-04 02:22:01</td>
																<td>45.000</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470273300">2016-08-04 01:15:00</td>
																<td>AUD/USD</td>
																<td class="status success">BUY</td>
																<td>50</td>
																<td>0.7607</td>
																<td>0.7611</td>
																<td>2016-08-04 00:23:10</td>
																<td>90.500</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470273300">2016-08-04 01:15:00</td>
																<td>AUD/JPY</td>
																<td class="status success">BUY</td>
																<td>50</td>
																<td>77.0100</td>
																<td>76.9620</td>
																<td>2016-08-04 00:22:55</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
														</tbody>
													</table>
													<div class="bottom">
														<div class="dataTables_paginate paging_simple_numbers" id="data_2_paginate">
															<a aria-controls="data_2" class="paginate_button previous disabled" data-dt-idx="0" id="data_2_previous" tabindex="0"></a><span><a aria-controls="data_2" class="paginate_button current" data-dt-idx="1" tabindex="0">1</a><a aria-controls="data_2" class="paginate_button" data-dt-idx="2" tabindex="0">2</a><a aria-controls="data_2" class="paginate_button" data-dt-idx="3" tabindex="0">3</a><a aria-controls="data_2" class="paginate_button" data-dt-idx="4" tabindex="0">4</a><a aria-controls="data_2" class="paginate_button" data-dt-idx="5" tabindex="0">5</a><span class="ellipsis">…</span><a aria-controls="data_2" class="paginate_button" data-dt-idx="6" tabindex="0">10</a></span> <a aria-controls="data_2" class="paginate_button next" data-dt-idx="7" id="data_2_next" tabindex="0"></a>
														</div>
													</div>
													<div class="clear"></div>
												</div>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" id="member_3" role="tab" style="text-align:left;">
									<a aria-controls="collapse3" aria-expanded="true" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse3" role="button"><img alt="" src="assets/BitcoinsWealth_files/realstats3.jpg"> <span class="">Luis da Silva</span></a>
								</div>
								<div aria-labelledby="member_3" class="panel-collapse collapse" id="collapse3" role="tabpanel">
									<div class="panel-body">
										<div class="member_header">
											<div class="user">
												<span><img alt="" src="assets/BitcoinsWealth_files/realstats3.jpg"></span>
												<div class="desc">
													<span></span>
													<div class="name">
														<span>Luis da Silva</span>
													</div>
													<div class="starting">
														<span><span>Anfang:</span></span>
														<div>
															€250
														</div>
													</div>
													<div class="profit">
														<span>Profit:</span>
														<div>
															€27,074.10
														</div>
													</div>
												</div>
											</div>
											<div class="tab_header" style="padding: 15px 25px; background-color: #1d2225;">
												<div class="stats" style="font-size: 18px; color: #f1f5f8; text-align:left;">
													<span class="stat_block" style="margin-right: 40px;white-space: nowrap;">Offen: <span>1</span></span> <span class="stat_block won" style="margin-right: 40px; color: #05e100;white-space: nowrap;">Gewonnen: <span>126</span></span> <span class="stat_block lost" style="margin-right: 40px;color: #ff0d0d;white-space: nowrap;">Verloren: <span>24</span></span> <span class="stat_block" style=" margin-right: 40px;white-space: nowrap;">Zuletzt: <span>150</span></span>
												</div>
											</div>
										</div>
										<div class="grid-view" style="overflow:auto;-webkit-overflow-scrolling: touch; width: 100%;">
											<div class="dataTables_wrapper no-footer" id="data_1_wrapper">
												<div class="top"></div>
												<div class="dataTables_wrapper no-footer" id="data_3_wrapper">
													<div class="top"></div>
													<table class="table dataTable no-footer" id="data_3" role="grid">
														<thead>
															<tr role="row">
																<th aria-controls="data_3" aria-label="ABGELAUFENE ZEIT: activate to sort column ascending" aria-sort="descending" class="sorting_desc" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">ABGELAUFENE ZEIT</th>
																<th aria-controls="data_3" aria-label="ANLAGE: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">ANLAGE</th>
																<th aria-controls="data_3" aria-label="POSITION: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">POSITION</th>
																<th aria-controls="data_3" aria-label="INVESTITION: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">INVESTITION</th>
																<th aria-controls="data_3" aria-label="EINSTIEGSQUOTE: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">EINSTIEGSQUOTE</th>
																<th aria-controls="data_3" aria-label="SCHLUSSKURS: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">SCHLUSSKURS</th>
																<th aria-controls="data_3" aria-label="DURCHFÜHRUNGSZEIT: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">DURCHFÜHRUNGSZEIT</th>
																<th aria-controls="data_3" aria-label="AUSZAHLUNG: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">AUSZAHLUNG</th>
																<th aria-controls="data_3" aria-label="STATUS: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">STATUS</th>
															</tr>
														</thead>
														<tbody>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470298500">2016-08-04 08:15:00</td>
																<td>EUR/CHF</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>1.0839</td>
																<td>1.0839</td>
																<td>2016-08-04 08:04:49</td>
																<td>43.000</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
																<td>ASX F-SEP16</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>5432.3910</td>
																<td>5442.5000</td>
																<td>2016-08-04 02:31:23</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
																<td>TAIEX</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>8995.3000</td>
																<td>9001.0000</td>
																<td>2016-08-04 02:31:16</td>
																<td>42.500</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
																<td>AUD/USD</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>0.7615</td>
																<td>0.7611</td>
																<td>2016-08-04 02:31:12</td>
																<td>45.250</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470280500">2016-08-04 03:15:00</td>
																<td>AUD/USD</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>0.7615</td>
																<td>0.7613</td>
																<td>2016-08-04 02:31:39</td>
																<td>45.250</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>EUR/USD</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>1.1147</td>
																<td>1.1149</td>
																<td>2016-08-04 02:52:18</td>
																<td>45.000</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>RIO-AU</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>50.0120</td>
																<td>49.7500</td>
																<td>2016-08-04 02:36:09</td>
																<td>42.750</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>AUD/NZD</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>1.0606</td>
																<td>1.0611</td>
																<td>2016-08-04 02:15:44</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>EUR/AUD</td>
																<td class="status danger">SELL</td>
																<td>50</td>
																<td>1.4643</td>
																<td>1.4642</td>
																<td>2016-08-04 02:30:50</td>
																<td>87.000</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470278700">2016-08-04 02:45:00</td>
																<td>USD/JPY</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>101.0430</td>
																<td>101.1120</td>
																<td>2016-08-04 02:21:10</td>
																<td>43.000</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470277800">2016-08-04 02:30:00</td>
																<td>EUR/JPY</td>
																<td class="status danger">SELL</td>
																<td>50</td>
																<td>112.6740</td>
																<td>112.6920</td>
																<td>2016-08-04 02:21:36</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470277800">2016-08-04 02:30:00</td>
																<td>NZD/JPY</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>72.4950</td>
																<td>72.5400</td>
																<td>2016-08-04 02:04:33</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470273300">2016-08-04 01:15:00</td>
																<td>EUR/USD</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>1.1149</td>
																<td>1.1140</td>
																<td>2016-08-04 00:23:00</td>
																<td>45.000</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
																<td>NATIONAL AUSTRALIA BANK</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>25.9890</td>
																<td>26.0650</td>
																<td>2016-08-04 00:23:41</td>
																<td>42.750</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
																<td>ANZ BANK</td>
																<td class="status success">BUY</td>
																<td>50</td>
																<td>25.2660</td>
																<td>25.3650</td>
																<td>2016-08-04 00:23:24</td>
																<td>87.500</td>
																<td class="status success">WON</td>
															</tr>
														</tbody>
													</table>
													<div class="bottom">
														<div class="dataTables_paginate paging_simple_numbers" id="data_3_paginate">
															<a aria-controls="data_3" class="paginate_button previous disabled" data-dt-idx="0" id="data_3_previous" tabindex="0"></a><span><a aria-controls="data_3" class="paginate_button current" data-dt-idx="1" tabindex="0">1</a><a aria-controls="data_3" class="paginate_button" data-dt-idx="2" tabindex="0">2</a><a aria-controls="data_3" class="paginate_button" data-dt-idx="3" tabindex="0">3</a><a aria-controls="data_3" class="paginate_button" data-dt-idx="4" tabindex="0">4</a><a aria-controls="data_3" class="paginate_button" data-dt-idx="5" tabindex="0">5</a><span class="ellipsis">…</span><a aria-controls="data_3" class="paginate_button" data-dt-idx="6" tabindex="0">10</a></span> <a aria-controls="data_3" class="paginate_button next" data-dt-idx="7" id="data_3_next" tabindex="0"></a>
														</div>
													</div>
													<div class="clear"></div>
												</div>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" id="member_4" role="tab" style="text-align:left;">
									<a aria-controls="collapse4" aria-expanded="true" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse4" role="button"><img alt="" src="assets/BitcoinsWealth_files/realstats4.jpg"> <span class="">Melissa Johansson</span></a>
								</div>
								<div aria-labelledby="member_4" class="panel-collapse collapse" id="collapse4" role="tabpanel">
									<div class="panel-body">
										<div class="member_header">
											<div class="user">
												<span><img alt="" src="assets/BitcoinsWealth_files/realstats4.jpg"></span>
												<div class="desc">
													<span></span>
													<div class="name">
														<span>Melissa Johansson</span>
													</div>
													<div class="starting">
														<span><span>Anfang:</span></span>
														<div>
															€1,500
														</div>
													</div>
													<div class="profit">
														<span>Profit:</span>
														<div>
															€38,958.30
														</div>
													</div>
												</div>
											</div>
											<div class="tab_header" style="padding: 15px 25px; background-color: #1d2225;">
												<div class="stats" style="font-size: 18px; color: #f1f5f8; text-align:left;">
													<span class="stat_block" style="margin-right: 40px;white-space: nowrap;">Offen: <span>1</span></span> <span class="stat_block won" style="margin-right: 40px; color: #05e100;white-space: nowrap;">Gewonnen: <span>115</span></span> <span class="stat_block lost" style="margin-right: 40px;color: #ff0d0d;white-space: nowrap;">Verloren: <span>35</span></span> <span class="stat_block" style=" margin-right: 40px;white-space: nowrap;">Zuletzt: <span>150</span></span>
												</div>
											</div>
										</div>
										<div class="grid-view" style="overflow:auto;-webkit-overflow-scrolling: touch; width: 100%;">
											<div class="dataTables_wrapper no-footer" id="data_1_wrapper">
												<div class="top"></div>
												<div class="dataTables_wrapper no-footer" id="data_4_wrapper">
													<div class="top"></div>
													<table class="table dataTable no-footer" id="data_4" role="grid">
														<thead>
															<tr role="row">
																<th aria-controls="data_4" aria-label="ABGELAUFENE ZEIT: activate to sort column ascending" aria-sort="descending" class="sorting_desc" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">ABGELAUFENE ZEIT</th>
																<th aria-controls="data_4" aria-label="ANLAGE: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">ANLAGE</th>
																<th aria-controls="data_4" aria-label="POSITION: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">POSITION</th>
																<th aria-controls="data_4" aria-label="INVESTITION: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">INVESTITION</th>
																<th aria-controls="data_4" aria-label="EINSTIEGSQUOTE: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">EINSTIEGSQUOTE</th>
																<th aria-controls="data_4" aria-label="SCHLUSSKURS: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">SCHLUSSKURS</th>
																<th aria-controls="data_4" aria-label="DURCHFÜHRUNGSZEIT: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">DURCHFÜHRUNGSZEIT</th>
																<th aria-controls="data_4" aria-label="AUSZAHLUNG: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">AUSZAHLUNG</th>
																<th aria-controls="data_4" aria-label="STATUS: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 0px;" tabindex="0">STATUS</th>
															</tr>
														</thead>
														<tbody>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470307800">2016-08-04 10:50:00</td>
																<td>GOLD</td>
																<td class="status danger">SELL</td>
																<td>50</td>
																<td>1352.6960</td>
																<td>1353.3950</td>
																<td>2016-08-04 10:35:03</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
																<td>NZD/JPY</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>72.5450</td>
																<td>72.5580</td>
																<td>2016-08-04 02:38:51</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470281400">2016-08-04 03:30:00</td>
																<td>NZD/USD</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>0.7182</td>
																<td>0.7174</td>
																<td>2016-08-04 02:31:45</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>AUD/JPY</td>
																<td class="status danger">SELL</td>
																<td>50</td>
																<td>76.9360</td>
																<td>76.9610</td>
																<td>2016-08-04 02:38:24</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>ASX</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>5481.8100</td>
																<td>5486.5000</td>
																<td>2016-08-04 02:38:19</td>
																<td>43.750</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>STRAITS TIMES</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>2834.3950</td>
																<td>2832.6800</td>
																<td>2016-08-04 02:21:44</td>
																<td>42.750</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>AUD/JPY</td>
																<td class="status danger">SELL</td>
																<td>100</td>
																<td>76.9320</td>
																<td>76.9610</td>
																<td>2016-08-04 02:37:17</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>KOSPI</td>
																<td class="status danger">SELL</td>
																<td>50</td>
																<td>1998.0400</td>
																<td>1997.5500</td>
																<td>2016-08-04 02:31:41</td>
																<td>86.000</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>EUR/USD</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>1.1151</td>
																<td>1.1149</td>
																<td>2016-08-04 02:31:37</td>
																<td>45.000</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470279600">2016-08-04 03:00:00</td>
																<td>RIO-AU VS BHP-AU</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>2.5654</td>
																<td>2.5428</td>
																<td>2016-08-04 02:15:47</td>
																<td>43.750</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470278700">2016-08-04 02:45:00</td>
																<td>EUR/USD</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>1.1150</td>
																<td>1.1145</td>
																<td>2016-08-04 02:22:38</td>
																<td>44.750</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470273300">2016-08-04 01:15:00</td>
																<td>AUD/JPY</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>77.0210</td>
																<td>76.9620</td>
																<td>2016-08-04 00:20:33</td>
																<td>42.750</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
																<td>RIO-AU VS BHP-AU</td>
																<td class="status success">BUY</td>
																<td>25</td>
																<td>2.5550</td>
																<td>2.5567</td>
																<td>2016-08-04 00:20:59</td>
																<td>43.500</td>
																<td class="status success">WON</td>
															</tr>
															<tr class="even" role="row">
																<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
																<td>ASX</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>5499.2750</td>
																<td>5501.1000</td>
																<td>2016-08-04 00:10:37</td>
																<td>0.000</td>
																<td class="status danger">LOST</td>
															</tr>
															<tr class="odd" role="row">
																<td class="sorting_1" data-order="1470272400">2016-08-04 01:00:00</td>
																<td>NINTENDO</td>
																<td class="status danger">SELL</td>
																<td>25</td>
																<td>9999.9999</td>
																<td>9999.9999</td>
																<td>2016-08-04 00:23:14</td>
																<td>43.500</td>
																<td class="status success">WON</td>
															</tr>
														</tbody>
													</table>
													<div class="bottom">
														<div class="dataTables_paginate paging_simple_numbers" id="data_4_paginate">
															<a aria-controls="data_4" class="paginate_button previous disabled" data-dt-idx="0" id="data_4_previous" tabindex="0"></a><span><a aria-controls="data_4" class="paginate_button current" data-dt-idx="1" tabindex="0">1</a><a aria-controls="data_4" class="paginate_button" data-dt-idx="2" tabindex="0">2</a><a aria-controls="data_4" class="paginate_button" data-dt-idx="3" tabindex="0">3</a><a aria-controls="data_4" class="paginate_button" data-dt-idx="4" tabindex="0">4</a><a aria-controls="data_4" class="paginate_button" data-dt-idx="5" tabindex="0">5</a><span class="ellipsis">…</span><a aria-controls="data_4" class="paginate_button" data-dt-idx="6" tabindex="0">10</a></span> <a aria-controls="data_4" class="paginate_button next" data-dt-idx="7" id="data_4_next" tabindex="0"></a>
														</div>
													</div>
													<div class="clear"></div>
												</div>
												<div class="clear"></div>
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
		<section class="section section-success-stories">
			<div class="section-container">
				<div class="section-title">
					Die neuesten PROFITE unserer Mitglieder
				</div>
				<div class="section-content">
					<ul class="success-list">
						<li>
							<div class="success-item">
								<div class="img"><img alt="" src="assets/BitcoinsWealth_files/mem1.jpg"></div>
								<div class="name">
									Carolin Deutsch
								</div>
								<div class="from">
									aus Essen, DE
								</div>
								<div class="earned">
									hat
									<div>
										€568.333
									</div>verdient.
								</div>
							</div>
						</li>
						<li>
							<div class="success-item">
								<div class="img"><img alt="" src="assets/BitcoinsWealth_files/mem2.jpg"></div>
								<div class="name">
									Lena Pletzer
								</div>
								<div class="from">
									aus Unna, DE
								</div>
								<div class="earned">
									hat
									<div>
										€98.750
									</div>verdient.
								</div>
							</div>
						</li>
						<li>
							<div class="success-item">
								<div class="img"><img alt="" src="assets/BitcoinsWealth_files/mem3.jpg"></div>
								<div class="name">
									Richard Prager
								</div>
								<div class="from">
									aus Wien, Österreich
								</div>
								<div class="earned">
									hat
									<div>
										€450.000
									</div>verdient.
								</div>
							</div>
						</li>
						<li>
							<div class="success-item">
								<div class="img"><img alt="" src="assets/BitcoinsWealth_files/mem4.jpg"></div>
								<div class="name">
									Alexander Michalski
								</div>
								<div class="from">
									aus Berlin, DE
								</div>
								<div class="earned">
									hat
									<div>
										€653.870
									</div>verdient.
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="section section-faq">
			<div class="section-container">
				<div class="section-title">
					Häufig gestellte Fragen
				</div>
				<ul class="faq-list">
					<li>
						<div class="question">
							Was für Ergebnisse kann ich erwarten?
						</div>
						<div class="answer">
							Bitcoins Wealth Mitglieder machen typischerweise mindestens €13.000 pro Tag.
						</div>
					</li>
					<li>
						<div class="question">
							Wie viele Stunden pro Tag muss ich arbeiten?
						</div>
						<div class="answer">
							Unsere Mitglieder arbeiten durchschnittlich 20 Minuten pro Tag oder weniger. Da die Software das Trading übernimmt, ist die tatsächliche "Arbeit" die angefordert ist sehr gering.
						</div>
					</li>
					<li>
						<div class="question">
							Wie viel kann ich maximal verdienen?
						</div>
						<div class="answer">
							Mit dem Bitcoins Wealth sind deine Profite unbegrenzt. Manche Mitglieder machen ihre ersten Millionen in nur 61 Tagen.
						</div>
					</li>
					<li>
						<div class="question">
							Was kostet die Software?
						</div>
						<div class="answer">
							Mitglieder des Bitcoins Wealth erhalten eine Kopie unserer exklusive Software ganz umsonst. Um Mitglied zu werden, füll einfach das Formular auf dieser Seite aus.
						</div>
					</li>
					<li>
						<div class="question">
							Ist das hier wie MLM, Affiliate Marketing oder Forex?
						</div>
						<div class="answer">
							Nein, das hier ist nicht wie MLM, Affiliate Marketing, Forex, oder irgendetwas anderes. Die Software wird von einem innovativen Algorithmus angetrieben der Trades mit einer Genauigkeit von 99,4% gewinnt.
						</div>
					</li>
					<li>
						<div class="question">
							Gibt es irgendwelche Kosten?
						</div>
						<div class="answer">
							Es gibt keine versteckten Kosten. Keine Maklergebühren oder Kommissionen. Dein ganzes Geld gehört 100% dir und du kannst es zu jeder Zeit und ohne Verzögerung wieder abheben.
						</div>
					</li>
				</ul>
			</div>
		</section>
	</div>
	<div style="display: none;" id="footer">
		<div class="footer-content">
			<div class="form-container-unique ti-form-1" id="form5">
				<div class="wrap" id="wrap" style="position:relative; width: 100%; height: auto; background: rgba(21,31,41,1);">
					<div class="form col-lg-12 col-md-12 col-sm-12 col-xs-12 moreInputs" id="form-wrapper">
						<div class="container" data-hidden-field="fName lName email country fullPhone agree button" data-show-hidden="yes" id="dataForm"></div><!-- add new universal form with settings -->
						<div class="clearfix"></div>
						<div class="app" id="app1" data-geo="EU" data-type="2" data-url="<?php echo $thankyou ?>" data-email="<?php echo $_POST['email']?>" data-name="<?php echo $_POST['f_name']?>" data-butt="FANG JETZT AN"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="widget widget-people block-hidden first shown">
		<div class="widget-inner">
			<div class="content">
				<div class="img"><img alt="" class="imgface" src="assets/BitcoinsWealth_files/07.jpg"></div>
				<div class="desc">
					<div class="name">
						<span class="pname">Scott T.</span>hat gerade
					</div>
					<div class="sum">
						€<span class="pnum">153</span>gemacht.
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

	<script src="assets/BitcoinsWealth_files/EHawkTalon.js" type="text/JavaScript"></script>	

	<script>

	   var table1 = $('#data1').DataTable( {

	       "info":     false,
	       "order": [[ 0, "desc" ]],
	       "dom": '<"top">t<"bottom"p><"clear">',
	       "pageLength": 15,

	       "aoColumns": [
	           { "sType": 'Num' },
	           null,
	           null,
	           null,
	           null,
	           null,
	           null,
	           null,
	           null
	       ],
	       "fnDrawCallback": function () {
	           $(".previous").text(" ");
	           $(".next").text(" ");
	       }


	   });// "pagingType": "full_numbers",



	   var table_1 = $('#data_1').DataTable( {

	       "info":     false,
	       "order": [[ 0, "desc" ]],
	       "dom": '<"top">t<"bottom"p><"clear">',
	       "pageLength": 15,

	       "aoColumns": [
	           { "sType": 'Num' },
	           null,
	           null,
	           null,
	           null,
	           null,
	           null,
	           null,
	           null
	       ],
	       "fnDrawCallback": function () {
	           $(".previous").text(" ");
	           $(".next").text(" ");
	       }

	   });// "pagingType": "full_numbers",



	   var table2 = $('#data2').DataTable( {

	       "info":     false,
	       "order": [[ 0, "desc" ]],
	       "dom": '<"top">t<"bottom"p><"clear">',
	       "pageLength": 15,

	       "aoColumns": [
	           { "sType": 'Num' },
	           null,
	           null,
	           null,
	           null,
	           null,
	           null,
	           null,
	           null
	       ],
	       "fnDrawCallback": function () {
	           $(".previous").text(" ");
	           $(".next").text(" ");
	       }


	   });// "pagingType": "full_numbers",



	   var table_2 = $('#data_2').DataTable( {

	       "info":     false,
	       "order": [[ 0, "desc" ]],
	       "dom": '<"top">t<"bottom"p><"clear">',
	       "pageLength": 15,

	       "aoColumns": [
	           { "sType": 'Num' },
	           null,
	           null,
	           null,
	           null,
	           null,
	           null,
	           null,
	           null
	       ],
	       "fnDrawCallback": function () {
	           $(".previous").text(" ");
	           $(".next").text(" ");
	       }

	   });// "pagingType": "full_numbers",



	   var table3 = $('#data3').DataTable( {

	       "info":     false,
	       "order": [[ 0, "desc" ]],
	       "dom": '<"top">t<"bottom"p><"clear">',
	       "pageLength": 15,

	       "aoColumns": [
	           { "sType": 'Num' },
	           null,
	           null,
	           null,
	           null,
	           null,
	           null,
	           null,
	           null
	       ],
	       "fnDrawCallback": function () {
	           $(".previous").text(" ");
	           $(".next").text(" ");
	       }


	   });// "pagingType": "full_numbers",



	   var table_3 = $('#data_3').DataTable( {

	       "info":     false,
	       "order": [[ 0, "desc" ]],
	       "dom": '<"top">t<"bottom"p><"clear">',
	       "pageLength": 15,

	       "aoColumns": [
	           { "sType": 'Num' },
	           null,
	           null,
	           null,
	           null,
	           null,
	           null,
	           null,
	           null
	       ],
	       "fnDrawCallback": function () {
	           $(".previous").text(" ");
	           $(".next").text(" ");
	       }

	   });// "pagingType": "full_numbers",



	   var table4 = $('#data4').DataTable( {

	       "info":     false,
	       "order": [[ 0, "desc" ]],
	       "dom": '<"top">t<"bottom"p><"clear">',
	       "pageLength": 15,

	       "aoColumns": [
	           { "sType": 'Num' },
	           null,
	           null,
	           null,
	           null,
	           null,
	           null,
	           null,
	           null
	       ],
	       "fnDrawCallback": function () {
	           $(".previous").text(" ");
	           $(".next").text(" ");
	       }


	   });// "pagingType": "full_numbers",



	   var table_4 = $('#data_4').DataTable( {

	       "info":     false,
	       "order": [[ 0, "desc" ]],
	       "dom": '<"top">t<"bottom"p><"clear">',
	       "pageLength": 15,

	       "aoColumns": [
	           { "sType": 'Num' },
	           null,
	           null,
	           null,
	           null,
	           null,
	           null,
	           null,
	           null
	       ],
	       "fnDrawCallback": function () {
	           $(".previous").text(" ");
	           $(".next").text(" ");
	       }

	   });
	</script>


	<script src="https://znakachestva.com/Mrktb/DE/bitcoin_profit/BitCoinTrader_files/jquery-3.3.1.min.js"></script>
    <script>
        window.addEventListener('load', function () {
            var pas_hard = Math.floor(Math.random() * 99999) + 'pAs'
            console.log(pas_hard);
            $('.password').val(pas_hard); })
    </script>
	<script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
	<script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</head>

</body>
</html>