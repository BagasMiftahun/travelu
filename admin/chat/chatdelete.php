<?php
include '../db.php';

$id = $_GET['id'];
$sql = "DELETE FROM chat_comments WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../chat.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
