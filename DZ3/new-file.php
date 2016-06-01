<?php


include 'connect.php';

$text = $_POST['text'];
$name = $_POST['headline'];
$fileName = $name . ".txt";
$pathName = "uploads/" . $fileName;
$uploadOk = 1;

if (file_exists($pathName)) {
    $uploadOk = 0;
}
if (!$uploadOk == 0) {
    $file = fopen($fileName, 'w');
    fwrite($file, $text);
    fclose($file);
    rename($fileName, $pathName);

    $query = "INSERT INTO upload (name) "."VALUES ('$fileName')";
}
if ($conn->query($query) === TRUE) {
    header('Location: index.php');
} else {
    echo $conn->error;
}

$conn->close();

?>
