<?php
session_start();

include("../config/header.php");
include("../config/koneksi.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aero cell</title>
  <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="../assets/js/script.js" defer></script>
</head>

<style>
  nav {
    background-color: #0000FF;
  }
</style>

<body>
  <!--Navbar-->
  <nav>
    <div class="sidebar">
      <div class="navbar">
        <i class='bx bx-menu'></i>
        <div class="zee" style="margin-left: -140px; margin-top: -14px"><img src="../assets/img/logo/logo.jpg" height="50px" width="60px"></div>
        <div class="logo"><a href="#" style="position: relative; top: -8px; margin-left: -510px; color: white;">Aero cell</a></div>
        <div class="nav-links">
          <div class="sidebar-logo">
            <span class="logo-name">Aero Cell</span>
            <i class='bx bx-x'></i>
          </div>
          <div class="header" style="margin-right: -570px">
            <a class="nav-link text-white d-flex align-items-center gap-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../assets//img/1175574.png" alt="" width="60" style="margin-left: 80px; margin-top: -16px" class="rounded">
              <p style="font-size:25px; margin-top: 8px"><?= $username ?></p>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#" style="font-family: italic">Profile</a></li>
              <li><a class="dropdown-item" href="../auth/logout.php" style="font-family: italic">Logout</a></li>
              <li><a class="dropdown-item" href="#" style="font-family: italic">Something else here</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
            </ul>
          </div>
        </div>
      </div>
  </nav>
  </div>

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-lg-2 px-0" style="min-height: 200vh; font-size: 20px; margin-top: 60px; background-color: #ede9fe !important;">
        <div class="container-fluid" <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav d-flex flex-column gap-3 py-3">
            <!-- Semua elemen nav-link menggunakan latar belakang yang sama -->
            <li class="nav-item" style="background-color: #ede9fe;">
              <a class="nav-link active fw-bold" aria-current="page" href="dashboard.php">Dashboard</a>
            </li>

            <li class="nav-item" style="background-color: #ede9fe; color: grey;">
              <a class="nav-link" aria-current="page" href="pengguna.php">Pengguna</a>
            </li>

            <p class="d-inline-flex gap-1">
              <a data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="text-decoration: none; color:grey; ">
                Produk paket
              </a>
            <div class="collapse" id="collapseExample">
              <li>
                <a class="nav-link" href="#" style="margin-top: -29px; margin-left: 6px; color: grey">Telkomsel</a>
              </li>
              <li>
                <a class="nav-link" href="#" style="margin-top: -11px; margin-left: 6px; color: grey">Axis</a>
              </li>
              <li>
                <a class="nav-link" href="#" style="margin-top: -11px; margin-left: 6px; color: grey">XL</a>
              </li>
              <li>
                <a class="nav-link" href="#" style="margin-top: -11px; margin-left: 6px; color: grey">Indosat</a>
              </li>
              <li>
                <a class="nav-link" href="#" style="margin-top: -11px; margin-left: 6px; color: grey">By.U</a>
              </li>
              <li>
                <a class="nav-link" href="#" style="margin-top: -11px; margin-left: 6px; color: grey">Smartfren </a>
              </li>
            </div>
            <li class="nav-item" style="color:grey;">
              <a class="nav-link" href="anggota.html">Pulsa</a>
            </li>
            <li class="nav-item" style="color:grey;">
              <a class="nav-link" href="kegiatanprestasi.html">Transaksi</a>
            </li>
        </div>
      </div>
      </nav>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
</body>

</html>