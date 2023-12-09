<?php
session_start();
include "../config/koneksi.php";

if (isset($koneksi)) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $query = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_array($query);
        $level = $data['level']; 
        
        $_SESSION['username'] = $username;
        $_SESSION['level'] = $level; 
        $_SESSION['login'] = true;

        if ($level === 'pengguna') {
            header("location: index.php");
        } elseif ($level === 'admin') {
            header("location: ../admin/dashbord.php");
        } else {
            header("location: index.php");
        }
        
    } else {
        echo "<script>alert('Username atau password salah. Silakan coba lagi');</script>";
        header("refresh:3;url=login.php");
    }
}
?>