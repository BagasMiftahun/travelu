<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require 'db.php'; // Import file koneksi database
    
    // Validasi email (tambahkan validasi lain sesuai kebutuhan)
    $email = $_POST["email"];
    
    // Cek apakah email ada dalam database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) === 1) {
        // Jika email ditemukan dalam database
        $user = mysqli_fetch_assoc($result);
        $user_id = $user['id'];

        // Buat token unik
        $token = bin2hex(random_bytes(32));

        // Simpan token ke dalam tabel password_reset_requests
        $insert_query = "INSERT INTO password_reset_requests (user_id, token) VALUES ($user_id, '$token')";
        mysqli_query($conn, $insert_query);

        // Kirim email dengan token menggunakan PHPMailer
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'desasembalunwisata@gmail.com'; // Ganti dengan alamat email Anda
            $mail->Password = 'mdjvqcdsdeqcgyfm'; // Ganti dengan kata sandi email Anda
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('desasembalunwisata@gmail.com', 'Wisata Desa Sembalun'); // Ganti dengan alamat email dan nama Anda
            $mail->addAddress($email); // Alamat email penerima

            $mail->isHTML(true);
            $mail->Subject = 'Reset Password';
            $mail->Body = "Click the following link to reset your password: <a href='http://localhost/travelu/reset_password.php?token=$token'>Reset Password</a>";

            $mail->send();

            // Pesan sukses
            echo '<div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2 w-5">
                    <div class="d-flex align-items-center">
                        <div class="font-35 text-white"><i class="bx bxs-check-circle"></i></div>
                        <div class="ms-3">
                            <h6 class="mb-0 text-white">Success !!</h6>
                            <div class="text-white">Silahkan check email anda!</div>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        } catch (Exception $e) {
            // Pesan kesalahan
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        // Pesan email tidak ditemukan
        echo '<div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                <div class="d-flex align-items-center">
                    <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-white">Alerts !!</h6>
                        <div class="text-white">Email Tidak ditemukan!</div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }

    // Tutup koneksi database
    mysqli_close($conn);
}
?>

<!-- HTML untuk halaman ini, mirip dengan forgot_password.php -->


<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wisata Desa Sembalun | Forgot Password</title>
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
		<div class="authentication-forgot d-flex align-items-center justify-content-center">
			<div class="card forgot-box">
				<div class="card-body">
					<div class="p-3">
						<div class="text-center">
							<img src="assets/images/icons/fpassword.png" width="100" alt="" />
						</div>
						<h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
						<p class="text-muted">Enter your registered email ID to reset the password</p>
                        <form action="send_reset_email.php" method="POST">
                            <div class="my-4">
                                <label class="form-label" for="email">Email id</label>
                                <input type="email" name="email" required class="form-control" placeholder="example@gmail.com" />
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-warning">Send</button>
                                <a href="signin.php" class="btn btn-light"><i class='bx bx-arrow-back me-1'></i>Back to Login</a>
                            </div>
                        </form>
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
	<?php include 'admin/includes/script.php'; ?>

	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>
</html>