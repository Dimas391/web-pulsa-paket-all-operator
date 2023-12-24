<?php
session_start();
include("../config/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_paket_telkomsel = $_POST['id'];

    // Simpan ke dalam tabel penjualan
    $query = $koneksi->prepare("INSERT INTO penjualan (id_penjualan, id_paket_telkomsel) VALUES (?, ?)");
    $query->bind_param("ss", $id_penjualan, $id_paket_telkomsel);
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
    echo "<script>location='pembyaran-telkomsel.php';</script>";
}
