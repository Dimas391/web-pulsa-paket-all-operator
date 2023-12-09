<?php
session_start();
include "koneksi.php"

if(isset($koneksi)){
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string
}
?>