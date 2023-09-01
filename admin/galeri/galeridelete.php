<?php
include '../db.php';

$id = $_GET['id'];
$sql = "DELETE FROM galeri_wisata WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../galeri.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
