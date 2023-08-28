<?php
include '../db.php';

$id = $_GET['id'];
$sql = "DELETE FROM desa WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../desa.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
