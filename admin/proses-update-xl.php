<?php
include("../config/koneksi.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $Nama_kartu = $_POST['Nama_kartu'];
    $Nama_produk = $_POST['Nama_produk'];
    $Kuota_utama = $_POST['Kuota_utama'];
    $Kuota_aplikasi = $_POST['Kuota_aplikasi'];
    $Kuota_area = $_POST['Kuota_area'];
    $Kuota_Nelpon = $_POST['Kuota_Nelpon'];
    $Kuota_sosmed = $_POST['Kuota_sosmed'];
    $Kuota_pribadi = $_POST['Kuota_pribadi'];
    $Harga = $_POST['Harga'];
    $Masa_aktif = $_POST['Masa_aktif'];
    $Keterangan = $_POST['Keterangan'];

    $sql = "UPDATE products_paket_xl SET Nama_kartu=?, Nama_produk=?, Kuota_utama=?, Kuota_aplikasi=?, Kuota_area=?, Kuota_Nelpon=?, Kuota_sosmed=?, Kuota_pribadi=?, Harga=?, Masa_aktif=?, Keterangan=? WHERE id=?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("sssssssssssi", $Nama_kartu, $Nama_produk, $Kuota_utama, $Kuota_aplikasi, $Kuota_area, $Kuota_Nelpon, $Kuota_sosmed, $Kuota_pribadi, $Harga, $Masa_aktif, $Keterangan, $id);
    $query = $stmt->execute();

    if ($query) {
        echo "<script>alert('Data produk XL berhasil diupdate');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'products-xl.php'; }, 1000);</script>";
        exit();
    } else {
        echo "<script>alert('Data gagal diupdate');</script>";
        echo "<script>window.location.replace('products-xl.php');</script>";
        exit();
    }
} else {
    echo "<script>window.location.replace('products-xl.php');</script>";
    exit();
}
?>
