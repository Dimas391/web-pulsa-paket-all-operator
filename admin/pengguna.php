<?php
session_start();

include("../config/header.php");
include("../config/koneksi.php");

if (!isset($_SESSION['login'])) {
    header("location: ../auth/login.php");
    exit;
  }

$query = mysqli_query($koneksi, "SELECT * FROM user");
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
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
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

    /* Gaya tombol DataTables */
    .dataTables_wrapper .btn {
        font-size: 14px;
        /* Ubah ukuran font */
        padding: 5px 10px;
        /* Atur ukuran padding */
        /* Ganti warna latar belakang */
        color: white;
        /* Warna teks */
        border: none;
        /* Hapus border */
    }

    /* Gaya untuk hover tombol */
    .dataTables_wrapper .btn:hover {
        background-color: #0000FF;
        /* Ubah warna saat tombol dihover */
    }

    .dataTables_wrapper .paginate_button {
        font-size: 14px;
        padding: 3px 8px;
        background-color: #0000FF;
        color: white;
        border: none;
    }

    /* Gaya untuk hover pada tombol 'Next' dan 'Previous' */
    .dataTables_wrapper .paginate_button:hover {
        background-color: #00008B;
        /* Ubah warna saat dihover */
    }

    /* Gaya untuk tombol 'First' dan 'Last' pada pagination */
    .dataTables_wrapper .paginate_button.first,
    .dataTables_wrapper .paginate_button.last {
        font-size: 14px;
        padding: 3px 8px;
        background-color: #0000FF;
        color: white;
        border: none;
    }

    .dataTables_wrapper .paginate_button.first:hover,
    .dataTables_wrapper .paginate_button.last:hover {
        background-color: #00008B;
    }

    .dataTables_wrapper .paginate_button.current {
        font-size: 14px;
        padding: 3px 8px;
        background-color: red;
        color: white;
        border: none;
    }

    .dataTables_wrapper .btn {
        color: black;
    }

    .dataTables_wrapper .btn:hover {
        color: white;
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
                            <li><a class="dropdown-item" href="../auth/profil.php" style="font-family: italic">Profile</a></li>
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
                            <a class="nav-link active" aria-current="page" href="dashbord.php">Dashboard</a>
                        </li>

                        <li class="nav-item" style="background-color: #ede9fe; color: grey;">
                            <a class="nav-link active fw-bold" aria-current="page" href="pengguna.php">Pengguna</a>
                        </li>

                        <p class="d-inline-flex gap-1">
                            <a data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="text-decoration: none; color:grey; font-weight: normal  ">
                                Produk paket
                            </a>
                        <div class="collapse" id="collapseExample">
                            <li>
                                <a class="nav-link" href="products-tekomsel.php" style="margin-top: -29px; margin-left: 6px; color: grey">Telkomsel</a>
                            </li>
                            <li>
                                <a class="nav-link" href="products-axis.php" style="margin-top: -11px; margin-left: 6px; color: grey">Axis</a>
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
                            <a class="nav-link" href="pulsa.php">Pulsa</a>
                        </li>
                </div>
            </div>
            </nav>

            <div class="col-lg-10 p-4" style="margin-top: 70px;">
                <h5 style="font-weight: bold">HALAMAN USER</h5>
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
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($result as $row) {
                                ?>
                                    <tr>
                                        <th align="center" scope="row" width="5%"><?php echo $row['id'] ?></th>
                                        <td width="30%"><?php echo $row['username'] ?></td>
                                        <td width="30%"><?php echo $row['email'] ?></td>
                                        <td width="30%"><?php echo $row['level'] ?></td>
                                        <td width="5%">
                                            <div class="d-flex gap-1">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="bi bi-eye fs-6" data-bs-toggle="modal" data-bs-target="#exampleModal1<?php echo $row['id'] ?>"></i>
                                                </button>
                                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalupdate<?php echo $row['id'] ?>"><i class="bi bi-pencil-square fs-6"></i></button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModaldelete<?php echo $row['id'] ?>"><i class="bi bi-trash fs-6"></i></button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php
                }
                    ?>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

                    <script>
                        $(document).ready(function() {
                            $('#myTable').DataTable();
                            $('.table').on('init.dt', function() {
                                $(this).find('.btn').removeClass('btn-secondary').addClass('btn-info');
                            });
                        });
                    </script>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data User</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="proses-input-pengguna.php" method="POST">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="username">
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="email">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Level</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="level">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
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
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail data user</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="proses-input-pengguna.php" method="POST">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                                <input type="text" disabled class="form-control" id="exampleFormControlInput1" name="username" value="<?php echo $row['username'] ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                                <input type="text" disabled class="form-control" id="exampleFormControlInput1" name="email" value="<?php echo $row['email'] ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Level</label>
                                                <input type="text" disabled class="form-control" id="exampleFormControlInput1" name="level" value="<?php echo $row['level'] ?>">
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                    <div class="modal fade" id="exampleModalupdate<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Data User</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="proses-update-user.php" method="POST">
                                        <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                            <input type="text" required class="form-control" id="exampleFormControlInput1" name="username" value="<?php echo $row['username'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                                            <input type="text" required class="form-control" id="exampleFormControlInput1" name="email" value="<?php echo $row['email'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Level</label>
                                            <input type="text" required class="form-control" id="exampleFormControlInput1" name="level" value="<?php echo $row['level'] ?>">
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                                    <button type="submit" class="btn btn-primary" name="submit">SAVE</button>
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Data User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="proses-delete-user.php" method="POST">
                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                <div class="col-lg-12">
                                    apakah anda yakin ingin menghapus data user <b><?php echo $row['username'] ?></b>
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