<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idToUpdate = $_POST['id'];
    $gambar_wisata = $_POST['gambar_wisata'];

    // Lakukan proses update galeri, termasuk mengupload gambar jika perlu
    $gambar_paths = array();

    foreach ($_FILES['gambar_wisata']['tmp_name'] as $key => $gambar_tmp) {
        $gambar_name = $_FILES['gambar_wisata']['name'][$key];
        $gambar_path = 'uploads/' . $gambar_name;

        move_uploaded_file($gambar_tmp, $gambar_path);
        $gambar_paths[] = $gambar_path;
    }

    // Update gambar yang dipilih
    foreach ($gambar_wisata as $index) {
        $gambar_paths[$index] = $gambar_paths[$index];
    }

    $gambar_string = implode(',', $gambar_paths);

    $sql = "UPDATE galeri_wisata SET gambar_wisata = '$gambar_string' WHERE id = $idToUpdate";

    if ($conn->query($sql) === TRUE) {
        echo "Galeri wisata berhasil diupdate.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Location: ../galeri.php");
}
?>
