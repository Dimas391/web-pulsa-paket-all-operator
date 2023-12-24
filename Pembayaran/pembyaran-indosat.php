<?php
session_start();
include("../config/koneksi.php");
include("../config/header.php");

?>
<!DOCTYPE html>
<html lang="en">
<style>
    .pembayaran {
        font-weight: bold;
        margin-top: 120px;
        margin-left: 170px;
        display: inline-block;
    }

    .form-check-label img {
        vertical-align: middle;
        /* Untuk menyamakan tinggi vertikal gambar dan teks */
    }

    .label-text {
        /* Untuk membuat teks sejajar dengan gambar */
        margin-left: 10px;
        /* Sesuaikan margin untuk penyesuaian horizontal */
        font-size: 20px;
        /* Ukuran font */
    }

    /* Aturan untuk membuat teks sejajar dengan gambar DANA */
    .dana-label {
        margin-top: -10px;
        margin-left: 62px;
        /* Sesuaikan margin untuk penyesuaian vertikal */
    }

    .ovo-label {
        position: absolute;
        margin-left: 77px;
        margin-top: 25px;
    }

    /* Aturan untuk membuat teks sejajar dengan gambar GOPAY */
    .shopee-label {
        position: absolute;
        margin-left: 43px;
        margin-top: 18px;
    }

    .bni-label {
        position: absolute;
        margin-left: 43px;
        margin-top: 1px;
    }

    .bca-label {
        position: absolute;
        margin-left: 63px;
        margin-top: 1px;
    }

    .bri-label {
        position: absolute;
        margin-left: 25px;
        margin-top: 16px;
    }

    .mandiri-label {
        position: absolute;
        margin-left: 48px;
        margin-top: 29px;
    }

    .btn-label {
        position: absolute;
        margin-left: 48px;
        margin-top: 20px;
    }
