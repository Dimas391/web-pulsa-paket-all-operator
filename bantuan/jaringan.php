<?php
session_start();
include("../config/koneksi.php");
include("../config/header.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bantuan</title>
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="../assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/js/script.js" defer></script>
  </head>
  <style>
        * {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
    }
    .form-bantuan-general {
      background-image: url("/img/bgrnd/bg1.jpg");
      background-repeat: no-repeat;
      background-position: center;
      background-size: 100%;
      padding: 50px;
      border-radius: 50px;
      height: 220px;
      width: 600px;
      position: relative;
      margin-top: -360px;
      margin-left: 580px;
    }

    #banner {
      margin-bottom: 200px;
    }
    .isi {
      height: 50vh;
    }
    .isi .list-group {
      width: 230px;
    }
    .isi .list-group a{
      text-decoration: none;
    }
    .isikanan {
      position: relative;
      margin-top: -300px;
      margin-left: 330px;
    }
    .isikanan .list-group {
      width: 870px;
    }
    .isikanan .list-group .list-group-item {
      margin-bottom: 20px;
    }
    .isikanan .list-group-item:hover {
      -webkit-box-shadow: -1px 9px 10px -10px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: -1px 9px 10px -10px rgba(0, 0, 0, 0.75);
      box-shadow: -1px 9px 10px -10px rgba(0, 0, 0, 0.75);
    }
    .komentar {
      margin-top: 100px;
    }
    .comen {
      cursor: pointer;
    }
    .comen:hover {
      -webkit-box-shadow: -1px 9px 40px -12px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: -1px 9px 40px -12px rgba(0, 0, 0, 0.75);
      box-shadow: -1px 9px 40px -12px rgba(0, 0, 0, 0.75);
    }
    .comen .card:hover{
      transform: scale(1.07);
    }
  </style>
  <body>
    <!--Navbar-->
    <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="zee"><img src="../assets/img/logo/logo.jpg" height="60px" width="60px"></div>
      <div class="logo"><a href="#">Aero cell</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">Aero Cell</span>
          <i class='bx bx-x'></i>
        </div>
        <ul class="links">
          <li><a href="../auth/index.php" style="font-family: italic">Beranda</a></li>
          <li><a href="../pulsa/pulsa.php" style="font-family: italic">Pulsa</a></li>
          <li>
            <a href="#" style="font-family: italic">Produk & Paket</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="../product dan paket/produktelkomsel.php" style="font-family: italic">Telkomsel</a>
                <a href="../product dan paket/produkaxis.php" style="font-family: italic">Axis</a>
                <a href="../product dan paket/produkindoosat.php" style="font-family: italic">Indoosat</a>
                <a href="../product dan paket/produkxl.php" style="font-family: italic">XL</a>
                <a href="../product dan paket/produkbyu.php" style="font-family: italic">By.u</a>
                <a href="../product dan paket/produksmartfren.php" style="font-family: italic">Smartfren</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="../promo/promo.php" style="font-family: italic">Promo</a>
          </li>
          <li><a href="../bantuan/bantuan.php" style="font-family: italic">Bantuan</a></li>
          <li><a href="#"></a></li>
        </ul>
      </div>

      <div class="header">
        <button type="button" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
          </svg>
          <?= $username ?>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="../auth/profil.php" style="font-family: italic">Ganti Password</a></li>
          <li><a class="dropdown-item" href="../auth/logout.php" style="font-family: italic">Logout</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
        </ul>
      </div>

      <div class="search-box">
        <i class='bx bx-search'></i>
        <div class="input-box">
          <input type="text" placeholder="Cari....">
        </div>
      </div>
      <div class="keranjang">
        <a href="../Pembayaran/pembayaran.php"><i class="fas fa-cart-shopping" style="color: black;"></i></a>
      </div>
    </div>
  </nav>

    <section id="banner">
      <div>
        <img src="../assets/img/bgrnd/pngtree-summer-paper-cut-style-blue-wave-background-banner-image_387210.jpg" alt="" width="1280px" height="450px" />
        <div class="container">
          <div class="form-bantuan-general">
            <div class="heading">
              <h5 style="color: white; margin-top: -20px; padding-bottom: 10px">Selamat Datang di<br />Pusat Layanan Aero Cell</h5>
              <h2>Kamu perlu bantuan apa?</h2>
            </div>
            <form class="form-bantuan-wrapper" id="search-bantuan">
              <div class="form-group">
                <input type="hidden" name="_token" value="PzzPIS2G1f7RFbuLE8sT4qJfdVxnrRJM4Y1G2q7X" />
                <div class="input-group">
                  <input type="text" class="form-control" name="bantuan" id="bantuan" placeholder="Masukkan kata kunci pencarian" required />
                  <span class="input-group-btn" style="background-color: white">
                    <button class="btn btn-search" type="submit" id="submit-button">
                      <i class="fas fa-search"></i>
                    </button>
                  </span>
                </div>
                <div class="invalid-feedback">Masukkan kata kunci pencarian</div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section id="populer" class="isi">
      <div class="container">
        <div class="list-group">
          <a href="bantuan.php"><button type="button" class="list-group-item list-group-item-action" aria-current="true">Populer</button></a>
          <a href="kartuhelp.php"><button type="button" class="list-group-item list-group-item-action">Kartu</button></a>
          <a href="layanan.php"><button type="button" class="list-group-item list-group-item-action">Layanan</button></a>
          <a href="pulsahelp.php"><button type="button" class="list-group-item list-group-item-action">Pulsa</button></a>
          <a href="jaringan.php"><button type="button" class="list-group-item list-group-item-action active">Jaringan</button></a>
        </div>
      </div>
    </section>

    <section class="isikanan" id="populer">
      <div class="list-group">
        <button type="button" class="list-group-item list-group-item-action" aria-current="true">Cara Ganti Akun Ke 4G <i class="bx bxs-chevron-right" style="margin-left: 600px"></i></button>
        <button type="button" class="list-group-item list-group-item-action">Cara Cek Kuota <i class="bx bxs-chevron-right" style="margin-left: 653px"></i></button>
        <button type="button" class="list-group-item list-group-item-action">Bagaimana Cara Mengatasi Ketika Paket Tidak Masuk <i class="bx bxs-chevron-right" style="margin-left: 350px"></i></button>
        <button type="button" class="list-group-item list-group-item-action">Bagaimana Cara Menggunakan Metode Pembayaran <i class="bx bxs-chevron-right" style="margin-left: 348px"></i></button>
        <button type="button" class="list-group-item list-group-item-action">Apa Kelebihan Menggunakan Web Kami<i class="bx bxs-chevron-right" style="margin-left: 460px"></i></button>
        <button type="button" class="list-group-item list-group-item-action">Bagaimana Cara Membeli Paket Di Web Kami<i class="bx bxs-chevron-right" style="margin-left: 415px"></i></button>
      </div>
    </section>


    <section class="komentar">
      <div class="container">
        <h4 style="text-align: center; padding-bottom: 100px;">Komentar</h4>
        <div class="row">
          <div class="col-md-4 comen">
            <div class="card">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <br />
                <p style="text-align: right">~ Clarissa Felcya</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 comen">
            <div class="card">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <br />
                <p style="text-align: right">~ Reyhandika Aizer</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 comen">
            <div class="card">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <br />
                <p style="text-align: right">~ Zeekyra Putri</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section style="padding-top: 30px; margin-bottom: -100px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
            <div class="card" style="border: none">
              <div class="card-body"></div>
            </div>
          </div>

          <div class="col-lg-4 comen">
            <div class="card">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <br />
                <p style="text-align: right">~ Adinda Prillya Putri</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 comen">
            <div class="card">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <br />
                <p style="text-align: right">~ Enziel Winiesa</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   <!-- Footer Starts -->

