<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>RPL SMKN 1 PRINGGABAYA PRODUCTION</title>
        <!-- Favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <!-- link css -->
        <link rel="stylesheet" href="../assets/css/trix.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    </head>
    <body style="background-color: rgb(58, 79, 172);">
        <!-- Content-->
        <div class="container d-flex justify-content-center p-5 w-50">
            <main class="form-signin w-75">
            <form action="" name="" method="">
                <h1 class="display-5 mb-3 text-center fw-normal text-light">Update Produk</h1>
                <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Nama Produk" name="">
                <label for="floatingInput">Nama Produk</label>
                </div>
                <div class="form-floating my-4">
                <input type="number" class="form-control" id="floatingInput" placeholder="Harga" name="">
                <label for="floatingInput">Harga</label>
                </div>
                <div class="form-floating my-4">
                <input type="file" class="form-control" id="floatingInput" placeholder="Foto" name="">
                <label for="floatingInput">Foto</label>
                </div>
                <div class="form-floating my-4">
                <input id="x" type="hidden" name="content">
                <trix-editor input="x"></trix-editor>
                </div>
                <div class="form-floating my-4">
                <input type="text" class="form-control" id="floatingInput" placeholder="Excerpt" name="">
                <label for="floatingInput">Excerpt</label>
                </div>
                <div class="form-floating my-4">
                <input type="date" class="form-control" id="floatingInput" placeholder="Tanggal Dibuat" name="">
                <label for="floatingInput">Tanggal Dibuat</label>
                </div>
                <div class="my-4">
                    <button class="btn btn-primary w-100 py-2" type="submit" name="">Tambah Produk</button>
                </div>
            </form>
            </main>
        </div>
        <!-- Content -->
        
        <!-- Footer-->
        <div class="container">
            <footer class="py-1 my-1 text-light">
            <p class="text-center">&copy; 2024 <b><a href="https://github.com/arielwebdev28" target="_blank" class="text-decoration-none text-white">Ariel Gunawan</a> & <a href="https://github.com/muhamad-amin" target="_blank" class="text-decoration-none text-white">Muhamad Amin</a></b></p>
            </footer>
        </div>
        <!-- Script js Bootstrap Start -->
        <script type="text/javascript" src="../assets/js/popper.min.js"></script>
        <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../assets/js/trix.umd.min.js"></script>
        <!-- Script js Bootstrap End -->
    </body>
</html>