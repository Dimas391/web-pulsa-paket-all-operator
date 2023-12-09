<?php
include("../config/koneksi.php");

$id = (isset($_POST['id'])) ? $_POST['id'] : "";

    $stmt = $koneksi->prepare("DELETE FROM user WHERE id='$id'");
    $query = $stmt->execute();

    if (!$query) {
        echo "<script>alert('Data gagal di hapus');</script>";
        echo "<script>window.location.replace('pengguna.php');</script>";
        exit();
    } else {
        echo "<script>alert('Data user berhasil dihapus');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'pengguna.php'; }, 1000);</script>";
        exit();
    }
    
?>
