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
			$currentPage = 'destinations';	
			include 'includes/header.php'; 
		?>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Inner Banner Start
		*************************************-->
		<?php
			$pageTitle = "Destinations";
			$pageDesc = "Explore Tours By Destinations";
			$pageHome = "Home";
			$pageSide = "Destinations";

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
											<div class="tg-topdestination">
												<figure>
													<a href="destinationsdetail.php?id=<?= $row['id']; ?>" class="tg-btnviewall">View Details</a>
													<a href="destinationsdetail.php?id=<?= $row['id']; ?>"><img src="admin/wisata/<?php echo $row['gambar_wisata']; ?>" alt="image description" style="height: 400px;object-fit:cover"></a>
													<figcaption>
														<h2><a href="destinationsdetail.php"><?php echo $row['nama_wisata']; ?></a></h2>
													</figcaption>
												</figure>
											</div>
										</div>
									<?php endwhile; ?>
								<?php else: ?>
									<p>Tidak ada data wisata.</p>
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
<?php $conn->close(); ?>
</html>