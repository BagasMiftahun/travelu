<?php
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password']; // Anda perlu mengenkripsi password sebelum menyimpannya ke database

    $sql = "UPDATE users SET username='$username', password='$password' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../users.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
