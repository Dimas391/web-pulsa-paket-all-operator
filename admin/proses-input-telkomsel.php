<?php
include("../config/koneksi.php");

$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$Nama_Kartu = (isset($_POST['Nama_Kartu'])) ? $_POST['Nama_Kartu'] : "";
$Nama_produk = (isset($_POST['Nama_produk'])) ? $_POST['Nama_produk'] : "";
$Kuota_Internet = (isset($_POST['Kuota_Internet'])) ? $_POST['Kuota_Internet'] : "";
$Kuota_Sosmed = (isset($_POST['Kuota_Sosmed'])) ? $_POST['Kuota_Sosmed'] : "";
$Kuota_Nelpon = (isset($_POST['Kuota_Nelpon'])) ? $_POST['Kuota_Nelpon'] : "";
$Kuota_SMS = (isset($_POST['Kuota_SMS'])) ? $_POST['Kuota_SMS'] : "";
$harga = (isset($_POST['Harga'])) ? $_POST['Harga'] : "";
$Masa_aktif = (isset($_POST['Masa_aktif'])) ? $_POST['Masa_aktif'] : "";
$Keterangan = (isset($_POST['Keterangan'])) ? $_POST['Keterangan'] : "";

if (!empty($Nama_Kartu) && !empty($Nama_produk) && !empty($Kuota_Internet) && !empty($Kuota_Sosmed) && !empty($Kuota_Nelpon) && !empty($Kuota_SMS) && !empty($harga) && !empty($Masa_aktif) && !empty($Keterangan)) {

    $stmt = $koneksi->prepare("INSERT INTO products_paket_telkomsel (Nama_Kartu, Nama_produk, Kuota_Internet, Kuota_Sosmed, Kuota_Nelpon, Kuota_SMS, Harga, Masa_aktif, Keterangan) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $Nama_Kartu, $Nama_produk, $Kuota_Internet, $Kuota_Sosmed, $Kuota_Nelpon, $Kuota_SMS, $harga, $Masa_aktif, $Keterangan);
    $query = $stmt->execute();

    if (!$query) {
        echo "<script>alert('Data gagal di tambah');</script>";
        echo "<script>window.location.replace('products-telkomsel.php');</script>";
        exit();
    } else {
        echo "<script>alert('Data produk telkomsel berhasil ditambah');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'products-telkomsel.php'; }, 1000);</script>";
        exit();
    }
}
