<?php
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_penginapan = $_POST['nama_penginapan'];
    $deskripsi_penginapan = $_POST['deskripsi_penginapan'];
    $biaya = $_POST['biaya'];
    $rating = $_POST['rating'];
    $fasilitas = $_POST['fasilitas'];
    $contact = $_POST['contact'];


    $gambar_name = $_FILES['gambar_penginapan']['name'];
    $gambar_tmp = $_FILES['gambar_penginapan']['tmp_name'];
    $gambar_path = 'uploads/' . $gambar_name;

    move_uploaded_file($gambar_tmp, $gambar_path);

    $sql = "INSERT INTO penginapan (nama_penginapan, gambar_penginapan, deskripsi_penginapan, biaya, rating, fasilitas, contact) VALUES ('$nama_penginapan', '$gambar_path', '$deskripsi_penginapan', '$biaya', '$rating', '$fasilitas', '$contact' )";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../penginapan.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
