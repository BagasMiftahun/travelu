<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wisata Desa Sembalun | Reset Password</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--plugins-->
		<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">


</head>
<body class="">
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
			Wrapper Start
	*************************************-->
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-reset-password d-flex align-items-center justify-content-center">
		 <div class="container">
			<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
				<div class="col mx-auto">
					<div class="card">
						<div class="card-body">
							<div class="p-4">
								<form action="reset_password.php" method="POST">
									<div class="mb-4 text-center">
										<img src="images/logofix.png" width="120" alt="" />
									</div>
									<input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
									<div class="text-start mb-4">
										<h5 class="">Generate New Password</h5>
										<p class="mb-0">We received your reset password request. Please enter your new password!</p>
									</div>
									<div class="mb-3 mt-4">
										<label class="form-label">New Password</label>
										<input type="password" name="new_password" required  class="form-control" placeholder="Enter new password" />
									</div>
									<div class="mb-4">
										<label class="form-label">Confirm Password</label>
										<input type="password" name="confirm_password" required class="form-control" placeholder="Confirm password" />
									</div>
									<div class="d-grid gap-2">
										<button type="submit" class="btn btn-warning">Change Password</button> <a href="signin.php" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Back to Login</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		  </div>
		</div>
	</div>
	<!-- end wrapper -->
	<!--************************************
			Wrapper End
	*************************************-->
	<?php include 'includes/script.php'; ?>

	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require 'db.php'; // Import file koneksi database

    $token = $_POST["token"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    // Cek apakah token cocok dengan yang ada di database password_reset_requests
    $query = "SELECT * FROM password_reset_requests WHERE token = '$token'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['user_id'];

        // Validasi kata sandi baru
        if ($new_password === $confirm_password) {
            // Enkripsi kata sandi baru
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

            // Update kata sandi pengguna di tabel users
            $update_query = "UPDATE users SET password = '$hashed_password' WHERE id = $user_id";
            mysqli_query($conn, $update_query);

            // Hapus token dari database
            $delete_query = "DELETE FROM password_reset_requests WHERE token = '$token'";
            mysqli_query($conn, $delete_query);

            echo "Password has been reset successfully. <a href='login.php'>Login</a>";
        } else {
            echo "Password and confirmation do not match.";
        }
    } else {
        echo "Invalid or expired token.";
    }

    // Tutup koneksi database
    mysqli_close($conn);
}
?>


