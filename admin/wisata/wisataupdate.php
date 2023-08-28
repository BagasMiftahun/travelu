<?php
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama_wisata = $_POST['nama_wisata'];
    $deskripsi_wisata = $_POST['deskripsi_wisata'];

    if ($_FILES['gambar_wisata']['name'] != '') {
        $gambar_name = $_FILES['gambar_wisata']['name'];
        $gambar_tmp = $_FILES['gambar_wisata']['tmp_name'];
        $gambar_path = 'uploads/' . $gambar_name;

        move_uploaded_file($gambar_tmp, $gambar_path);

        $sql = "UPDATE wisata SET nama_wisata='$nama_wisata', gambar_wisata='$gambar_path', deskripsi_wisata='$deskripsi_wisata' WHERE id=$id";
    } else {
        $sql = "UPDATE wisata SET nama_wisata='$nama_wisata', deskripsi_wisata='$deskripsi_wisata' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        header("Location: ../wisata.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