<footer style="margin-top: 200px;">
  <div class="container">
  <div data-aos="fade-right">
      <div class="row">
          <div class="col-lg-4 col-sm-8">
              <div class="single-box">
                  <h4 style="color: white;">Ada Pertanyaan? <br>
                    Tanyakan Pada Kami!
                  </h4>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan Nama..." aria-describedby="basic-addon2">
            </div>
                  <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Silahkan Tanyakan Disini..." aria-describedby="basic-addon2" >
              </div>
              <span class="input-group-text" id="basic-addon2" style="width: 70px; margin-left: 280px;"><a>Kirim</a></span>
          </div>
      </div>

      <div class="col-lg-4 col-sm-4">
        <div class="single-box"></div>
      </div>

      <div class="col-lg-4 col-sm-8">
        <div class="single-box" >
            <img src="img/logo.png" alt="">
        <p style="font-family: Poppins, sans-serif;">Semoga Kami Dapat Membantu Anda Dalam Kemudahan Pemberian Pertanyaan Dan Pencarian Bantuan.</p>
        </div>
        </div>
    </div>
  </div>

  <div data-aos="fade-right">
  <div class="foot">
    <h5 style="color: white; padding-bottom: 10px; margin-left: 8px;">Media Sosial</h5>
    <div class="wrapper">
      <div class="button">
         <div class="icon">
            <a href=""><i class="fab fa-facebook-f"></i></a>
         </div>
         <a href=""><span>Facebook</span></a>
      </div>
      <div class="button">
         <div class="icon">
            <a href=""><i class="fab fa-twitter"></i></a>
         </div>
         <a href=""><span>Twitter</span></a>
      </div>
      <div class="button">
         <div class="icon">
            <a href=""><i class="fab fa-instagram"></i></a>
         </div>
         <a href=""><span>Instagram</span></a>
      </div>
      <div class="button">
         <div class="icon">
            <a href=""><i class="fab fa-github"></i></a>
         </div>
         <a href=""><span>Github</span></a>
      </div>
      <div class="button">
         <div class="icon">
            <a href=""><i class="fab fa-youtube"></i></a>
         </div>
         <a href=""><span>YouTube</span></a>
      </div>
    </div>
  </div>

  <div class="container-sm help">
    <div class="row">
      <div class="col-lg-8">
        <h5 style="color: white;">Cek & Beli Kuota Data Internet <br>Di Aero Cell</h5>
        <span>Download Sekarang</span>
        <div style="padding-top: 20px;">
          <img src="../assets/img/logo/google-play-and-apple-app-store-logos-22.png" alt="" height="50px" width="350px">
        </div>
      </div>
      <div class="col-lg-4">
        <h5 style="color: white;">Jelajahi</h5>
        <span>Aero Cell App
        <br>Tentang Kami
        <br>Call Center
        <br>Daftar
        <br>Jaringan</span>
      </div>
    </div>
  </div>
  </div>
</div>
</footer>

<div style="padding-top: 20px;
background-color: navy;
background-repeat: no-repeat;
background-position: center;
background-size: 100%;
height: 10vh;">
  <h6> <span style="text-align: left; color: white; margin-left: 80px; padding-right: 530px;">Copyright @Aero Cell, 2023</span>
   <span style="text-align: right; color: white;">Kebijakan Privasi &nbsp; | &nbsp;Syarat & Ketentuan</span></h6>
</div>
    <script type="text/javascript" src="/js/jquery-3.6.4.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
