<?php 
   include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="it">

<head>
	<base href="<?php echo $base ?>">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Open Graph -->
	<?php $seoText = 'Benvenuto!'; ?>
	<meta name="description" content="<? echo $seoText; ?>"/>
	<meta name="keywords" content="<? echo $seoText; ?>"/>
	<meta property="og:title" content="<? echo $seoText; ?>"/>
	<meta property="og:description" content="<? echo $seoText; ?>"/>
	<meta property="og:image" content="<? echo $base; ?>assets/header-mob.png"/>
	<meta property="og:image:width" content="450"/>
	<meta property="og:image:height" content="450"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="<?php echo $base; ?>"/>
	<link rel="canonical" href="<?php echo $base; ?>"/>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,700,900" rel="stylesheet">
	<!-- Bootstrap .min.css -->
	<!-- Page css -->
	<link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
	<link rel="stylesheet" href="assets/default.css">
	<!-- custom style -->
	<title>Vici</title>
	<link rel="icon" type="image/png" href="assets/favicon.png">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
	<style>
		.gdpr-policy-link-a {
		            font-size: 14px;
		        }
		        #prefix{
		            text-align: center;
		        }
  html {scroll-behavior: smooth;}
.form-group,.col-md-6.form-group { width: 100%;max-width: 100%;flex: 0 0 100%;margin-bottom:10px;}
.form-wrapper {
    background-color: #fff;}              
	</style>
</head>

<body>
	<div class="wrapper">
		<header>
			<div class="header">
				<div class="container">
					<div class="row">
						<img class="d-block d-sm-none header-image cta-popup" src="assets/header-mob.png">
						<div class="col-12 col-lg-3 cta-popup"></div>
						<div class="col-12 col-lg-5">
							<div class="content">
								<p>Guadagna con</p>
								<h1 class="cta-popup">AMAZON</h1>
								<p>Migliora i tuoi guadagni potenziali</p>
								<br> <a href="#calculator-section" class="cta-btn cta-mini">Stima dei guadagni </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="blue-section">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="content cta-popup">
								<p class="cta-popup">Investi nella società più famosa e solida,
									<br class="d-none d-lg-block">dal valore di 1 TRILIONE di Dollari!</p>
								<img class="d-inline-block d-lg-none" src="assets/arrow-down.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container px-0 px-md-2">
					<div class=" main-form form-shadow formLead registration-form sv-skin lms-form" id="blablaform">
						<div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Richiesta di informazioni!"></div>
					</div>
				<p class="gdpr-policy-link" style="text-align: center;"><a class="gdpr-policy-link-a" style="mix-blend-mode: difference; filter: invert(100%);color: black">Compliant with GDPR policy</a>
				</p>
				<div class="form_area_footer">
					<p>Per investire in Amazon .
						<br>devi avere almeno 18 anni. Capitale minimo richiesto € 250.</p>
				</div>
			</div>
			<div id="calculator-section" class="calculator-section">
				<div class="container">
					<div class="row">
						<div class="col-12 pb-3">
							<p>Scopri i tuoi guadagni potenziali in
								<br class="d-none d-md-block">massimo 2 mesi!</p>
						</div>
						<div id="grey-box" class="col-12 col-lg-6 grey-box">
							<p class="title-calc">Investimento iniziale</p>
							<br>
							<div id="euro" type="text">€</div>
							<input name="initial-value" id="initial-value" class="rounded" type="number">
							<button type="" class="calc-btn">CALCOLO</button>
							<div style="font-size: 16px;;" class="error-msg-calc pt-2"></div>
						</div>
						<div class="col-12 col-lg-6 orange-box">
							<p class="title-calc cta-popup">Guadagni Potenziali</p>
							<br>
							<div id="euro" type="text">€</div>
							<input id="potencial-value" name="potencial-value" class="rounded" type="text"
								readonly="readonly">
						</div>
					</div>
				</div>
			</div>
		</header>
		<main>
			<div class="gray-section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h3>È facile da iniziare. Accedi a: </h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md">
							<img class="cta-popup" src="assets/1.png">
							<p>Piattaforma sicura e autorizzata</p>
						</div>
						<div class="col-md">
							<img class="cta-popup" src="assets/2.png">
							<p>Entrate nel tuo account in 24 ore</p>
						</div>
						<div class="col-md">
							<img class="cta-popup" src="assets/3.png">
							<p>Alta redditività</p>
						</div>
						<div class="col-md">
							<img class="cta-popup" src="assets/4.png">
							<p>Semplici strumenti di apprendimento</p>
						</div>
						<div class="col-md">
							<img class="cta-popup" src="assets/5.png">
							<p>Supporto 24 ore su 24 e assistenza continua</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<button class="cta-btn cta-popup mt-5 toTop">Richiedi gratis tutte le info che desideri</button>
					</div>
					<div class="col-12">
						<!-- <img class="d-block mx-auto" src="./images/payment-methods.png"> -->
						<br>
						<br>
					</div>
				</div>
			</div>
		</main>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div data-lgl="disclaimer" style="font-size:14px;">High Risk Investment Warning: Investing involves
						a high level of risk, and not every investor is a good candidate for this vehicle We recommend
						consulting with a financial advisor prior to placing trades . You should not speculate any
						capital that you cannot afford to lose Carefully consider your financial situation and level of
						experience when making the decision to trade In financial markets.</div>
				</div>
			</div>
		</div>
	</footer>
	<style>
		@-webkit-keyframes spin {
		  0%  {-webkit-transform: rotate(0deg);}
		  100% {-webkit-transform: rotate(360deg);}
		}
		
		.app-spinner.loading.loading-success {
		  border-color: rgba(41,47,67,.3);
		  border-top-color: #337ab7;
		  background: none;
		}
		.app-spinner.loading {
		  /*float: left;*/
		  /* z-index: 9999999; */
		  position: absolute;
		  /* float: left; */
		  border-radius: 50%;
		  margin: 10px 5px 10px 0;
		  width: 150px;
		  height: 150px;
		  border: 3px solid rgba(219,224,228,.1);
		  border-top-color: #DBE0E4;
		  animation: spin 1s infinite linear;
		  left: 45%;
		  top: 40%;
		  display: none;
		}
		.background {
		  display: none;
		  position: fixed;
		  top: 0;
		  left: 0;
		  width: 100%;
		  height: 100%;
		  z-index: 9999999;
		  background-color: hsla(0, 0%, 0%, 0.5);
		}
		@media (max-width: 767px){
		  .app-spinner.loading{
		    left: 30%;
		  }
		}
	</style>
	<div class="background">
		<div class="app-spinner loading loading-success"></div>
	</div>

	<script>
		var initial = document.getElementById('initial-value');
		var potencial = document.getElementById('potencial-value');
		var calc_btn = document.getElementsByClassName('calc-btn')[0];
		var err_msg_calculator = document.getElementsByClassName('error-msg-calc')[0];
		var calculator_values = ""; // Calculator euro

		calc_btn.addEventListener('click', function () {
			var initial_value = initial.value;
			calculator_values += initial_value + " ";
			err_msg_calculator.innerHTML = '';

			if (initial_value < 200) {
				potencial.value = '';
				err_msg_calculator.innerHTML = 'Investimento minimo: 200€';
				err_msg_calculator.style.color = 'red';
			} else if (initial_value == 200) {
				potencial.value = initial_value * 2;
				err_msg_calculator.innerHTML = '';
			} else if (initial_value > 200 && initial_value < 500) {
				potencial.value = initial_value * 2.5;
				err_msg_calculator.innerHTML = '';
			} else if (initial_value >= 500 && initial_value < 1000) {
				potencial.value = initial_value * 3.5;
				err_msg_calculator.innerHTML = '';
			} else if (initial_value >= 1000 && initial_value < 5000) {
				potencial.value = initial_value * 5;
				err_msg_calculator.innerHTML = '';
			} else if (initial_value >= 5000) {
				potencial.value = initial_value * 5.5;
				err_msg_calculator.innerHTML = '';
			}
		});

		$('.toTop').click(function () {
			$("html, body").animate({
				scrollTop: 0
			}, 1000);
		});
	</script>
	<script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
	<script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>