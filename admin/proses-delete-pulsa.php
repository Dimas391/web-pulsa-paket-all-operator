<?php
include("../config/koneksi.php");

$id = (isset($_POST['id'])) ? $_POST['id'] : "";

if (!empty($id)) {

    $stmt = $koneksi->prepare("DELETE FROM products_pulsa WHERE id='$id'");
    $query = $stmt->execute();

    if (!$query) {
        echo "<script>alert('Data gagal di hapus');</script>";
        echo "<script>window.location.replace('pulsa.php');</script>";
        exit();
    } else {
        echo "<script>alert('Data produk pulsa berhasil dihapus');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'pulsa.php'; }, 1000);</script>";
        exit();
    }
    
}
