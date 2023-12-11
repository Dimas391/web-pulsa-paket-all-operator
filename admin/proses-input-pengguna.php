<?php
include("../config/koneksi.php");

$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$username = (isset($_POST['username'])) ? $_POST['username'] : "";
$email = (isset($_POST['email'])) ? $_POST['email'] : "";
$level = (isset($_POST['level'])) ? $_POST['level'] : "";

if (!empty($username) && !empty($email) && !empty($level)) {

    $stmt = $koneksi->prepare("INSERT INTO user (username, email, level) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $level);
    $query = $stmt->execute();

    if (!$query) {
        echo "<script>alert('Data gagal di tambah');</script>";
        echo "<script>window.location.replace('pengguna.php');</script>";
        exit();
    } else {
        echo "<script>alert('Data produk pulsa berhasil ditambah');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'pengguna.php'; }, 1000);</script>";
        exit();
    }
}
