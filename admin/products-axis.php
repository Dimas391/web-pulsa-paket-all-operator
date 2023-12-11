<?php
session_start();

include("../config/header.php");
include("../config/koneksi.php");

$query = mysqli_query($koneksi, "SELECT * FROM products_paket_axis");
while ($_record = mysqli_fetch_array($query)) {
    $result[] = $_record;
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

    /* Gaya tambahan untuk DataTables */

    #myTable_filter {
        margin-bottom: 10px;
    }

    #myTable_paginate {
        margin-top: 10px;
    }

    /* Gaya untuk baris ganjil/genap */
    #myTable tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    #myTable tbody tr:hover {
        background-color: #f5f5f5;
    }

    #myTable {
        border-collapse: collapse;
    }

    #myTable th,
    #myTable td {
        border: 1px solid #ddd;
    }

    .dataTables_wrapper .btn:hover {
        font-size: 14px;
        background-color: #0000FF;
        padding: 5px 10px;
        color: white;
        border: none;
    }

    .dataTables_wrapper .btn {
        color: black;
    }

    .dataTables_wrapper .paginate_button {
        font-size: 14px;
        padding: 3px 8px;
        background-color: #33b5e5;
        color: red;
        border: none;
    }

    /* Gaya untuk tombol 'First' dan 'Last' pada pagination */
    .dataTables_wrapper .paginate_button.first,
    .dataTables_wrapper .paginate_button.last {
        font-size: 14px;
        padding: 3px 8px;
        background-color: #00bfff;
        color: red;
        border: none;
    }

    .dataTables_wrapper a:hover {
        background-color: transparent !important;
        color: #E3A413 !important;
        font-weight: bold;
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
            <div class="col-lg-2 px-0" style="min-height: 90vh; font-size: 20px; margin-top: 60px; background-color: #ede9fe !important;">
                <div class="container-fluid" <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav d-flex flex-column gap-3 py-3">
                        <!-- Semua elemen nav-link menggunakan latar belakang yang sama -->
                        <li class="nav-item" style="background-color: #ede9fe; color: grey;">
                            <a class="nav-link active" aria-current="page" href="dashbord.php">Dashboard</a>
                        </li>

                        <li class="nav-item" style="background-color: #ede9fe; color: grey;">
                            <a class="nav-link" aria-current="page" href="pengguna.php">Pengguna</a>
                        </li>

                        <p class="d-inline-flex gap-1">
                            <a class="nav-link active fw-bold" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="text-decoration: none; color:grey; font-weight: normal  ">
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
                        <li class="nav-item" style="color:grey;">
                            <a class="nav-link" href="transaksi.php">Transaksi</a>
                        </li>
                </div>
            </div>
            </nav>

            <div class="col-lg-10 p-4" style="margin-top: 70px;">
                <h5 style="font-weight: bold">Halaman Products Paket Axis</h5>
                <div class="row">
                    <div class="col d-flex justify-content-end mb-3" style="margin-top: 20px; margin-bottom: 20px;">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top: -10px;">Tambah</button>
                    </div>
                </div>

                <?php
                if (empty($result)) {
                    echo "Data user tidak ada";
                } else {

                ?>
                    <div class="table-responsive">

                        <table id="myTable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nama Kartu</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Kuota Utama</th>
                                    <th scope="col">Kuota Lokal</th>
                                    <th scope="col">Kuota Video</th>
                                    <th scope="col">Kuota Game</th>
                                    <th scope="col">Kuota Sosmed</th>
                                    <th scope="col">Kuota Malam</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Masa Aktif</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($result as $row) {
                                ?>
                                    <tr>
                                        <th align="center" scope="row" width="5%"><?php echo $row['id'] ?></th>
                                        <td width="30%"><?php echo $row['Nama_kartu'] ?></td>
                                        <td width="30%"><?php echo $row['Nama_produk'] ?></td>
                                        <td width="30%"><?php echo $row['Kuota_utama'] ?></td>
                                        <td width="30%"><?php echo $row['Kuota_local'] ?></td>
                                        <td width="30%"><?php echo $row['Kuota_video'] ?></td>
                                        <td width="30%"><?php echo $row['Kuota_game'] ?></td>
                                        <td width="30%"><?php echo $row['Kuota_sosmed'] ?></td>
                                        <td width="30%"><?php echo $row['Kuota_malam'] ?></td>
                                        <td width="30%"><?php echo $row['Harga'] ?></td>
                                        <td width="30%"><?php echo $row['Masa_aktif'] ?></td>
                                        <td width="30%"><?php echo $row['Keterangan'] ?></td>
                                        <td width="5%">
                                            <div class="d-flex gap-1" style="color: #0000FF;">
                                                <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1<?php echo $row['id'] ?>">
                                                    <i class="bi bi-eye fs-6"></i>
                                                </button>
                                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalupdate<?php echo $row['id'] ?>">
                                                    <i class="bi bi-pencil-square fs-6"></i>
                                                </button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModaldelete<?php echo $row['id'] ?>">
                                                    <i class="bi bi-trash fs-6"></i>
                                                </button>
                                            </div>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                <?php
                }
                ?>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

                <script>
                    $(document).ready(function() {
                        $('#myTable').DataTable();
                        $('.table').on('init.dt', function() {
                            $(this).find('.btn').removeClass('btn-warning').addClass('btn-info');
                        });
                    });
                </script>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Produk Paket Axis</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="proses-input-axis.php" method="POST">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Kartu</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="Nama_kartu">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput2" class="form-label">Nama Produk</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="Nama_produk">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput3" class="form-label">Kuota Local</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="Kuota_local">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput3" class="form-label">Kuota Game</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="Kuota_game">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput3" class="form-label">Kuota Video</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="Kuota_video">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput3" class="form-label">Kuota Sosmed</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="Kuota_sosmed">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput3" class="form-label">Kuota Malam</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="Kuota_malam">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput3" class="form-label">Harga</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="Harga">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput3" class="form-label">Masa Aktif</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="Masa_aktif">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput3" class="form-label">Keterangan</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="Keterangan">
                                    </div>

                                    <div class="modal-footer" style="margin-top: 32px;">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                foreach ($result as $row) {
                ?>
                    <div class="modal fade" id="exampleModal1<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail data Produk Telkomsel</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="proses-input-axis.php" method="POST">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Kartu</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="Nama_Kartu" value="<?php echo $row['Nama_kartu']; ?>" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput2" class="form-label">Nama Poduk</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="Nama_produk" value="<?php echo $row['Nama_produk']; ?>" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput3" class="form-label">Kuota Utama</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="Kuota_utama" value="<?php echo $row['Kuota_utama']; ?>" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput3" class="form-label">Kuota Local</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="Kuota_local" value="<?php echo $row['Kuota_local']; ?>" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput3" class="form-label">Kuota Video</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="Kuota_video" value="<?php echo $row['Kuota_video']; ?>" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput3" class="form-label">Kuota Game</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="Kuota_game" value="<?php echo $row['Kuota_game']; ?>" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput3" class="form-label">Kuota Sosmed</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="Kuota_sosmed" value="<?php echo $row['Kuota_sosmed']; ?>" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput3" class="form-label">Kuota Malam</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="Kuota_malam" value="<?php echo $row['Kuota_malam']; ?>" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput3" class="form-label">Harga</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="Harga" value="<?php echo $row['Harga']; ?>" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput3" class="form-label">Masa Aktif</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="Masa_aktif" value="<?php echo $row['Masa_aktif']; ?>" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput3" class="form-label">Keterangan</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="Keterangan" value="<?php echo $row['Keterangan']; ?>" disabled>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        <?php } ?>

        <?php
        foreach ($result as $row) {
        ?>
            <div class="modal fade" id="exampleModalupdate<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Data Produk Axis</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="proses-update-axis.php" method="POST">
                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Kartu</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Nama_kartu" value="<?php echo $row['Nama_kartu']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput2" class="form-label">Nama Poduk</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Nama_produk" value="<?php echo $row['Nama_produk']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">Kuota Utama</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Kuota_utama" value="<?php echo $row['Kuota_utama']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">Kuota Local</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Kuota_local" value="<?php echo $row['Kuota_local']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">Kuota Video</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Kuota_video" value="<?php echo $row['Kuota_video']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">Kuota Game</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Kuota_game" value="<?php echo $row['Kuota_game']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">Kuota Sosmed</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Kuota_sosmed" value="<?php echo $row['Kuota_sosmed']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">Kuota Malam</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Kuota_malam" value="<?php echo $row['Kuota_malam']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">Harga</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Harga" value="<?php echo $row['Harga']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">Masa Aktif</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Masa_aktif" value="<?php echo $row['Masa_aktif']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Keterangan" value="<?php echo $row['Keterangan']; ?>">
                                </div>

                                <div class="modal-footer" style="margin-top: 32px;">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>


        <?php
        foreach ($result as $row) {
        ?>
            <div class="modal fade" id="exampleModaldelete<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Produk Axis</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="proses-delete-axis.php" method="POST">
                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                <div class="col-lg-12">
                                    apakah anda yakin ingin menghapus data produk axis <b><?php echo $row['Nama_produk'] ?></b>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                                    <button type="submit" class="btn btn-danger" name="submit">HAPUS</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
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