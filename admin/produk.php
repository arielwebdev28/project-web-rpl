<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>RPL SMKN 1 PRINGGABAYA PRODUCTION</title>
        <!-- Favicon-->
        <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
        <!-- link css -->
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    </head>
    <body style="background-color: rgb(58, 79, 172);">
        <!-- navbar-->
        <nav class="navbar navbar-expand-lg sticky-top bg-warning">
            <div class="container-fluid px-5">
            <img src="../assets/img/logonavbar.png" class="border-warning" width="120px" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="berita.php"><b>Admin</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="berita.php">Berita</a></li>
                        <li class="nav-item"><a class="nav-link" href="produk.php">Produk</a></li>
                        <li class="nav-item"><a class="nav-link" href="foto-kegiatan.php">Foto Kegiatan</a></li>
                    </ul>
                </div>                
                <form class="d-flex" role="search">
                    
                </form>
            </div>
        </nav>
        <!-- Content-->
        <div class="container">
            <form action="" method="" name="">
                <table class="w-100 mt-4 mb-2">
                    <tr>
                        <td class="w-75">
                            <a href="tambah-produk.php" class="btn btn-primary">Tambah Produk</a>
                        </td>
                        <td class="d-flex">
                            <input class="form-control" type="search" style="background-color: rgb(58, 79, 172); color: white;" placeholder="Cari Data" name="" aria-label="Search">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </td>
                    </tr>
                </table>
                <table class="table table-bordered table-striped table-responsive w-100">
                    <tr>
                        <th class="text-center">Nama Produk</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Keterangan</td>
                        <th class="text-center">Excerpt</td>
                        <th class="text-center">Tanggal Dibuat</td>
                        <th class="text-center">Sunting</td>
                    </tr>
                    <tr>
                        <td class="text-center">data dari db</td>
                        <td class="text-center">data dari db</td>
                        <td class="text-center">data dari db</td>
                        <td class="text-center">data dari db</td>
                        <td class="text-center">data dari db</td>
                        <td class="text-center">data dari db</td>
                        <td class="text-center">
                            <a href="update-produk.php" class="btn btn-warning">Edit</a><a href="delete-produk.php" class="btn btn-danger ms-3 me-3">Hapus</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <!-- Content -->
        
        <!-- Footer-->
        <div class="container">
            <footer class="py-1 my-1 text-light">
                <ul class="nav justify-content-center border-bottom pb-2 mb-2">
                <li class="nav-item"><a href="berita.php" class="nav-link px-2 text-light">Berita</a></li>
                <li class="nav-item"><a href="produk.php" class="nav-link px-2 text-light">Produk</a></li>
                <li class="nav-item"><a href="foto-kegiatan.php" class="nav-link px-2 text-light">Foto Kegiatan</a></li>
                </ul>
                <p class="text-center">&copy; 2024 <b><a href="https://github.com/arielwebdev28" target="_blank" class="text-decoration-none text-white">Ariel Gunawan</a> & <a href="https://github.com/muhamad-amin" target="_blank" class="text-decoration-none text-white">Muhamad Amin</a></b></p>
            </footer>
        </div>
        <!-- Script js Bootstrap Start -->
        <script type="text/javascript" src="../assets/js/popper.min.js"></script>
        <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
        <!-- Script js Bootstrap End -->
    </body>
</html>