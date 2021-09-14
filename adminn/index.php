<?php
include '../koneksi.php';
$data = mysqli_query($koneksi, "select * from info_desa WHERE id='1' ");
while ($d = mysqli_fetch_array($data)) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Dashboard 2</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">

        <link rel="stylesheet" href="dist/css/login.css">
    </head>

    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">


            <!-- cek pesan notifikasi -->
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "Login gagal! username dan password salah!";
                } else if ($_GET['pesan'] == "logout") {
                    echo "Anda telah berhasil logout";
                } else if ($_GET['pesan'] == "belum_login") {
                    echo "Anda harus login untuk mengakses halaman admin";
                }
            }
            ?>

            <div class="container-fluid ps-md-0">
                <div class="row g-0">
                    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">

                    </div>
                    <div class="col-md-8 col-lg-6">
                        <div class="login d-flex align-items-center py-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9 col-lg-8 mx-auto">
                                        <center><img src="../images/<?php echo $d['gambar'] ?>" class="img-circle elevation-2 mb-1 " height="120" width="120" alt="User Image"></center>
                                        <?php
                                        include '../koneksi.php';
                                        $data = mysqli_query($koneksi, "select * from pengaturan WHERE id='1' ");
                                        while ($dataa = mysqli_fetch_array($data)) {
                                        ?>
                                            <center>
                                                <h4 class="mb-4"><?php echo $dataa['nama_desa'] ?></h4>
                                            </center>
                                        <?php } ?>
                                        <!-- Sign In Form -->
                                        <form method="post" action="cek_login.php">
                                            <div class="form-floating mb-3">
                                                <label for="floatingInput">Email </label>
                                                <input type="email" class="form-control" name="email" placeholder="Email">
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="floatingPassword">Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                            </div>

                                            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Sign in</button>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>







            <!-- REQUIRED SCRIPTS -->
            <!-- jQuery -->
            <script src="plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- overlayScrollbars -->
            <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
            <!-- AdminLTE App -->
            <script src="dist/js/adminlte.js"></script>

    </body>
<?php
} ?>

    </html>