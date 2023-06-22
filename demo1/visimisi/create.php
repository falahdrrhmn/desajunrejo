<?php
$conn = new mysqli("localhost", "username", "password", "database");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$visi = $_POST["visi"];
$misi = $_POST["misi"];

$sql = "INSERT INTO visi_misi (visi, misi) VALUES ('$visi', '$misi')";
if ($conn->query($sql) === TRUE) {
    echo "Data created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
