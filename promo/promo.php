<?php
session_start();

include("../config/koneksi.php");
include("../config/header.php");

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
  <title>Pulsa Aero cell</title>
  <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="../assets/css/desainpaket.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>
  <script src="../assets/js/script.js" defer></script>
  <script src="../assets/js/promo.js" defer></script>
  <title>Promo</title>
</head>

<style>
  #con5 {
    margin-top: 30px;
  }

  #con6 {
    margin-top: 50px;
    height: 30vh;
  }

  span {
    font-family: italic;
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

  <!--Awal Lambang Paket-->

  <section id="lambang">
    <div class="container">
      <div class="produk-pulsa">
        <h1>Promo All Operator Aero Cell</h1>
      </div>
      <div class="cardpaket">
        <div class="row mx-3">
          <div class="card m-2 col-md-2" style="width: 10rem">
            <img src="../assets/img/logo/logo-telkomsel.png" class="card-img-top" alt="..." />
            <div class="card-body text-center">
              <span> Telkomsel </span>
            </div>
          </div>

          <div class="card m-2 col-md-2 p-1" style="width: 10rem">
            <img src="../assets/img/logo/Axis_logo.png" class="card-img-top" alt="..." />
            <div class="card-body text-center">
              <br />
              <span> Axis </span>
            </div>
          </div>

          <div class="card m-2 col-md-2 p-1" style="width: 10rem">
            <img src="../assets/img/logo/logo-indo.png" class="card-img-top" alt="..." />
            <div class="card-body text-center">
              <br />
              <br />
              <span> Indoosat </span>
            </div>
          </div>

          <div class="card m-2 col-md-2" style="width: 10rem">
            <img src="../assets/img/logo/XL_logo_2016.png" class="card-img-top" alt="..." />
            <div class="card-body text-center">
              <br />
              <span> XL </span>
            </div>
          </div>

          <div class="card m-2 col-md-2" style="width: 10rem">
            <img src="../assets/img/logo/Byu-logo-blue.svg.png" class="card-img-top" alt="..." />
            <div class="card-body text-center">
              <br />
              <br />
              <span> By.U </span>
            </div>
          </div>

          <div class="card m-2 col-md-2" style="width: 10rem">
            <img src="../assets/img/logo/smart.png" class="card-img-top" alt="..." />
            <div class="card-body text-center">
              <br />
              <br />
              <br /><br />
              <span> Smartfren </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Akhir Lambang paket-->

  <!--Awal promo paket-->
  <section id="promo">
    <div class="" data-aos="fade-up" data-aos-duration="3000">
      <div class="judul">
        <h1>Promo Telkomsel</h1>
        <div class="wrappaer">
          <i id="left" class="fa-solid fa-angle-left"></i>
          <div class="carousell">
            <a href="../product dan paket/produktelkomsel.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promotelkomsel.jpg" alt="img" draggable="false" href="" /></a>
            <a href="../product dan paket/produktelkomsel.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promotelkomsel2_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produktelkomsel.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promotelkomsel3_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produktelkomsel.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promotelkomsel4_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produktelkomsel.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promotelkomsel5_result.jpg" alt="img" draggable="false" /></a>
          </div>
          <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
      </div>
    </div>
  </section>

  <section id="promo">
    <div class="" data-aos="fade-up" data-aos-duration="3000">
      <div class="judul">
        <h1>Promo Axis</h1>
        <div class="wrappaer">
          <i id="left" class="fa-solid fa-angle-left"></i>
          <div class="carousell">
            <a href="../product dan paket/produkaxis.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoaxis_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produkaxis.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoaxis2_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produkaxis.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoaxis3jpg_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produkaxis.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoaxis4_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produkaxis.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoaxis5_result.jpg" alt="img" draggable="false" /></a>
          </div>
          <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
      </div>
    </div>
  </section>

  <section id="promo">
    <div class="" data-aos="fade-up" data-aos-duration="3000">
      <div class="judul">
        <h1>Promo Indoosat</h1>
        <div class="wrappaer">
          <i id="left" class="fa-solid fa-angle-left"></i>
          <div class="carousell">
            <a href="../product dan paket/produkindoosat.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoindosat_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produkindoosat.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoindosat2_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produkindoosat.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoindosat3_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produkindoosat.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoindoosat4_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produkindoosat.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoindosat5_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produkindoosat.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoindosat6_result.jpg" alt="img" draggable="false" /></a>
          </div>
          <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
      </div>
    </div>
  </section>

  <section id="promo">
    <div class="" data-aos="fade-up" data-aos-duration="3000">
      <div class="judul">
        <h1>Promo XL</h1>
        <div class="wrappaer">
          <i id="left" class="fa-solid fa-angle-left"></i>
          <div class="carousell">
            <a href="../product dan paket/produkxl.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoxl_result.png" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produkxl.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoxl2_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produkxl.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoxl3.png" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produkxl.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoxl4_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produkxl.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoxl5_result.png" alt="img" draggable="false" /></a>
          </div>
          <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
      </div>
    </div>
  </section>

  <section id="promo">
    <div class="" data-aos="fade-up" data-aos-duration="3000">
      <div class="judul">
        <h1>Promo By.U</h1>
        <div class="wrappaer">
          <i id="left" class="fa-solid fa-angle-left"></i>
          <div class="carousell">
            <a href="../product dan paket/produktelkomsel.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoby.u_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produktelkomsel.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoby.u2_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produktelkomsel.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoby.u3_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produktelkomsel.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoby.u4_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produktelkomsel.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoby.u45JPG_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produktelkomsel.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promoby.byu6_result.jpg" alt="img" draggable="false" /></a>
          </div>
          <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
      </div>
    </div>
  </section>

  <section id="promo">
    <div class="" data-aos="fade-up" data-aos-duration="3000">
      <div class="judul">
        <h1>Promo Smartfren</h1>
        <div class="wrappaer">
          <i id="left" class="fa-solid fa-angle-left"></i>
          <div class="carousell">
            <a href="../product dan paket/produksmartfren.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promosmartfren_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produksmartfren.php" style="margin-right: 20px;"><img src="../assets/img/promo paket//promosmartfren2_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produksmartfren.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promosmartfren3_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produksmartfren.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promosmartfren4_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produksmartfren.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promosmartfren5_result.jpg" alt="img" draggable="false" /></a>
            <a href="../product dan paket/produksmartfren.php" style="margin-right: 20px;"><img src="../assets/img/promo paket/promosmartfren6_result.jpg" alt="img" draggable="false" /></a>
          </div>
          <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
      </div>
    </div>
  </section>

  <section id="con5">
    <div class="container">
      <h3 style="margin-top: -20px;">Metode Pembayaran</h3><br>
      <div class="row mx-5">
        <div class="col-md-2">
          <img src="../assets/img/pembayaran/bni.png" width="80px" height="40px">
        </div>

        <div class="col-md-2">
          <img src="../assets/img/pembayaran/logo-bca.png" width="80px" height="35px">
        </div>

        <div class="col-md-2">
          <img src="../assets/img/pembayaran/bri.png" width="80px" height="40px">
        </div>

        <div class="col-md-2">
          <img src="../assets/img/pembayaran/bjb.png" width="80px" height="40px">
        </div>

        <div class="col-md-2">
          <img src="../assets/img/pembayaran/bankdki.png" width="80px" height="40px">
        </div>

        <div class="col-md-2">
          <img src="../assets/img/pembayaran/bankbb.png" width="80px" height="35px">
        </div>
      </div>
    </div>
  </section>
  <section id="con6">
    <div class="container">
      <div class="row mx-5">
        <div class="col-md-2">
          <img src="../assets/img/pembayaran/visa.png" width="80px" height="40px">
        </div>

        <div class="col-md-2">
          <img src="../assets/img/pembayaran/masterc.png" width="80px" height="40px">
        </div>

        <div class="col-md-2">
          <img src="../assets/img/pembayaran/paypal.png" width="80px" height="40px">
        </div>

        <div class="col-md-2">
          <img src="../assets/img/pembayaran/alfa.jpg" width="80px" height="60px">
        </div>

        <div class="col-md-2">
          <img src="../assets/img/pembayaran/indomaret.png" width="80px" height="40px">
        </div>

        <div class="col-md-2">
          <img src="../assets/img/pembayaran/gopay.jpg" width="80px" height="40px">
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="heading" style="padding-bottom: 50px">
        <h2 style="color: white; padding-bottom: 10px">Pembelian Pulsa Aero Cell Bikin Hidup Tenang Tanpa Pusing!</h2>
        <p style="color: white">
          Siapa sih yang tidak suka dengan berbalanja dengan mudah? Apalagi dengan tampilan web yang menarik dari Aero Cell, mana ada yang tahan. Kamu juga pasti suka kan dengan paket pulsa yang ada pada web satu ini. Selain dengan
          banyak promo pulsa yang tersedia, kamu bisa lebih bebas lagi berselancar di dunia maya.
        </p>
      </div>

      <div class="foot">
        <h5 style="color: white; padding-bottom: 10px; margin-left: 8px; font-family: italic;">Media Sosial</h5>
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
            <h5 style="color: white; font-family: italic;">Cek & Beli Kuota Data Internet <br />Di Aero Cell</h5>
            <span style="color: white;">Download Sekarang</span>
            <div style="padding-top: 20px">
              <img src="../assets/img/logo/google-play-and-apple-app-store-logos-22.png" alt="" height="50px" width="350px" />
            </div>
          </div>
          <div class="col-lg-4">
            <h5 style="color: white; font-family: italic">Jelajahi</h5>
            <span style="color: white;">Aero Cell App <br />Tentang Kami <br />Call Center <br />Daftar <br />Jaringan</span>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div style="padding-top: 20px; background-color: navy; background-repeat: no-repeat; background-position: center; background-size: 100%; height: 10vh">
    <h6><span style="text-align: left; color: white; margin-left: 80px; padding-right: 530px">Copyright @Aero Cell, 2023</span> <span style="text-align: right; color: white">Kebijakan Privasi &nbsp; | &nbsp;Syarat & Ketentuan</span></h6>
  </div>

  <script type="text/javascript" src="../assets/js/jquery-3.6.4.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../assets/js/swiper-bundle.min.js"></script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>