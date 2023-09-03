<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["username"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $komentar = $_POST["komentar"];
    $id_wisata = $_POST["id_wisata"];

    // Simpan komentar ke dalam database
    $query = "INSERT INTO chat_comments (nama, email, komentar, id_wisata) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssi", $nama, $email, $komentar, $id_wisata);
    $stmt->execute();
    $stmt->close();

    // Kembali ke halaman detail wisata
    header('Location: destinationsdetail.php?id='. $id_wisata);
} else {
    echo "Anda harus login untuk mengirim komentar.";
}
?>
