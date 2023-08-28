<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM wisata WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>


<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BootStrap HTML5 CSS3 Theme</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'includes/style.php'; ?>
	<style>
		/* Atur lebar kolom deskripsi_wisata */
		.desc {
			word-wrap: break-word;
	        white-space: pre-line;
        }
	</style>
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
			$currentPage = 'destinations';	
			include 'includes/header.php'; 
		?>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Inner Banner Start
		*************************************-->
		<section class="tg-parallax tg-innerbanner tg-innerbannervtwo" data-appear-top-offset="600" data-parallax="scroll" data-image-src="admin/wisata/<?= $row['gambar_wisata']; ?>">
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1><?= $row['nama_wisata']; ?></h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-10 col-lg-push-1">
						<div id="tg-content" class="tg-content">
							<div class="tg-blogdetail">
								<div class="desc">
									<?= $row['deskripsi_wisata']; ?>
								</div>
								<div class="tg-comments mt-3">
									<div class="tg-heading tg-headingvtwo">
										<h2>2 Responses</h2>
									</div>
									<ul id="tg-comments" class="tg-comments">
										<li>
											<div class="tg-comment">
												<figure><img src="images/avatars/img-03.jpg" alt="image description"></figure>
												<div class="tg-content">
													<div class="tg-commenthead">
														<div class="tg-author">
															<h3>John Smith</h3>
															<time datetime="2017-12-12">December 21, 2017 at 3:04 pm</time>
														</div>
														<a class="tg-reply" href="javascript:void(0);">reply</a>
													</div>
													<div class="tg-description">
														<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="tg-comment">
												<figure><img src="images/avatars/img-03.jpg" alt="image description"></figure>
												<div class="tg-content">
													<div class="tg-commenthead">
														<div class="tg-author">
															<h3>John Smith</h3>
															<time datetime="2017-12-12">December 21, 2017 at 3:04 pm</time>
														</div>
														<a class="tg-reply" href="javascript:void(0);">reply</a>
													</div>
													<div class="tg-description">
														<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="tg-leaveyourcomment">
									<div class="tg-heading tg-headingvtwo">
										<h2>Leave a Reply</h2>
									</div>
									<form class="tg-formtheme tg-formleavecomment">
										<fieldset>
											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
													<div class="form-group">
														<input type="text" name="fullname" class="form-control" placeholder="Full Name">
													</div>
												</div>
												<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
													<div class="form-group">
														<input type="email" name="email" class="form-control" placeholder="Email Address">
													</div>
												</div>
												<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
													<div class="form-group">
														<textarea placeholder="Your Comment"></textarea>
													</div>
												</div>
												<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
													<button class="tg-btn"><span>submit</span></button>
												</div>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
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