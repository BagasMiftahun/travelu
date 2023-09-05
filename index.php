<?php
	session_start();
?>

<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wisata Desa Sembalun</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'includes/style.php'; ?>

</head>
<body class="tg-home tg-homevone">
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
			$currentPage = 'home';

			include 'includes/header.php'; 
		?>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Home Slider Start
		*************************************-->
		<?php
			$pageTitle = "Experience the Wonder";
			$pageDesc = "People don’t take trips, trips take People";
			$pageHome = "";
			$pageSide = "";

			include 'includes/slider.php'; 
		?>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					Advantures Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-toursdestinations">
								<div class="tg-tourdestination tg-tourdestinationbigbox">
									<figure>
										<a href="destinations.php">
											<img src="images/destination/img-01.png" alt="image destinations">
											<div class="tg-hoverbox">
												<div class="tg-adventuretitle">
													<h2>Bukit Pengasingan</h2>
												</div>
												<div class="tg-description">
													<p>your best vacation ever</p>
												</div>
											</div>
										</a>
									</figure>
								</div>
								<div class="tg-tourdestination">
									<figure>
										<a href="destinations.php">
											<img src="images/destination/img-02.png" alt="image destinations" style="height: 300px; background-size: cover;">
											<div class="tg-hoverbox">
												<div class="tg-adventuretitle">
													<h2>Paralayang</h2>
												</div>
											</div>
										</a>
									</figure>
								</div>
								<div class="tg-tourdestination">
									<figure>
										<a href="destinations.php">
											<img src="images/destination/img-03.png" alt="image destinations" style="height: 150px; background-size: cover;">
											<div class="tg-hoverbox">
												<div class="tg-adventuretitle">
													<h2>Kebun Strawbery</h2>
												</div>
											</div>
										</a>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Advantures End
			*************************************-->
			<!--************************************
					Features Start
			*************************************-->
			<section class="tg-sectionspace tg-zerotoppadding tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-features">
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span>01</span>Luxury Hotels</h2>
									</div>
									<div class="tg-description">
										<p>Menyediakan informasi tentang berbagai hotel mewah, termasuk fasilitas, harga, dan ulasan pelanggan, sehingga pengguna dapat membuat pilihan yang sesuai dengan preferensi dan anggaran .</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span>02</span>Tourist Guide</h2>
									</div>
									<div class="tg-description">
										<p>Membantu pengguna menjelajahi daerah tersebut dengan lebih baik dan memaksimalkan pengalaman wisata .</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span>03</span>Flights Tickets</h2>
									</div>
									<div class="tg-description">
										<p>Menemukan penerbangan yang sesuai dengan tanggal perjalanan , bandingkan harga dari berbagai maskapai, dan melakukan pemesanan dengan mudah.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Features End
			*************************************-->
			<!--************************************
					Call To Action Start
			*************************************-->
			<section class="tg-parallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-1.jpg">
				<div class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-calltoaction">
									<div class="tg-pattern"><img src="images/patternw.png" alt="image destination"></div>
									<h2>Get Detail destination on your Next Travel</h2>
									<div class="tg-description"><p>Travel get existing offers along with many local village and homestay</p></div>
									<a class="tg-btn" href="destinations.php"><span>Explore Tour</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Call To Action End
			*************************************-->
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