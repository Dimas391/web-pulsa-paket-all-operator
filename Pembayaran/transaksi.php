<?php
session_start();
include("../config/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Tanggal_transaksi = date('Y-m-d'); // Isi dengan tanggal saat ini

    // Simpan ke dalam tabel penjualan
    $query = $koneksi->prepare("INSERT INTO transaksi (Tanggal_transaksi) VALUES (?)");
    $query->bind_param("s", $Tanggal_transaksi);
    $query->execute();

    if (isset($_SESSION['keranjang'])) {
        unset($_SESSION['keranjang']); // Mengosongkan keranjang
    }

    // Redirect ke halaman pembayaran setelah proses selesai    
    echo "<script>alert('Terimah Kasih Sudah Membeli Products di Web Aero Cell');</script>";
    echo "<script>location='../auth/index.php';</script>";
}
?>
