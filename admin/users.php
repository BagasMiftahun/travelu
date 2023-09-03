<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<?php
    include 'db.php'; // Mengimpor file koneksi.php

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
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
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Name</th>
										<th>Password</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php while ($row = $result->fetch_assoc()): ?>
										<tr>
											<td><?php echo $row['username']; ?></td>
											<td><?php echo $row['password']; ?></td>
											<td>
												<div class="btn-group">
													<button type="button" class="btn btn-primary">Action</button>
													<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
													</button>
													<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	
														<a class="dropdown-item" href="form_userupdate.php?id=<?= $row['id']; ?>">Update</a>
														<a class="dropdown-item" href="users/userdelete.php?id=<?= $row['id']; ?>">Delete</a>
													</div>
												</div>
											</td>
										</tr>
									<?php endwhile; ?>
								</tbody>
								<tfoot>
									<tr>
										<th>Name</th>
										<th>Password</th>
										<th>Setting</th>
									</tr>
								</tfoot>
							</table>
						</div>
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