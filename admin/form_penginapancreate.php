<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wisata Desa Sembalun | Admin Dashboard</title>
	<?php include 'includes/style.php'; ?>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<?php include 'includes/sidebar.php'; ?>
		<!--end sidebar wrapper -->
		<!--start header -->
		<?php include 'includes/header.php'; ?>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Penginapan</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<hr/>
				<div class="card">
					<div class="card-body p-4">
						<h5 class="mb-4">Data Penginapan</h5>
						<form action="penginapan/penginapancreate.php" method="POST" enctype="multipart/form-data" > 
							<div class="row mb-3">
								<div class="col-sm-9">
									<input type="hidden" name="id">
								</div>
							</div>
							<div class="row mb-3">
								<label for="nama_penginapan" class="col-sm-3 col-form-label">Nama Penginapan</label>
								<div class="col-sm-9">
									<input type="text" name="nama_penginapan" class="form-control" id="nama_penginapan" placeholder="Nama Penginapan" required>
								</div>
							</div>
							<div class="row mb-3" >
								<label for="fasilitas" class="col-sm-3 col-form-label">Fasilitas</label>
								<div class="col-sm-9">
									<input type="text" name="fasilitas" class="form-control" id="fasilitas" placeholder="Fasilitas" required>
								</div>
							</div>
							<div class="row mb-3">
								<label for="biaya" class="col-sm-3 col-form-label">Biaya</label>
								<div class="col-sm-9">
									<input type="number" name="biaya" class="form-control" id="biaya" placeholder="Biaya" required>
								</div>
							</div>
							<div class="row mb-3">
								<label for="rating" class="col-sm-3 col-form-label">Rating</label>
								<div class="col-sm-9">
									<input type="number" name="rating" min="1" max="5" class="form-control" id="rating" placeholder="Rating" required>
								</div>
							</div>
							<div class="row mb-3">
								<label for="contact" class="col-sm-3 col-form-label">Contact</label>
								<div class="col-sm-9">
									<input type="number" name="contact" class="form-control" id="contact" placeholder="Contact" required>
								</div>
							</div>
							<div class="row mb-3">
								<label for="gambar_penginapan" class="col-sm-3 col-form-label">Gambar Penginapan</label>
								<div class="col-sm-9">
									<input type="file" name="gambar_penginapan" id="gambar_penginapan" accept="images/*" class="form-control" placeholder="Nama Penginapan" required>
								</div>
							</div>
							<div class="row mb-3" >
								<label for="deskripsi_penginapan" class="col-sm-3 col-form-label">Deskripsi Penginapan</label>
								<div class="col-sm-9">
									<div>
									<tinymce-editor api-key="nwo0vzn3ffu1601fahu14letk4t8i6w2gcolb7s549ggm1hi"  height="500"
     			 					plugins="advlist autolink lists link image charmap preview anchor
									searchreplace visualblocks code fullscreen
									insertdatetime media table code help wordcount"
									toolbar="undo redo | blocks | bold italic backcolor |
									alignleft aligncenter alignright alignjustify |
									bullist numlist outdent indent | removeformat | help"  
									name="deskripsi_penginapan" class="form-control" id="deskripsi_penginapan" placeholder="Deskripsi Penginapan" required>
									</tinymce-editor>
									</div>
								</div>
							</div>
							<div class="row">
								<label class="col-sm-3 col-form-label"></label>
								<div class="col-sm-9">
									<div class="d-md-flex d-grid align-items-center gap-3">
										<button type="submit"value="Simpan" class="btn btn-primary px-4">Submit</button>
										<button type="reset" class="btn btn-light px-4">Reset</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		 <div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<?php include 'includes/footer.php'; ?>
	</div>
	<!--end wrapper-->

	<?php include 'includes/script.php'; ?>
</body>
</html>