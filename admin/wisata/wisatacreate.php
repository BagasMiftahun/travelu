<?php
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_wisata = $_POST['nama_wisata'];
    $deskripsi_wisata = $_POST['deskripsi_wisata'];

    $gambar_name = $_FILES['gambar_wisata']['name'];
    $gambar_tmp = $_FILES['gambar_wisata']['tmp_name'];
    $gambar_path = 'uploads/' . $gambar_name;

    move_uploaded_file($gambar_tmp, $gambar_path);

    $sql = "INSERT INTO wisata (nama_wisata, gambar_wisata, deskripsi_wisata) VALUES ('$nama_wisata', '$gambar_path', '$deskripsi_wisata')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../wisata.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
