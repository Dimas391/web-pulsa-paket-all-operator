<?php
include("../config/koneksi.php");

$id = (isset($_POST['id'])) ? $_POST['id'] : "";

    $stmt = $koneksi->prepare("DELETE FROM products_paket_telkomsel WHERE id='$id'");
    $query = $stmt->execute();

    if (!$query) {
        echo "<script>alert('Data gagal di hapus');</script>";
        echo "<script>window.location.replace('products-by-u.php');</script>";
        exit();
    } else {
        echo "<script>alert('Data produk By.u berhasil dihapus');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'products-by-u.php'; }, 1000);</script>";
        exit();
    }
    
?>
