<?php
include("../config/koneksi.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $Nama_kartu = $_POST['Nama_kartu'];
    $Nama_produk = $_POST['Nama_produk'];
    $Kuota_utama = $_POST['Kuota_utama'];
    $Kuota_nelpon = $_POST['Kuota_nelpon'];
    $Kuota_malam = $_POST['Kuota_malam'];
    $Kuota_aplikasi = $_POST['Kuota_aplikasi'];
    $Harga = $_POST['Harga'];
    $Masa_aktif = $_POST['Masa_aktif'];
    $Keterangan = $_POST['Keterangan'];

    $sql = "UPDATE products_paket_indosat SET Nama_kartu=?, Nama_produk=?, Kuota_utama=?, Kuota_nelpon=?, Kuota_malam=?, Kuota_aplikasi=?, Harga=?, Masa_aktif=?, Keterangan=? WHERE id=?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("sssssssssi", $Nama_kartu, $Nama_produk, $Kuota_utama, $Kuota_nelpon, $Kuota_malam, $Kuota_aplikasi, $Harga, $Masa_aktif, $Keterangan, $id);
    $query = $stmt->execute();

    if ($query) {
        echo "<script>alert('Data produk indosat berhasil diupdate');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'products-indosat.php'; }, 1000);</script>";
        exit();
    } else {
        echo "<script>alert('Data gagal diupdate');</script>";
        echo "<script>window.location.replace('products-xl.php');</script>";
        exit();
    }
} else {
    echo "<script>window.location.replace('products-indosat.php');</script>";
    exit();
}
?>
