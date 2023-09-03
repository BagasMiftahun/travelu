<?php
	session_start();
?>
<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wisata Desa Sembalun | Kontak Kami</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'includes/style.php'; ?>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
				Loader Start
	*************************************-->
	<div class="loader">
		<div class="span">
			<div class="location_indicator"></div>
		</div>
	</div>
	<!--************************************
				Loader End
	*************************************-->
	<!--************************************
			Mobile Menu Start
	*************************************-->
	<nav id="menu">
		<ul>
			<li><a href="index.php">Beranda</a></li>
			<li><a href="destinations.php">Wisata</a></li>
			<li><a href="village.php">Desa</a></li>
			<li><a href="booking.php">Penginapan</a></li>
			<li><a href="aboutus.php">Tentang Kami</a></li>
		</ul>
	</nav>
	<!--************************************
			Mobile Menu End
	*************************************-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<?php
			$currentPage = ''; 	
			include 'includes/header.php'; 
		?>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Inner Banner Start
		*************************************-->
		<?php
			$pageTitle = "Contact us";
			$pageDesc = "Tempat Wisata Sembalun";
			$pageHome = "Home";
			$pageSide = "Contact Us";

			include 'includes/slider_dt.php'; 
		?>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-sectionspace tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div id="tg-content" class="tg-content">
							<ul class="tg-contactinfo">
								<li>
									<span class="tg-contactinfoicon"><i class="fa fa-commenting-o"></i></span>
									<h2>Get in Touch</h2>
									<span>Telephone: +51 900 321 4564</span>
									<span>Mobile: +501 860 3210</span>
									<strong><a href="mailto:hello@Travleu.com">hello@Travleu.com</a></strong>
								</li>
								<li>
									<span class="tg-contactinfoicon"><i class="icon-map-marker"></i></span>
									<h2>Visit Our Location</h2>
									<address>Manhatta Hall Veerpolder 7 2361 Empor Ltd 1258, Melbourne, Australia</address>
									<strong><a href="javascript:void(0);">Get Directions</a></strong>
								</li>
								<li>
									<span class="tg-contactinfoicon"><i class="icon-briefcase"></i></span>
									<h2>Looking for a career?</h2>
									<div class="tg-description"><p>perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p></div>
									<strong><a href="mailto:careers@travleu.com">careers@travleu.com</a></strong>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<?php include 'includes/footer.php'; ?>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<!--************************************
			Login Singup Start
	*************************************-->
	<?php include 'includes/login_signup.php'; ?>
	<!--************************************
			Login Singup End
	*************************************-->
	<?php include 'includes/script.php'; ?>
</body>
</html>