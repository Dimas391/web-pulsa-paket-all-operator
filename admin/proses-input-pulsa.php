<?php
include("../config/koneksi.php");

$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$Jenis_pulsa = (isset($_POST['Jenis_pulsa'])) ? $_POST['Jenis_pulsa'] : "";
$harga = (isset($_POST['harga_asli'])) ? $_POST['harga_asli'] : "";
$harga_asli = (isset($_POST['harga'])) ? $_POST['harga'] : "";

if (!empty($Jenis_pulsa) && !empty($harga_asli) && !empty($harga)) {

    $stmt = $koneksi->prepare("INSERT INTO products_pulsa (Jenis_pulsa, harga_asli, harga) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $Jenis_pulsa, $harga, $harga_asli);
    $query = $stmt->execute();

    if (!$query) {
        echo "<script>alert('Data gagal di tambah');</script>";
        echo "<script>window.location.replace('pulsa.php');</script>";
        exit();
    } else {
        echo "<script>alert('Data produk pulsa berhasil ditambah');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'pulsa.php'; }, 1000);</script>";
        exit();
    }
}
