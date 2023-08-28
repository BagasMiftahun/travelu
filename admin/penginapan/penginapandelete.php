<?php
include '../db.php';

$id = $_GET['id'];
$sql = "DELETE FROM penginapan WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../penginapan.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
