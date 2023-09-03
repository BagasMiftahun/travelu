<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<?php
    include 'db.php'; // Mengimpor file koneksi.php
	$id = $_GET['id'];
	$sql = "SELECT * FROM users WHERE id = $id";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
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
								<li class="breadcrumb-item active" aria-current="page">Data Users</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<hr/>
				<div class="card">
					<div class="card-body p-4">
						<h5 class="mb-4">Horizontal Form</h5>
						<form action="users/userupdate.php" method="POST"> 
							<div class="row mb-3">
								<div class="col-sm-9">
									<input type="hidden" name="id" value="<?= $id; ?>">
								</div>
							</div>
							<div class="row mb-3">
								<label for="username" class="col-sm-3 col-form-label">Username</label>
								<div class="col-sm-9">
									<input type="text" name="username" value="<?= $row['username']; ?>" class="form-control" id="username" placeholder="Username" required>
								</div>
							</div>
							<div class="row mb-3">
								<label for="password" class="col-sm-3 col-form-label">Choose Password</label>
								<div class="col-sm-9">
									<input type="password" name="password" value="<?= $row['password']; ?>" class="form-control" id="input38" placeholder="Choose Password" required>
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
<?php $conn->close(); ?>
</html>