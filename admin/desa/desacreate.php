<?php
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_desa = $_POST['nama_desa'];
    $deskripsi_desa = $_POST['deskripsi_desa'];

    $gambar_name = $_FILES['gambar_desa']['name'];
    $gambar_tmp = $_FILES['gambar_desa']['tmp_name'];
    $gambar_path = 'uploads/' . $gambar_name;

    move_uploaded_file($gambar_tmp, $gambar_path);

    $sql = "INSERT INTO desa (nama_desa, gambar_desa, deskripsi_desa) VALUES ('$nama_desa', '$gambar_path', '$deskripsi_desa')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../desa.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
