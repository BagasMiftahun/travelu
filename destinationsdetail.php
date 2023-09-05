<?php
include 'db.php';

$id_wisata = $_GET['id'];
$sql = "SELECT * FROM wisata WHERE id = $id_wisata";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


// Query untuk mendapatkan gambar galeri_wisata terkait
$query_galeri = "SELECT gambar_wisata FROM galeri_wisata WHERE id_wisata = $id_wisata";
$result_galeri = $conn->query($query_galeri);



// Query untuk mengambil komentar terkait dengan wisata ini
$query_komentar = "SELECT * FROM chat_comments WHERE id_wisata = $id_wisata";
$result_komentar = mysqli_query($conn, $query_komentar);

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
	<title>Wisata Desa Sembalun | Detail Wisata</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'includes/style.php'; ?>
	<style>
		/* Atur lebar kolom deskripsi_wisata */
		.desc {
			word-wrap: break-word;
	        white-space: pre-line;
        }
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
							<div class="tg-sectionspace tg-haslayout">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="tg-sectionhead tg-sectionheadvtwo">
											<div class="tg-sectiontitle">
												<h2>Gallery Wisata</h2>
											</div>
											<div class="tg-description">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer</p>
											</div>
										</div>
										<div id="tg-populartoursslider" class="tg-populartoursslider tg-populartours owl-carousel">
										<?php while ($row_galeri = $result_galeri->fetch_assoc()): ?>
											<?php $gambar_paths = explode(",", $row_galeri['gambar_wisata']);
											foreach ($gambar_paths as $gambar_path) { ?>
											<div class="item tg-populartour">
												<figure>
													<a href="javascript:void(0);"><img class="zoomable-image" src="admin/galeri/<?php echo $gambar_path; ?>" style="height: 200px;" alt="image destinations"></a>
												</figure>
											</div>
											<?php } ?>
										<?php endwhile; ?>					
										</div>
									</div>
								</div>
								<div class="desc">
									<?= $row['deskripsi_wisata']; ?>
								</div>
								<hr>
								<?php while ($row = mysqli_fetch_assoc($result_komentar)): ?>
								<div class="tg-comments" style="margin-top:10px; margin-bottom:0">
									<ul id="tg-comments" class="tg-comments">
										<li>
											<div class="tg-comment">
												<div class="tg-content">
													<div class="tg-commenthead">
														<div class="tg-author">
															<h3><?php echo $row['nama']; ?></h3>
															<time datetime=""><?php echo $row['waktu']; ?></time>
														</div>
													</div>
													<div class="tg-description">
														<p><?php echo $row['komentar']; ?></p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							<?php endwhile; ?>
								<!-- Formulir chat -->

								<?php
								if (isset($_SESSION["username"])) {
									?>
									
									<div class="tg-leaveyourcomment">
									<div class="tg-heading tg-headingvtwo">
										<h2>Leave a Reply</h2>
									</div>
									<form class="tg-formtheme tg-formleavecomment"  method="post" action="submit_comments.php">
										<fieldset>
											<input type="hidden" name="id_wisata" value="<?php echo $id_wisata; ?>">
											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
													<div class="form-group">
														<input type="text" name="nama" class="form-control" required placeholder="Full Name">
													</div>
												</div>
												<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
													<div class="form-group">
														<input type="email" name="email" class="form-control" required placeholder="Email Address">
													</div>
												</div>
												<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
													<div class="form-group">
														<textarea name="komentar" placeholder="Your Comment" required></textarea>
													</div>
												</div>
												<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
													<button class="tg-btn" type="submit"><span>submit</span></button>
												</div>
											</div>
										</fieldset>
									</form>
								</div>
								<?php
								} else {
									echo '<p>Silakan <a href="signin.php">login</a> untuk mengirim komentar.</p>';
								}
								?>
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