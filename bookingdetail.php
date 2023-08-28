<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM penginapan WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$namaPenginapan = $row['nama_penginapan'];
$biaya = $row['biaya'];
$contact = $row['contact'];

// Format nomor WhatsApp tanpa karakter non-angka
$contact = preg_replace('/\D/', '', $contact);
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
			$currentPage = 'booking';	
			include 'includes/header.php'; 
		?>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Inner Banner Start
		*************************************-->
		<div class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="admin/penginapan/<?= $row['gambar_penginapan']; ?>">
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div id="tg-content" class="tg-content">
							<div class="tg-tourbookingdetail">
								<div class="tg-bookinginfo">
									<h2><?= $row['nama_penginapan']; ?></h2>
									<div class="tg-durationrating">
										<span class="tg-stars"><span></span></span>
										<em><?= $row['rating']; ?></em>
									</div>
									<div class="tg-pricearea">
										<h4><?= $row['biaya']; ?><sub>/ per person</sub></h4>
									</div>
									<form class="tg-formtheme tg-formbookingdetail">
										<fieldset>
												<button type="submit" class="tg-btn tg-btn-lg"><a target="_blank" style="color:white" href="https://api.whatsapp.com/send?phone=' . $contact . '&text=Saya%20tertarik%20untuk%20booking%20penginapan%20' . $namaPenginapan . '">Booking via WhatsApp</a></button>
										</fieldset>
									</form>
								</div>
								<div class="tg-sectionspace tg-haslayout">
									<div class="tg-themetabs tg-bookingtabs">
										<ul class="tg-themetabnav" role="tablist">
											<li role="presentation" class="active">
												<a href="#america" aria-controls="america" role="tab" data-toggle="tab">
													<span>Overview</span>
												</a>
											</li>
										</ul>
										<div class="tab-content tg-themetabcontent">
                                        <div role="tabpanel" class="tab-pane active tg-overviewtab" id="america">
												<div class="tg-bookingdetail">
													<div class="tg-box">
														<h2>About Penginapan</h2>
														<div class="tg-description">
															<p><?= $row['deskripsi_penginapan']; ?></p>
														</div>
													</div>
												</div>
												<div class="tg-bookingdetail tg-bookingdetailstyle">
													<div class="tg-box">
                                                        <h2>Fasilitas</h2>
														<div class="tg-description">
															<p><?= $row['fasilitas']; ?></p>
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