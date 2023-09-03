<?php
session_start();
session_destroy(); // Menghapus sesi

// Redirect ke halaman login atau halaman utama
header("Location: index.php"); // Atau ganti dengan URL halaman utama jika ada
exit();
?>
