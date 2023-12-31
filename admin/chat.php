<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<?php
    include 'db.php'; // Mengimpor file koneksi.php
    $sql = "SELECT c.id, w.nama_wisata, c.nama, c.email, c.komentar, c.waktu FROM chat_comments c INNER JOIN wisata w ON c.id_wisata = w.id";
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

    
	<style>
		/* Atur lebar kolom deskripsi_wisata */
		td.desc {
            max-width: 500px; /* Sesuaikan lebar maksimal sesuai kebutuhan */
			word-wrap: break-word;
	        white-space: pre-line;
        }
	</style>
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
								<li class="breadcrumb-item active" aria-current="page">Data Chat Users</li>
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
										<th>Nama</th>
                                        <th>Wisata</th>
										<th>Email</th>
                                        <th>Komentar</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php while ($row = $result->fetch_assoc()): ?>
										<tr>
											<td><?php echo $row['nama']; ?></td>
											<td><?php echo $row['nama_wisata']; ?></td>
											<td><?php echo $row['email']; ?></td>
											<td class="desc"><?php echo $row['komentar']; ?></td>
											<td>
												<div class="btn-group">
													<button type="button" class="btn btn-primary">Action</button>
													<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
													</button>
													<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	
														<a class="dropdown-item" href="chat/chatdelete.php?id=<?= $row['id']; ?>">Delete</a>
													</div>
												</div>
											</td>
										</tr>
									<?php endwhile; ?>
								</tbody>
								<tfoot>
									<tr>
                                        <th>Nama</th>
                                        <th>Wisata</th>
										<th>Email</th>
                                        <th>Komentar</th>
										<th>Aksi</th>
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