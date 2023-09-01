<?php
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id_gambar = intval($_GET['id']);


    // Ambil path gambar sebelum dihapus
    $sql_path = "SELECT gambar_wisata FROM galeri_wisata WHERE id = $id_gambar";
    $result_path = $conn->query($sql_path);

    if ($result_path->num_rows > 0) {
        $row_path = $result_path->fetch_assoc();
        $gambar_path = $row_path['gambar_wisata'];

        // Hapus data gambar dari tabel
        $sql_delete = "DELETE FROM galeri_wisata WHERE id = $id_gambar";
        if ($conn->query($sql_delete) === TRUE) {
            // Hapus juga file gambar dari direktori
            if (file_exists($gambar_path)) {
                unlink($gambar_path);
            }
            header("Location: index.php"); // Ganti dengan halaman yang sesuai
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "Gambar tidak ditemukan.";
    }
}
?>
