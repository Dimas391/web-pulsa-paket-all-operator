<?php
include("../config/koneksi.php");

$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$Nama_kartu = (isset($_POST['Nama_kartu'])) ? $_POST['Nama_kartu'] : "";
$Nama_produk = (isset($_POST['Nama_produk'])) ? $_POST['Nama_produk'] : "";
$Kuota_utama = (isset($_POST['Kuota_utama'])) ? $_POST['Kuota_utama'] : "";
$Kuota_aplikasi = (isset($_POST['Kuota_aplikasi'])) ? $_POST['Kuota_aplikasi'] : "";
$Kuota_area = (isset($_POST['Kuota_area'])) ? $_POST['Kuota_area'] : "";
$Kuota_Nelpon = (isset($_POST['Kuota_Nelpon'])) ? $_POST['Kuota_Nelpon'] : "";
$Kuota_sosmed = (isset($_POST['Kuota_sosmed'])) ? $_POST['Kuota_sosmed'] : "";
$Kuota_pribadi = (isset($_POST['Kuota_pribadi'])) ? $_POST['Kuota_pribadi'] : "";
$Harga = (isset($_POST['Harga'])) ? $_POST['Harga'] : "";
$Masa_aktif = (isset($_POST['Masa_aktif'])) ? $_POST['Masa_aktif'] : "";
$Keterangan = (isset($_POST['Keterangan'])) ? $_POST['Keterangan'] : "";

if (!empty($Nama_kartu) && !empty($Nama_produk) && !empty($Kuota_utama) && !empty($Kuota_aplikasi) && !empty($Kuota_area) && !empty($Kuota_Nelpon) && !empty($Kuota_sosmed) && !empty($Kuota_pribadi) && !empty($Harga) && !empty($Masa_aktif) && !empty($Keterangan)) {

    $stmt = $koneksi->prepare("INSERT INTO products_paket_xl (Nama_kartu, Nama_produk, Kuota_utama, Kuota_aplikasi, Kuota_area, Kuota_Nelpon, Kuota_sosmed, Kuota_pribadi, Harga, Masa_aktif, Keterangan) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssss", $Nama_kartu, $Nama_produk, $Kuota_utama, $Kuota_aplikasi, $Kuota_area, $Kuota_Nelpon, $Kuota_sosmed, $Kuota_pribadi, $Harga, $Masa_aktif, $Keterangan);
    $query = $stmt->execute();

    if (!$query) {
        echo "<script>alert('Data gagal di tambah');</script>";
        echo "<script>window.location.replace('products-xl.php');</script>";
        exit();
    } else {
        echo "<script>alert('Data produk xl berhasil ditambah');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'products-xl.php'; }, 1000);</script>";
        exit();
    }
}
