<?php
include("../config/koneksi.php");

$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$Nama_kartu = (isset($_POST['Nama_kartu'])) ? $_POST['Nama_kartu'] : "";
$Nama_produk = (isset($_POST['Nama_produk'])) ? $_POST['Nama_produk'] : "";
$Kuota_utama = (isset($_POST['Kuota_utama'])) ? $_POST['Kuota_utama'] : "";
$Kuota_aplikasi = (isset($_POST['Kuota_aplikasi'])) ? $_POST['Kuota_aplikasi'] : "";
$Kuota_local = (isset($_POST['Kuota_local'])) ? $_POST['Kuota_local'] : "";
$Harga = (isset($_POST['Harga'])) ? $_POST['Harga'] : "";
$Masa_aktif = (isset($_POST['Masa_aktif'])) ? $_POST['Masa_aktif'] : "";
$Keterangan = (isset($_POST['Keterangan'])) ? $_POST['Keterangan'] : "";

if (!empty($Nama_kartu) && !empty($Nama_produk) && !empty($Kuota_utama) && !empty($Kuota_aplikasi) && !empty($Kuota_local) && !empty($Harga) && !empty($Masa_aktif) && !empty($Keterangan)) {

    $stmt = $koneksi->prepare("INSERT INTO products_paket_smartfren (Nama_kartu, Nama_produk, Kuota_utama, Kuota_aplikasi, Kuota_local, Harga, Masa_aktif, Keterangan) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $Nama_kartu, $Nama_produk, $Kuota_utama, $Kuota_aplikasi, $Kuota_local, $Harga, $Masa_aktif, $Keterangan);
    $query = $stmt->execute();

    if (!$query) {
        echo "<script>alert('Data gagal di tambah');</script>";
        echo "<script>window.location.replace('products-smartfren.php');</script>";
        exit();
    } else {
        echo "<script>alert('Data produk smartfren berhasil ditambah');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'products-smartfren.php'; }, 1000);</script>";
        exit();
    }
}
