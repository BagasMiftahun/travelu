<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel_desa";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
