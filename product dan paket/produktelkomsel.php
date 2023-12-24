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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aero cell produk</title>
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
    <script src="../assets/js/script.js" defer></script>
  </head>
  <style>
    :root {
      --sm-font: "Poppins", sans-serif;
      --navy: navy;
    }

    button .bg-primary {
      background-color: var(--navy) !important;
    }

    .btn-tombol-beli:not(.nav-btns button) {
      background-color: #fff;
      color: rgb(85, 85, 85);
      padding: 10px 28px;
      border-radius: 25px;
      border: 1px solid rgb(85, 85, 85);
    }

    .btn-tombol-beli:not(.nav-btns button):hover {
      background-color: var(--navy);
      color: #fff;
      border-color: var(--navy);
    }

    /* text color */
    .text-primary {
      color: var(--navy) !important;
    }

    /* collection */
    .active-filter-btn {
      background-color: var(--navy) !important;
      color: #fff !important;
      border-color: var(--navy) !important;
    }

    .filter-button-group .btn:hover {
      color: #fff !important;
    }

    .collection-img span {
      top: 20px;
      right: 20px;
      width: 46px;
      height: 46px;
      border-radius: 50%;
    }

    #collection {
      margin-top: 100px;
    }

    #tell .small {
      font-size: 12px;
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
                <li><a href="produktelkomsel.php" style="font-family: italic">Telkomsel</a>
                  <a href="produkaxis.php" style="font-family: italic">Axis</a>
                  <a href="produkindoosat.php" style="font-family: italic">Indoosat</a>
                  <a href="produkxl.php" style="font-family: italic">XL</a>
                  <a href="produkbyu.php" style="font-family: italic">By.u</a>
                  <a href="produksmartfren.php" style="font-family: italic">Smartfren</a>
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

    <section id="collection" class="py-5">
      <div class="container">
        <div class="title text-center">
          <h2 class="position-relative d-inline-block">Paket Telkomsel</h2>
        </div>

        <?php
        $query = "SELECT * FROM products_paket_telkomsel";
        $result = mysqli_query($koneksi, $query);

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
          $rows[] = $row;
        }
        ?>

        <div class="collection-list mt-4 row gx-0 gy-3">
          <?php foreach ($rows as $row) { ?>
            <div class="col-md-6 col-lg-3 col-xl-4 p-2 cs">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title"><?php echo $row['Nama_produk']; ?></h6>
                  <h3><?php echo $row['Keterangan']; ?></h3>
                  <br />
                  <h3 class="akhir">Rp. <?php echo $row['Harga'] ?></h3>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn-tombol-beli" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['id']; ?>">Lihat</button>
                </div>
              </div>
            </div>
          <?php } ?>

          <?php foreach ($rows as $row) { ?>
            <div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <!-- Mulai formulir di sini -->
                  <form action="../Pembayaran/proses-pembayaran-telkomsel.php" method="POST">
                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                    <div class="modal-body">
                      <div class="card">
                        <div class="card-body">
                          <p class="small">Internet <br /><?php echo $row['Kuota_Internet']; ?></p>
                          <p class="small">Sosmed <br /><?php echo $row['Kuota_Sosmed']; ?></p>
                          <p class="small">Nelpon <br /><?php echo $row['Kuota_Nelpon']; ?></p>
                          <p class="small">SMS <br /><?php echo $row['Kuota_SMS']; ?></p>
                          <h3 class="akhir">Rp. <?php echo $row['Harga'] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn-tombol-beli" data-bs-dismiss="modal">Batal</button>
                      <button type="submit" name="submit" class="btn-tombol-beli">Beli</button>
                    </div>
                  </form> <!-- Tutup formulir di sini -->
                </div>
              </div>
            </div>
          <?php } ?>

        </div>

      </div>
      </div>
    </section>
    <!-- end of collection -->

    <!-- Footer Starts -->

    <footer>
      <div class="container">
        <div class="heading" style="padding-bottom: 50px">
          <h2 style="color: white; padding-bottom: 10px">Pembelian Pulsa Aero Cell Bikin Hidup Tenang Tanpa Pusing!</h2>
          <p style="color: white">
            Siapa sih yang tidak suka dengan berbalanja dengan mudah? Apalagi dengan tampilan web yang menarik dari Aero Cell, mana ada yang tahan. Kamu juga pasti suka kan dengan paket pulsa yang ada pada web satu ini. Selain dengan banyak
            promo pulsa yang tersedia, kamu bisa lebih bebas lagi berselancar di dunia maya.
          </p>
        </div>

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
              <span style="color: white">Download Sekarang</span>
              <div style="padding-top: 20px">
                <img src="../assets/img/logo/google-play-and-apple-app-store-logos-22.png" alt="" height="50px" width="350px" />
              </div>
            </div>
            <div class="col-lg-4">
              <h5 style="color: white">Jelajahi</h5>
              <span style="color: white">Aero Cell App <br />Tentang Kami <br />Call Center <br />Daftar <br />Jaringan</span>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>

  </html>