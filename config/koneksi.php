<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "web_pulsa_all_operator";

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
} else {
    echo ("Koneksi Berhasil");
}
?>