<?php
    include 'db.php'; // Mengimpor file koneksi.php
    $sql = "SELECT * FROM wisata";
    $result = $conn->query($sql);
?>

<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BootStrap HTML5 CSS3 Theme</title>
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
			$currentPage = 'aboutus';	
			include 'includes/header.php'; 
		?>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Inner Banner Start
		*************************************-->
		<?php
			$pageTitle = "About Us";
			$pageDesc = "Desa Wisata Sembalun";
			$pageHome = "Home";
			$pageSide = "About Us";

			include 'includes/slider_dt.php'; 
		?>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					Features Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-features">
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span>01</span><a href="javascript:void(0);">Luxury Hotels</a></h2>
									</div>
									<div class="tg-description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span>02</span><a href="javascript:void(0);">Tourist Guide</a></h2>
									</div>
									<div class="tg-description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span>03</span><a href="javascript:void(0);">Flights Tickets</a></h2>
									</div>
									<div class="tg-description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span>04</span><a href="javascript:void(0);">Luxury Hotels</a></h2>
									</div>
									<div class="tg-description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span>05</span><a href="javascript:void(0);">Tourist Guide</a></h2>
									</div>
									<div class="tg-description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span>06</span><a href="javascript:void(0);">Flights Tickets</a></h2>
									</div>
									<div class="tg-description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
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
			<section class="tg-parallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-1.jpg">
				<div class="tg-sectionspace tg-zerobottompadding tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-sectionhead tg-sectionheadvtwo">
									<div class="tg-sectiontitle">
										<h2>What makes these trips different?</h2>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-push-2">
								<figure class="tg-videobox">
									<iframe width="853" height="480" src="https://www.youtube.com/embed/J0ENdUX67LA" title="SEMBALUN - DESA EKSOTIS DI KAKI RINJANI | GET! EXPLORE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="tg-sectionspace tg-haslayout tg-bglight">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<div class="tg-sectiontitle">
									<h2>Gallery</h2>
								</div>
								<div class="tg-description">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer.</p>
								</div>
							</div>
							<div id="tg-guidesslider" class="tg-guidesslider tg-guides owl-carousel">
								<?php while ($row = $result->fetch_assoc()): ?>
								<div class="item tg-guide">
									<figure><a href="javascript:void(0);"><img src="admin/wisata/<?php echo $row['gambar_wisata']; ?>" alt="image destination" style="height: 300px;object-fit:cover"></a></figure>
									<div class="tg-guidecontent">
										<div class="tg-guidecontenthead">
											<h3><a href="javascript:void(0);"><?php echo $row['nama_wisata']; ?></a></h3>
											<ul class="tg-socialicons">
												<li><a href="javascript:void(0);"><img src="images/icons/icon-05.png" alt="image destinations"></a></li>
												<li><a href="javascript:void(0);"><img src="images/icons/icon-06.png" alt="image destinations"></a></li>
												<li><a href="javascript:void(0);"><img src="images/icons/icon-07.png" alt="image destinations"></a></li>
											</ul>
										</div>
									</div>
								</div>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					FAQs Start
			*************************************-->
			<section class=" tg-haslayout tg-bglight">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
								<div class="tg-sectionhead">
									<div class="tg-sectiontitle">
										<h2>Need Help?</h2>
									</div>
									<div class="tg-description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer.</p>
									</div>
								</div>
								<div id="tg-accordion" class="tg-accordion" role="tablist" aria-multiselectable="true">
									<div class="tg-panel">
										<h4>Ornare Quam Justo Tellusv</h4>
										<div class="tg-panelcontent">
											<div class="tg-description">
												<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
											</div>
										</div>
									</div>
									<div class="tg-panel">
										<h4>A work of art is above all an adventure of mind!</h4>
										<div class="tg-panelcontent">
											<div class="tg-description">
												<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
											</div>
										</div>
									</div>
									<div class="tg-panel">
										<h4>Pharetra Etiam Inceptos</h4>
										<div class="tg-panelcontent">
											<div class="tg-description">
												<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
											</div>
										</div>
									</div>
									<div class="tg-panel">
										<h4>We pride ourselves on innovative.</h4>
										<div class="tg-panelcontent">
											<div class="tg-description">
												<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
											</div>
										</div>
									</div>
								</div>
							
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					FAQs End
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