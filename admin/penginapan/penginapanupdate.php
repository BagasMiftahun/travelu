<?php
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama_penginapan = $_POST['nama_penginapan'];
    $deskripsi_penginapan = $_POST['deskripsi_penginapan'];
    $biaya = $_POST['biaya'];
    $rating = $_POST['rating'];
    $fasilitas = $_POST['fasilitas'];
    $contact = $_POST['contact'];

    // Proses unggah gambar jika ada perubahan gambar
    if ($_FILES['gambar_penginapan']['name'] != '') {
        $gambar_name = $_FILES['gambar_penginapan']['name'];
        $gambar_tmp = $_FILES['gambar_penginapan']['tmp_name'];
        $gambar_path = 'uploads/' . $gambar_name;

        move_uploaded_file($gambar_tmp, $gambar_path);

        $sql = "UPDATE penginapan SET nama_penginapan='$nama_penginapan', gambar_penginapan='$gambar_path', deskripsi_penginapan='$deskripsi_penginapan', biaya='$biaya', rating='$rating', fasilitas='$fasilitas', contact='$contact' WHERE id=$id";
    } else {
        $sql = "UPDATE penginapan SET nama_penginapan='$nama_penginapan', deskripsi_penginapan='$deskripsi_penginapan', biaya='$biaya', rating='$rating', fasilitas='$fasilitas', contact='$contact' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        header("Location: ../penginapan.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
