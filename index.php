<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("location: ./auth/login.php");
  exit;
}
include("config/koneksi.php");
include("config/header.php");
?>
</style>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aero cell</title>
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="assets/js/script.js" defer></script>
</head>

<body>
  <!--Navbar-->
  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="zee"><img src="assets/img/logo/logo.jpg" height="60px" width="60px"></div>
      <div class="logo"><a href="#">Aero cell</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">Aero Cell</span>
          <i class='bx bx-x'></i>
        </div>
        <ul class="links">
          <li><a href="index.php" style="font-family: italic">Beranda</a></li>
          <li><a href="pulsa/pulsa.php" style="font-family: italic">Pulsa</a></li>
          <li>
            <a href="#" style="font-family: italic">Produk & Paket</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="product dan paket/produktelkomsel.php" style="font-family: italic">Telkomsel</a>
                <a href="product dan paket/produkaxis.php" style="font-family: italic">Axis</a>
                <a href="product dan paket/produkindoosat.php" style="font-family: italic">Indoosat</a>
                <a href="product dan paket/produkxl.php" style="font-family: italic">XL</a>
                <a href="product dan paket/produkbyu.php" style="font-family: italic">By.u</a>
                <a href="product dan paket/produksmartfren.php" style="font-family: italic">Smartfren</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="promo/promo.php" style="font-family: italic">Promo</a>
          </li>
          <li><a href="bantuan/bantuan.php" style="font-family: italic">Bantuan</a></li>
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
          <li><a class="dropdown-item" href="auth/profil.php" style="font-family: italic">Ganti Password</a></li>
          <li><a class="dropdown-item" href="auth/logout.php" style="font-family: italic">Logout</a></li>
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
        <a href="Pembayaran/pembayaran.php"><i class="fas fa-cart-shopping" style="color: black;"></i></a>
      </div>
    </div>
  </nav>

  <div class="slider">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div id="carouselExampleIndicators" class="carousel slide">
        <ol class="carousel-indicators">
          <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
          <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></li>
          <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></li>
          <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/ime1_result.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/telkom_result.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/axis_result.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/xl_result.jpg" class="d-block w-100" alt="...">
          </div>
        </div>

      </div>
    </div>
  </div>


  <!--Icons-->
  <section id="sec1">
    <div class="container">
      <div class="row mt-4">
        <div class="col-lg-5 col-md-2">
          <h1 class="pKiri" style="cursor: default; font-family: italic">Apa yang ingin kamu<br />cari ?</h1>
        </div>
        <div class="col-lg-2 col-sm-4 mt-3">
          <div class="pKanan">
            <div class="card kartu">
              <a href="product dan paket/produktelkomsel.php"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-clipboard2-data" viewBox="0 0 16 16">
                  <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z" />
                  <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z" />
                  <path d="M10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 0-1 1v3a1 1 0 1 0 2 0V9a1 1 0 0 0-1-1Z" />
                </svg></a>
            </div>
            <br>
            <p style="font-family: italic">Beli Kartu Perdana</p>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 mt-3">
          <div class="pKanan">
            <div class="card pulsa">
              <a href="pulsa/pulsa.php"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-window-plus" viewBox="0 0 16 16">
                  <path d="M2.5 5a.5.5 0 1 0  0-1 .5.5 0 0 0 0 1ZM4 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                  <path d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Z" />
                  <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z" />
                </svg> </a>
            </div>
            <br>
            <p style="font-family: italic">Isi Ulang Pulsa</p>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 mt-3">
          <div class="pKanan">
            <div class="card paket">
              <a href="product dan paket/produktelkomsel.php"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-credit-card-2-back" viewBox="0 0 16 16">
                  <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z" />
                  <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z" />
                </svg></a>
            </div>
            <br>
            <p style="font-family: italic">Beli Paket</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="sec2">
    <div class="container">
      <div class="row mt-5">
        <div class="mt-md-0 mt-sm-5 col-md-4">
          <h3 data-aos="fade-right" style="cursor: default; font-family: italic">Promo habis untuk<br>
            Pembelian Pertama Khusus <br>
            Kartu Indosat ooredoo</h3>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="card" data-aos="fade-up">
            <a href="promo/promo.php"><img src="assets/img/promoime1.png" class="card-img-top" alt="..."></a>
          </div>
        </div>

        <div class="col-md-4 col- col-sm-6">
          <div class="card" data-aos="fade-up">
            <a href="promo/promo.php"><img src="assets/img/promoime2.png" class="card-img-top" alt="..."></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="sec3">
    <div class="" data-aos="fade-up" data-aos-duration="3000">
      <div class="judul">
        <h2 style="color: black; font-family: italic">Promo Kartu Lainnya</h2>
      </div>
      <div class="wrappaer">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <div class="carousell">
          <a href="promo/promo.php" style="margin-right: 20px;"><img src="assets/img/promo/promo2_result.jpg" alt="img" draggable="false"></a>
          <a href="promo/promo.php" style="margin-right: 20px;"><img src="assets/img/promo/promo5_result.jpg" alt="img" draggable="false"></a>
          <a href="promo/promo.php" style="margin-right: 20px;"><img src="assets/img/promo/promo7_result.png" alt="img" draggable="false"></a>
          <a href="promo/promo.php" style="margin-right: 20px;"><img src="assets/img/promo/promo9_result.jpg" alt="img" draggable="false"></a>
          <a href="promo/promo.php" style="margin-right: 20px;"><img src="assets/img/promo/promo10_result.jpg" alt="img" draggable="false"></a>
          <a href="promo/promo.php" style="margin-right: 20px;"><img src="assets/img/promo/promo12_result.jpg" alt="img" draggable="false"></a>
        </div>
        <i id="right" class="fa-solid fa-angle-right"></i>
      </div>
    </div>
  </section>


  <section id="sec4">
    <div class="container" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
      <div class="heading">
        <h2 style="font-family: italic">Kenapa Harus Web Kami?</h2>
      </div>
      <div class="row">
        <div class="m-0 col-md-3 col-sm-4">
          <div class="card card-4g card-h-80" style="width: 7rem;">
            <img src="assets/img/icon/home-6-min.png" loading="lazy" alt="Icon About Us">
            <div class="heading">
              <h5 style="font-family: italic">Bonus Yang Melimpah</h5>
              <p class="mb-0" style="font-family: italic">Banyak Bonus Yang Bikin Kamu Ketagihan
              </p>
            </div>
          </div>
        </div>

        <div class="m-0 col-md-3 col-sm-4">
          <div class="card card-4g card-h-80" style="width: 6.5rem;">
            <img src="assets/img/icon/home-1-min.png" loading="lazy" alt="Icon About Us">
            <div class="heading">
              <h5 style="font-family: italic">Simple & Engga Ribet</h5>
              <p class="mb-0" style="font-family: italic">Kemudahan Anda Dalam Bertransaksi
              </p>
            </div>
          </div>
        </div>

        <div class="m-0 col-md-3 col-sm-4">
          <div class="card card-4g card-h-80" style="width: 6.5rem;">
            <img src="assets/img/icon/home-7-min.png" loading="lazy" alt="Icon About Us">
            <div class="heading">
              <h5 style="font-family: italic">Bebas Pilih Kuota</h5>
              <p class="mb-0" style="font-family: italic">Banyak Pilihan Kuota Murah Dan Irit
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
  </section>


  <section id="sec6">
    <div class="container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
      <h2 style="cursor: default; color: black; font-family: italic;">Promo Paket Data <br>
        All Operator
      </h2>
      <div id="carouselExampleControler" class="carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card text-center">
              <div class="img-wrapper">
                <img src="assets/img/logo/logo-telkomsel.png" alt="">
              </div>
              <div class="card-body">
                <h5 class="card-title" style="font-family: italic">Promo Telkom Sakti <br>
                  <b> 20 GB</b>
                </h5>
                <h6><b>Rp. 42.000 </b></h6>
                <p>Masa aktif 14 hari</p>
                <a href="product dan paket/produktelkomsel.php" class="btn btn-primary" style="font-family: italic">Beli Paket</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card text-center">
              <div class="img-wrapper">
                <img src="assets/img/logo/Axis_logo.png" alt="" width="150px">
              </div>
              <div class="card-body" style="font-family: italic">
                <h5 class="card-title" style="font-family: italic">Promo Axis Owsem <br>
                  <b> 17 GB</b>
                </h5>
                <h6><b>Rp. 20.000 </b></h6>
                <p>Masa aktif 30 hari</p>
                <a href="product dan paket/produkaxis.php" class="btn btn-primary" style="font-family: italic">Beli Paket</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card text-center">
              <div class="img-wrapper">
                <img src="assets/img/logo/logo-indo.png" alt="" width="150px">
              </div>
              <div class="card-body" style="font-family: italic">
                <h5 class="card-title">Indoosat Pasti Puas <br>
                  <b> 65 GB</b>
                </h5>
                <h6><b>Rp. 100.000 </b></h6>
                <p>Masa aktif 30 hari</p>
                <a href="product dan paket/produkindoosat.php" class="btn btn-primary" style="font-family: italic">Beli Paket</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card text-center">
              <div class="img-wrapper">
                <img src="assets/img/logo/XL_logo_2016.png" alt="" width="100px">
              </div>
              <div class="card-body">
                <h5 class="card-title" style="font-family: italic">Promo XL Combo Flex <br>
                  <b>45 GB</b>
                </h5>
                <h6><b>Rp. 70.000</b></h6>
                <p> Masa aktif 30 hari</p>
                <a href="product dan paket/produkxl.php" class="btn btn-primary" style="font-family: italic">Beli Paket</a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <section id="content-highlight" class="product-info">
    <div class="container hidden-xs" data-aos="zoom-in">
      <div class="product-info-title text-center">
        <h2 style="font-family: italic">Beli Pulsa di Aero Cell: Mudah, Cepat, Tidak Ribet</h2>
        <div>
          <p style="font-family: italic">Kehabisan
            pulsa di zaman serba online ini? kami menyediakan layanan isi ulang
            pulsa kapan saja dan dengan segala macam metode pembayaran. Tidak perlu
            lagi kesulitan online tengah malam karena layanan isi ulang pulsa di
            Aero Cell aktif 24 jam dan support segala macam jenis pembayaran. Isi
            ulang pulsa operator Telkomsel, Indosat, XL, Tri, Axis, dan
            Smartfren dengan beragam nominal yang tersedia mulai dari 5.000, 10.000
            sampai 500.000, semua hadir untuk kemudahan anda membeli pulsa secara
            online.
          </p>
          <p style="font-family: italic">Berbagai jenis pembayaran yang kami sediakan seperti Alfa dan Indo (Tunai), Bank BCA, Bank BNI, Bank BRI, Bank BTPN / JENIUS, Bank CIMB NIAGA, Bank DANAMON, Bank MANDIRI, Bank MUAMALAT, Bank PERMATA, Bank Syariah BSI, Via Scan QRIS, Via Virtual Account, sangat reliable dan
            cocok untuk anda yang mengutamakan kemudahan dan kecepatan dalam
            bertransaksi, anda cukup isi nomor handphone anda, memlih nominal pulsa
            yang anda inginkan, kemudian pilih metode pembayaran yang paling sesuai
            dengan anda.
          </p>
          <p style="font-family: italic">Bukan pulsa yang anda cari? Kami juga menyediakan berbagai macam
            layanan lainnya seperti isi ulang paket data untuk anda yang butuh kuota
            internet dengan harga murah, pembayaran BPJS, Pembayaran PLN, cicilan,
            tagihan Telkom, dan PDAM semua dengan proses yang sangat mudah, cepat,
            dan customer service yang aktif 24 jam.
          </p>
        </div>
      </div>
    </div>
  </section>


  <section class="sec7">
    <div id="caraouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>

        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/footerslide/im3_result.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/footerslide/zona2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/footerslide/zona3_result.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/footerslide/byu2_result.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/footerslide/indo1_result.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/footerslide/telkom2_result.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Starts -->

  <footer>
    <div class="container">
      <div data-aos="fade-right">
        <div class="row">
          <div class="col-lg-4 col-sm-8">
            <div class="single-box">
              <h2 style="font-family: italic">Ada Pertanyaan? <br>
                Tanyakan Pada Kami!
              </h2>
              <!--  
                  <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Silahkan Tanyakan Disini..." aria-label="Enter your Email ..." aria-describedby="basic-addon2">
                      <span class="input-group-text" id="basic-addon2"><a>Kirim</a></span>
              </div>
            -->
            </div>
          </div>

          <div class="col-lg-4 col-sm-4">
            <div class="single-box"></div>
          </div>

          <div class="col-lg-4 col-sm-8">
            <div class="single-box">
              <img src="assets/img/logo.png" alt="">
              <p style="font-family: italic">Silahkan membaca FAQ di halaman ini jika kamu membutuhkan pertanyaan jangan ragu untuk menghubungi kami.</p>
              <h3 style="cursor: pointer; padding-bottom: 5px;" style="font-family: italic">BACA FAQ DI SINI</h3>
              <a href="bantuan/bantuan.php" class="btn btn-primary" style="font-family: italic">Hubungi Kami</a>
            </div>
          </div>
        </div>
      </div>

      <div data-aos="fade-right">
        <div class="foot">
          <h5 style="color: white; padding-bottom: 10px; margin-left: 8px; font-family: italic">Media Sosial</h5>
          <div class="wrapper">
            <div class="button">
              <div class="icon">
                <a href=""><i class="fab fa-facebook-f"></i></a>
              </div>
              <a href=""><span style="font-family: italic">Facebook</span></a>
            </div>
            <div class="button">
              <div class="icon">
                <a href=""><i class="fab fa-twitter"></i></a>
              </div>
              <a href=""><span style="font-family: italic">Twitter</span></a>
            </div>
            <div class="button">
              <div class="icon">
                <a href=""><i class="fab fa-instagram"></i></a>
              </div>
              <a href=""><span style="font-family: italic">Instagram</span></a>
            </div>
            <div class="button">
              <div class="icon">
                <a href=""><i class="fab fa-github"></i></a>
              </div>
              <a href=""><span style="font-family: italic">Github</span></a>
            </div>
            <div class="button">
              <div class="icon">
                <a href=""><i class="fab fa-youtube"></i></a>
              </div>
              <a href=""><span style="font-family: italic">YouTube</span></a>
            </div>
          </div>
        </div>

        <div class="container-sm help">
          <div class="row">
            <div class="col-lg-8">
              <h5 style=" font-family: italic; color: white;">Cek & Beli Kuota Data Internet <br>Di Aero Cell</h5>
              <span style="font-family: italic; color: white">Download Sekarang</span>
              <div style="padding-top: 20px;">
                <img src="assets/img/logo/google-play-and-apple-app-store-logos-22.png" alt="" height="50px" width="350px">
              </div>
            </div>
            <div class="col-lg-4">
              <h5 style="color: white; font-style: italic;">Jelajahi</h5>
              <span style="font-family: italic; color: white;">Aero Cell App
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
    <h6> <span style="text-align: left; color: white; margin-left: 80px; padding-right: 530px; font-style: italic;">Copyright @Aero Cell, 2023</span>
      <span style="text-align: right; color: white; font-style: italic;">Kebijakan Privasi &nbsp; | &nbsp;Syarat & Ketentuan</span>
    </h6>
  </div>


  <script type="text/javascript" src="assets/js/jquery-3.6.4.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>