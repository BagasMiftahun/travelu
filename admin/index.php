<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>
<?php
include 'db.php'; // Sambungkan ke database

// Count Data Desa
$sqlDesa = "SELECT COUNT(*) as total_desa FROM desa";
$resultDesa = $conn->query($sqlDesa);
$rowDesa = $resultDesa->fetch_assoc();
$totalDesa = $rowDesa['total_desa'];

// Count Data Wisata
$sqlWisata = "SELECT COUNT(*) as total_wisata FROM wisata";
$resultWisata = $conn->query($sqlWisata);
$rowWisata = $resultWisata->fetch_assoc();
$totalWisata = $rowWisata['total_wisata'];

// Count Data Users
$sqlUsers = "SELECT COUNT(*) as total_users FROM users";
$resultUsers = $conn->query($sqlUsers);
$rowUsers = $resultUsers->fetch_assoc();
$totalUsers = $rowUsers['total_users'];

// Count Data Penginapan
$sqlPenginapan = "SELECT COUNT(*) as total_penginapan FROM penginapan";
$resultPenginapan = $conn->query($sqlPenginapan);
$rowPenginapan = $resultPenginapan->fetch_assoc();
$totalPenginapan = $rowPenginapan['total_penginapan'];
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
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                   <div class="col">
					 <div class="card radius-10 border-start border-0 border-4 border-info">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Total Penginapan</p>
									<h4 class="my-1 text-info"><?php echo $totalPenginapan ?></h4>
								</div>
								<div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto"><i class='bx bxs-cart'></i>
								</div>
							</div>
						</div>
					 </div>
				   </div>
				   <div class="col">
					<div class="card radius-10 border-start border-0 border-4 border-danger">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Total Desa</p>
								   <h4 class="my-1 text-danger"><?php echo $totalDesa ?></h4>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-burning text-white ms-auto"><i class='bx bxs-wallet'></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div>
				  <div class="col">
					<div class="card radius-10 border-start border-0 border-4 border-success">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Total Wisata</p>
								   <h4 class="my-1 text-success"><?php echo $totalWisata ?></h4>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bxs-bar-chart-alt-2' ></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div>
				  <div class="col">
					<div class="card radius-10 border-start border-0 border-4 border-warning">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Total Users</p>
								   <h4 class="my-1 text-warning"><?php echo $totalUsers ?></h4>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-orange text-white ms-auto"><i class='bx bxs-group'></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div> 
				</div><!--end row-->
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