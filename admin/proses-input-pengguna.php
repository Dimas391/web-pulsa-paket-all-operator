<?php
include("../config/koneksi.php");

$username = (isset($_POST['username'])) ? $_POST['username'] : "";
$password = (isset($_POST['password'])) ? $_POST['password'] : "";

if (!empty($username) && !empty($password)) {

    $stmt = $koneksi->prepare("INSERT INTO user(username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    $query = $stmt->execute();

    if (!$query) {
        echo "<script>alert('Data tidak berhasil ditambah');</script>";
        echo "<script>window.location.replace('pengguna.php');</script>";
        exit(); 
    } else {
        echo "<script>alert('Data user berhasil ditambah');</script>";
        header("Location: pengguna.php");
        exit(); 
}
}
?>
