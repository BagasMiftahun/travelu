<?php
include '../db.php';

$id = $_GET['id'];
$sql = "DELETE FROM wisata WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../wisata.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
