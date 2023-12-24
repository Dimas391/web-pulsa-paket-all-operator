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
  <html>

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pulsa Aero cell</title>
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/js/script.js" defer></script>
  </head>
  <style>
    body {
      overflow-x: hidden;
      font-family: italic;
    }

    .judul-produk {
      padding-top: 70px;
    }

    .judul-produk h1 {
      margin-top: -365px;
      font-size: 29px;
      padding: 109px;
      color: black;
      font-weight: bold;
    }

    .judul-produk p {
      padding: 123px;
      margin-top: -320px;
      margin-left: 750px;
      font-weight: bold;
    }

    .container .produk-pulsa h1 {
      margin: auto;
      padding-top: 150px;
      padding-bottom: 50px;
      margin-top: -150px;
      margin-left: 116px;
    }

    #con2 {
      height: 80vh;
    }

    #con2 .card {
      border: none;
    }

    #con2 .card a {
      text-decoration: none;
      color: black;
    }

    .con3 {
      height: 10vh;
    }

    .con3 .nav-link {
      color: black;
    }

    .con3 .nav-link:hover {
      color: blue;
    }

    #pulsaaero {
      height: 150vh;
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
            <li><a href="pulsa.php" style="font-family: italic">Pulsa</a></li>
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

    <div class="judul-produk">
      <section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#a2d9ff" fill-opacity="1" d="M0,160L120,170.7C240,181,480,203,720,208C960,213,1200,203,1320,197.3L1440,192L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
        </svg>
      </section>
      <h1>
        Pulsa All Operator<br />
        ke semua jaringan
      </h1>
      <p>Nikmati pulsa all Operator ke semua jaringan<br />24 jam tanpa batas harga murah dan terjangkau<br />nonstop anti ngedrop</p>
    </div>

    <section id="con2">
      <div class="container">
        <div class="produk-pulsa">
          <h1>Pulsa All Operator</h1>
        </div>
        <div class="row mx-2">
          <div class="card m-2 col-md-2" style="width: 10rem">
            <img src="../assets/img/logo/logo-telkomsel.png" class="card-img-top" alt="..." />
            <div class="card-body text-center">
              <a href=""></a>
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
    </section>

    <section>
      <div class="con3">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand">Produk Pulsa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <ul class="navbar-nav">
                <li><a class="nav-link active text-primary" aria-current="page" href="#">Aero Cell</a></li>
                <li><a class="nav-link" href="telkomsel.php">Telkomsel</a></li>
                <li><a class="nav-link" href="axis.php">Axis</a></li>
                <li><a class="nav-link" href="indoosat.php">Indoosat</a></li>
                <li><a class="nav-link" href="xl.php">XL</a></li>
                <li><a class="nav-link" href="byu.php">By.U</a></li>
                <li><a class="nav-link" href="smartfren.php">Smartfren</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </section>

    <section id="pulsaaero">
      <div class="container" style="padding-top: 40px; padding-bottom: 10px">
        <h4>
          Pulsa Yang Lagi Promo Dan Hitzzzz! <br />
          Rekomendasi Dari Kami
        </h4>
      </div>

      <?php
      $query = "SELECT * FROM products_pulsa WHERE Keterangan='hanya'";
      $result = mysqli_query($koneksi, $query);

      $rows = [];
      while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
      }
      ?>
      <div class="container">
        <div class="row">
          <?php foreach ($rows as $row) { ?>
            <div class="col-md-3" style="margin-bottom: 25px;">
              <div class="card">
                <img src="<?php echo $row['image']; ?>" />
                <div class="card-body">
                  <h5 class="card-title"><b><?php echo $row['Jenis_pulsa']; ?></b></h5>
                  <i class="card-title"><?php echo $row['Keterangan']; ?></i>
                  <p class="card-text">
                    <b><?php echo $row['harga']; ?></b><br />
                    <i class="fas fa-light fa-tag">
                      <del><?php echo $row['harga_asli']; ?></del>
                    </i>

                  </p>

                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['id']; ?>">Lihat</button>



                </div>

              </div>

            </div>
          <?php } ?>
        </div>

      </div>

      <?php foreach ($result as $row) { ?>
        <div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="Jenis_pulsa" name="Jenis_pulsa"><?php echo $row['Jenis_pulsa']; ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="../Pembayaran/proses-pembayaran.php" method="POST">
                  <?php
                  $id = $row['id'];
                  $query_penjualan = "SELECT No_Telepon FROM penjualan WHERE id = $id";
                  $result_penjualan = mysqli_query($koneksi, $query_penjualan);
                  $penjualan = mysqli_fetch_assoc($result_penjualan);
                  ?>
                  <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                  <div class=" align-items-center">
                    <div class="col-auto">
                      <input type="text" id="No_Telepon" name="No_Telepon" class="form-control" placeholder="Masukkan No Hp Anda" required>
                    </div>
                  </div>
                  <p class="card-text" id="harga" style="margin-top: 10px" name="harga">
                    <b>Rp. <?php echo $row['harga']; ?></b><br />
                  </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Beli</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>

      </div>

      </div>

    </section>




    <!-- Button trigger modal -->


    <!-- Button trigger modal -->


    <!-- Modal -->


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
              <img src="../assets/img/footerslide/im3_result.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="../assets/img/footerslide/zona2.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="../assets/img/footerslide/zona3_result.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="../assets/img/footerslide/byu2_result.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="../assets/img/footerslide/indo1_result.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="../assets/img/footerslide/telkom2_result.jpg" class="d-block w-100" alt="..." />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer Starts -->

    <footer>
      <div class="container">
        <div data-aos="fade-right">
          <div class="heading" style="padding-bottom: 50px">
            <h2 style="color: white; padding-bottom: 10px">Pembelian Pulsa Aero Cell Bikin Hidup Tenang Tanpa Pusing!</h2>
            <p style="color: white">
              Siapa sih yang tidak suka dengan berbalanja dengan mudah? Apalagi dengan tampilan web yang menarik dari Aero Cell, mana ada yang tahan. Kamu juga pasti suka kan dengan paket pulsa yang ada pada web satu ini. Selain dengan
              banyak promo pulsa yang tersedia, kamu bisa lebih bebas lagi berselancar di dunia maya.
            </p>
          </div>
        </div>

        <div data-aos="fade-right">
          <div class="foot">
            <h5 style="color: white; padding-bottom: 10px; margin-left: 8px">Media Sosial</h5>
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
                <h5 style="color: white">Cek & Beli Kuota Data Internet <br />Di Aero Cell</h5>
                <span style="color: white;">Download Sekarang</span>
                <div style="padding-top: 20px">
                  <img src="../assets/img/logo/google-play-and-apple-app-store-logos-22.png" alt="" height="50px" width="350px" />
                </div>
              </div>
              <div class="col-lg-4">
                <h5 style="color: white;">Jelajahi</h5>
                <span style="color: white">Aero Cell App <br />Tentang Kami <br />Call Center <br />Daftar <br />Jaringan</span>
              </div>
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
    <script type="text/javascript" src="../assets/js/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      AOS.init();
    </script>
  </body>

  </html>

  <script>
    function handlePurchase(productId) {
      // Lakukan apa yang diperlukan saat tombol Beli Langsung ditekan
      // Misalnya, Anda bisa lakukan operasi AJAX untuk mengirim data pembelian ke server
      // atau melakukan redirect ke halaman proses pembayaran dengan mengirimkan ID produk tertentu.

      // Contoh operasi AJAX sederhana
      $.ajax({
        url: 'proses-pembayaran.php', // URL ke file proses-pembayaran.php
        method: 'POST',
        data: {
          productId: productId,
          nomor_hp: $('#nomor_hp').val()
        }, // Data yang ingin dikirim ke server
        success: function(response) {
          // Handle respons dari server jika diperlukan
          console.log(response);
        },
        error: function(xhr, status, error) {
          // Handle error jika ada kesalahan saat melakukan operasi AJAX
          console.error(error);
        }
      });
    }
  </script>