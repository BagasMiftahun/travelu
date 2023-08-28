<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Mengenkripsi password

    // Lakukan validasi dan cek apakah username sudah ada dalam database
    $cek_username = "SELECT * FROM users WHERE username = '$username'";
    $result_cek = $conn->query($cek_username);

    if ($result_cek->num_rows > 0) {
        echo "Username sudah digunakan.";
    } else {
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "Registrasi berhasil.";
        } else {
            echo "Registrasi gagal: " . $conn->error;
        }
    }
}
?>
