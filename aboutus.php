<?php
    include 'db.php'; // Mengimpor file koneksi.php
    $sql = "SELECT * FROM wisata";
    $result = $conn->query($sql);
?>
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
	<title>Wisata Desa Sembalun | Tentang Kami</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'includes/style.php'; ?>
	<style>
        /* CSS untuk gambar */
        .zoomable-image {
            transition: transform 0.3s ease; /* Animasi zoom yang smooth */
        }

        /* CSS untuk menambahkan efek zoom saat hover */
        .zoomable-image:hover {
			-webkit-transform: scale(1.08);
			transform: scale(1.08); /* Ubah nilai scale sesuai dengan efek zoom yang Anda inginkan */
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
									<p>Eksplorasi Visual Destinasi Indah kami</p>
								</div>
							</div>
							<div id="tg-guidesslider" class="tg-guidesslider tg-guides owl-carousel">
								<?php while ($row = $result->fetch_assoc()): ?>
								<div class="item tg-guide">
									<figure>
										<a href="javascript:void(0);">
											<img class="zoomable-image" src="admin/wisata/<?php echo $row['gambar_wisata']; ?>" alt="image destination" style="height: 300px;object-fit:cover">
										</a>
									</figure>
									<div class="tg-guidecontent">
										<div class="tg-guidecontenthead">
											<h3><a href="javascript:void(0);"><?php echo $row['nama_wisata']; ?></a></h3>
											<ul class="tg-socialicons">
												<li><a href="https://web.facebook.com/profile.php?id=61550855225122" target="_blank"><img src="images/icons/icon-05.png" alt="image destinations"></a></li>
												<li><a href="https://www.instagram.com/desa_wisatasembalun/" target="_blank"><img src="images/icons/icon-06.png" alt="image destinations"></a></li>
												<li><a href="https://twitter.com/WisataSembalun1" target="_blank"s><img src="images/icons/icon-07.png" alt="image destinations"></a></li>
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
				<div class="container" style="margin-bottom:100px">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
								<div class="tg-sectionhead">
									<div class="tg-sectiontitle">
										<h2>Need Help?</h2>
									</div>
									<div class="tg-description">
										<p>Temukan jawaban atas pertanyaan umum Anda di sini.</p>
									</div>
								</div>
								<div id="tg-accordion" class="tg-accordion" role="tablist" aria-multiselectable="true">
									<div class="tg-panel">
										<h4>Bagaimana saya bisa mendapatkan peta wisata Desa Sembalun di Lombok?</h4>
										<div class="tg-panelcontent">
											<div class="tg-description">
												<p>Anda dapat mengunjungi pusat informasi wisata lokal di Desa Sembalun atau mencarinya secara online di situs web resmi pariwisata Lombok. Peta tersebut akan membantu Anda menemukan lokasi objek wisata, akomodasi, dan fasilitas penting lainnya di daerah tersebut.</p>
											</div>
										</div>
									</div>
									<div class="tg-panel">
										<h4>Apa saja aktivitas wisata yang dapat saya nikmati di Desa Sembalun?</h4>
										<div class="tg-panelcontent">
											<div class="tg-description">
												<p>Di Desa Sembalun, Anda dapat menikmati berbagai aktivitas wisata, termasuk mendaki Gunung Rinjani, mengunjungi Air Terjun Tiu Kelep, menjelajahi kebun stroberi, mengenal budaya lokal, dan berinteraksi dengan penduduk setempat. Puncak Gunung Rinjani adalah tujuan utama bagi pendaki yang mencari petualangan.</p>
											</div>
										</div>
									</div>
									<div class="tg-panel">
										<h4>Apakah ada opsi akomodasi yang baik di Desa Sembalun?</h4>
										<div class="tg-panelcontent">
											<div class="tg-description">
												<p>Ya, Desa Sembalun memiliki berbagai pilihan akomodasi, mulai dari guest house, homestay, hingga penginapan mewah. Beberapa tempat menginap bahkan menawarkan pemandangan spektakuler Gunung Rinjani. Pastikan untuk memesan tempat menginap Anda sebelumnya, terutama selama musim padat, seperti bulan-bulan musim panas.</p>
											</div>
										</div>
									</div>
									<div class="tg-panel">
										<h4>Kapan waktu terbaik untuk berkunjung ke Desa Sembalun dari segi cuaca?</h4>
										<div class="tg-panelcontent">
											<div class="tg-description">
												<p>Waktu terbaik untuk mengunjungi Desa Sembalun adalah selama musim kering, biasanya antara Mei hingga Agustus. Selama periode ini, cuaca cenderung cerah dan tidak ada hujan berlebihan, yang membuat mendaki Gunung Rinjani dan menjelajahi daerah sekitarnya menjadi lebih nyaman. Hindari kunjungan selama musim hujan (Desember hingga Maret) karena kondisi trekking bisa lebih sulit dan berbahaya. Pastikan untuk memeriksa perkiraan cuaca sebelum pergi untuk mempersiapkan diri dengan baik.</p>
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