</style>

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
                    <li><a href="index.php" style="font-family: italic">Beranda</a></li>
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
                        <a href="../promo/promo.html" style="font-family: italic">Promo</a>
                    </li>
                    <li><a href="../bantuan/bantuan.html" style="font-family: italic">Bantuan</a></li>
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
                    <li><a class="dropdown-item" href="logout.php" style="font-family: italic">Logout</a></li>
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
                <a href="../keranjang/keranjang.html"><i class="fas fa-cart-shopping" style="color: black;"></i></a>
            </div>
        </div>
    </nav>

    <div style="display: flex; justify-content: space-between;">
        <div class="pembayaran">
            <div class="flex-container">
                <div class="form-container" style="position: absolute;">
                    <form action="transaksi.php" method="POST">
                        <h1>Pilih Metode Pembayaran</h1>
                        <div class="mb-3">
                            <label for="">E Wallet</label>
                            <fieldset class="row mb-3">
                                <div class="col-sm-12">
                                    <div class="form-check mb-3" style="margin-top: 12px;">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label style="font-size: 20px; margin-left: 10px;" class="form-check-label" for="gridRadios1">
                                            <img src="../assets/img/pembayaran/dana.png" width="40px" alt="dana" style="border-radius: 10px;">
                                            <span class="label-text dana-label">DANA</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        <label style="font-size: 20px; margin-left: 2px; margin-top: -130px" class="form-check-label" for="gridRadios2">
                                            <img src="../assets/img/pembayaran/gopay.jpg" width="100px" alt="dana" style="border-radius: 10px;">
                                            <span class="label-text gopay-label">GOPAY</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-top: 12px; " type="radio" name="gridRadios" id="gridRadios3" value="option2">
                                        <label style="position:relative; font-size: 20px; margin-left: 2px; margin-top: -200px" class="form-check-label" for="gridRadios3">
                                            <img src="../assets/img/pembayaran/ovo.png" width="40px" alt="ovo" style="border-radius: 10px; margin-top: 19px">
                                            <span class="label-text ovo-label">OVO</span>
                                        </label>
                                    </div>
                                    <div class="form-check" style="margin-top: 10px;">
                                        <input class="form-check-input" style="margin-top: 12px; " type="radio" name="gridRadios" id="gridRadios4" value="option2">
                                        <label style="position:relative; font-size: 20px; margin-left: 2px; margin-top: -200px" class="form-check-label" for="gridRadios4">
                                            <img src="../assets/img/pembayaran/shopee-pay.png" width="70px" alt="ovo" style="border-radius: 10px; margin-top: 19px">
                                            <span class="label-text shopee-label">Shopeepay</span>
                                        </label>
                                    </div>
                            </fieldset>
                            <hr style="border-top: 3px solid #ccc; margin: 20px 0;">
                            <label for="">Transfer virtual account</label>
                            <fieldset class="row mb-3">
                                <div class="col-sm-12">
                                    <div class="form-check mb-3" style="margin-top: 12px;">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios5" value="option1" checked>
                                        <label style="font-size: 20px; margin-left: 10px;" class="form-check-label" for="gridRadios5">
                                            <img src="../assets/img/pembayaran/bni.png" width="60px" alt="bni" style="border-radius: 10px;">
                                            <span class="label-text bni-label">VA BNI</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios6" value="option6">
                                        <label style="font-size: 20px; margin-left: 2px; margin-top: -130px" class="form-check-label" for="gridRadios6">
                                            <img src="../assets/img/pembayaran/logo-bca.png" width="50px" alt="BCA" style="border-radius: 10px;">
                                            <span class="label-text bca-label">VA BCA</span>
                                        </label>
                                    </div>
                                    <div class="form-check" style="margin-top: 10px;">
                                        <input class="form-check-input" style="margin-top: 12px; " type="radio" name="gridRadios" id="gridRadios7" value="option7">
                                        <label style="font-size: 20px; margin-left: 2px; margin-top: -200px" class="form-check-label" for="gridRadios7">
                                            <img src="../assets/img/pembayaran/bri.png" width="90px" alt="ovo" style="border-radius: 10px; margin-top: 19px">
                                            <span class="label-text bri-label">VA BRI</span>
                                        </label>
                                    </div>
                                    <div class="form-check" style="margin-top: 10px;">
                                        <input class="form-check-input" style="margin-top: 12px; " type="radio" name="gridRadios" id="gridRadios9" value="option9">
                                        <label style="font-size: 20px; margin-left: 2px; margin-top: -200px" class="form-check-label" for="gridRadios9">
                                            <img src="../assets/img/pembayaran/mandiri.jpg" width="70px" alt="ovo" style="border-radius: 10px; margin-top: 19px">
                                            <span class="label-text mandiri-label">VA MANDIRI</span>
                                        </label>
                                    </div>
                                    <div class="form-check" style="margin-top: 10px;">
                                        <input class="form-check-input" style="margin-top: 12px; " type="radio" name="gridRadios" id="gridRadios8" value="option8">
                                        <label style="font-size: 20px; margin-left: 2px; margin-top: -200px" class="form-check-label" for="gridRadios8">
                                            <img src="../assets/img/pembayaran/btn.jpg" width="70px" alt="ovo" style="border-radius: 10px; margin-top: 19px">
                                            <span class="label-text btn-label">VA BTN</span>
                                        </label>
                                    </div>
                            </fieldset>
                            <div class="mb-3" style="position:absolute; width: 400px; margin-left: 620px; margin-top: -580px; background-color:#eee; padding: 10px; height:">
                                <?php if (!empty($_SESSION["keranjang"])) : ?>
                                    <?php foreach ($_SESSION["keranjang"] as $id_paket_indosat => $jumlah) : ?>
                                        <?php
                                        $ambil = $koneksi->query("SELECT * FROM penjualan INNER JOIN products_paket_indosat ON penjualan.id_paket_indosat = products_paket_indosat.id WHERE penjualan.id_paket_indosat = '$id_paket_indosat'");
                                        if ($ambil && $ambil->num_rows > 0) {
                                            $row = $ambil->fetch_assoc();
                                            $subharga = $row["Harga"] * $jumlah;
                                        ?>
                                            
                                                <p>Nama Produk: <?php echo $row["Nama_produk"]; ?></p>
                                                <p>Total: Rp. <?php echo $row["Harga"]; ?></p>
                                                <p>Biaya Admin: - </p>
                                                <p>Diskon: - </p>
                                                <p>Total Tagihan: Rp. <?php echo $row["Harga"]; ?></p>
                                                <p>Rp. <?php echo number_format($subharga); ?></p>
                                                <hr style="border-top: 1px solid #ccc; margin-bottom: 10px;">
                                            <?php } else {
                                        } ?>
                                        <?php endforeach ?>

                                        <button type="submit" input="submit" name="submit" class="btn btn-success">Bayar</button>
                                    </form>
                                        <?php else : ?>
                                            <p>Keranjang kosong.</p>
                                        <?php endif ?>
                            </div>
                        </div>
                </div>


            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>