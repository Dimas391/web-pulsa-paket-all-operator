<?php
include("../config/koneksi.php");

$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$Nama_kartu = (isset($_POST['Nama_kartu'])) ? $_POST['Nama_kartu'] : "";
$Nama_produk = (isset($_POST['Nama_produk'])) ? $_POST['Nama_produk'] : "";
$Kuota_utama = (isset($_POST['Kuota_utama'])) ? $_POST['Kuota_utama'] : "";
$Kuota_nelpon = (isset($_POST['Kuota_nelpon'])) ? $_POST['Kuota_nelpon'] : "";
$Kuota_malam = (isset($_POST['Kuota_malam'])) ? $_POST['Kuota_malam'] : "";
$Kuota_aplikasi = (isset($_POST['Kuota_aplikasi'])) ? $_POST['Kuota_aplikasi'] : "";
$Harga = (isset($_POST['Harga'])) ? $_POST['Harga'] : "";
$Masa_aktif = (isset($_POST['Masa_aktif'])) ? $_POST['Masa_aktif'] : "";
$Keterangan = (isset($_POST['Keterangan'])) ? $_POST['Keterangan'] : "";

if (!empty($Nama_kartu) && !empty($Nama_produk) && !empty($Kuota_utama) && !empty($Kuota_nelpon) && !empty($Kuota_malam) && !empty($Kuota_aplikasi) && !empty($Harga) && !empty($Masa_aktif) && !empty($Keterangan)) {

    $stmt = $koneksi->prepare("INSERT INTO products_paket_indosat (Nama_kartu, Nama_produk, Kuota_utama, Kuota_nelpon, Kuota_malam, Kuota_aplikasi, Harga, Masa_aktif, Keterangan) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $Nama_kartu, $Nama_produk, $Kuota_utama, $Kuota_nelpon, $Kuota_malam, $Kuota_aplikasi, $Harga, $Masa_aktif, $Keterangan);
    $query = $stmt->execute();

    if (!$query) {
        echo "<script>alert('Data gagal di tambah');</script>";
        echo "<script>window.location.replace('products-indosat.php');</script>";
        exit();
    } else {
        echo "<script>alert('Data produk indosat berhasil ditambah');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'products-indosat.php'; }, 1000);</script>";
        exit();
    }
}
