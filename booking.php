<?php
    include 'db.php'; // Mengimpor file koneksi.php
    $sql = "SELECT * FROM penginapan";
    $result = $conn->query($sql);
?>
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
	<title>Wisata Desa Sembalun | Penginapan</title>
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
		<?php
			$pageTitle = "Penginapan";
			$pageDesc = "Beristirahat di Penginapan Terbaik Kami";
			$pageHome = "Home";
			$pageSide = "Penginapan";

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
							<div class="tg-topdestinations">
								<div class="row">
								<?php if ($result->num_rows > 0): ?>
									<?php while ($row = $result->fetch_assoc()): ?>
										<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
											<div class="tg-populartour">
												<figure>
													<a href="bookingdetail.php?id=<?= $row['id']; ?>"><img src="admin/penginapan/<?php echo $row['gambar_penginapan']; ?>" alt="image destinations" style="height: 300px;object-fit:cover"></a>
													<button class="tg-descount"><a href="bookingdetail.php?id=<?= $row['id']; ?>" style="color:white">Lihat Detail</a></button>
												</figure>
												<div class="tg-populartourcontent">
													<div class="tg-populartourtitle">
														<h3><a href="bookingdetail.php?id=<?= $row['id']; ?>"><?php echo $row['nama_penginapan']; ?></a></h3>
													</div>
													<div class="tg-description">
														<p><?php echo $row['deskripsi_penginapan']; ?></p>
													</div>
													<div class="tg-populartourfoot">
														<div class="tg-durationrating">
															<span class="tg-stars"><span></span></span>
															<em>(3 Review)</em>
														</div>
														<div class="tg-pricearea">
															<h4>Rp <?php echo $row['biaya']; ?></h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php endwhile; ?>
								<?php else: ?>
									<p>Tidak ada data desa.</p>
								<?php endif; ?>
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