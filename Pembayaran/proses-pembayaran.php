<?php
session_start();
include("../config/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $No_Telepon = $_POST['No_Telepon'];
    

    // Simpan ke dalam tabel penjualan
    $query = $koneksi->prepare("INSERT INTO penjualan (id_penjualan, id, No_Telepon) VALUES (?, ?, ?)");
    $query->bind_param("sss", $id_penjualan, $id, $No_Telepon,);
    $query->execute();

    // Tambahkan ke dalam sesi $_SESSION['keranjang']
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        if (isset($_SESSION['keranjang'][$id])) {
            $_SESSION['keranjang'][$id] += 1;
        } else {
            $_SESSION['keranjang'][$id] = 1;
        }
    }

    // Redirect ke halaman pembayaran setelah proses selesai    
    echo "<script>alert('Silahkan melakukan pembayaran');</script>";
    echo "<script>location='pembayaran.php';</script>";
}
