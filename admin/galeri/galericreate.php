<?php
include '../db.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_wisata = $_POST['id_wisata'];

    $gambar_paths = array();

    foreach ($_FILES['gambar_wisata']['tmp_name'] as $key => $gambar_tmp) {
        $gambar_name = $_FILES['gambar_wisata']['name'][$key];
        $gambar_path = 'uploads/' . $gambar_name;

        move_uploaded_file($gambar_tmp, $gambar_path);
        $gambar_paths[] = $gambar_path;
    }
    // Gabungkan path gambar menjadi string yang dipisahkan dengan koma
    $gambar_string = implode(',', $gambar_paths);


    $sql = "INSERT INTO galeri_wisata (id_wisata, gambar_wisata) VALUES ('$id_wisata', '$gambar_string')";

    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Location: ../galeri.php");
}
?>
