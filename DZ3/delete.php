<?php

header('Location: index.php');

include 'connect.php';

$fileId = $_GET['id'];
$fileName = "uploads/" . $_GET['name'];

$sql = "DELETE FROM upload WHERE id=$fileId";

if ($conn->query($sql) === TRUE) {
    unlink($fileName);
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>