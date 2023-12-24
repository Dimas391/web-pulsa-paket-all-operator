<?php
session_start();

include("../config/koneksi.php");

$koneksi = new PDO(
    "mysql:host=localhost;dbname=paket",
    "root",
    "",
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);

$koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password_lama = $_POST['password_lama'];
    $password_baru = $_POST['password_baru'];
    $password_baru2 = $_POST['password_baru2'];

    $sql = "SELECT * FROM user WHERE username=:username";
    $query = $koneksi->prepare($sql);
    $query->execute(array('username' => $username));
    $user = $query->fetch();

    if ($user) {
        if ($password_lama === $user['password']) {
            if ($password_baru === $password_baru2) {
                $sqlUpdate = "UPDATE user SET password=:password WHERE username=:username";
                $queryUpdate = $koneksi->prepare($sqlUpdate);
                $queryUpdate->execute(array(
                    'password' => $password_baru,
                    'username' => $username
                ));

                if ($queryUpdate) {
                    echo "<script>alert('Password berhasil diubah!')</script>";
                } else {
                    echo '<div class="alert alert-danger" role="alert">Gagal mengubah password.</div>';
                }
            } else {
                echo '<div class="alert alert-danger" role="alert">Password baru tidak cocok.</div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">Password lama salah.</div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">Username tidak ditemukan.</div>';
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ganti Password</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3f4f6;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .card-body {
            padding: 40px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 4px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            width: 100%;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Ganti Password</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="profil.php">
                            <div class="form-group">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <label for="password_lama" class="form-label">Password Lama</label>
                                <input type="password" name="password_lama" class="form-control" placeholder="Password Lama" required>
                            </div>
                            <div class="form-group">
                                <label for="password_baru" class="form-label">Password Baru</label>
                                <input type="password" name="password_baru" class="form-control" placeholder="Password Baru" required>
                            </div>
                            <div class="form-group">
                                <label for="password_baru2" class="form-label">Ulangi Password Baru</label>
                                <input type="password" name="password_baru2" class="form-control" placeholder="Ulangi Password Baru" required>
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-top: 12px;">Simpan</button>
                            <a href="index.php" class="btn btn-secondary" style="margin-top: 12px; margin-left: 5px;">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
