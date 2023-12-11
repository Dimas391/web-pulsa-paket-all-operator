<?php
include("../config/koneksi.php");

$id = (isset($_POST['id'])) ? $_POST['id'] : "";

if (!empty($id)) {

    $stmt = $koneksi->prepare("DELETE FROM products_paket_axis WHERE id='$id'");
    $query = $stmt->execute();

    if (!$query) {
        echo "<script>alert('Data gagal di hapus');</script>";
        echo "<script>window.location.replace('products-axis.php');</script>";
        exit();
    } else {
        echo "<script>alert('Data produk axis berhasil dihapus');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'products-axis.php'; }, 1000);</script>";
        exit();
    }
    
}
