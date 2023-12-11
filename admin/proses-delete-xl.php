<?php
include("../config/koneksi.php");

$id = (isset($_POST['id'])) ? $_POST['id'] : "";

    $stmt = $koneksi->prepare("DELETE FROM products_paket_xl WHERE id='$id'");
    $query = $stmt->execute();

    if (!$query) {
        echo "<script>alert('Data gagal di hapus');</script>";
        echo "<script>window.location.replace('products-xl.php');</script>";
        exit();
    } else {
        echo "<script>alert('Data products XL berhasil dihapus');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'products-xl.php'; }, 1000);</script>";
        exit();
    }
    
?>
