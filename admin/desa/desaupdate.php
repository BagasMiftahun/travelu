<?php
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama_desa = $_POST['nama_desa'];
    $deskripsi_desa = $_POST['deskripsi_desa'];

    if ($_FILES['gambar_desa']['name'] != '') {
        $gambar_name = $_FILES['gambar_desa']['name'];
        $gambar_tmp = $_FILES['gambar_desa']['tmp_name'];
        $gambar_path = 'uploads/' . $gambar_name;

        move_uploaded_file($gambar_tmp, $gambar_path);

        $sql = "UPDATE desa SET nama_desa='$nama_desa', gambar_desa='$gambar_path', deskripsi_desa='$deskripsi_desa' WHERE id=$id";
    } else {
        $sql = "UPDATE desa SET nama_desa='$nama_desa', deskripsi_desa='$deskripsi_desa' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        header("Location: ../desa.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
