<?php
include("../config/koneksi.php");

$id = (isset($_POST['id'])) ? $_POST['id'] : "";

if (!empty($id)) {

    $stmt = $koneksi->prepare("DELETE FROM products_paket_smartfren WHERE id='$id'");
    $query = $stmt->execute();

    if (!$query) {
        echo "<script>alert('Data gagal di hapus');</script>";
        echo "<script>window.location.replace('products-smartfren.php');</script>";
        exit();
    } else {
        echo "<script>alert('Data produk smartfren berhasil dihapus');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'products-smartfren.php'; }, 1000);</script>";
        exit();
    }
    
}
