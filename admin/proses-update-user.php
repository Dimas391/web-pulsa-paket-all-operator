<?php
include("../config/koneksi.php");

$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$username = (isset($_POST['username'])) ? $_POST['username'] : "";
$password = (isset($_POST['password'])) ? $_POST['password'] : "";

if (!empty($username) && !empty($password)) {

    $stmt = $koneksi->prepare("UPDATE user SET username='$username', password='$password' WHERE id='$id'");
    $query = $stmt->execute();

    if (!$query) {
        echo "<script>alert('Data gagal di update');</script>";
        echo "<script>window.location.replace('pengguna.php');</script>";
        exit();
    } else {
        echo "<script>alert('Data user berhasil diupdate');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'pengguna.php'; }, 1000);</script>";
        exit();
    }
    
}
