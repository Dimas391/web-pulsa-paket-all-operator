<?php
include("../config/koneksi.php");

$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$Nama_kartu = (isset($_POST['Nama_kartu'])) ? $_POST['Nama_kartu'] : "";
$Nama_produk = (isset($_POST['Nama_produk'])) ? $_POST['Nama_produk'] : "";
$Kuota_local = (isset($_POST['Kuota_local'])) ? $_POST['Kuota_local'] : "";
$Kuota_video = (isset($_POST['Kuota_video'])) ? $_POST['Kuota_video'] : "";
$Kuota_game = (isset($_POST['Kuota_game'])) ? $_POST['Kuota_game'] : "";
$Kuota_sosmed = (isset($_POST['Kuota_sosmed'])) ? $_POST['Kuota_sosmed'] : "";
$Kuota_malam = (isset($_POST['Kuota_malam'])) ? $_POST['Kuota_malam'] : "";
$Harga = (isset($_POST['Harga'])) ? $_POST['Harga'] : "";
$Masa_aktif = (isset($_POST['Masa_aktif'])) ? $_POST['Masa_aktif'] : "";
$Keterangan = (isset($_POST['Keterangan'])) ? $_POST['Keterangan'] : "";

if (!empty($Nama_kartu) && !empty($Nama_produk) && !empty($Kuota_local) && !empty($Kuota_video) && !empty($Kuota_game) && !empty($Kuota_sosmed) && !empty($Kuota_malam) && !empty($Harga) && !empty($Masa_aktif) && !empty($Keterangan)) {

    $stmt = $koneksi->prepare("UPDATE products_paket_axis SET Nama_kartu='$Nama_kartu', Nama_produk='$Nama_produk', Kuota_local='$Kuota_local', Kuota_video='$Kuota_video', Kuota_game='$Kuota_game', Kuota_sosmed='$Kuota_sosmed', Kuota_malam='$Kuota_malam', Harga='$Harga', Masa_aktif='$Masa_aktif', Keterangan='$Keterangan' WHERE id='$id'");
    $query = $stmt->execute();

    if (!$query) {
        echo "<script>alert('Data gagal diperbarui');</script>";
        echo "<script>window.location.replace('products-axis.php');</script>";
        exit();
    } else {
        echo "<script>alert('Data produk axis berhasil diperbarui');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'products-axis.php'; }, 1000);</script>";
        exit();
    }
}
