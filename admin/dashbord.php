<?php
session_start();

include("../config/header.php");
include("../config/koneksi.php");

if (!isset($_SESSION['login'])) {
  header("location: ../auth/login.php");
  exit;
}
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
  <script src="../assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="../assets/js/script.js" defer></script>
</head>

<style>
  nav {
    background-color: #0000FF;
  }

  @import url("https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap");

  /*  styling scrollbars  */
  ::-webkit-scrollbar {
    width: 5px;
    height: 6px;
  }

  ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px #a5aaad;
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb {
    background: #3ea175;
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: #a5aaad;
  }

  * {
    margin: 0;
    padding: 0;
  }

  body {
    box-sizing: border-box;
    font-family: "Lato", sans-serif;
  }

  .text-primary-p {
    color: #a5aaad;
    font-size: 14px;
    font-weight: 700;
  }

  .font-bold {
    font-weight: 700;
  }

  .text-title {
    color: #2e4a66;
  }

  .text-lightblue {
    color: #469cac;
  }

  .text-red {
    color: #cc3d38;
  }

  .text-yellow {
    color: #a98921;
  }

  .text-green {
    color: #3b9668;
  }

  .container {
    display: grid;
    height: 100vh;
    grid-template-columns: 0.8fr 1fr 1fr 1fr;
    grid-template-rows: 0.2fr 3fr;
    grid-template-areas:
      "sidebar nav nav nav"
      "sidebar main main main";
    /* grid-gap: 0.2rem; */
  }

  main {
    background: #f3f4f6;
    grid-area: main;
    overflow-y: auto;
  }

  .main__container {
    padding: 20px 35px;
  }

  .main__title {
    display: flex;
    align-items: center;
  }

  .main__title>img {
    max-height: 100px;
    object-fit: contain;
    margin-right: 20px;
  }

  .main__greeting>h1 {
    font-size: 24px;
    color: #2e4a66;
    margin-bottom: 5px;
  }

  .main__greeting>p {
    font-size: 14px;
    font-weight: 700;
    color: #a5aaad;
  }

  .main__cards {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 30px;
    margin: 20px 0;
  }

  .card {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    height: 70px;
    padding: 25px;
    border-radius: 5px;
    background: #ffffff;
    box-shadow: 5px 5px 13px #ededed, -5px -5px 13px #ffffff;
  }

  .card_inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .card_inner>span {
    font-size: 25px;
  }

  .charts {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    margin-top: 50px;
  }

  .charts__left {
    padding: 25px;
    border-radius: 5px;
    background: #ffffff;
    box-shadow: 5px 5px 13px #ededed, -5px -5px 13px #ffffff;
  }

  .charts__left__title {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .charts__left__title>div>h1 {
    font-size: 24px;
    color: #2e4a66;
    margin-bottom: 5px;
  }

  .charts__left__title>div>p {
    font-size: 14px;
    font-weight: 700;
    color: #a5aaad;
  }

  .charts__left__title>i {
    color: #ffffff;
    font-size: 20px;
    background: #ffc100;
    border-radius: 200px 0px 200px 200px;
    -moz-border-radius: 200px 0px 200px 200px;
    -webkit-border-radius: 200px 0px 200px 200px;
    border: 0px solid #000000;
    padding: 15px;
  }

  .charts__right {
    padding: 25px;
    border-radius: 5px;
    background: #ffffff;
    box-shadow: 5px 5px 13px #ededed, -5px -5px 13px #ffffff;
  }

  .charts__right__title {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .charts__right__title>div>h1 {
    font-size: 24px;
    color: #2e4a66;
    margin-bottom: 5px;
  }

  .charts__right__title>div>p {
    font-size: 14px;
    font-weight: 700;
    color: #a5aaad;
  }

  .charts__right__title>i {
    color: #ffffff;
    font-size: 20px;
    background: #39447a;
    border-radius: 200px 0px 200px 200px;
    -moz-border-radius: 200px 0px 200px 200px;
    -webkit-border-radius: 200px 0px 200px 200px;
    border: 0px solid #000000;
    padding: 15px;
  }

  .charts__right__cards {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-top: 30px;
  }

  .card1 {
    background: #d1ecf1;
    color: #35a4ba;
    text-align: center;
    padding: 25px;
    border-radius: 5px;
    font-size: 14px;
  }

  .card2 {
    background: #d2f9ee;
    color: #38e1b0;
    text-align: center;
    padding: 25px;
    border-radius: 5px;
    font-size: 14px;
  }

  .card3 {
    background: #d6d8d9;
    color: #3a3e41;
    text-align: center;
    padding: 25px;
    border-radius: 5px;
    font-size: 14px;
  }

  .card4 {
    background: #fddcdf;
    color: #f65a6f;
    text-align: center;
    padding: 25px;
    border-radius: 5px;
    font-size: 14px;
  }

  @media only screen and (max-width: 855px) {
    .main__cards {
      grid-template-columns: 1fr;
      gap: 10px;
      margin-bottom: 0;
    }

    .charts {
      grid-template-columns: 1fr;
      margin-top: 30px;
    }
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
              <li><a class="dropdown-item" href="../auth/profil.php"font-family: italic">Profile</a></li>
              <li><a class="dropdown-item" href="../auth/logout.php" style="font-family: italic">Logout</a></li>
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
      <div class="col-lg-2 px-0" style="min-height: 90vh; font-size: 20px; margin-top: 60px; background-color: #ede9fe !important;">
        <div class="container-fluid" <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav d-flex flex-column gap-3 py-3">
            <!-- Semua elemen nav-link menggunakan latar belakang yang sama -->
            <li class="nav-item" style="background-color: #ede9fe; color: grey;">
              <a class="nav-link active fw-bold" aria-current="page" href="dashbord.php">Dashboard</a>
            </li>

            <li class="nav-item" style="background-color: #ede9fe; color: grey;">
              <a class="nav-link" aria-current="page" href="pengguna.php">Pengguna</a>
            </li>

            <p class="d-inline-flex gap-1">
              <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="text-decoration: none; color:grey; font-weight: normal  ">
                Produk paket
              </a>
            <div class="collapse" id="collapseExample">
              <li>
                <a class="nav-link" href="products-tekomsel.php" style="margin-top: -29px; margin-left: 6px; color: grey">Telkomsel</a>
              </li>
              <li>
                <a class="nav-link active fw-bold" href="products-axis.php" style="margin-top: -11px; margin-left: 6px; color: grey">Axis</a>
              </li>
              <li>
                <a class="nav-link" href="products-xl.php" style="margin-top: -11px; margin-left: 6px; color: grey">XL</a>
              </li>
              <li>
                <a class="nav-link" href="products-indosat.php" style="margin-top: -11px; margin-left: 6px; color: grey">Indosat</a>
              </li>
              <li>
                <a class="nav-link" href="products-by-u.php" style="margin-top: -11px; margin-left: 6px; color: grey">By.U</a>
              </li>
              <li>
                <a class="nav-link" href="products-smartfren.php" style="margin-top: -11px; margin-left: 6px; color: grey">Smartfren </a>
              </li>
            </div>
            <li class="nav-item" style="color:grey;">
              <a class="nav-link" href=" pulsa.php">Pulsa</a>
            </li>
        </div>
      </div>
      </nav>

      <div class="col-lg-10 p-4" style="margin-top: 70px;">
        <h5 style="font-weight: bold">Halaman Dashbord</h5>
        <div class="main__cards">
        </div>
        <!-- MAIN CARDS ENDS HERE -->

        <!-- CHARTS STARTS HERE -->
        <div class="charts">
          <div class="charts__left">
            <div class="charts__left__title">
              <div>
                <h1>Laporan Harian</h1>
                <p>Lhokseumawe, Aceh, Indonesia</p>
              </div>
              <i><img src="../assets/img/Rupaih.png" width="30px" height="30px" aria-hidden="true"></img></i>
            </div>
            <div id="apex1"></div>
          </div>

          <div class="charts__right">
            <div class="charts__right__title">
              <div>
                <h1>Laporan Pemasukkan</h1>
                <p>Lhokseumawe, Aceh, Indonesia</p>
              </div>
              <i class="" aria-hidden="true"><img src="../assets/img/Rupaih.png" width="30px" height="30px" alt=""></img></i>
            </div>

            <div class="charts__right__cards">
              <div class="card1">
                <h1>Pendapatan</h1>
                <p>Rp. 10.000.000</p>
              </div>

              <div class="card2">
                <h1>Penjualan</h1>
                <p>Rp. 20.000.000</p>
              </div>

              <div class="card3">
              <?php
            $query = mysqli_query($koneksi, "SELECT COUNT(id) AS total_users FROM user");
            $result = mysqli_fetch_assoc($query);
            $totalUsers = $result['total_users'];
            ?>
            <h1>Pengguna</h1>
            <p><?php echo $totalUsers; ?></p>
              </div>

              <div class="card4">
                <h1>Pembelian</h1>
                <p>100</p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
      </script>
    </div>
  </div>
  </div>
</body>

</html>